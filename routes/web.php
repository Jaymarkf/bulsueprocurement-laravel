<?php

use App\Events\PPMPNotif;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\ItemPurposeController;
use App\Http\Controllers\ManageCompanyController;
use App\Http\Controllers\ItemCategoriesController;
use App\Http\Controllers\ItemDetailsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\ItemOrderDetailsController;

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

//PUSHER NOTIF TEST
Route::get('/pushtest', function () {
    $array = ["name" => "HEY"];
    event(new PPMPNotif($array));

    return "done";
});


//Manage Units/Unit of Measurements
Route::get('/admin/manage-units', [UnitController::class, 'index']);
Route::post('/admin/manage-units/add', [UnitController::class, 'store']);
Route::get('/admin/manage-units/{id}', [UnitController::class, 'show']);
Route::put('/admin/manage-units/update/{id}', [UnitController::class, 'update']);
Route::delete('/admin/manage-units/delete', [UnitController::class, 'delete_unit']);

//Manage Item Purposes
Route::get('/admin/manage-item-purpose', [ItemPurposeController::class, 'index']);
Route::post('/admin/manage-item-purpose/add', [ItemPurposeController::class, 'store']);
Route::get('/admin/manage-item-purpose/{id}', [ItemPurposeController::class, 'show']);
Route::put('/admin/manage-item-purpose/{id}', [ItemPurposeController::class, 'update']);
Route::delete('/admin/manage-item-purpose/delete-selected', [ItemPurposeController::class, 'destroy']);


//Manage companies
Route::get('/admin/manage-company', [ManageCompanyController::class, 'index']);
Route::get('/admin/manage-company/add', [ManageCompanyController::class, 'create']);
Route::post('/admin/manage-company/save', [ManageCompanyController::class, 'store']);
Route::get('/admin/manage-company/edit/{id}', [ManageCompanyController::class, 'show']);
Route::put('/admin/manage-company/save-changes/{id}', [ManageCompanyController::class, 'update']);
Route::delete('/admin/manage-company/delete-selected', [ManageCompanyController::class, 'delete_selected']);


//Add Users todo-> middleware
Route::post('add-users', [AdminController::class, 'save']);


// roncy_updated BRANCH
// Manage Item Categories
Route::get('admin/manage-item-category', [ItemCategoriesController::class, 'index'])->name('item_categories.index');
Route::post('admin/manage-item-category', [ItemCategoriesController::class, 'store'])->name('item_categories.store');
Route::post('admin/manage-item-category/update', [ItemCategoriesController::class, 'update'])->name('item_categoriesD.update');
Route::post('admin/manage-item-category/delete', [ItemCategoriesController::class, 'deleteCateg'])->name('item_categories.delete');

//Manage Item Details
Route::get('admin/manage-item-details', [ItemDetailsController::class, 'index'])->name('item_details.index');
Route::post('admin/manage-item-details', [ItemDetailsController::class, 'store'])->name('item_details.store');
Route::post('admin/manage-item-details/update', [ItemDetailsController::class, 'update'])->name('item_details.update');
Route::post('admin/manage-item-details/delete', [ItemDetailsController::class, 'deleteCateg'])->name('item_details.delete');

//ADMIN - Manage User Maxx Task
Route::get('admin/manage-user', [UsersController::class, 'index']);
Route::post('admin/manage-user', [UsersController::class, 'store'])->name('userlists.store');
Route::post('admin/manage-user/update', [UsersController::class, 'update'])->name('userlists.update');
Route::post('admin/manage-user/delete', [UsersController::class, 'deleteUser'])->name('userlists.delete');


// Reset Password
Route::get('admin/manage-user/forget-password', [ResetPasswordController::class, 'getForgetPassword'])->name('reset-password');
Route::post('admin/manage-user/forget-password', [ResetPasswordController::class, 'postForgetPassword'])->name('post.reset-password');
Route::get('admin/manage-user/reset-password/{reset_code}', [ResetPasswordController::class, 'getResetPassword'])->name('reset-code');
Route::post('admin/manage-user/reset-password/{reset_code}', [ResetPasswordController::class, 'postResetPassword'])->name('post.reset-code');

// FACULTY - ORDER DETAILS
Route::get('/faculty/order-details-item', [ItemOrderDetailsController::class, 'index']);

// Faculty
Route::get('/faculty', [FacultyController::class, 'index']);
Route::post('/faculty', [FacultyController::class, 'search'])->name('search-item');
Route::get('/faculty/item-detail/add', [FacultyController::class, 'create'])->name('faculty-add-item.show');
Route::post('/faculty/item-detail/add', [FacultyController::class, 'store'])->name('faculty-add-item.perform');
Route::get('/faculty/{id}', [FacultyController::class, 'get_causes_against_category']);

Route::post('/faculty/order-item-details', [FacultyController::class, 'show'])->name('show-item');


Route::get('/', function () {
    return view('home');
});


//HOME PAGE LOGIN
Route::post('login', [AdminController::class, 'login']);

//ADMIN ROUTES with MIDDLEWARE
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
    } elseif ($url == 'manage-quotation') {
        return view('/admin/manage-quotation');
    } elseif ($url == 'inspection-acceptance') {
        return view('/admin/inspection-acceptance');
    } elseif ($url == 'manage-item-details') {
        return view('/admin/manage-item-details');
    } elseif ($url == 'manage-item-category') {
        return view('/admin/manage-item-cat');
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
})->middleware('auth_admin');




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
