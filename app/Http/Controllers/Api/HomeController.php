<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $story_news = Http::get('https://otruyenapi.com/v1/api/home')->json();
        $categories = Http::get('https://otruyenapi.com/v1/api/the-loai')->json();
        return view('pages.home')->with('story_news', $story_news)->with('categories', $categories);
    }

    public function category(){
        $categories = Http::get('https://otruyenapi.com/v1/api/the-loai')->json();
        $item_categories = Http::get('https://otruyenapi.com/v1/api/the-loai/action')->json();
        return view('pages.category')->with('categories', $categories)->with('item_categories', $item_categories);
    }

}
