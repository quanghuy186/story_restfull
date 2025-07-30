<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function home()
    {
        $story_news = Http::get('https://otruyenapi.com/v1/api/home')->json();
        $categories = Http::get('https://otruyenapi.com/v1/api/the-loai')->json();
        $story_hots = Http::get('https://otruyenapi.com/v1/api/danh-sach/')->json();
        return view('pages.home')->with('story_news', $story_news)
        ->with('categories', $categories)
        ->with('story_hots', $story_hots);
    }

    public function category($slug){
        $categories = Http::get('https://otruyenapi.com/v1/api/the-loai/')->json();
        $item_categories = Http::get('https://otruyenapi.com/v1/api/the-loai/'.$slug)->json();
        return view('pages.category')->with('categories', $categories)->with('item_categories', $item_categories);
    }

    public function list_category($slug){
        $categories = Http::get('https://otruyenapi.com/v1/api/the-loai/')->json();
        $item_categories = Http::get('https://otruyenapi.com/v1/api/the-loai/'.$slug)->json();
        return view('pages.category')->with('categories', $categories)->with('item_categories', $item_categories);
    }
    public function list_story($slug){
        $story_news = Http::get('https://otruyenapi.com/v1/api/danh-sach/'.$slug)->json();
        $top_stories = Http::get('https://otruyenapi.com/v1/api/danh-sach/'.$slug)->json();
        $complete_stories = Http::get('https://otruyenapi.com/v1/api/danh-sach/'.$slug)->json();
        if($slug == 'top-truyen'){
            return view('pages.top')->with('top_stories', $top_stories);
        }elseif($slug == 'hoan-thanh'){
            return view('pages.complete')->with('complete_stories', $complete_stories);
        }
        return view('pages.new')->with('story_news', $story_news);
    }

    // public function story($slug){
    //     $get_story = Http::get('https://otruyenapi.com/v1/api/truyen-tranh/'.$slug)->json();

    //     return view('pages.story')->with('get_story', $get_story);
    // }

    public function story($slug){
        try {
            $get_story = Http::get('https://otruyenapi.com/v1/api/truyen-tranh/'.$slug)->json();
            
            if(!isset($get_story['data'])){
                abort(404, 'Không tìm thấy truyện');
            }
            // dd($get_story);
            return view('pages.story')->with('get_story', $get_story);
        } catch (\Exception $e) {
            return redirect()->route('home')->with('error', 'Có lỗi xảy ra khi tải thông tin truyện');
        }
    }

    public function read_chapter($story_slug, $chapter_id){
        // Lấy thông tin chapter
        $chapter_api_url = "https://otruyenapi.com/v1/api/truyen-tranh/{$story_slug}";
        $story_data = Http::get($chapter_api_url)->json();
        
        // Tìm chapter hiện tại trong danh sách chapters
        $current_chapter = null;
        $chapter_index = 0;
        
        if(isset($story_data['data']['item']['chapters'][0]['server_data'])){
            $chapters = $story_data['data']['item']['chapters'][0]['server_data'];
            
            foreach($chapters as $index => $chapter){
                if($chapter['chapter_name'] == $chapter_id){
                    $current_chapter = $chapter;
                    $chapter_index = $index;
                    break;
                }
            }
        }
        
        // Lấy nội dung chapter
        $chapter_content = null;
        if($current_chapter && isset($current_chapter['chapter_api_data'])){
            $chapter_content = Http::get($current_chapter['chapter_api_data'])->json();
        }
        
        // Xác định chapter trước và sau
        $prev_chapter = isset($chapters[$chapter_index + 1]) ? $chapters[$chapter_index + 1] : null;
        $next_chapter = isset($chapters[$chapter_index - 1]) ? $chapters[$chapter_index - 1] : null;
        
        return view('pages.read')->with([
            'story_data' => $story_data,
            'current_chapter' => $current_chapter,
            'chapter_content' => $chapter_content,
            'prev_chapter' => $prev_chapter,
            'next_chapter' => $next_chapter,
            'story_slug' => $story_slug
        ]);
    }
}
