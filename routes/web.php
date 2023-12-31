<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SaveForLaterController;
use App\Http\Controllers\ShopController;
use Gloudemans\Shoppingcart\Facades\Cart;
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

// Landing-Page
Route::get('/', [LandingPageController::class, 'index'])->name('landing-page');

// Shop section
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/shop/{product}', [ShopController::class, 'show'])->name('shop.show');

// Cart section
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
Route::patch('/cart/{product}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/{product}', [CartController::class, 'destroy'])->name('cart.destroy');
Route::post('/cart/switchToSaveForLater/{product}', [CartController::class, 'switchToSaveForLater'])->name('cart.switchToSaveForLater');

// Save for Later Section
Route::delete('/saveForLater/{product}', [SaveForLaterController::class, 'destroy'])->name('saveForLater.destroy');
Route::post('/saveForLater/switchToCart/{product}', [SaveForLaterController::class, 'switchToCart'])->name('saveForLater.switchToCart');

// Checkout
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/checkoutStore', [CheckoutController::class, 'store'])->name('checkout.store');

Route::get('/empty', function () {
    Cart::destroy();
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
