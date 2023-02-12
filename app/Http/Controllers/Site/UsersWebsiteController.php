<?php
namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UsersWebsite;

class UsersWebsiteController extends Controller
{
    //
    public function index()
    {
       
        return view('site.userregister');       

    }

    public function userForm()
    {

        //Add User
       
        return view('site.userregister');       

    }
}
