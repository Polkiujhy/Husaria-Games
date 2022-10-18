<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\Paypal;
use App\Models\Order;
use DB;
use Carbon\Carbon;


class PayPalController extends Controller
{
    public function create(Request $request){

        $data = json_decode($request->getContent(), true);

        $provider = \PayPal::setProvider();
        $provider->setApiCredentials(config('paypal'));
        $token = $provider->getAccessToken();
        $provider->setAccessToken($token);
        $price = Order::getProductPrice($data['value']);
        $description = Order::getProductDescription($data['value']);
        $email = Order::getUserEmail($data['email']);
        $filename = Order::getFileName($data['value']);
        $order = $provider->createOrder([
            "intent"=>"CAPTURE",
            "purchase_units"=>[
                [
                    "amount"=>[
                        "currency_code"=>"USD",
                        "value"=>$price,
                    ],
                    "descriprion" =>$description
                ]
            ]
        ]);
        Order::create([
             'price' => $price,
             'description' => $description,
             'status' => $order['status'],
             'reference_number' => $order['id'],
             'email' => $email,
             'filename' => $filename
         ]);

        return response()->json($order);
    }
    public function capture(Request $request){
        $data = json_decode($request->getContent(), true);
        $orderId = $data['orderId'];
        $provider = \PayPal::setProvider();
        $provider->setApiCredentials(config('paypal'));
        $token = $provider->getAccessToken();
        $provider->setAccessToken($token);

        $result = $provider->capturePaymentOrder($orderId);

        if($result['status']=="COMPLETED"){
            DB::table('orders')
            ->where('reference_number', $result['id'])
            ->update(['status'=>'COMPLETED','updated_at'=>Carbon::now()]);
        }
        return response()->json($result);
    }
}
