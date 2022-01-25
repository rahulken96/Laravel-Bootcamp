<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\CheckoutController;
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

Route::middleware(['auth'])->group(function () {

    //Checkout Route
    Route::get('checkout/sukses', [CheckoutController::class, 'sukses'])->name('checkout_sukses');
    Route::get('checkout/{camp:slug}', [CheckoutController::class, 'create'])->name('checkout');
    Route::post('checkout/{camp}', [CheckoutController::class, 'store'])->name('selesai_checkout');

    //User Dashboard Route
    Route::get('/dashboard', [HomeController::class, 'dashboard'] )->name('dashboard');

});


/* Socialite Routes */
Route::get('/masuk-google', [UserController::class,'google'])->name('masuk_google');
Route::get('/auth/google/callback', [UserController::class,'handleProviderGoogle']);

require __DIR__.'/auth.php';
