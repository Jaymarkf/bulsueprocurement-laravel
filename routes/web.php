<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\ItemPurposeController;
use App\Http\Controllers\ManageCompanyController;

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


//Manage Units/Unit of Measurements
Route::get('/admin/manage-units', [UnitController::class, 'index']);
Route::post('/admin/manage-units/add', [UnitController::class, 'store']);
Route::put('/admin/manage-units/edit', [UnitController::class, 'update']);
Route::delete('/admin/manage-units/delete', [UnitController::class, 'delete_unit']);

//Manage Item Purposes
Route::get('/admin/manage-item-purpose', [ItemPurposeController::class, 'index']);
Route::post('/admin/manage-item-purpose/add', [ItemPurposeController::class, 'store']);

//Manage companies
Route::get('/admin/manage-company', [ManageCompanyController::class, 'index']);
Route::get('/admin/manage-company/add', [ManageCompanyController::class, 'create']);
Route::post('/admin/manage-company/save', [ManageCompanyController::class, 'store']);
Route::get('/admin/manage-company/edit/{id}', [ManageCompanyController::class, 'show']);
Route::put('/admin/manage-company/save-changes/{id}', [ManageCompanyController::class, 'update']);
Route::delete('/admin/manage-company/delete-selected', [ManageCompanyController::class, 'delete_selected']);

Route::get('/', function () {
    return view('home');
});

Route::get('/admin', function () {
    return view('/admin/dashboard');
});

Route::get('/admin/{url}', function ($url) {
    if ($url == 'dashboard') {
        return view('/admin/dashboard');
    } elseif ($url == 'consolidated') {
        return view('/admin/consolidated');
    } elseif ($url == 'purchase-request') {
        return view('/admin/purchase-request');
    } elseif ($url == 'ppmp') {
        return view('/admin/dashboard');
    } elseif ($url == 'price-quotation') {
        return view('/admin/price-quotation');
    } elseif ($url == 'bac-resolution') {
        return view('/admin/bac-resolution');
    } elseif ($url == 'purchase-order') {
        return view('/admin/purchase-order');
    } elseif ($url == 'table') {
        return view('/admin/admin-table-pagination');
    } elseif ($url == 'add-purchase-order') {
        return view('/admin/add-purchase-order');
    } elseif ($url == 'add-inspection-acceptance') {
        return view('/admin/add-inspection-acceptance');
    } elseif ($url == 'manage-user') {
        return view('/admin/admin-user');
    } elseif ($url == 'manage-quotation') {
        return view('/admin/manage-quotation');
    } elseif ($url == 'inspection-acceptance') {
        return view('/admin/inspection-acceptance');
    } elseif ($url == 'manage-item-details') {
        return view('/admin/manage-item-details');
    } elseif ($url == 'manage-item-category') {
        return view('/admin/manage-item-cat');
    } elseif ($url == 'manage-purpose') {
        return view('admin/manage-item-purpose');
    } elseif ($url == '/manage-quotation') {
        return view('/admin/manage-quotation');
    } elseif ($url == 'manage-bac-resolution') {
        return view('/admin/manage-bac-resolution');
    } elseif ($url == 'purchase-order') {
        return view('/admin/purchase-order');
        // } elseif ($url == 'manage-item-purpose') {
        //     return view('/admin/manage-item-purpose');
        // } elseif ($url == 'manage-units') {
        //     return view('admin/manage-units');
    } else {
        return redirect('/404');
    }
});


// FACULTY
Route::get('/faculty', function () {
    return view('/faculty/dashboard');
});


Route::get('/faculty/{url}', function ($url) {
    if ($url == 'order-details-item') {
        return view('/faculty/order-details');
    } elseif ($url == 'ppmp-cart-list') {

        return view('/faculty/ppmp-cart-list');
    } elseif ($url == 'ppmp-requested') {

        return view('/faculty/ppmp-requested');
    } elseif ($url == 'activity-log') {

        return view('/faculty/activity-log');
    } elseif ($url == 'ppmp-log-history') {

        return view('/faculty/ppmp-log-history');
    } elseif ($url == 'change-password') {
        //use template forms for change-password for every user
        return view('/template-forms/change-password ');
    } elseif ($url == 'set-ppmp-year') {

        return view('/faculty/year');
    } elseif ($url == 'price-catalogue') {

        return view('/faculty/dashboard');
    } else {
        return redirect('/404');
    }
});




//  SETTING


//GLOBAL template
Route::get('/set-ppmp-year', function () {
    return view('template-forms/set-ppmp-year');
});
Route::get('/change-password', function () {
    return view('template-forms/change-password', array('user' => 'example'));
});


// SUPPLIER
Route::get('/supplier', function () {
    return view('/supplier/dashboard');
});


Route::get('/supplier/{url}', function ($url) {
    if ($url == 'inventory-custodian-form') {
        return view('/supplier/inventory-custodian-form');
    } elseif ($url == 'property-acknowledgement-report') {
        return view('/supplier/property-acknowledgement-report');
    } elseif ($url == 'unserviceable-property') {
        return view('/supplier/unserviceable-property');
    } elseif ($url == 'view-inventory-reports') {
        return view('/supplier/view-inventory-reports');
    } elseif ($url == 'property-transfer-ics') {
        return view('/supplier/property-transfer-ics');
    } else {
        return redirect('/404');
    }
});
