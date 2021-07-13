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
    return view('home');
});

Auth::routes();

Route::middleware('auth')->group( function() {
    
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//vendors
Route::get('/vendor',  [App\Http\Controllers\VendorController::class, 'index'])->name('vendor');

Route::post('/vendor/store', [App\Http\Controllers\VendorController::class, 'store'])->name('vendor.store');

Route::get('/vendor/edit/{vendor_id}', [App\Http\Controllers\VendorController::class, 'edit'])->name('vendor.edit');

Route::post('/vendor/update/{vendor_id}', [App\Http\Controllers\VendorController::class, 'update'])->name('vendor.update');

Route::get('/vendor/delete/{vendor_id}', [App\Http\Controllers\VendorController::class, 'delete'])->name('vendor.delete');

//materials
Route::get('/material', [App\Http\Controllers\MaterialController::class, 'index'])->name('material');

Route::post('/material/store', [App\Http\Controllers\MaterialController::class, 'store'])->name('material.store');

Route::get('/material/edit/{material_id}', [App\Http\Controllers\MaterialController::class, 'edit'])->name('material.edit');

Route::post('/material/update/{material_id}', [App\Http\Controllers\MaterialController::class, 'update'])->name('material.update');

Route::get('/material/delete/{material_id}', [App\Http\Controllers\MaterialController::class, 'delete'])->name('material.delete');

//orders
Route::get('/order', [App\Http\Controllers\OrderController::class, 'index'])->name('order');

Route::post('/order/store', [App\Http\Controllers\OrderController::class, 'store'])->name('order.store');

Route::get('/receivedorder/{order_id}', [App\Http\Controllers\ReceivesController::class, 'received'])->name('order.received');

Route::post('/receivedorder/{order_id}', [App\Http\Controllers\OrderController::class, 'addReceived'])->name('order.addreceived');

Route::get('/dailyUpdate/{order_id}', [App\Http\Controllers\DailyController::class, 'index'])->name('order.daily');

Route::post('/dailyUpdate/{order_id}', [App\Http\Controllers\OrderController::class, 'dailyUpdate'])->name('order.updateDaily');

Route::get('/dispatchorder/{order_id}', [App\Http\Controllers\DispatchesController::class, 'dispatched'])->name('order.dispatched');

Route::post('/dispatchorder/{order_id}', [App\Http\Controllers\OrderController::class, 'addDispatched'])->name('order.addDispatched');

Route::get('/deleteorder/{order_id}', [App\Http\Controllers\OrderController::class, 'deleteOrder'])->name('order.delete');

//mrns
Route::get('/mrn', [App\Http\Controllers\MrnController::class, 'index'])->name('mrn');

Route::get('/mrnYarn', [App\Http\Controllers\MrnController::class, 'addMrnYarn'])->name('mrn.yarn');

Route::get('/mrnOthers', function () {
    return view('mrns/mrnOthers');
})->name('mrn.others');

Route::post('/mrnOthers/store', [App\Http\Controllers\MrnController::class, 'store'])->name('mrnothers.store');

Route::post('/mrnYarn/store', [App\Http\Controllers\OrderController::class, 'store'])->name('mrnyarn.store');

//reports

Route::post('/inwardReport', [App\Http\Controllers\ReceivesController::class, 'report'])->name('report.inward');

Route::post('/dispatchReport', [App\Http\Controllers\DispatchesController::class, 'report'])->name('report.dispatched');

Route::post('/reconciliationReport' , [App\Http\Controllers\OrderController::class, 'report'])->name('report.reconciliation');
});