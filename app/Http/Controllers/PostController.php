<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostStoreRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts = Post::all();

        return view('dashboard.product.index', compact('shops'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('dashboard.product.create');
    }

    /**
     * @param \App\Http\Requests\PostStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostStoreRequest $request)
    {
        $post = Post::create($request->all());

        return view('dashboard.product.index');
    }
}
