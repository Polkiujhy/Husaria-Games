<?php

declare(strict_types=1);

namespace App\Http\Controllers\Download;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Download;
use App\Models\DBData;

class DownloadController extends Controller{

    public function download($file_name)
    {
        $orders = DBData::getOrderData();
        $match = Download::getMatchingDescription($file_name);

            foreach ($orders ?? [] as $order) {
            if($order->description == $match){
                $path = Storage::download('download/' . $file_name);

                return $path;
            }
            else{
                return view('home.AboutUs');

            }


    }}}

