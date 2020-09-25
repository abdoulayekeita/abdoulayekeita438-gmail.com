<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Shop;
use App\Models\Image;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;

class ProductController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::all();

        return view('dashboard.product.index', compact('shops'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Shop $shop)
    {
        $categorys = Category::all();
        return view('dashboard.product.create', compact('categorys', 'shop'));
    }

    /**
     * @param \App\Http\Requests\ProductStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductStoreRequest $request)
    {
        $validated = $request->validated();
        $shop = Shop::find($validated['shop_id']);
        $validated = Arr::except($validated, 'item_images');
        $product = Product::create($validated);

        foreach (explode(',', $request->validated()['item_images']) as $url) {
            $url = str_replace("\\", '', $url);
            $url = str_replace('"', '', $url);
            Image::create(['url'=>$url,'product_id'=>$product->id]);
        }

        return redirect()->route('shop.show', $shop);
    }

    /**
     * @param Shop $shop
     * @param Product $product
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Shop $shop, Product $product)
    {
        return view('dashboard.product.show', compact('shop', 'product'));
    }

    /**
     * @param Shop $shop
     * @param Product $product
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Shop $shop, Product $product)
    {
        $categorys = Category::all();
        return view('dashboard.product.edit', compact('shop', 'product', 'categorys'));
    }

    /**
     * @param ProductStoreRequest $request
     * @param Shop $shop
     * @param Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProductStoreRequest $request, Shop $shop, Product $product)
    {
        $validated = $request->validated();
        $validated = Arr::except($validated, 'item_images');
        $product->update($validated);

        if (!empty(explode(',', $request->validated()['item_images']))) {
            if (!empty($product->images)) {
                foreach ($product->images as $image) {
                    unlink(storage_path('app/public/'.$image->url));
                    Image::destroy($image->id);
                }
            }

            foreach (explode(',', $request->validated()['item_images']) as $url) {
                $url = str_replace("\\", '', $url);
                $url = str_replace('"', '', $url);
                Image::create(['url'=>$url,'product_id'=>$product->id]);
            }
        }

        return redirect()->route('shop.product.show', [$shop,$product]);
    }

    /**
     * @param Shop $shop
     * @param Product $product
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Shop $shop, Product $product)
    {
        $product->delete();
        return redirect()->route('shop.show', $shop);
    }
}
