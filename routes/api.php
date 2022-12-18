<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeTypeController;
use App\Http\Controllers\EmployeePositionController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\UnitApiController;
use App\Http\Controllers\ItemDetailsApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('v1/employee_type', EmployeeTypeController::class);
Route::resource('v1/employee_position', EmployeePositionController::class);
Route::resource('v1/employee', EmployeeController::class);

Route::resource('v1/branch', BranchController::class);

Route::resource('v1/unit', UnitApiController::class);

Route::resource('v1/item_details', ItemDetailsApiController::class);
