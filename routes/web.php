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

Route::get('/publictraining', function () {
    return view('pages.alatanacademy.publictraining');
});

Route::get('/productdetail', function () {
    return view('pages.alatanacademy.productdetail');
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