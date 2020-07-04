<?php

namespace App\Http\Controllers\Api;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Post;
use App\User;

class PostController extends Controller
{
    protected $randomCategories;
    
    
    
    public function __construct() {
        $this->randomCategories = Category::where('type', 'blogs')->pluck('id');
    }
    
    public function index()
    {

        $posts = Post::with('category')->whereIn('category_id', $this->randomCategories)->get();
        return response()->json(['status' => true, 'posts' => $posts], 200);
    }
    
    public function getSinglePost($slug)
    {
        $post = Post::where('slug', $slug)->with('category')->first();
        if($post){
            return response()->json(['status' => true, 'post' => $post], 200);
        }else{
            return response()->json(['status' => false, 'post' => null], 404);
        }
    }
    
    public function getRandomPosts($no, $post_cat_id = null, $post_id = null)
    {

        if($post_id){
            $randomPosts = Post::inRandomOrder()->where('category_id', $post_cat_id)->where('id', '!=', $post_id)->with('category')->take($no)->get();
        }else{

            $randomPosts = Post::inRandomOrder()->whereIn('category_id', $this->randomCategories)->take($no)->with('category')->get();
        }
        
        if($randomPosts){
            return response()->json(['status' => true, 'randomPosts' => $randomPosts], 200);
        }else{
            return response()->json(['status' => false, 'randomPosts' => null], 404);
        }
    }

    public function getAllPost($tabID)
    {
        //$myTeacherId = User::where('ucode', $ucode)->first();

        //$myTeacherName = User::where('user_id', $ucode)->first();



        $posts = Post::where('type', $tabID)->with('comments')->orderBy('created_at', 'asc')->paginate(3);
        // $socialPosts = Post::where('type', 'Socials')->with('comments')->orderBy('created_at', 'asc')->paginate(6);
        // $mpsPosts = Post::where('type', 'MPS')->with('comments')->orderBy('created_at', 'asc')->paginate(6);
        //return response()->json(['studiesPosts' => $studiesPosts, 'socialPosts' => $socialPosts, 'mpsPosts' => $mpsPosts]); 

        return response()->json(['posts' => $posts]); 

    }





    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Post $post)
    {
        //
    }

    public function edit(Post $post)
    {
        //
    }

    public function update(Request $request, Post $post)
    {
        //
    }

    public function destroy(Post $blog)
    {
        //
    }
}
