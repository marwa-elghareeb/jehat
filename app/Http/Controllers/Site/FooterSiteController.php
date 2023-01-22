<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FooterPages;
class FooterSiteController extends Controller
{
    public function index()
    {
        $allData = FooterPages::all();
        return view('site.footerPages')->with(['allData' => $allData]); 
    }
}
