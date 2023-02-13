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

    public function userForm(Request $request)
    {

        //Add User
         //validation
         $request->validate([
            'fullname_ar' => 'required|max:255',
            'fullname_en' => 'required|max:255',
            'gender_type' => 'required|max:255',
            'nationality' => 'required|max:255',
            'identity_number' => 'required|max:255',
            'email' => 'required|max:255',
            'password' => 'required|max:255',

        ]);
    
            /* $data = new UsersWebsite();
             $data->fullname_ar = $request->fullname_ar;
             $data->fullname_en= $request->fullname_en;
             $data->gender_type = $request->gender_type;
             $data->nationality = $request->nationality;
             $data->identity_numbe = $request->identity_numbe;
             $data->email = $request->email;
             $data->password= $request->password;
        
             
             $data->save();*/
             return view('site.userregister');  
       

    }
}
