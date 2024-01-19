<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class JsonDataController extends Controller
{
    public function index() {
        return Post::all()->toJson(JSON_PRETTY_PRINT);
    }
}
