<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    // show add post view
    public function create() {
        return view('admin.addpost');
    }

    // add post to database
    public function store() {

    }

    // show edit post view
    public function edit(int $id) {

    }

    // upfdate post in db
    public function update() {

    }

    //delete post from db
    public function delete(int $id) {

    }
}
