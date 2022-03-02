<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\StatisticController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PartnersController;

Route::group(['prefix'=>'partners'],function(){
    Route::get('',[PartnersController::class,'index'])->name('partners.index');

    Route::get('create',[PartnersController::class,'create'])->name('partners.create');
    Route::post('create',[PartnersController::class,'store'])->name('partners.create');

    Route::get('update',[PartnersController::class,'edit'])->name('partners.edit');
    Route::post('update/{id}',[PartnersController::class,'update'])->name('partners.update');

    Route::get('show/{id}',[PartnersController::class,'show'])->name('partners.show');

    Route::get('delete/{id}',[PartnersController::class,'delete'])->name('partners.delete');
});
Route::resource('tours', TourController::class);

Route::get('edit-tours', [TourController::class, 'showForm'])->name('tour.edit');
Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');

Route::get('delete/{id}', [TourController::class,'delete'])->name('tours.delete');

Route::resource('orders', OrderController::class);
Route::post('create-order', [OrderController::class, 'createOrder']);
Route::get('/statistic', [StatisticController::class, 'index'])->name('statistic');

// ------------- Chart Data --------------
Route::get('/ticket-chart', [HomeController::class, 'getTicketChart']);
Route::get('/revenue-chart', [HomeController::class, 'getRevenueChart']);
Route::get('/activity-chart', [HomeController::class, 'getActivityChart']);
Route::get('/finance-chart', [HomeController::class, 'getFinanceChart']);
Route::get('/bucket-chart', [HomeController::class, 'getBucketChart']);
Route::get('/revenue-per-month', [HomeController::class, 'getBucketChart']);
// ---------------------------------------

