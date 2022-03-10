<?php

namespace App\Http\Controllers;

use App\Http\Requests\sendMessageRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class sendMessageController extends Controller
{
    public function send(sendMessageRequest $request)
    {
        try {
            $data =  [
                "name" => $request->name,
                "email" => $request->email,
                "mess" => $request->message,
            ];
            mail::send("sendmail", $data, function ($message) use ($request) {
                $message->subject($request->subject);
                $message->to("fikretcure@gmail.com");
            });
            return response(true, 200);
        } catch (\Throwable $th) {
            return response()->json([
                "errors" => [
                    "error" => ["Structural Error"]
                ]
            ], 422);
        }
    }
}
