<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use Illuminate\Support\Facades\Auth;

class MyTrackerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        return view('video.my_tracker',[
           'videos'=> Video::where("user_id",Auth::user()->id)->latest()->get()
        ]);
    }
}
