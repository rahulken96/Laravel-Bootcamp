<?php

use App\Http\Controllers\Admin\CheckoutController as AdminCheckout;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\CheckoutController as UserCheckout;
use App\Http\Controllers\User\DashboardController as UserDashboard;
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

/* Socialite Routes (Google)*/
Route::get('masuk-google', [UserController::class,'google'])->name('masuk_google');
Route::get('auth/google/callback', [UserController::class,'handleProviderGoogle']);

/* Midtrans Routes */
Route::get('payment/success', [UserCheckout::class, 'midtransCallback' ]); //Get gunanya untuk ketika akan bayar melalui e-wallet
Route::post('payment/success', [UserChecksdout::class, 'midtransCallback' ]); //Post gunanya untuk ketika akan bayar melalui minimarket atau TF bank via ATM

/* Auth Middleware Routes */
Route::middleware(['auth'])->group(function () {
    // Chekcout
    Route::get('checkout/sukses', [UserCheckout::class, 'sukses'])->name('checkout_sukses')->middleware('user.role:user');
    Route::get('checkout/{camp:slug}', [UserCheckout::class, 'create'])->name('checkout')->middleware('user.role:user');
    Route::post('checkout/{camp}', [UserCheckout::class, 'store'])->name('selesai_checkout')->middleware('user.role:user');

    // Dashboard
    Route::get('dashboard', [HomeController::class, 'dashboard'] )->name('dashboard');
    Route::get('dashboard/checkout/tagihan/{checkout}', [UserCheckout::class, 'tagihan'] )->name('tagihan_checkout');

    /* User Dashboard Routes */
    Route::prefix('user/dashboard')->namespace('User')->name('user.')->middleware('user.role:user')->group(function(){
        Route::get('/', [UserDashboard::class,'index'])->name('dashboard');
    });

    /* Admin Dashboard Routes */
    Route::prefix('admin/dashboard')->namespace('Admin')->name('admin.')->middleware('user.role:admin')->group(function(){
        Route::get('/', [AdminDashboard::class,'index'])->name('dashboard');

        // Admin Checkout
        Route::post('checkout/{checkout}', [AdminCheckout::class,'update'])->name('admin_checkout');
    });
});

require __DIR__.'/auth.php';
