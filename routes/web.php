<?php

use App\Http\Controllers\Admin\NewAdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\SocialLoginController;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\PaymentController;
use App\Models\Cart;

use App\Http\Controllers\NewController;
use App\Http\Controllers\UserInfoController;
use App\Http\Controllers\UserOrderController;

use App\Http\Controllers\TryOnController;
use App\Http\Controllers\VerificationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Http;




Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

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
// quên mật khẩu
Route::get('/password/reset/{id}/{hash}', [LoginController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [LoginController::class, 'ForgotPassword'])->name('password.update');
Route::post('/password/update', [LoginController::class, 'updatePassword'])->name('password.forgot');
// check mail
Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])
    ->name('verification.verify')
    ->middleware('signed');

// Route::get('infouser', function () {
//     return view('info_user');
// });
// Route::get('info-ctdh', function () {
//     return view('info_ctdh');
// });


// kiểm trạng thái đăng nhập
Route::middleware('auth')->group(function () {

    // mạnh trang info {
    Route::get('infouser', [UserInFoController::class, 'ShowInFo'])->middleware('auth')->name('infouser');
    Route::post('suainfo/{id}', [UserInFoController::class, 'suainfo'])->middleware('auth');
    Route::post('themaddress', [UserInFoController::class, 'themaddress'])->middleware('auth');
    Route::post('suaaddress', [UserInFoController::class, 'suaaddress'])->middleware('auth');
    Route::post('mkinfo/{id}', [UserInFoController::class, 'mkinfo'])->middleware('auth');
    Route::get('xoaaddress/{id}', [UserInFoController::class, 'xoaaddress'])->middleware('auth');
    Route::get('huydon/{id}', [UserInFoController::class, 'huydon'])->middleware('auth');
    // chi tiết đơn hàng
    Route::get('info-ctdh/{id}', [UserInFoController::class, 'Showorder'])->middleware('auth')->name('info-ctdh');


    // }
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::post('/wishlist/add', [WishlistController::class, 'add'])->name('wishlist.add');


    // Route::post('/wishlist/add', [WishlistController::class, 'add'])->name('wishlist.add');

    // Route::get('infouser', [UserInFoController::class, 'ShowInFo'])->middleware('auth')->name('infouser');
    // Route::post('suainfo/{id}', [UserInFoController::class, 'suainfo'])->middleware('auth');
    // Route::post('themaddress/{id}', [UserInFoController::class, 'themaddress'])->middleware('auth');
    // Route::post('mkinfo/{id}', [UserInFoController::class, 'mkinfo'])->middleware('auth');
    // Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    // Route::get('/user/orders/{order}', [UserOrderController::class, 'show'])->name('user.order.details')->middleware('auth');
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
// Route::get('news', function () {
//     return view('news');
// });

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

// ai box chat
// Route::get('/a', function (Request $request) {
//     return view('a', ['request' => $request]);
// });

// ========================================== admin
Route::get('/admin/', function () {
    return view('admin.home');
});
Route::get('/admin/baocao', function () {
    return view('admin.baocao');
});
Route::get('/admin/caidat', function () {
    return view('admin.caidat');
});
Route::get('/admin/hotro', function () {
    return view('admin.hotro');
});
Route::get('/admin/khuyenmai', function () {
    return view('admin.khuyenmai');
});
Route::get('/admin/orders', function () {
    return view('admin.orders');
});
Route::get('/admin/products', function () {
    return view('admin.products');
});
Route::get('/admin/quanlyhinhanh', function () {
    return view('admin.quanlyhinhanh');
});
Route::get('/admin/quanlykhachhang', function () {
    return view('admin.quanlykhachhang');
});
Route::get('/admin/quanlykho', function () {
    return view('admin.quanlykho');
});
Route::get('/admin/quanlynguoidung', function () {
    return view('admin.quanlynguoidung');
});
Route::get('/admin/quanlytintuc', function () {
    return view('admin.quanlytintuc');
});
Route::get('/admin/news', [NewAdminController::class, 'index'])->name('admin.new.index');
Route::post('/api/upload-image', [NewAdminController::class, 'ImageUpload'])->name('upload.image');
Route::post('/admin/news/add', [NewAdminController::class, 'store'])->name('admin.new.add');
Route::get('/admin/news/edit/{id}', [NewAdminController::class, 'edit'])->name('admin.new.edit');
Route::post('/admin/news/update/{id}', [NewAdminController::class, 'update'])->name('admin.new.update');
Route::delete('/admin/news/delete/{id}', [NewAdminController::class, 'destroy'])->name('admin.new.delete');





