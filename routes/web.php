<?php

use App\Http\Controllers\Admin\PartnersController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

require __DIR__.'/admin.php';
require __DIR__.'/sale.php';
require __DIR__.'/auth.php';

//Route::get('/admin/partners',[PartnerController::class,'index']);
//Route::get('/admin/partners/s',[PartnerController::class,'show']);
