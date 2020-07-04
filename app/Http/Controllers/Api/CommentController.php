<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Comment;


class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function storeSingleComment(Request $request)
    {
        //$post = get_object_vars(json_decode($request->post));
        $user = get_object_vars(json_decode($request->user));
        


        $this->validate($request, [
            //'name' => $user['name'],
            //'email' => $user['email'],
            'comment' => 'required'
        ]);

        //$post = Post::find($post['id']);
        $comment = new Comment;
        $comment->name = $user['name'];
        $comment->email = $user['email'];
        $comment->comment = $request->comment;
        $comment->approved = true;
        $comment->post_id = $request->post_id; // or $post['id']
        $comment->save();
        if($comment){
         return response()->json(['status' => true], 200);
     }else{
        return response()->json(['status' => false], 203);
    }

}



}
