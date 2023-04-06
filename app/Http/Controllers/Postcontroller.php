<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class Postcontroller extends Controller
{
    // (store) is a method name  (Request) Catch the requested data
    public function store(Request $request){
        //get Post Model
        Post::create([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'description' => $request -> description
        ]);
        return back();
    }

    //pass postId
    public function show( $postId){
        // get PostId | find method
        $post = Post::findOrFail($postId);
        // pass post variable to view
        return view('posts.show', compact('post'));
    }
}
