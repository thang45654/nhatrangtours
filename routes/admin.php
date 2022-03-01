<?php

use App\Http\Controllers\Admin\PartnersController;
use Illuminate\Support\Facades\Route;

//Route::resource('/partners', PartnersController::class);
//Route::get('/partners-edit',[PartnersController::class, 'editPart'])->name('admin.partners.edit');
//Route::post('/edit-partner',[PartnersController::class, 'updatePart'])->name('admin.partners.update');
//Route::get('/partners/delete/{id}',[PartnersController::class, 'destroy'])->name('admin.partners.delete');

Route::group(['prefix'=>'partners'],function(){
    Route::get('',[PartnersController::class,'index'])->name('admin.partners.index');

    Route::get('create',[PartnersController::class,'create'])->name('admin.users.create');
    Route::post('create',[PartnersController::class,'store'])->name('admin.partners.create');

    Route::get('update',[PartnersController::class,'edit'])->name('admin.partners.edit');
    Route::post('update/{id}',[PartnersController::class,'update'])->name('partners.update');

    Route::get('show/{id}',[PartnersController::class,'show'])->name('admin.partners.show');

    Route::get('delete/{id}',[PartnersController::class,'delete'])->name('admin.partners.delete');
});
Route::resource('tours', TourController::class);

Route::get('edit-tours', [TourController::class, 'showForm'])->name('tour.edit');

Route::get('delete/{id}', [TourController::class,'delete'])->name('admin.tours.delete');

Route::resource('orders', OrderController::class);
Route::post('create-order', [OrderController::class, 'createOrder']);
