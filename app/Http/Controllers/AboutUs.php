<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUs extends Controller
{

    public function list(Request $request)
    {
        $session=$request->session();
        $session->put('prevAction', __METHOD__ . ':' . time());

        return view('home.AboutUs');
    }
}
