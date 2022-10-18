<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PayPalController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', 'HomeController@AuthRouteAPI');

Route::group([
            'prefix'=>'paypal',
            'headers'=>['Accept' => 'application/json']
            ], function(){
    Route::any('/order/create',[PayPalController::class,'create']);
    Route::any('/order/capture',[PayPalController::class,'capture']);
});



