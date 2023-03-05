<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/signin', function () {
//     echo "dfdf";
// });


Route::get('/',[FrontController::class,'homepage'])->name('front.homepage');
Route::get('/detail',[FrontController::class,'detail'])->name('front.detail');
Route::match(['get','post'],'/signup/{slug}', [FrontController::class,'signup'])->name('front.signup');

Route::match(['get','post'],'/signin/{slug}', [FrontController::class,'signin'])->name('front.signin');
Route::match(['get','post'],'/payment', [FrontController::class,'payment'])->name('front.payment');
Route::match(['get','post'],'/admin/login', [AdminController::class,'admingSignin'])->name('admin.signin');

Auth::routes();




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
