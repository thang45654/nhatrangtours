<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PartnersController;
use App\Http\Controllers\Admin\TourController;

Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::group(['prefix'=>'partners'],function(){
    Route::get('',[PartnersController::class,'index'])->name('partners.index');

    Route::get('create',[PartnersController::class,'create'])->name('partners.create');
    Route::post('create',[PartnersController::class,'store'])->name('partners.create');

    Route::get('update',[PartnersController::class,'edit'])->name('partners.edit');
    Route::post('update/{id}',[PartnersController::class,'update'])->name('partners.update');

    Route::get('show/{id}',[PartnersController::class,'show'])->name('partners.show');

    Route::get('delete/{id}',[PartnersController::class,'delete'])->name('partners.delete');
});

Route::group(['prefix'=>'tours'], function(){

    Route::get('',[TourController::class,'index'])->name('tour.index');
    //them
    Route::post('create',[TourController::class,'store'])->name('tour.store');
    //edit
    Route::get('edit-tours', [TourController::class, 'showForm'])->name('tour.edit');
    //call lấy dữ liệu cho edit
    Route::get('get-tour', [TourController::class, 'getTour'])->name('get.tour');
    // update post
    Route::post('update-tour/{id}', [TourController::class, 'update'])->name('update.tour');
    //show
    Route::get('show/{id}',[TourController::class,'show'])->name('tour.show');
    Route::get('delete/{id}', [TourController::class,'destroy'])->name('tour.delete');


});

Route::resource('orders', OrderController::class);
Route::post('create-order', [OrderController::class, 'createOrder']);
Route::get('/statistic', [HomeController::class, 'index'])->name('statistic');

Route::get('/ticket-chart', [HomeController::class, 'getTicketChart']);
Route::get('/revenue-chart', [HomeController::class, 'getRevenueChart']);
Route::get('/activity-chart', [HomeController::class, 'getActivityChart']);
Route::get('/finance-chart', [HomeController::class, 'getFinanceChart']);
Route::get('/bucket-chart', [HomeController::class, 'getBucketChart']);
