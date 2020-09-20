<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Exports\VideoExport;
use Maatwebsite\Excel\Facades\Excel;

class AdminPanelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function isadmin()
    {
        if(Auth::user()->id == config('app.admin') )return true;
        else return false;
    }

    public function show()
    {
//        if($this->isadmin()){

           return view('video.adminPanel',[
               'usero' => Auth::user()
           ]);

    }

    public function update_user($id)
    {
        if(Auth::user()->id == $id)
        {
            //dd(request('display_name'));
            $usero = Auth::user();
            $usero->name = request('display_name');
            $usero->save();

            return redirect(route('admin_panel'));
        }
        else
        {
            dd("Please don't do that. Thanks.");
        }

    }

    public function generateVideoCsv()
    {
//        if($this->isadmin()) {
            return Excel::download(new VideoExport, ' videos.xls');

    }
}
