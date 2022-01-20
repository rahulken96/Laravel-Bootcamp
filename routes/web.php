<?php

use App\Http\Controllers\UserController;
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

Route::get('/checkout', function () { return view('checkout'); })->name('checkout');
Route::get('/checkout/success', function () { return view('success_checkout'); })->name('selesai_checkout');

Route::get('/dashboard', function () { return view('dashboard'); })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

/* Socialite Routes */
Route::get('/masuk-google', [UserController::class,'google'])->name('masuk_google');
Route::get('/auth/google/callback', [UserController::class,'handleProviderGoogle']);
