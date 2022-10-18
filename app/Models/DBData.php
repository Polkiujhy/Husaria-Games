<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Auth;

class DBData extends Model
{
    public static function getOrderData(){
        if(Auth::check()){
            $orders = DB::table('orders')->get()
            ->where('email', Auth::user()->email )
            ->where('status','COMPLETED');
            return $orders;
        }
        else{
            return null;
        }
    }
    public static function getGamesData(){
        $games = DB::table('games')->get();
        return $games;
    }
}
