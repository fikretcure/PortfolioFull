<?php

namespace App\Http\Controllers;

use App\Models\Subscribers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class SubscribersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Subscribers $subscribers)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|unique:subscribers,email|email:rfc,dns',
        ]);
        if ($validator->fails()) {
            return $validator->errors()->first() . 'Try again !<br><br>
                    <form action="#" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>';
        } else {
            $subscribers->create($request->all());
            $data = [
                "email" => $request->email,
            ];
            mail::send("sendsubscribers", $data, function ($message) use ($request) {
                $message->subject("Abone Ekleme");
                $message->to("info@fikretcure.dev");
            });
            mail::send("sendsubscribers", $data, function ($message) use ($request) {
                $message->subject("Abone Ekleme");
                $message->to($request->email);
            });
            return redirect("/");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Subscribers $subscribers
     * @return \Illuminate\Http\Response
     */
    public function show(Subscribers $subscribers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Subscribers $subscribers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subscribers $subscribers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Subscribers $subscribers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscribers $subscribers)
    {
        //
    }
}
