<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class PostController extends Controller
{
   public function show()
   {
       //$post = \DB::table('posts')->where('slug', $slug)->first();
       //$post = Post::where('slug', $slug)->firstOrFail();
        //\DB::table('videos')

       return view('welcome', [
           'posts' => \DB::table('posts')->latest()->take(1)->get()
       ]);
   }

}
