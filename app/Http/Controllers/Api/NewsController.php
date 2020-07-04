<?php

namespace App\Http\Controllers\Api;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\News;

class NewsController extends Controller
{
    protected $randomCategories;
    
    
    
    public function __construct() {
        $this->randomCategories = Category::where('type', 'news')->pluck('id');
    }
    
    public function index()
    {

        $news = News::with('category')->whereIn('category_id', $this->randomCategories)->get();
        return response()->json(['status' => true, 'news' => $news], 200);
    }
    
    public function getSingleNews($slug)
    {
        $news = News::where('slug', $slug)->with('category')->first();
        if($news){
            return response()->json(['status' => true, 'news' => $news], 200);
        }else{
            return response()->json(['status' => false, 'news' => null], 404);
        }
    }
    
    public function getRandomNews($no, $news_cat_id = null, $news_id = null)
    {
        if($news_id){
            $randomNews = News::inRandomOrder()->where('category_id', $news_cat_id)->where('id', '!=', $news_id)->with('category')->take($no)->get();
        }else{
            $randomNews = News::inRandomOrder()->whereIn('category_id', $this->randomCategories)->take($no)->with('category')->get();
        }
        if($randomNews){
            return response()->json(['status' => true, 'randomNews' => $randomNews], 200);
        }else{
            return response()->json(['status' => false, 'randomNews' => null], 404);
        }
    }
    
    
    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
        //
    }
    
    public function show(News $news)
    {
        //
    }
    
    public function edit(News $news)
    {
        //
    }
    
    public function update(Request $request, News $news)
    {
        //
    }
    
    public function destroy(News $candidate)
    {
        //
    }
}
