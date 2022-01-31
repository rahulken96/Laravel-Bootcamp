<?php

use App\Http\Controllers\Admin\CheckoutController as AdminCheckout;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\CheckoutController;
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

Route::middleware(['auth'])->group(function () {

    // Chekcout
    Route::get('checkout/sukses', [CheckoutController::class, 'sukses'])->name('checkout_sukses')->middleware('user.role:user');
    Route::get('checkout/{camp:slug}', [CheckoutController::class, 'create'])->name('checkout')->middleware('user.role:user');
    Route::post('checkout/{camp}', [CheckoutController::class, 'store'])->name('selesai_checkout')->middleware('user.role:user');

    // Dashboard
    Route::get('/dashboard', [HomeController::class, 'dashboard'] )->name('dashboard');
    Route::get('/dashboard/checkout/tagihan/{checkout}', [CheckoutController::class, 'tagihan'] )->name('tagihan_checkout');

    // User Dashboard
    Route::prefix('user/dashboard')->namespace('User')->name('user.')->middleware('user.role:user')->group(function(){
        Route::get('/', [UserDashboard::class,'index'])->name('dashboard');
    });

    // Admin Dashboard
    Route::prefix('admin/dashboard')->namespace('Admin')->name('admin.')->middleware('user.role:admin')->group(function(){
        Route::get('/', [AdminDashboard::class,'index'])->name('dashboard');

        // Admin Checkout
        Route::post('checkout/{checkout}', [AdminCheckout::class,'update'])->name('admin_checkout');

    });

});


/* Socialite Routes */
Route::get('/masuk-google', [UserController::class,'google'])->name('masuk_google');
Route::get('/auth/google/callback', [UserController::class,'handleProviderGoogle']);

require __DIR__.'/auth.php';
