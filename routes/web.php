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

Route::get('/admin/{url}',function($url){
    if($url == 'dashboard'){
        return view('/admin/dashboard');
    }else if($url == 'consolidated'){
        return view('/admin/consolidated');
    }else if($url == 'purchase-request'){
        return view('/admin/purchase-request');
    }else if($url =='ppmp'){
        return view('/admin/dashboard');
    }else if($url == 'price-quotation'){
        return view('/admin/price-quotation');
    }else if($url =='bac-resolution'){
        return view('/admin/bac-resolution');
    }else if($url == 'purchase-order'){
        return view('/admin/purchase-order');
    }else if($url == 'add-purchase-order'){
        return view('/admin/add-purchase-order');
    }else if($url == 'inspection-acceptance'){
        return view('/admin/inspection-acceptance');
    }else if($url == 'add-inspection-acceptance'){
        return view('/admin/add-inspection-acceptance');
    }else{
        return redirect('/404');
    }
});

Route::get('/admin/table',function(){
    return view('/admin/admin-table-pagination');
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
    return view('template-forms/set-ppmp-year');
    
});

Route::get('/change-password',function(){
    return view('template-forms/change-password',array('user'=>'example'));
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