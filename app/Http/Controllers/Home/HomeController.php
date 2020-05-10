<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use App\Models\Shop;
use App\Models\SubCategory;
use Doctrine\DBAL\Types\Type;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home(){

        $categorys = Category::all();
        $posts = Post::all();
        return view('home.index',compact('categorys','posts'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function TermsOfUse(){
        return view('home.termes_of_use');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function WhoAreWe(){
        return view('home.Who_are_we');
    }

    public function category(SubCategory $subCategory){
        $posts = Post::join('products', 'posts.product_id', '=', 'products.id')
            ->where('products.sub_category_id',$subCategory->id)
            ->select('posts.*')
            ->orderBy('id')
            ->distinct()
            ->paginate(8);

        return view('home.category_content',compact('subCategory','posts'));
    }

    public function shop(){
        $shops = Shop::paginate(6);
        return view('home.shop',compact('shops'));
    }

    public function shopContent(Shop $shop){

        $products = $shop->products()->paginate(6);
        return view('home.content_shop',compact('products','shop'));
    }

    public function shopShow(Shop $shop,Product $product){
        return view('home.detail_annonce',compact('shop','product'));
    }

    public function postShow(Post $post){
        return view('home.détail_post',compact('post'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function searchPost(Request $request){

        $request->validate(['query' => 'required']);

        $posts = Post::join('products', 'posts.product_id', '=', 'products.id')
            ->where('products.name','ilike',"%{$request->input('query')}%")
            ->join('sub_categorys', 'products.sub_category_id', '=', 'sub_categorys.id')
            ->orWhere('sub_categorys.name','ilike',"%{$request->input('query')}%")
            ->select('posts.*')
            ->orderBy('id')
            ->distinct()
            ->paginate(8);

        return view('home.search_post',compact('posts'));
    }
}
