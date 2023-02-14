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
            'number' => 'required',
            'identity_number' => 'required',
            'email' => 'required|max:255',
            'password' => 'required|max:255',

        ]);
    
             $data = new UsersWebsite();
             $data->fullname_ar = $request->fullname_ar;
             $data->fullname_en= $request->fullname_en;
             $data->gender_type = $request->gender_type;
             $data->nationality = $request->nationality;
             $data->number = $request->number;
             $data->identity_number = $request->identity_number;
             $data->email = $request->email;
             $data->password= $request->password;
        
             
             $data->save();
             return view('site.userregister');  
       

    }


    public function userLogin()
    {
       
        return view('site.userLogin');      

    }
    
    public function loginForm(Request $request)
    {

      
        $data = new UsersWebsite();
            // $data->fullname_ar = $request->fullname_ar;
            // $data->fullname_en= $request->fullname_en;
            // $data->gender_type = $request->gender_type;
            // $data->number = $request->number;
             //$data->nationality = $request->nationality;
             $data->identity_number = $request->identity_number;
            // $data->email = $request->email;
             $data->password= $request->password;
        
             
             $data->save();
           
             return view('site.userLogin');  
       

    }

    
}

