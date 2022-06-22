<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\MobileLogRegController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\ContactUsMailController;
use App\Http\Controllers\Frontend\FavouritesController;
use App\Http\Controllers\Frontend\ProductsController;
use App\Http\Controllers\Frontend\ProductsDetailsController;
use App\Http\Controllers\Frontend\SearchEngineController;
use App\Http\Controllers\Frontend\ShopcartController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
//Frontend routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/password-email', [ResetPasswordController::class, 'index'])->name('password.email');
Route::get('/password-reset', [ResetPasswordController::class, 'resetPass'])->name('password.reset');
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/about-us', [HomeController::class, 'about'])->name('about-us');
Route::get('/products/details/', [ProductsDetailsController::class, 'index'])->name('productdetails');
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('policy');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/dashboard', [HomeController::class, 'showDashboard'])->name('user.dashboard');
Route::get('/shop-cart', [ShopcartController::class, 'index'])->name('shopcart');
Route::get('/mobile', [MobileLogRegController::class, 'index'])->name('mobile');
Route::get('/products/details/{id}', [ProductsDetailsController::class, 'details'])->name('productdetailsforId');
Route::get('/search', [SearchEngineController::class, 'searchProducts'])->name('search');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/contact-us', [ContactUsMailController::class, 'ContactUsForm'])->name('ContactUsForm');
Route::get('/shop-cart', [ShopcartController::class, 'index'])->name('shopcart');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::get('/place-order', [CheckoutController::class, 'placeOrder'])->name('place.order');
Route::get('/mobile', [MobileLogRegController::class, 'index'])->name('mobile');
Route::get('/favourites', [FavouritesController::class, 'index'])->name('favourites')->middleware('auth');



