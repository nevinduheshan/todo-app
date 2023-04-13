<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Postcontroller extends Controller
{
    // (store) is a method name  (Request) Catch the requested data
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'thumbnail' => 'required|image'
        ]);

        if ($validator->fails()) {
            return back()->with('status', 'Somthing Wrong!');
        } else {
            //make image name
            $imageName = time() . "." . $request->thumbnail->extension();
            //ganna images thumbnails kiyala folder ekk hadala ekta save karanawa
            $request->thumbnail->move(public_path('thumbnails'), $imageName);
            //get Post Model
            Post::create([
                'user_id' => auth()->user()->id,
                'title' => $request->title,
                'description' => $request->description,
                'thumbnail' => $imageName
            ]);
        }
        return redirect(route('posts.all'))->with('status', 'Post created successfully!');
    }

    //pass postId
    public function show($postId)
    {
        // get PostId | find method
        $post = Post::findOrFail($postId);
        // pass post variable to view
        return view('posts.show', compact('post'));
    }

    public function edit($postId)
    {
        $post = Post::findOrFail($postId);
        return view('posts.edit', compact('post'));
    }

    public function update($postId, Request $request)
    {
        // dd($request-> all());
        Post::findOrFail($postId)->update($request->all());
        return redirect(route('posts.all'))->with('status', 'Post Updated');
        // return back();
    }

    public function delete($postId)
    {
        Post::findOrFail($postId)->delete();
        return redirect(route('posts.all'));
    }
}
