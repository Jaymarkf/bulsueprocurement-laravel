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
    }else if($url == 'add-inspection-acceptance'){
        return view('/admin/add-inspection-acceptance');
    }else if($url == 'manage-user'){
        return view('/admin/admin-user');
    }else if($url == 'manage-quotation'){
        return view('/admin/manage-quotation');    
    }else if($url == 'inspection-acceptance'){
        return view('/admin/inspection-acceptance');
    }else if($url == 'manage-item-details'){
        return view('/admin/manage-item-details');
    }else if($url == 'manage-item-category'){
        return view('/admin/manage-item-cat');
    }else if($url == 'manage-purpose'){
        return view( 'admin/manage-item-purpose');
    }else if($url == '/manage-quotation'){
        return view('/admin/manage-quotation');
    }else if($url == 'manage-bac-resolution'){
        return view('/admin/manage-bac-resolution');
    }else if($url == 'purchase-order'){
        return view('/admin/purchase-order');
    }else if($url == 'manage-item-purpose'){
        return view('/admin/manage-item-purpose');
    }else{
        return redirect('/404');
    }
});


Route::get('/admin/table',function(){
    return view('/admin/admin-table-pagination');
});




// USER
Route::get('/user',function(){
    return view('/branch/user');
});

Route::get('/set-ppmp-year',function(){
    return view('template-forms/set-ppmp-year');
    
});
Route::get('/change-password',function(){
    return view('template-forms/change-password',array('user'=>'example'));
});


// FACULTY
Route::get('/faculty',function(){
    return view('/faculty/dashboard');
});


Route::get('/faculty/{url}',function($url){

    if($url == 'order-details-item'){

        return view('/faculty/order-details');

    }else if($url == 'ppmp-cart-list'){

        return view('/faculty/ppmp-cart-list');

    }else if($url == 'ppmp-requested'){

        return view('/faculty/ppmp-requested');

    }else if($url == 'activity-log'){

        return view('/faculty/activity-log');

    }else if($url == 'ppmp-log-history'){

        return view('/faculty/ppmp-log-history');

    }else if($url == 'change-password'){

        return view('/faculty/change-password ');

    }else if($url == 'set-ppmp-year'){

        return view('/faculty/year');

    }else if($url == 'price-catalogue'){

        return view('/faculty/dashboard');

    }else{
        return redirect('/404');
    }

});




//  SETTING


//GLOBAL template
Route::get('/set-ppmp-year',function(){
    return view('template-forms/set-ppmp-year');
});
Route::get('/change-password',function(){
    return view('template-forms/change-password',array('user'=>'example'));
});


// SUPPLIER
Route::get('/supplier',function(){
    return view('/supplier/dashboard');
});


Route::get('/supplier/{url}',function($url){
    if($url == 'inventory-custodian-form'){
        return view('/supplier/inventory-custodian-form');
    }else if($url == 'property-acknowledgement-report'){
        return view('/supplier/property-acknowledgement-report');
    }else if($url == 'unserviceable-property'){
        return view('/supplier/unserviceable-property');
    }else if($url == 'view-inventory-reports'){
        return view('/supplier/view-inventory-reports');   
    }else if($url == 'property-transfer-ics'){
        return view('/supplier/property-transfer-ics');   
    }else{
        return redirect('/404');
    }
});

