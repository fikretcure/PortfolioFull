<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/sendmessage', [\App\Http\Controllers\sendMessageController::class, "send"])->name("send");


Route::get("abdullah",function (){
    return "abdullah merhaba";
});


Route::apiResources([
    'subscribers' => \App\Http\Controllers\SubscribersController::class,
]);
