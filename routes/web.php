<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\SocialLoginController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\UserInfoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserOrderController;



Route::get('about', function () {
    return view('about');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('cart', function () {
    return view('cart');
});
// Route::get('login', function () {
//     return view('login');
// });
// login bằng web
Route::get('/showlogin', [LoginController::class, 'showLogin'])->name('showlogin');
Route::post('/login', [LoginController::class, 'login'])->name('login');
// login gg
Route::get('/auth/google', [SocialLoginController::class, 'redirectToGoogle'])->name('login.google')->middleware('guest');
Route::get('/auth/google/callback', [SocialLoginController::class, 'handleGoogleCallback'])->middleware('guest');
// login face
Route::get('/auth/facebook', [SocialLoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('/auth/facebook/callback', [SocialLoginController::class, 'handleFacebookCallback']);
// đăng ký
Route::post('/register', [LoginController::class, 'register'])->name('register');
// check mail
Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])
    ->name('verification.verify')
    ->middleware('signed');
// home
Route::get('/', function () {
    return view('home');
})->name('home');
// kiểm trạng thái đăng nhập
Route::middleware('auth')->group(function () {
    Route::get('infouser', [UserInfoController::class, 'showUserInfo'])->name('user');
    Route::post('/user/update-info', [UserInfoController::class, 'updateUserInfo'])->middleware('auth');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/user/orders/{order}', [UserOrderController::class, 'show'])->name('user.order.details')->middleware('auth');
});

Route::get('products', function () {
    return view('product');
});
Route::get('pagereturn', function () {
    return view('page_return');
});
Route::get('payment', function () {
    return view('payment');
});
Route::get('news', function () {
    return view('news');
});
Route::get('info-ctdh', function () {
    return view('info_ctdh');
});

Route::get('favourite_product', function () {
    return view('favourite_product');
});


// load san pham


Route::get('/products', [ProductController::class, 'ProductAll'])->name('product.filter');

// sx nổi bậtbật
Route::get('productFeatured', [ProductController::class, 'ProductFeatured']);
// sx bán chạy
Route::get('productBestseller', [ProductController::class, 'ProductBestseller']);
// sx gias cao -> thấp
Route::get('productPriceLowToHight', [ProductController::class, 'ProductPriceLowToHight']);
Route::get('productPriceHightToLow', [ProductController::class, 'ProductPriceHightToLow']);
//tìm kiếm
Route::get('/search-suggestions', [ProductController::class, 'searchSuggestions']);
Route::get('/search', [ProductController::class, 'search'])->name('search');








Route::get('newdetail', function () {
    return view('new_detail');
});


// page -> home
Route::get('/', [PageController::class, 'home']);
// detail product
Route::get('/detail/{id}', [PageController::class, 'detail']);
// detail-color-sizesize

Route::get('/get-variant-quantity', [PageController::class, 'getVariantQuantity']);

