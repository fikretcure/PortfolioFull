<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Stevebauman\Location\Facades\Location;
use App\Models\guest_register;

class homeController extends Controller
{
    public function index()
    {
        $response = Http::withHeaders([
            'Authorization' => env("GITHUB_TOKEN"),
        ])->get('https://api.github.com/users/fikretcure/repos');
        /*  */
        $ip = null;
        if (env("LOCAL_IP")) {
            $ip = request()->server("REMOTE_ADDR");
        } else {
            $ip = "127.0.01";
        };
        $remote_ip = request()->server("PROXY_REMOTE_ADDR");
        $before_ip_created_at = guest_register::where("ip", $ip)->where("remote_ip", $remote_ip)->orderByDesc("id")->value("created_at");
        if ((now()->timestamp - strtotime($before_ip_created_at)) > 300 && $ip != "77.245.159.2" && $ip != "212.154.57.117" && $ip != "5.46.212.124") {
            $client_info = Location::get($ip);
            guest_register::insert([
                "ip" => $ip,
                "remote_ip" => $remote_ip,
                "cityName" => $client_info->cityName,
                "countryName" => $client_info->countryName,
                "created_at" => now()
            ]);
        }
        /*  */
        $data = [
            "github" => $response->json(),
            "guest_register" => guest_register::orderByDesc("id")->get()
        ];
        /*  */
        return view('home', $data);
    }
}
