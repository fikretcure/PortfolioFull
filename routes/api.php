<?php

use App\Http\Controllers\sendMessageController;
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

Route::post('/sendmessage', [sendMessageController::class, "send"])->name("send");


Route::any('{query}', function () {
    return redirect('/');
});