<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class newpostcontroller extends Controller
{
    public function __invoke(Request $request)
    {
        return view('newpost');
    }

    public function allPosts(){
        // get relevent alredy login user id
        $posts = Post::where('user_id', Auth::user()->id)->get();
        return view('posts.all-posts', compact('posts'));
    }
}
