<?php

namespace App\Http\Controllers\Contact;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class SendMailController extends Controller
{
    public function sendemail (Request $request){
    $data=[
        'email'=>$request->email,
        'subject'=>$request->subject
    ];
    Mail::to('adam.kurek012@gmail.com')->send(new ContactMail($data));

    return view('contact.Contact');
}
}
