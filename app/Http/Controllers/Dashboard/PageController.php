<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

class PageController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function howItWork(){
        return view("dashboard.how_it_work");
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contact(){
        return view("dashboard.contact");
    }
}
