<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Video;
use Illuminate\Support\Facades\Auth;


class TrackerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function user_id_video_check($id)
    {
        $video_user = Video::findOrFail($id)->user_id;
        $curent_user = Auth::user()->id;

        if($curent_user == $video_user || $curent_user == config('app.admin') )return true;
        else return false;
    }

    public function show()
    {
        //$post = Post::where('slug', $slug)->firstOrFail();
        //'videos'=> \DB::table('videos')->latest()->get()

//        return view('video.tracker',[
//            'videos'=> Video::where("user_id",Auth::user()->id)->latest()->get()
//        ]);

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
        request()->validate([
            'name' => 'required',
            'mbt_link' => 'required',
        ]);

        $video = new Video();
        $video->user_id = Auth::user()->id;
        $video->name = request('name');
        $video->mbt_link = request('mbt_link');
        $video->save();

        return redirect('video/Tracker');
    }

    public function edit($id)
    {
//        $vid = Video::findOrFail($id);
//        return view('video.edit', ['vid'=>$vid]);
        if($this->user_id_video_check($id))
        {
            $vid = Video::findOrFail($id);
            return view('video.edit', ['vid'=>$vid]);
        }
        else
            {
            return redirect(route('tracker_page'));
            }


    }

    public function update($id)
    {
        //dd(\request('complete'));
        if($this->user_id_video_check($id))
        {
            $vid = Video::findOrFail($id);
            $vid->id = request('id');
            $vid->name = request('name');
            $vid->mbt_link = request('mbt_link');
            if(request('complete') == null){ $vid->complete = false;}
            elseif(request('complete') != null){ $vid->complete = true;}
            $vid->save();

            return redirect(route('my_tracker_page'));
        }
    }



    public function delete($id)
    {
        if($this->user_id_video_check($id)) {
            Video::findOrFail($id)->forceDelete();
            return redirect(route('tracker_page'));
        }
    }

}
