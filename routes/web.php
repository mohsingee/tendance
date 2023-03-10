<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('/about-us', [HomeController::class, 'about'])->name('about-us');
Route::get('/brands', [HomeController::class, 'brands'])->name('brands');
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact-us');
Route::get('/join-us', [HomeController::class, 'joinUs'])->name('join-us');
Route::get('/offers', [HomeController::class, 'offers'])->name('offers');
Route::get('/login-register', [HomeController::class, 'loginRegister'])->name('login-register');
Route::get('/stores', [HomeController::class, 'stores'])->name('stores');
Route::get('/clubtendance', [HomeController::class, 'clubtendance'])->name('clubtendance');
Route::get('/indexopticien', [HomeController::class, 'indexopticien'])->name('indexopticien');

//submission routes
Route::post('/user-registration', [HomeController::class, 'userRegister'])->name('user-registration');
Route::post('/contact-submission', [HomeController::class, 'contactSubmission'])->name('contact-submission');