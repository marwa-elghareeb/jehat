<?php
namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactUsSiteController extends Controller
{
    //
    public function index()
    {
        return view('site.contactUs');
    }
    public function contactUsForm(Request $request)
    {
        //validation
        $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|max:255',
            'email' => 'required|max:255',
            'subject' => 'required|max:255',
            'message' => 'required',

        ]);
        //send email
       // mail("info@jehat.sa",$request->name,$request->message);
        return back()->with('flash_message','تم ارسال الرساله بنجاح وسيتم التواصل فى اقرب وقت');

    }

}
