<?php

use App\Http\Controllers\customersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;

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


Route::prefix('customers')->group(function () {
    Route::get('index', [customersController::class, 'index'])->name('customers.index'); 

    Route::get('create', [customersController::class, 'create'])->name('customers.create');

    Route::get('edit/{id}', [customersController::class, 'edit'])->name('customers.edit');

    Route::delete('destroy/{id}', [customersController::class, 'destroy'])->name('customers.destroy');

    Route::post('store', [customersController::class, 'store'])->name('customers.store');

    Route::put('update/{id}', [customersController::class, 'update'])->name('customers.update');
});

Route::resouce('photo', PhotoController::class);