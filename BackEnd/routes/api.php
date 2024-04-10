<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminProductAPIController;
use App\Http\Controllers\ProductAPIController;
use App\Http\Controllers\CategoryAPIController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// api lấy toàn bộ danh mục sản phẩm (GET).
Route::get('/category', [CategoryAPIController::class, 'show']);

// api show toàn bộ sản phẩm ra. (GET)
Route::get('/product', [ProductAPIController::class, 'show']);

// api xem chi tiết 1 sản phẩm. (GET)
Route::get('/product/{id}', [ProductAPIController::class, 'GetDetailProduct']);

// api lấy ra sản phẩm theo danh mục.
Route::get('/product_by_category/{id}', [ProductAPIController::class, 'ShowProductByCategory']);
/*
 *
 * Admin
 *
 * */
// Api lấy toàn bộ sản phẩm (GET).
Route::get('/san_pham', [AdminProductAPIController::class, 'index']);
// api để xóa 1 sản phẩm (DELETE).
Route::delete('/san_pham/{id}/delete', [AdminProductAPIController::class, 'destroy']);
// api xem chi tiết 1 sản phẩm. (GET)
Route::get('/san_pham/{id}', [AdminProductAPIController::class, 'show']);
// api liệt kê các thông tin ra trong trang chỉnh sửa sản phẩm.(GET)
Route::get('/san_pham/{id}/edit', [AdminProductAPIController::class, 'edit']);
// api để cập nhật 1 sản phẩm (PUT).
Route::put('/san_pham/{id}/update', [AdminProductAPIController::class, 'update']);
// api để lưu 1 sản phẩm mới (POST).
Route::post('/them_san_pham', [AdminProductAPIController::class, 'store']);
