<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function sendEmail()
    {
        $details = [
            'title' => 'Xin Chào',
            'body' => 'Ngon lắm',
        ];
        \Mail::to(Auth::user()->username)->send(new \App\Mail\TestMail($details));
        trans('passwords.throttled');
    }

    public static function sendSignupEmail($name, $email, $verification_code){

        $data= [
            'name' => $name,
            'verification_code' => $verification_code
        ];

        Mail::to()->send(new SignupEmail());
    }
}
