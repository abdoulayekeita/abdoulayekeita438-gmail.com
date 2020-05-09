<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home(){

        $categorys = Category::all();
        return view('home.index',compact('categorys'));
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
}
