<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/premium', [App\Http\Controllers\HomeController::class, 'premium'])->name('premium');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/sellers', [App\Http\Controllers\HomeController::class, 'sellers'])->name('sellers');
Route::get('/bidders', [App\Http\Controllers\HomeController::class, 'bidders'])->name('bidders');
Route::get('/sms', [App\Http\Controllers\HomeController::class, 'sms'])->name('sms');
Route::get('/products', [App\Http\Controllers\HomeController::class, 'products'])->name('products');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/landingpage', [App\Http\Controllers\HomeController::class, 'landingpage'])->name('landingpage');
Route::get('/{any}', "App\Http\Controllers\HomeController@index")->where('any', '.*');