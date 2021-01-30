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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/vendor', function(){
    return view('vendor/vendor');
})->name('vendor');

Route::get('/addvendor',function(){
    return view('vendor/addVendor');
})->name('addvendor');

Route::get('/material', function(){
    return view('material/material');
})->name('material');

Route::get('/addmaterial',function(){
    return view('material/addMaterial');
})->name('addmaterial');

Route::get('/order', function(){
    return view('order/order');
})->name('order');

Route::get('/addorder',function(){
    return view('order/newOrder');
})->name('addorder');

Route::get('/transaction', function(){
    return view('transaction/transaction');
})->name('transaction');