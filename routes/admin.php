<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PartnersController;
use App\Http\Controllers\Admin\TourController;
//Route::resource('/partners', PartnersController::class);
//Route::get('/partners-edit',[PartnersController::class, 'editPart'])->name('partners.edit');
//Route::post('/edit-partner',[PartnersController::class, 'updatePart'])->name('partners.update');
//Route::get('/partners/delete/{id}',[PartnersController::class, 'destroy'])->name('partners.delete');

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

Route::get('delete/{id}', [TourController::class,'delete'])->name('tours.delete');

Route::resource('orders', OrderController::class);
Route::post('create-order', [OrderController::class, 'createOrder']);

Route::resource('sale', OrderController::class);