<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Post;
use App\Models\Shop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function searchPost(Request $request)
    {
        $request->validate(['query' => 'required']);

        $posts = Post::join('products', 'posts.product_id', '=', 'products.id')
            ->where('products.name', 'ilike', "%{$request->input('query')}%")
            ->select('posts.*')
            ->orderBy('id')
            ->distinct()
            ->paginate(8);

        return view('dashboard.dashboard_compte_busness', compact('posts'));
    }

    /**
     * @param Request $request
     * @param Shop $shop
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function searchProduct(Request $request, Shop $shop)
    {
        $request->validate(['query' => 'required']);
        $products = $shop->products()
            ->where('products.name', 'ilike', "%{$request->input('query')}%")
            ->orderBy('id')
            ->distinct()
            ->paginate(6);

        return view('dashboard.shop.content_shop', compact('products', 'shop'));
    }
}
