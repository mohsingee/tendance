<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CmsController;
use App\Http\Controllers\GoogleLoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ModuleSettingController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\WishListController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

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

Route::post('submit-registration-form', [App\Http\Controllers\FrontendController::class, 'registration_submission'])->name('submit.registration');
Route::post('submit-contact-form', [App\Http\Controllers\FrontendController::class, 'contact_submission'])->name('submit.contact');

Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('/');
Route::get('/about-us', [App\Http\Controllers\FrontendController::class, 'about'])->name('about-us');
Route::get('/brands', [App\Http\Controllers\FrontendController::class, 'brands'])->name('brands');
Route::get('/cart', [App\Http\Controllers\FrontendController::class, 'cart'])->name('cart');
Route::get('/checkout', [App\Http\Controllers\FrontendController::class, 'checkout'])->name('checkout');
Route::get('/shop', [App\Http\Controllers\FrontendController::class, 'shop'])->name('shop');
Route::get('/contact-us', [App\Http\Controllers\FrontendController::class, 'contactUs'])->name('contact-us');
Route::get('/join-us', [App\Http\Controllers\FrontendController::class, 'joinUs'])->name('join-us');
Route::get('/offers', [App\Http\Controllers\FrontendController::class, 'offers'])->name('offers');
Route::get('/login-register', [App\Http\Controllers\FrontendController::class, 'loginRegister'])->name('login-register');
Route::get('/stores', [App\Http\Controllers\FrontendController::class, 'stores'])->name('stores');
Route::get('/clubtendance', [App\Http\Controllers\FrontendController::class, 'clubtendance'])->name('clubtendance');
Route::get('/indexopticien', [App\Http\Controllers\FrontendController::class, 'indexopticien'])->name('indexopticien');
Route::get('/shop-detail/{id}', [App\Http\Controllers\FrontendController::class, 'shopDetail'])->name('shop-detail');
//Route::redirect('/', 'login');

Route::post('/user-registration', [App\Http\Controllers\FrontendController::class, 'registration_submission'])->name('user-registration');
Route::post('/contact-submission', [App\Http\Controllers\FrontendController::class, 'contactSubmission'])->name('contact-submission');

Route::post('add-wishlist', [ProductController::class,'addWishlist']);
Route::get('show-wishlist', [ProductController::class,'showWishlist']);
Route::post('order-submit', [ProductController::class,'orderSubmit']);
Route::get('try-image/{id}', [ProductController::class,'tryImage'])->name('try-image');
Route::delete('remove-wishlist/{id}', [ProductController::class,'removeWishlist']);

