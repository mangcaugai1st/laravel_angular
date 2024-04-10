<?php

use Illuminate\Support\Facades\Route;
// Import controller của "Category".
use App\Http\Controllers\CategoryController;
// Import controller của "Product".
use App\Http\Controllers\ProductController;
// Import controller của "News".
use App\Http\Controllers\NewsController;
// Import controller của "Cart".
use App\Http\Controllers\CartController;

// Import controller của "AdminProduct".
use App\Http\Controllers\AdminProductController;
// Import controller của "AdminCategory"
use App\Http\Controllers\AdminCategoryController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AuthController;

// Route của trang chủ.
Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [
    \App\Http\Controllers\HomeController::class,
    'ShowCategoryAndProduct',

]);
//Route::get('auth/google', 'Auth\LoginController@redirectToGoogle');
//Route::get('auth/google/callback', 'Auth\LoginController@handleGoogleCallback');
//Route::get('auth/google', [LoginController::class, 'redirectToGoogle']);
//Route::get('auth/google/callback', [LoginController::class, 'handleGoogleCallback']);

//Route::get('/auth/google/redirect', [AuthController::class, 'redirectToGoogle']);
//Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback']);


// Route của trang Danh mục sản phẩm.
Route::get('/danh_muc_san_pham', [CategoryController::class, 'show']);
// Route của trang "Lấy sản phẩm theo danh mục sản phẩm".
Route::get('/danh_muc_san_pham/{id}', [ProductController::class, 'ShowProductByCategory']);
// Route của trang "Danh sách sản phẩm".
Route::get('/san_pham', [ProductController::class, 'show']);
// Route của trang "Chi tiết sản phẩm".
Route::get('/san_pham/{id}', [ProductController::class, 'GetDetailProduct']);
// Route của trang liên hệ.
Route::get('/lien_he', function () {
    return view('contact');
});
// Route của trang bản tin.
Route::get('/ban_tin', [NewsController::class, 'index']);
// Route của bảng tin theo loại tin
Route::get('/loai_ban_tin/{newCategory_id}', [NewsController::class, 'ShowNewsByCategoryNews']);
// Route của trang chi tiết tin tức
Route::get('/ban_tin/{news_id}', [NewsController::class, 'GetDetailNews']);
// Route::get('/ban_tin', [NewsController::class, 'showCategoryNews']);

// Route của trang đăng nhập.
//Route::get('/dang_nhap', function () {
//    return view('login');
//});
//// Route của trang đăng ký.
//Route::get('/dang_ky', function () {
//    return view('signup');
//});

Route::get('/dang_ky', [AuthController::class, 'showRegistrationForm']);
Route::post('/dang_ky', [AuthController::class, 'register']);
Route::get('/dang_nhap', [AuthController::class, 'showLoginForm']);
Route::post('/dang_nhap', [AuthController::class, 'login']);

Route::get('/logout', [AuthController::class, 'logout']);


// Route của trang quản lý.
Route::get('/trang_quan_ly', function (){
    return view('admin_index');
});
// Route của trang Giỏ hàng.
Route::get('cart', [CartController::class, 'index']);
// Route thêm sản phẩm vào giỏ hàng.
Route::get('cart/{id}', [CartController::class, 'addToCart'])->name('addToCart');
// Route sửa giỏ hàng.
Route::post('cart', [CartController::class, 'updateCart']);
// Route xóa sản phẩm ra khỏi giỏ hàng.
Route::get('/xoa_cart/{id}', [CartController::class, 'removeCart']);
// Route làm sạch giỏ hàng
Route::get('/clear_cart', [CartController::class, 'clearAllCart']);

/*
 *
 * TRANG QUẢN LÝ SẢN PHẨM.
 *
 * */
// Route của trang quản lý sản phẩm.
Route::get('/trang_quan_ly_san_pham', [AdminProductController::class, 'index']);

// Route của trang thêm sản phẩm.
Route::get('/them_san_pham_moi', [AdminProductController::class, 'create']);

// Route của trang lưu 1 sản phẩm mới.
Route::post('/trang_quan_ly_san_pham', [AdminProductController::class, 'store']);

// Route của trang sửa sản phẩm.
Route::get('/sua_san_pham/{id}', [AdminProductController::class, 'edit']);

// Route của trang lưu 1 sản phẩm cập nhật mới.
Route::put('/sua_san_pham/{id}/update', [AdminProductController::class, 'UpdateProduct']);

// Route của trang xóa sản phẩm.
Route::delete('/xoa_san_pham/{id}', [AdminProductController::class, 'DeleteProduct'])->name('adminProduct.destroy');
/*
 *
 * Trang Quản lý DANH MỤC SẢN PHẨM.
 *
 * */
// Route của trang quản lý loại sản phẩm.
Route::get('/trang_quan_ly_danh_muc_san_pham', [AdminCategoryController::class, 'index']);

// Route của trang thêm loại sản phẩm.
Route::get('/loai_san_pham/create', [AdminCategoryController::class,'create']);

// Route của trang lưu 1 Loại sản phẩm mới.
Route::post('/trang_quan_ly_danh_muc_san_pham', [AdminCategoryController::class, 'store']);

// Route của trang sửa loại sản phẩm.
Route::get('/loai_san_pham/edit/{id}', [AdminCategoryController::class, 'edit']);

// Route của trang lưu 1 loại sản phẩm cập nhật mới (PUT).
Route::put('/sua_loai_san_pham/{id}/update', [AdminCategoryController::class, 'update']);

// Route của để xóa loại sản phẩm.
Route::delete('/xoa_loai_sp/{id}', [AdminCategoryController::class, 'delete']);

