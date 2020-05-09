<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->hasFile('file')) {

            $fileName = $request->file('file')->store('product');
            echo json_encode($fileName);
        }


    }


    /**
     * @param Request $request
     */
    public function destroy(Request $request)
    {
        $image = str_replace("\\", '', $request->file);
        $image = str_replace('"', '',$image);
        unlink(storage_path('app/public/'.$image));
        echo json_encode($image);


    }
}
