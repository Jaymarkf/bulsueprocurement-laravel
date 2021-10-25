<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/superadmin',function(){
    return view('/superadmin/dashboard');
});

Route::get('/set-ppmp-year',function(){
    return view('/superadmin/set-ppmp-year',["image_logo_url" => "test data"]);
});