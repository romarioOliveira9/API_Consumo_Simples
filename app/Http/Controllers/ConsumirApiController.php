<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ConsumirApiController extends Controller
{
    public function index()
    {
        $response = Http::get('https://api.github.com/users/binascohub/repos');

        dd($response->json());
    }
}
