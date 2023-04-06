<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class Postcontroller extends Controller
{
    public function store(Request $request){
        Post::create([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'description' => $request -> description
        ]);
        return back();
    }


    public function show( $postId){
        $post = Post::findOrFail($postId);
        return view('posts.show', compact('post'));
    }
}
