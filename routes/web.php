<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { return view('welcome'); })->name('menu_utama');
Route::get('/masuk', function () { return view('login'); })->name('masuk');
Route::get('/daftar', function () { return view('register'); })->name('daftar');

Route::get('/checkout', function () { return view('checkout'); })->name('checkout');
Route::get('/checkout/success', function () { return view('success_checkout'); })->name('selesai_checkout');

Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
