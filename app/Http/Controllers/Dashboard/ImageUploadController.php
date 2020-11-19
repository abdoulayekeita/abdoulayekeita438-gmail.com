<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

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
            $image_64 = base64_encode(file_get_contents($request->file('file')->getPathname()));
            $extension = $request->file('file')->getClientOriginalExtension();
            $imageName = Str::random(20).'.'.$extension;
            $request->session()->put($imageName, $image_64);
//            Redis::set($imageName, $image_64);
            echo json_encode($imageName);
        }
    }

    /**
     * @param Request $request
     */
    public function destroy(Request $request)
    {
        $image = str_replace("\\", '', $request->file);
        $image = str_replace('"', '', $image);
//        unlink(storage_path('app/public/'.$image));
        Redis::del($image);
        echo json_encode($image);
    }
}
