<?php

use App\Http\Controllers\Auth\SocialLoginController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VerificationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


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
  Route::get('infouser', function () {
        return view('info_user');
    })->name('user');
        Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});


// Route::get('/login', [LoginController::class, 'showRegister']);

// Route::get('register', function () {
//     return view('register');
// });
Route::get('detail', function () {
    return view('detail');
});

Route::get('product', function () {
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
Route::get('product', [ProductController::class, 'ProductAll']);

Route::get('newdetail', function () {
    return view('new_detail');
});

