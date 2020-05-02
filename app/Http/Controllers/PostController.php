<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostStoreRequest;
use App\Models\Category;
use App\Models\Image;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

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
        $categorys = Category::all();
        return view('dashboard.post.create',compact('categorys'));
    }

    /**
     * @param \App\Http\Requests\PostStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostStoreRequest $request)
    {
        $validated = $request->validated();
        $validated = Arr::except($validated,'item_images');
        $product = Product::create($validated);

        foreach (explode(',', $request->validated()['item_images']) as $url){
            $url = str_replace("\\", '', $url);
            $url = str_replace('"', '',$url);
            Image::create(['url'=>$url,'product_id'=>$product->id]);
        }
        $post = Post::create(['product_id'=>$product->id,'user_id'=>auth()->user()->id]);

        return redirect()->route('post.show',$post);
    }

    /**
     * @param Post $post
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Post $post){

        return view('dashboard.post.show',compact('post'));
    }

    public function destroy(Post $post){

        $post->delete();
        return redirect()->route('dashboard');
    }

    public function edit(Post $post){

        $categorys = Category::all();
        return view('dashboard.post.edit',compact('post','categorys'));
    }

    public function update(PostStoreRequest $request,Post $post){

        $validated = $request->validated();
        $validated = Arr::except($validated,'item_images');
        $post->product->update($validated);

        if (!empty(explode(',', $request->validated()['item_images']))){

            if (!empty($post->product->images)){

                foreach ($post->product->images as $image){

                    unlink(storage_path('app/public/'.$image->url));
                    Image::destroy($image->id);
                }
            }

            foreach (explode(',', $request->validated()['item_images']) as $url){
                $url = str_replace("\\", '', $url);
                $url = str_replace('"', '',$url);
                Image::create(['url'=>$url,'product_id'=>$post->product->id]);
            }
        }

        return redirect()->route('post.show',$post);
    }
}
