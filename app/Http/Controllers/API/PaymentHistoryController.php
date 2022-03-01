<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PaymentHistoryController extends Controller
{
	public function getPaymentHistory()
	{
		$user = auth('api')->user();
		$paymentHistories = $user->paymentHistories()->selectRaw('id,payment_date,money')
			->orderBy('payment_date', 'desc')
			->withCasts(['payment_date' => 'datetime:d-m-Y H:i'])
			->take(5)
			->get();
		$data = [
			'received_money' => $user->given_money,
			'missing_money' => $user->missing_money,
			'history' => $paymentHistories
		];
		return $this->sendResponse($data, 'Lấy dữ liệu thành công');
	}

	public function getDetailPaymentHistory()
	{
		$paymentHistories = auth('api')->user()->paymentHistories()->selectRaw('id,payment_date,money')
			->orderBy('payment_date', 'desc')
			->withCasts(['payment_date' => 'datetime:d-m-Y H:i'])
			->get();


		return $this->sendResponse($paymentHistories, 'Lấy dữ liệu thành công');

	}
}
