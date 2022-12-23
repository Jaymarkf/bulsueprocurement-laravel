<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    function validate_input($string) {
        $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
     
        return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
     }
    function login(Request $request){


       $username =  $this->validate_input($request->username);
       $password =  $this->validate_input($request->username);
        $data = User::where('username',$request->username)
                    ->where('password',md5($request->password))
                    ->get()
                    ->first();
        
        if($data){
            // session()->pull('login'); session destroyer
            $request->session()->put('login',$data->id); 
            return redirect('/admin/dashboard');
            //return redirect('supplier/dashboard'); <---example
        }else{
            return back()->with('fail',"Credentials are incorrect! Try again");
        }
    }
}
