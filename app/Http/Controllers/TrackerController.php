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

        return view('video.tracker',[
            'videos'=> Video::latest()->get()
        ]);
    }

    public function create()
    {
        return view('video.create', []);
    }

    public function store()
    {
        $video = new Video();
        $video->user_id = 1;
        $video->name = request('name');
        $video->mbt_link = request('mbt_link');
        $video->save();

        return redirect('video/Tracker');
    }

    public function edit($id)
    {
        $vid = Video::find($id);

        return view('video.edit', ['vid'=>$vid]);
    }

    public function update($id)
    {
        $vid = Video::find($id);

        $vid->user_id = 1;
        $vid->name = request('name');
        $vid->mbt_link = request('mbt_link');
        $vid->save();

        return redirect('video/Tracker');
    }
}
