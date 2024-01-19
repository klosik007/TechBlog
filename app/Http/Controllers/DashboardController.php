<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke(Request $request)
    {
        switch (auth()->user()->role) {
            case 'admin':
                return redirect()->route('admin.dashboard');
                break;

            default:
                return redirect()->route('login');
                break;
        }
    }

    // show all posts in dashboard
    public function index() {
        $posts = Post::all();
        return view('admin.dashboard')->with('posts', $posts);
    }
}
