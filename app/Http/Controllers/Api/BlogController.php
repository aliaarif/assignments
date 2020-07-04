<?php

namespace App\Http\Controllers\Api;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Blog;

class BlogController extends Controller
{
    protected $randomCategories;
    
    
    
    public function __construct() {
        $this->randomCategories = Category::where('type', 'blogs')->pluck('id');
    }
    
    public function index()
    {

        $blogs = Blog::with('category')->whereIn('category_id', $this->randomCategories)->get();
        return response()->json(['status' => true, 'blogs' => $blogs], 200);
    }
    
    public function getSingleBlog($slug)
    {
        $blog = Blog::where('slug', $slug)->with('category')->first();
        if($blog){
            return response()->json(['status' => true, 'blog' => $blog], 200);
        }else{
            return response()->json(['status' => false, 'blog' => null], 404);
        }
    }
    
    public function getRandomBlogs($no, $blog_cat_id = null, $blog_id = null)
    {

        if($blog_id){
            $randomBlogs = Blog::inRandomOrder()->where('category_id', $blog_cat_id)->where('id', '!=', $blog_id)->with('category')->take($no)->get();
        }else{

            $randomBlogs = Blog::inRandomOrder()->whereIn('category_id', $this->randomCategories)->take($no)->with('category')->get();
        }
        
        if($randomBlogs){
            return response()->json(['status' => true, 'randomBlogs' => $randomBlogs], 200);
        }else{
            return response()->json(['status' => false, 'randomBlogs' => null], 404);
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
    
    public function show(Blog $blog)
    {
        //
    }
    
    public function edit(Blog $blog)
    {
        //
    }
    
    public function update(Request $request, Blog $blog)
    {
        //
    }
    
    public function destroy(Blog $blog)
    {
        //
    }
}
