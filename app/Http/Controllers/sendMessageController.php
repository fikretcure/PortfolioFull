<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class sendMessageController extends Controller
{
    //
    public function send(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email:rfc,dns',
            'name' => 'required',
            'message' => 'required',
        ]);

        if ($validator->fails()) {
            return $validator->errors()->first();
        }

        $data = [
            "name" => $request->name,
            "email" => $request->email,
            "mess" => $request->message,
        ];

        mail::send("sendmail", $data, function ($message) use ($request) {
            $message->subject($request->subject);
            $message->to("info@fikretcure.dev");
        });
        mail::send("clientsendmail", $data, function ($message) use ($request) {
            $message->subject($request->subject);
            $message->to($request->email);
        });


        return response(    "OK", 200);

    }
}
