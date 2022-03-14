<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {

        $repo = Http::withHeaders([
            'Authorization' => env("GITHUB_TOKEN"),
        ])->get('https://api.github.com/users/fikretcure/repos');

        $about = "Yazılım dünyasına meslek lisesi dönemimde C ile embeded yazarak
                  girdim.Ardından önlisans dönemimde C# ve Java kullanmaya çalışarak deskop üzerine karalamalarda
                  bulundum.
                  Iot projelerinin cloud 'unu ayağa kaldırmak için Php 'yi tercih ettim o zamanlar daha popülerdi
                  tabi.Rakiplerimiz artmakla beraber teknolojiler de gelişiyor, bizde hamle yapmaya
                  çalışıyoruz.Okuduğun için teşekkürler :)";

        return view("frontend/home", ["repo" => $repo->json(), "about" => $about]);
    }
}
