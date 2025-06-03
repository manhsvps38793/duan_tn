<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('about', function () {
    return view('about');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('cart', function () {
    return view('cart');
});
Route::get('login', function () {
    return view('login');
});
Route::get('register', function () {
    return view('register');
});
Route::get('detail', function () {
    return view('detail');
});
Route::get('infouser', function () {
    return view('info_user');
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
Route::get('newdetail', function () {
    return view('new_detail');
});
