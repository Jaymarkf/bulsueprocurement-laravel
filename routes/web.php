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
    }else if($url == 'table'){
        return view('admin/admin-table-pagination');
    }else if($url == 'manage-item-details'){
        return view('/admin/manage-item-details');
    }else if($url == 'manage-user'){
        return view('/admin/admin-user');
    }else if($url =='manage-item-category'){
        return view('/admin/manage-item-cat');
    }else if($url =='manage-purpose'){
        return view('/admin/manage-item-purpose');
    }else if($url == 'manage-quotation'){
        return view('/admin/manage-quotation');
    }else if($url =='manage-bac-resolution'){
        return view('/admin/manage-bac-resolution');
    }else if($url =='purchase-order'){
        return view('/admin/purchase-order');
    }else if($url == 'inspection-acceptance'){
        return view('/admin/inspection-acceptance');
    }else if($url =='manage-item-cat'){
        return view('/admin/manage-item-cat');
    }else if($url =='manage-item-details'){
        return view('/admin/manage-item-details');
    }else if($url =='manage-item-purpose'){
        return view('/admin/manage-item-purpose');
    }else{
        return redirect('/404');
    }
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







//GLOBAL template
Route::get('/set-ppmp-year',function(){
    return view('template-forms/set-ppmp-year');
    
});

Route::get('/change-password',function(){
    return view('template-forms/change-password',array('user'=>'example'));
});


