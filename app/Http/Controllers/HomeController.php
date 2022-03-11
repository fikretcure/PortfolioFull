<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index(){

        $repo = Http::withHeaders([
            'Authorization' => env("GITHUB_TOKEN"),
        ])->get('https://api.github.com/users/fikretcure/repos');

        return view("frontend/home",["repo" => $repo->json()]);
    }
}
