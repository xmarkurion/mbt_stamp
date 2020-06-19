<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
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
        if($this->isadmin()){
           return view('video.adminPanel');
        }
    }

    public function generateVideoCsv()
    {
        return Excel::download(new VideoExport, ' videos.xls');
    }
}
