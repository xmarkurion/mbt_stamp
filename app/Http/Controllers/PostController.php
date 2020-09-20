<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;
use App\Video;


class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

   public function show()
   {
       //$post = \DB::table('posts')->where('slug', $slug)->first();
       //$post = Post::where('slug', $slug)->firstOrFail();
       //\DB::table('videos')
       //'posts' => \DB::table('posts')->latest()->take(1)->get()

       //Taking the number of records from database
       $video_table = Video::latest()->get();
       $total_videos = $video_table->count();

       //Taking the number of compleated videos from database
       $not_compleated_videos = Video::where("complete","1");
       $not_compleated_videos_amount = $not_compleated_videos->count();

       //Procent of completed videos for statistic
       $amount_completed = intval(($not_compleated_videos_amount * 100 / $total_videos));

       return view('welcome', [
           'posts' => Post::latest()->take(1)->get(),
           'total_videos'=> $total_videos,
           'procent_completed' => $amount_completed
       ]);
   }

}
