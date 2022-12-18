<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    //
    function save(Request $request){
        dd('test');
    }
    function validate_input($string) {
        $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
     
        return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
     }
    function login(Request $request){


       $username =  $this->validate_input($request->username);
       $password =  $this->validate_input($request->username);
        $data = User::where('username',$request->username)
                    ->where('password',md5($request->password))
                    ->where('approved',1)
                    ->get()
                    ->first();
        
        if($data){
            // session()->pull('login'); session destroyer
            $request->session()->put('login',$data->id); 
            // dd('redirect the users in specific template depends on the user position');
            // return redirect('/admin/dashboard'); <---example
            //return redirect('supplier/dashboard'); <---example
            return redirect('admin/manage-user/forget-password');
        }else{
            return back()->with('fail',"Credentials are incorrect! Try again");
        }
    }
}
