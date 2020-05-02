<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShopStoreRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Intervention\Image\Facades\Image;

class ShopController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $shops = Shop::where('user_id',auth()->user()->id)->paginate(6);

        return view('dashboard.shop.index', compact('shops'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $categorys = Category::all();
        return view('dashboard.shop.create',compact('categorys'));
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
            ->resize(300,300)->save(storage_path('app/public/shop/'.$fileName));
        }

        $validated = $request->validated();
        Arr::set($validated, 'image', $fileName);
        Shop::create($validated);

        return redirect()->route('shop.index');
    }

    public function show(Shop $shop){

        $products = $shop->products()->paginate(6);
        return view('dashboard.shop.content_shop',compact('products','shop'));
    }

    public function edit(Shop $shop){

        $categorys = Category::all();
        return view('dashboard.shop.edit',compact('shop','categorys'));
    }
}
