<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Video;


class TrackerController extends Controller
{
    public function show()
    {
        //$post = Post::where('slug', $slug)->firstOrFail();
        //'videos'=> \DB::table('videos')->latest()->get()

        return view('tracker',[
            'videos'=> \DB::table('videos')->latest()->get()
        ]);
    }
}