Route::get('/admin555-login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Auth::routes();

Route::get('/{slug}', [App\Http\Controllers\CmsController::class, 'preview'])->name('cms.preview');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('admin.profile');
    Route::post('/profile/store', [App\Http\Controllers\HomeController::class, 'storeProfile'])->name('admin.storeProfile');
    Route::get('/change_password', [App\Http\Controllers\HomeController::class, 'change_password'])->name('admin.change_password');
    
    Route::resource('shop', ShopController::class);
    Route::get('shop_delete/{id}', [ShopController::class, 'delete'])->name('shop.delete');
    Route::post('shop/deleteAll', [ShopController::class, 'deleteAll'])->name('shop.delete-all');

    Route::resource('orders', OrderController::class);
    Route::get('order_delete/{id}', [OrderController::class, 'delete'])->name('orders.delete');
    Route::post('orders/deleteAll', [OrderController::class, 'deleteAll'])->name('orders.delete-all');

    Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
    Route::get('/user/create', [App\Http\Controllers\UserController::class, 'create'])->name('user.create');
    Route::post('/user/store', [App\Http\Controllers\UserController::class, 'store'])->name('user.store');
    Route::get('/user/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
    Route::post('/user/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');
    Route::get('/user/destroy/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('user.destroy');
    Route::delete('/user/deleteAllUser', [App\Http\Controllers\UserController::class, 'deleteAllUser'])->name('user.delete-all');
    Route::get('/user/status/{id}/{status}', [App\Http\Controllers\UserController::class, 'status'])->name('user.status');

    Route::get('/registration', [App\Http\Controllers\RegistrationController::class, 'index'])->name('registration.index');
    Route::get('/registration/edit/{id}', [App\Http\Controllers\RegistrationController::class, 'edit'])->name('registration.edit');
    Route::post('/registration/update/{id}', [App\Http\Controllers\RegistrationController::class, 'update'])->name('registration.update');
    Route::get('/registration/destroy/{id}', [App\Http\Controllers\RegistrationController::class, 'destroy'])->name('registration.destroy');
    Route::delete('/registration/deleteAll', [App\Http\Controllers\RegistrationController::class, 'deleteAll'])->name('registration.delete-all');
    Route::get('/registration/status/{id}/{status}', [App\Http\Controllers\RegistrationController::class, 'status'])->name('registration.status');

    Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');
    Route::get('/contact/edit/{id}', [App\Http\Controllers\ContactController::class, 'edit'])->name('contact.edit');
    Route::post('/contact/update/{id}', [App\Http\Controllers\ContactController::class, 'update'])->name('contact.update');
    Route::get('/contact/destroy/{id}', [App\Http\Controllers\ContactController::class, 'destroy'])->name('contact.destroy');
    Route::delete('/contact/deleteAll', [App\Http\Controllers\ContactController::class, 'deleteAll'])->name('contact.delete-all');
    Route::get('/contact/status/{id}/{status}', [App\Http\Controllers\ContactController::class, 'status'])->name('contact.status');


    Route::get('/cms', [App\Http\Controllers\CmsController::class, 'index'])->name('cms.index');
    Route::get('/cms/create', [App\Http\Controllers\CmsController::class, 'create'])->name('cms.create');
    Route::post('/cms/store', [App\Http\Controllers\CmsController::class, 'store'])->name('cms.store');
    Route::get('/cms/edit/{id}', [App\Http\Controllers\CmsController::class, 'edit'])->name('cms.edit');
    Route::post('/cms/update/{id}', [App\Http\Controllers\CmsController::class, 'update'])->name('cms.update');
    Route::get('/cms/destroy/{id}', [App\Http\Controllers\CmsController::class, 'destroy'])->name('cms.destroy');
    Route::delete('/cms/deleteAll', [App\Http\Controllers\CmsController::class, 'deleteAll'])->name('cms.delete-all');


    Route::get('/modulesetting', [App\Http\Controllers\ModuleSettingController::class, 'index'])->name('modulesetting.index');
    Route::get('/modulesetting/create', [App\Http\Controllers\ModuleSettingController::class, 'create'])->name('modulesetting.create');
    Route::post('/modulesetting/store', [App\Http\Controllers\ModuleSettingController::class, 'store'])->name('modulesetting.store');
    Route::get('/modulesetting/edit/{id}', [App\Http\Controllers\ModuleSettingController::class, 'edit'])->name('modulesetting.edit');
    Route::post('/modulesetting/update/{id}', [App\Http\Controllers\ModuleSettingController::class, 'update'])->name('modulesetting.update');
    Route::delete('/modulesetting/destroy', [App\Http\Controllers\ModuleSettingController::class, 'destroy'])->name('modulesetting.destroy');
    Route::get('/modulesetting/editattribute/{id}', [App\Http\Controllers\ModuleSettingController::class, 'editattribute'])->name('modulesetting.editattribute');


    Route::get('/settings', [App\Http\Controllers\SettingController::class, 'index'])->name('setting.index');
    Route::get('/settings/create', [App\Http\Controllers\SettingController::class, 'create'])->name('setting.create');
    Route::post('/settings/store', [App\Http\Controllers\SettingController::class, 'store'])->name('setting.store');
    Route::get('/settings/edit/{id}', [App\Http\Controllers\SettingController::class, 'edit'])->name('setting.edit');
    Route::post('/settings/update/{id}', [App\Http\Controllers\SettingController::class, 'update'])->name('setting.update');
    Route::get('/settings/destroy/{id}', [App\Http\Controllers\SettingController::class, 'destroy'])->name('setting.destroy');


});

Route::get('auth/google', [App\Http\Controllers\GoogleLoginController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [App\Http\Controllers\GoogleLoginController::class, 'handleGoogleCallback']);
Route::get('/modulesetting/getattribute/{user}', [App\Http\Controllers\ModuleSettingController::class, 'getattribute'])->name('modulesetting.getattribute');
// Route::get('/admin/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('admin.profile');
// Route::get('/admin/change_password', [App\Http\Controllers\HomeController::class, 'change_password'])->name('admin.change_password');

// Route::get('/admin/user', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
// Route::get('/admin/user/create', [App\Http\Controllers\UserController::class, 'create'])->name('user.create');
// Route::post('/admin/user/store', [App\Http\Controllers\UserController::class, 'store'])->name('user.store');
// Route::get('/admin/user/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
// Route::post('/admin/user/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');
// Route::get('/admin/user/destroy/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('user.destroy');
// Route::delete('/admin/user/deleteAllUser', [App\Http\Controllers\UserController::class, 'deleteAllUser'])->name('user.delete-all');
// Route::get('/admin/user/status/{id}/{status}', [App\Http\Controllers\UserController::class, 'status'])->name('user.status');

// Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

// Route::get('/admin/cms', [App\Http\Controllers\CmsController::class, 'index'])->name('cms.index');
// Route::get('/admin/cms/create', [App\Http\Controllers\CmsController::class, 'create'])->name('cms.create');
// Route::post('/admin/cms/store', [App\Http\Controllers\CmsController::class, 'store'])->name('cms.store');
// Route::get('/admin/cms/edit/{id}', [App\Http\Controllers\CmsController::class, 'edit'])->name('cms.edit');
// Route::post('/admin/cms/update/{id}', [App\Http\Controllers\CmsController::class, 'update'])->name('cms.update');
// Route::get('/admin/cms/destroy/{id}', [App\Http\Controllers\CmsController::class, 'destroy'])->name('cms.destroy');
// Route::delete('/admin/cms/deleteAll', [App\Http\Controllers\CmsController::class, 'deleteAll'])->name('cms.delete-all');
// Route::get('/admin/cms/{slug}', [App\Http\Controllers\CmsController::class, 'preview'])->name('cms.preview');

// Route::get('/modulesetting', [App\Http\Controllers\ModuleSettingController::class, 'index'])->name('modulesetting.index');
// Route::get('/modulesetting/create', [App\Http\Controllers\ModuleSettingController::class, 'create'])->name('modulesetting.create');
// Route::post('/modulesetting/store', [App\Http\Controllers\ModuleSettingController::class, 'store'])->name('modulesetting.store');
// Route::get('/modulesetting/edit', [App\Http\Controllers\ModuleSettingController::class, 'edit'])->name('modulesetting.edit');
// Route::post('/modulesetting/update/{id}', [App\Http\Controllers\ModuleSettingController::class, 'update'])->name('modulesetting.update');
// Route::get('/modulesetting/destroy/{id}', [App\Http\Controllers\ModuleSettingController::class, 'destroy'])->name('modulesetting.destroy');

// Route::get('/settings', [App\Http\Controllers\SettingController::class, 'index'])->name('setting.index');
// Route::get('/settings/create', [App\Http\Controllers\SettingController::class, 'create'])->name('setting.create');
// Route::post('/settings/store', [App\Http\Controllers\SettingController::class, 'store'])->name('setting.store');
// Route::get('/settings/edit/{id}', [App\Http\Controllers\SettingController::class, 'edit'])->name('setting.edit');
// Route::post('/settings/update/{id}', [App\Http\Controllers\SettingController::class, 'update'])->name('setting.update');
// Route::get('/settings/destroy/{id}', [App\Http\Controllers\SettingController::class, 'destroy'])->name('setting.destroy');

// Route::get('auth/google', [App\Http\Controllers\GoogleLoginController::class, 'redirectToGoogle'])->name('google.login');
// Route::get('auth/google/callback', [App\Http\Controllers\GoogleLoginController::class, 'handleGoogleCallback']);
