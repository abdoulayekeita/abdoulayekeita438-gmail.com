<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Shop;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Notifications\ShopCreation;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\Http\Requests\ShopStoreRequest;
use Illuminate\Support\Facades\Storage;

class ShopController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $shops = Shop::where('user_id', auth()->user()->id)->paginate(6);

        return view('dashboard.shop.index', compact('shops'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $categorys = Category::all();
        return view('dashboard.shop.create', compact('categorys'));
    }

    /**
     * @param \App\Http\Requests\ShopStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ShopStoreRequest $request)
    {
        $fileName = null;
        if ($request->hasFile('image')) {
            $fileName = bin2hex(openssl_random_pseudo_bytes(10)).'.png';
            Image::make($request->file('image'))
                ->resize(300, 300)->save(storage_path('app/public/shop/'.$fileName));
        }

        $validated = $request->validated();
        Arr::set($validated, 'image', $fileName);
        $shop = Shop::create($validated);
        $user = User::findOrFail(1);
        $when = now()->addSecond(3);
        $user->notify((new ShopCreation($shop))->delay($when));

        return redirect()->route('shop.index')->with('message', "Votre boutique sera validée par l'equipe yankadi ");
    }

    public function show(Shop $shop)
    {
        $products = $shop->products()->paginate(6);

        foreach (auth()->user()->notifications as  $notification) {
            if ($notification->type =="App\Notifications\ShopCreation") {
                if ($shop->id == $notification->data['shop']['id']) {
                    $notification->markAsRead();
                }
            }
        }
        return view('dashboard.shop.content_shop', compact('products', 'shop'));
    }

    public function edit(Shop $shop)
    {
        $categorys = Category::all();
        return view('dashboard.shop.edit', compact('shop', 'categorys'));
    }

    public function update(ShopStoreRequest $request, Shop $shop)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            Storage::delete("shop/".$shop->image);

            $fileName = bin2hex(openssl_random_pseudo_bytes(10)).'.png';
            Image::make($request->file('image'))
                ->resize(300, 300)->save(storage_path('app/public/shop/'.$fileName));
            Arr::set($validated, 'image', $fileName);
        }

        $shop->update($validated);

        return redirect()->route('shop.show', $shop);
    }

    public function destroy(Shop $shop)
    {
        $shop->delete();
        return redirect()->route('shop.index');
    }
}
