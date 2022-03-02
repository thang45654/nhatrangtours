<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\ToursSaleController;
Route::resource('tours', TourController::class);

Route::get('edit-tours', [TourController::class, 'showForm'])->name('tour.edit');

Route::get('delete/{id}', [TourController::class,'delete'])->name('admin.tours.delete');

Route::resource('orders', OrderController::class);

Route::post('create-order', [OrderController::class, 'createOrder']);

Route::get('tours-sale', [\App\Http\Controllers\Admin\OrderController::class, 'getToursSale'])->name('toursale.index');
