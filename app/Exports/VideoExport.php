<?php

namespace App\Exports;

use App\Video;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class VideoExport implements FromView
{

    public function view(): View
    {
        return view('video.export', [
            'videos' => Video::all()
        ]);
    }
}
