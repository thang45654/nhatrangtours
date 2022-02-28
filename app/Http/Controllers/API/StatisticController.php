<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class StatisticController extends Controller
{
	public function getStatistic()
	{
		$user = auth('api')->user();

		$revenue = 0;
		$orders = $user->orders()->with(['tour' => function($query) {
			$query->selectRaw('id,name');
		}])->orderBy('created_at', 'desc')->withCasts(['created_at' => 'datetime:d-m-Y H:i'])->get()->transform(function($order) use (&$revenue) {
			$revenue += $order->total_price;
			$order->created_at = Carbon::parse($order->created_at)->format('d-m-Y H:i');
			$order->name = @$order->tour->name ?? '';
			return $order;
		});

		$data = [
			'day_revenue' => $revenue,
			'history' => $orders,
			'received_money' => $user->given_money,
			'missing_money' => $user->missing_money,
		];

		return $this->sendResponse($data, 'Lấy dữ liệu thành công');
	}

	public function getIntroductionHistory()
	{
		$user = auth('api')->user();
		$orders = $user->orders()->with(['tour' => function($query) {
			$query->selectRaw('id,name');
		}])->orderBy('created_at', 'desc')->whereDate('created_at', '>=', now()->subMonth()->format('Y-m-d'))->withCasts(['created_at' => 'datetime:d-m-Y H:i'])->get()->transform(function($order) use (&$revenue) {
			$revenue += $order->total_price;
			$order->created_at = Carbon::parse($order->created_at)->format('d-m-Y H:i');
			$order->name = @$order->tour->name ?? '';
			return $order;
		});
		return $this->sendResponse($orders, 'Lấy danh sách lịch sử giới thiệu');
	}
}
