<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    // show add post view
    public function create() {
        return view('post.add');
    }

    // show edit post view
    public function edit(Post $post) {
        return view('post.edit')->with('post', $post);
    }

    // add post to database
    public function store(Request $request) {
        Post::create([
            'title' => $request->title,
            'content' => $request->text,
            'user_id' => auth()->id()
        ]);

        return to_route('admin.dashboard');
    }

    // update post in db
    public function update(Request $request, Post $post) {
        $post->update([
            'title' => $request->title,
            'content' => $request->text
        ]);

        return to_route('admin.dashboard');
    }

    //delete post from db
    public function delete(Post $post) {
        $post->delete($post);
        return to_route('admin.dashboard');
    }
}
