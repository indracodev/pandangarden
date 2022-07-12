<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::ApiResource('/customers', App\Http\Controllers\TbCustomerController::class);
Route::ApiResource('/category', App\Http\Controllers\TbCategoryController::class);
Route::ApiResource('/delivery', App\Http\Controllers\TbDeliveryController::class);
Route::ApiResource('/gallery', App\Http\Controllers\TbGalleryController::class);
Route::ApiResource('/menu', App\Http\Controllers\TbMenuController::class);
Route::ApiResource('/menupo', App\Http\Controllers\TbMenuPoController::class);
Route::ApiResource('/order', App\Http\Controllers\TbOrderController::class);
Route::ApiResource('/preorder', App\Http\Controllers\TbPreorderController::class);
Route::ApiResource('/reservation', App\Http\Controllers\TbReservationController::class);
Route::ApiResource('/takeaway', App\Http\Controllers\TbTakeawayController::class);
Route::ApiResource('/users', App\Http\Controllers\TbUsersController::class);