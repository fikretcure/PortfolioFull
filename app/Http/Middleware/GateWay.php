<?php

namespace App\Http\Middleware;

use App\Models\userRecords;
use Closure;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class GateWay
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Location::get($request->ip())) {
            $client = Location::get($request->ip());
            userRecords::create([
                "country_name" => $client->countryName,
                "city_name" => $client->cityName,
                "ip" => $request->ip(),
                "server_addr" => $request->server("SERVER_ADDR"),
                "remote_addr" => $request->server("REMOTE_ADDR"),
                "route_name" => $request->route()->getName(),
                "route_url" => $request->url(),
            ]);
            return $next($request);
        } else if (env("IP") == "dev") {
            return $next($request);
        } else {
            return response()->json("404");
        }
    }
}
