<?php

namespace App\Http\Controllers;

use App\Mail\EmailTest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class TempController extends Controller
{
    public function index()
    {
        return view ('mail.mailform');
    }

    public function send(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $body = $request->body;
        $send = Mail::to("support@kidspiration.com")->send(new EmailTest($name, $email, $body));

        return redirect()->route('support.index')
        ->with('message',"Your request has sent successfully. Have a fantastic day :D");
    }
}
