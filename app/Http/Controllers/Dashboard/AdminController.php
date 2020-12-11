<?php

namespace App\Http\Controllers\Dashboard;

use Carbon\Carbon;
use App\Models\Post;
use App\Models\Shop;
use Illuminate\Http\Request;
use App\Notifications\CancelPost;
use App\Notifications\CancelShop;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('verified');
    }
    /**
     * @param Post $post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function validePost(Post $post)
    {
        $post->update(['is_publish'=>true]);
        $post->update(['published_at'=>Carbon::now()]);
        return redirect()->route('post.show', $post);
    }

    public function annuleValidationPost(Post $post)
    {
        $post->update(['is_publish'=>false]);
        return redirect()->route('post.show', $post);
    }

    public function listShop()
    {
        $shops = Shop::orderBy('id')->paginate(8);
        return view('dashboard.list_shop', compact('shops'));
    }

    public function annuleValidationShop(Shop $shop)
    {
        $shop->update(['is_valide'=>false]);
        return redirect()->route('shop.show', $shop);
    }

    public function valideShop(Shop $shop)
    {
        $shop->update(['is_valide'=>true]);
        return redirect()->route('shop.show', $shop);
    }

    public function formValidePost(Post $post)
    {
        return view('dashboard.post.validation_post', compact('post'));
    }

    public function formValideShop(Shop $shop)
    {
        return view('dashboard.shop.validation_shop', compact('shop'));
    }

    public function cancelPost(Request $request)
    {
        $request->validate(['motif' => 'required|string','post_id'=>'required']);
        $post = Post::findOrfail((int)$request->input('post_id'));
        $user = $post->user;
        $post->update(['denied'=>true]);
        $user->notify(new CancelPost($request->input('motif')));
        return redirect()->route('dashboard')->with('message', "L'annonce à été réfusée");
        ;
    }

    public function cancelShop(Request $request)
    {
        $request->validate(['motif' => 'required|string','shop_id'=>'required']);
        $shop = Shop::findOrfail((int)$request->input('shop_id'));
        $user = $shop->user;
        $shop->update(['denied'=>true]);
        $user->notify(new CancelShop($request->input('motif')));
        return redirect()->route('dashboard')->with('message', "La boutique à été invalidée un email lui a été envoyé");
    }
}
