<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Post;
use App\Models\User;
use App\Models\Image;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;
use App\Http\Requests\PostStoreRequest;
use Illuminate\Support\Facades\Storage;

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
        return view('dashboard.post.create', compact('categorys'));
    }

    /**
     * @param \App\Http\Requests\PostStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostStoreRequest $request)
    {
        $validated = $request->validated();
        $validated = Arr::except($validated, 'item_images');
        $product = Product::create($validated);

        foreach (explode(',', $request->validated()['item_images']) as $url) {
            $url = str_replace("\\", '', $url);
            $url = str_replace('"', '', $url);
            $image_64 = Redis::get($url);
            Storage::disk('s3')->put('post/'.$url, base64_decode($image_64));
            Image::create(['url'=>'post/'.$url,'product_id'=>$product->id]);
        }
        $post = Post::create(['product_id'=>$product->id,'user_id'=>auth()->user()->id,'is_publish'=>false]);
        $user = User::findOrFail(1);
        $when = now()->addSecond(3);
        $request->session()->flush();
        $user->notify((new PostCreation($post))->delay($when));
        return redirect()->route('post.show', $post)->with('message', "Votre annonce sera validée par l'equipe yankadi dans les heures qui suivent");
    }

    /**
     * @param Post $post
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Post $post)
    {
        foreach (auth()->user()->notifications as  $notification) {
            if ($notification->type =="App\Notifications\PostCreation") {
                if ($post->id == $notification->data['post']['id']) {
                    $notification->markAsRead();
                }
            }
        }
        return view('dashboard.post.show', compact('post'));
    }

    /**
     * @param Post $post
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Post $post)
    {
        foreach ($post->product->images as $image){
            Storage::disk('s3')->delete($image->url);
        }
        $post->delete();
        return redirect()->route('dashboard')->with('message', 'Votre Annonce à été supprimée');
    }

    /**
     * @param Post $post
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Post $post)
    {
        $categorys = Category::all();
        return view('dashboard.post.edit', compact('post', 'categorys'));
    }

    /**
     * @param PostStoreRequest $request
     * @param Post $post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PostStoreRequest $request, Post $post)
    {
        $validated = $request->validated();
        $validated = Arr::except($validated, 'item_images');
        $post->product->update($validated);

        if (!empty(explode(',', $request->validated()['item_images']))) {
            if (!empty($post->product->images)) {
                foreach ($post->product->images as $image) {
                    Storage::disk('s3')->delete($image->url);
                    Image::destroy($image->id);
                }
            }

            foreach (explode(',', $request->validated()['item_images']) as $url) {
                $url = str_replace("\\", '', $url);
                $url = str_replace('"', '', $url);
                $image_64 = Redis::get($url);
                Storage::disk('s3')->put('post/'.$url, base64_decode($image_64));
                Image::create(['url'=>'post/'.$url,'product_id'=>$post->product->id]);
            }
        }

        return redirect()->route('post.show', $post)->with('message', 'Votre annonce à été mise a jour');
    }
}
