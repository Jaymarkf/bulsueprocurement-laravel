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
Route::get('/admin',function(){
    return view('/admin/dashboard');
});

Route::get('/admin/consolidated',function(){
    return view('/admin/consolidated');
});
Route::get('/admin/purchase-request',function(){
    return view('/admin/purchase-request');
});

// USER
Route::get('/user',function(){
    return view('/user/user-dashboard');
});
Route::get('/user/price-catalogue',function(){
    return view('/user/user-dashboard');
});
Route::get('/user/order-details-item',function(){
    return view('/user/order-details');
});
Route::get('/user/ppmp-cart-list',function(){
    return view('/user/ppmp-cart-list');
});
Route::get('/user/ppmp-requested',function(){
    return view('/user/ppmp-requested');
});

Route::get('/user/activity-log',function(){
    return view('/user/activity-log');
});

Route::get('/user/ppmp-log-history',function(){
    return view('/user/ppmp-log-history');
});
Route::get('user/change-password',function(){
    return view('/user/change-password');
});
Route::get('user/set-ppmp-year',function(){
    return view('/user/year');
});

//  SETTING
Route::get('/admin/manage-item-details',function(){
    return view('/admin/manage-item-details');
});

Route::get('/admin/manage-user',function(){
    return view('/admin/admin-user');
});

Route::get('/admin/manage-item-category',function(){
    return view('/admin/manage-item-category');
});
Route::get('/admin/manage-purpose',function(){
    return view('/admin/manage-purpose');
});



Route::get('/set-ppmp-year',function(){
    return view('/admin/set-ppmp-year',["image_logo_url" => "test data"]);
    
});
Route::get('/admin/change-password',function(){
    return view('/admin/change-password');
});
