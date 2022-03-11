<?php

use Illuminate\Support\Facades\Route;
use Stevebauman\Location\Facades\Location;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::middleware([\App\Http\Middleware\GateWay::class])->group(function () {


    Route::get('/test', function (Request $request) {


        return response()->json([
            "server_info" => $request->server(),
            "local_info" => Location::get($request->ip())
        ]);
    })->name("test");
});


