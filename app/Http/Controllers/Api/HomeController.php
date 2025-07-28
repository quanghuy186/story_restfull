<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $response = Http::get('https://otruyenapi.com/v1/api/home');
        $data = $response->json();
        return view('pages.home')->with('story_news', $data);
        // return response()->json($response->json());
    }



}
