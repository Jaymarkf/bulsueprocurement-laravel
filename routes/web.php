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

Route::get('/user',function(){
    return view('/branch/user');
});

Route::get('/admin/user',function(){
    return view('/admin/admin-user');
});

Route::get('/set-ppmp-year',function(){
    return view('/admin/set-ppmp-year',["image_logo_url" => "test data"]);
    
});

Route::get('/admin/change-password',function(){
    return view('/admin/change-password');
});

Route::get('/admin/manage-quotation', function(){
    return view('/admin/manage-quotation');
});

Route::get('/admin/manage-bac-resolution', function() {
    return view('/admin/manage-bac-resolution');
});

Route::get('/admin/purchase-order', function() {
    return view('/admin/purchase-order');
});

Route::get('/admin/inspection-acceptance', function() {
    return view('/admin/inspection-acceptance');
});

Route::get('/admin/manage-item-cat', function() {
    return view('/admin/manage-item-cat');
});

Route::get('/admin/manage-item-details', function() {
    return view('/admin/manage-item-details');
});

Route::get('/admin/manage-item-purpose', function() {
    return view('/admin/manage-item-purpose');
});