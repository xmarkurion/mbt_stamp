<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;


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

       return view('welcome', [
           'posts' => Post::latest()->take(1)->get()
       ]);
   }

}
