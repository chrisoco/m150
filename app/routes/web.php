<?php

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

Route::get ('/',                     [App\Http\Controllers\ShopController::class, 'index']          )->name('index');
Route::post('/addItemToCart',        [App\Http\Controllers\ShopController::class, 'addItemToCart']  )->name('addItemToCart');
Route::get ('/delItemFromCart/{id}', [App\Http\Controllers\ShopController::class, 'delItemFromCart'])->name('delItemFromCart');

Auth::routes();

Route::group(['middleware' => 'auth'], function() {

    Route::get('/checkout', [App\Http\Controllers\ShopController::class, 'checkout'])->name('checkout');
    Route::get('/buy', [App\Http\Controllers\ShopController::class, 'buy'])->name('buy');

});
