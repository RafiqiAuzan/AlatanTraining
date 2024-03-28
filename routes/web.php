<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.landing');
});

Route::get('/public-training', function () {
    return view('pages.alatanacademy.public-training');
});

Route::get('/product-detail', function () {
    return view('pages.alatanacademy.product-detail');
});

Route::get('/aboutus', function () {
    return view('pages.aboutus');
});

Route::get('/login', function () {
    return view('pages.auth.login');
});

Route::get('/register', function () {
    return view('pages.auth.register');
});

Route::get('/dashboard-admin', function () {
    return view('pages.dashboard.admin.hero.index');
});