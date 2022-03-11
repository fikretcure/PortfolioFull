<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class sendMessageController extends Controller
{
    //
    public function send(Request $request)
    {
        $data = [
            "name" => $request->name,
            "email" => $request->email,
            "mess" => $request->message,
        ];



        mail::send("sendmail", $data, function ($message) use ($request) {
            $message->subject($request->subject);
            $message->to("info@fikretcure.dev");
        });
        return response(    "OK", 200);

    }
}
