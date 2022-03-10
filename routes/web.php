<?php

use App\Http\Controllers\homeController;
use App\Models\guest_register;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
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

Route::get('/', [homeController::class, "index"])->name("home");
Route::get('statistics', function (guest_register $qr) {
    $qr_group_by_date = $qr->select(DB::raw("DATE_FORMAT(created_at, '%Y-%m') date"), DB::raw('count(*) as total'))->groupBy('date');
    return response()->json([
        "total" => $qr->count(),
        "order_date" =>  $qr_group_by_date->orderByDesc("date")->get(),
        "order_total" => $qr->select(DB::raw("DATE_FORMAT(created_at, '%Y-%m') date"), DB::raw('count(*) as total'))->groupBy('date')->orderByDesc("total")->get(),
        "order_country" => $qr->select("countryName", DB::raw('count(*) as total'))->groupBy('countryName')->orderByDesc("total")->get()
    ]);
})->name("statistics");
Route::any('{query}', function () {
    return redirect('/');
});
