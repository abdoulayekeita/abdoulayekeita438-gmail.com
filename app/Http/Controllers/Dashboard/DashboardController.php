<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Post;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __invoke()
    {
        if (auth()->user()->profile->role=="admin") {
            $posts = Post::orderBy('id')->paginate(8);
        } else {
            $posts = Post::where('user_id', auth()->user()->id)->paginate(8);
        }
        return view('dashboard.dashboard_compte_busness', compact('posts'));
    }
}
