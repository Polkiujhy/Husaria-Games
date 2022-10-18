<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\DBData;
use Auth;

class StoreController extends Controller
{
    public function __invoke()
    {

        if(Auth::check()){
            return view('store.store',[
                'orders'=>DBData::getOrderData(),
                'games'=>DBData::getGamesData(),
            ]);
        }
        else{
            return view('store.store',[
                'games'=>DBData::getGamesData(),
            ]);
        }
    }
}
