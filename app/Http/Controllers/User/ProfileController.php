<?php

declare(strict_types=1);

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Auth;
use App\Models\DBData;

class ProfileController extends Controller
{
    public function __invoke()
    {

        if(Auth::user() != null){
            return view('user.profile',[
                'orders'=> DBData::getOrderData()
            ]);
        }
        else{
            return view('user.profile');
        }
    }
}

