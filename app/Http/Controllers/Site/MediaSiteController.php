<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Media;

class MediaSiteController extends Controller
{
    public function index()
    {
        return view('site.media');
        $allData = Media::all();
        return view('site.media')->with(['allData' => $allData]); 
    }
}
