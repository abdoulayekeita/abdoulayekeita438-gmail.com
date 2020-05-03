<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $posts = Post::where('user_id',auth()->user()->id)->paginate(8);
        return view('dashboard.dashboard_compte_busness',compact('posts'));
    }
}
