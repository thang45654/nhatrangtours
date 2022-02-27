<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::prefix("/v1")->middleware('auth.api')->group(function() {
	Route::get('payment_history', 'PaymentHistoryController@getPaymentHistory');
	Route::get('payment_detail', 'PaymentHistoryController@getDetailPaymentHistory');
	Route::get('statistic', 'StatisticController@getStatistic');
	Route::get('notifications', 'NotificationController@getNotification');
	Route::get('introduction-history', 'StatisticController@getIntroductionHistory');
	Route::post('fcm-token', 'AuthController@saveFcmToken');
	Route::get('test', 'NotificationController@sendNotification');
});

Route::post('/login', 'AuthController@login');

Route::middleware('auth.api')->group(function() {
	Route::get('/user', 'AuthController@getCurrentUser');
	Route::post('/change-password', 'AuthController@changePassword');
});
