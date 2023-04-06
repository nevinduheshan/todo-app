<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller
{
    public function __invoke()
    {
        //put posts in a variable (variable name posts , Post model and all in post model)
        $posts = Post::all();

        //pass that (posts) variable to the view (compact)
        return view('welcome' , compact('posts'));
    }
}
