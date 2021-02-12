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

Route::get('/vendor',  [App\Http\Controllers\VendorController::class, 'index'])->name('vendor');

Route::get('/addvendor',function(){
    return view('vendor/addVendor');
})->name('addvendor');

Route::post('/vendor/store', [App\Http\Controllers\VendorController::class, 'store'])->name('vendor.store');

Route::get('/vendor/edit/{vendor_id}', [App\Http\Controllers\VendorController::class, 'edit'])->name('vendor.edit');

Route::post('/vendor/update/{vendor_id}', [App\Http\Controllers\VendorController::class, 'update'])->name('vendor.update');

Route::get('/material', [App\Http\Controllers\MaterialController::class, 'index'])->name('material');

Route::get('/addmaterial',function(){
    return view('material/addMaterial');
})->name('addmaterial');

Route::post('/material/store', [App\Http\Controllers\MaterialController::class, 'store'])->name('material.store');

Route::get('/material/edit/{material_id}', [App\Http\Controllers\MaterialController::class, 'edit'])->name('material.edit');

Route::post('/material/update/{material_id}', [App\Http\Controllers\MaterialController::class, 'update'])->name('material.update');

Route::get('/order', [App\Http\Controllers\OrderController::class, 'index'])->name('order');

Route::get('/addorder', [App\Http\Controllers\OrderController::class, 'addOrder'])->name('addorder');

Route::post('/order/store', [App\Http\Controllers\OrderController::class, 'store'])->name('order.store');

Route::get('/transaction', function(){
    return view('transaction/transaction');
})->name('transaction');