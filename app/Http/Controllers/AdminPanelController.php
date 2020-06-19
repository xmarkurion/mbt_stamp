<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use Illuminate\Support\Facades\Auth;

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
//        $table = Video::all();
//        $file = fopen('file.csv', 'w');
//        foreach ($table as $row) {
//            fputcsv($file, $row->toArray());
//        }
//        fclose($file);
//
//        // download
//        header("Content-Description: File Transfer");
//        header("Content-Disposition: attachment; filename=".$file);
//        header("Content-Type: application/csv; ");
//
//        readfile($file);
//        unlink($file);
//        exit();


    }

}
