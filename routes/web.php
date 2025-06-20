<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\SocialLoginController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TryOnController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\UserInFoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\ContactController;



Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');


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

// Route::get('infouser', function () {
//     return view('info_user');
// });
Route::get('info-ctdh', function () {
    return view('info_ctdh');
});


// kiểm trạng thái đăng nhập
Route::middleware('auth')->group(function () {

    Route::get('infouser', [UserInFoController::class, 'ShowInFo'])->middleware('auth')->name('infouser');
    Route::post('suainfo/{id}', [UserInFoController::class, 'suainfo'])->middleware('auth');
    Route::post('themaddress/{id}', [UserInFoController::class, 'themaddress'])->middleware('auth');
    Route::post('mkinfo/{id}', [UserInFoController::class, 'mkinfo'])->middleware('auth');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    // Route::get('/user/orders/{order}', [UserOrderController::class, 'show'])->name('user.order.details')->middleware('auth');
});



Route::get('products', function () {
    return view('product');
});
Route::get('pagereturn', function () {
    return view('page_return');
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


// page -> home
Route::get('/', [PageController::class, 'home'])->name('home');
// detail product
Route::get('/detail/{id}', [PageController::class, 'detail']);
// detail-color-sizesize

Route::get('/get-variant-quantity', [PageController::class, 'getVariantQuantity'])->name('getVariantQuantity');

// cart
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.view');
// lưu session
Route::post('/cart/session-add', [CartController::class, 'storeSessionCart']);
// voucher
Route::post('/cart/apply-voucher', [CartController::class, 'applyVoucher'])->name('cart.applyVoucher');
// xóa và tăng số lượng
Route::get('/cart/remove/{variantId}', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::put('/cart/update/{variantId}', [CartController::class, 'updateQuantity'])->name('cart.update');
// update variant
Route::put('/cart/update-variant/{variantId}', [CartController::class, 'updateVariant'])->name('cart.updateVariant');

// thanh toán
Route::get('/payment', [CartController::class, 'proceedToCheckout'])->name('payment.add');
Route::get('/showpayment', [PaymentController::class, 'showPayment'])->name('payment.show');
Route::post('/paymentstore', [PaymentController::class, 'paymentStore'])->name('payment.store');
Route::get('/payment/result', [PaymentController::class, 'result'])->name('payment.result');



Route::get('news', [NewController::class, 'show_new']);
Route::get('new_detail/{id}', [NewController::class, 'new_detail']);
Route::get('news_all', [NewController::class, 'news_all']);

Route::get('/wishlist/remove/{productId}', [WishlistController::class, 'remove'])->name('wishlist.remove');
Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');
Route::get('/wishlist/add/{id}', [WishlistController::class, 'add'])->name('wishlist.add');
Route::get('/wishlist/clear', [WishlistController::class, 'clear'])->name('wishlist.clear');

// ai mặc thử sản phẩm
Route::get('/try-on', [TryOnController::class, 'showForm'])->name('tryon.form');
Route::post('/try-on', [TryOnController::class, 'process'])->name('tryon.process');

