<?php

use App\Http\Controllers\AdminContactUsController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminMenuController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\AdminPlanController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\AdminSchoolController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\OrderController;
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

// Example Routes
Route::view('/', 'landing')->name('landing');

Auth::routes();
Route::get('dietary-needs',[FrontController::class,'dietaryNeeds'])->name('dietary-needs');

Route::get('faqs',[FrontController::class,'faqs'])->name('faqs');
Route::get('order',[OrderController::class, 'index'])->name('order.index');
Route::get('thank-you',[OrderController::class,'thankyou'])->name('order.thankyou');
Route::post('order',[OrderController::class, 'store'])->name('order.store');

Route::post('contact-us',[ContactUsController::class,'store'])->name('contact-us.store');

Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {

    Route::get('',[AdminDashboardController::class, 'index'])->name('dashboard.index');
    Route::resource("profile", AdminProfileController::class)->only(["index", "update"]);

    Route::resource('schools',AdminSchoolController::class);

    Route::resource('menu',AdminMenuController::class);

    Route::resource('users',AdminUserController::class);

    Route::resource('contact-us',AdminContactUsController::class);


    Route::resource('plans',AdminPlanController::class);

    Route::resource('orders',AdminOrderController::class);
});
