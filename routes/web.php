<?php

use App\Http\Controllers\Admin\HomeController;

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Http\Controllers\Admin\PartnerController;

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

Route::get('/', 'HomeController@index');

Route::middleware('auth')->prefix('api')->name('api.')->group(function() {
	Route::get('tours', [ApiController::class, 'getTours']);
	Route::post('check-partner', [ApiController::class, 'checkPartner']);
	Route::post('create-order', [ApiController::class, 'createOrder']);
	Route::get('get-order-detail', [ApiController::class, 'getOrderDetail']);
	Route::post('remove-order', [ApiController::class, 'removeOrder']);

});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');
require __DIR__.'/auth.php';

require __DIR__.'/admin.php';



//Route::get('/admin/partners',[PartnerController::class,'index']);
//Route::get('/admin/partners/s',[PartnerController::class,'show']);

