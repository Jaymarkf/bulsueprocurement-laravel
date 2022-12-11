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
    function login(Request $request){
        $user = User::where('username',md5($request->username))
                    ->where('password',md5($request->password))
                    ->get()
                    ->first();
        dd($user);

    }
}
