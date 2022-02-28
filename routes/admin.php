<?php

use Illuminate\Support\Facades\Route;

Route::resource('tours', TourController::class);


Route::get('edit-tours', [\App\Http\Controllers\Admin\TourController::class, 'showForm'])
    ->name('tour.edit');

Route::get('delete/{id}', '\App\Http\Controllers\Admin\TourController@delete')->name('admin.tours.delete');

Route::resource('orders', OrderController::class);
