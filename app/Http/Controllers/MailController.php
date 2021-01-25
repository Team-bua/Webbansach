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
}
