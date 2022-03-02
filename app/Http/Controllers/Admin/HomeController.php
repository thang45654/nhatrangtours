<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Partner;
use App\Models\Tour;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
	private $orders = null;

	public function __construct()
	{
		$this->orders = Order::where('created_at', '>=', now()->subDays(6)->format('Y-m-d H:i:s'))
			->orderBy('created_at')->get();
	}

	public function index()
	{
		$data = [
			'total_price_week' => $this->orders->sum('total_price'),
			'total_ticket_week' => $this->orders->sum('quatity'),
			'orders' => $this->orders,
			'revenue_month' =>@DB::table('orders')->whereDate('created_at', '>=', now()->startOfMonth()->format('Y-m-d'))->where('created_at', '<=', now()->endOfMonth()->format('Y-m-d'))->selectRaw('SUM(total_price) as total_price')->first()->total_price,
			'total_partners' => Partner::get()->count(),
			'total_tours' => @DB::select(DB::raw('SELECT COUNT(*) as total_tours FROM (SELECT DISTINCT time_start, tour_id FROM  orders) as dt'))[0]->total_tours ?? 0

		];
		return view('pages.admin.dashboard')->with($data);
	}

	public function getTicketChart()
	{
		$chartOrders = $this->orders->map(function ($order) {
			$order->time_created = Carbon::parse($order->created_at)->format('l');
			return $order;
		})
			->groupBy('time_created')->transform(function ($order) {
				return $order->sum('quatity');
			});

		return $this->sendResponse($chartOrders, 'Lấy dữ liệu biểu đồ thành công');
	}

	public function getRevenueChart()
	{
		$chartOrders = $this->orders->map(function ($order) {
			$order->time_created = Carbon::parse($order->created_at)->format('l');
			return $order;
		})
			->groupBy('time_created')->transform(function ($order) {
				return $order->sum('total_price');
			});

		return $this->sendResponse($chartOrders, 'Lấy dữ liệu biểu đồ thành công');
	}

	public function getActivityChart()
	{
		$orders = Order::where('created_at', '>', now()->subMonth()->format('Y-m-d H:i:s'))->get();

		$orderIntroduction = $orders->whereNotNull('partner_id');

		$chartData = [
			'total_ticket' => $orders->sum('quatity'),
			'data_chart' => [
				'Cộng tác viên' => $orderIntroduction->count(),
				'Sale' => $orders->count() - $orderIntroduction->count()
			],
			'percent_ticket' => round($orderIntroduction->sum('quatity') * 100 / $orders->sum('quatity'), 1)
		];

		return $this->sendResponse($chartData, 'Lấy dữ liệu biểu đồ thành công');
	}

	public function getFinanceChart()
	{
		$months = [
			'tháng 1' => 0,
			'tháng 2' => 0,
			'tháng 3' => 0,
			'tháng 4' => 0,
			'tháng 5' => 0,
			'tháng 6' => 0,
			'tháng 7' => 0,
			'tháng 8' => 0,
			'tháng 9' => 0,
			'tháng 10' => 0,
			'tháng 11' => 0,
			'tháng 12' => 0
		];
		$orders = Order::where('created_at', '>', now()->subYear()->format('Y-m-d H:i:s'))->get();
		Carbon::setLocale('vi');
		$chartOrders = $orders->map(function ($order) {
			$order->time_created = Carbon::parse($order->created_at)->isoFormat('MMMM');
			return $order;
		})
			->groupBy('time_created')->transform(function ($order) {
				return [$order->sum('total_price'), $order->sum('discount_money')];
			})->toArray();

		$chartOrders = array_values(array_merge($months, $chartOrders));

		$chartData = [
			'axis_label' => $months,
			'data_chart' => $chartOrders,
		];

		return $this->sendResponse($chartData, 'Lấy dữ liệu biểu đồ thành công');
	}

	public function getBucketChart()
	{
		$years = [];
		for($i = 4; $i>-1; $i--) {
			$years[now()->subYears($i)->format('Y')] = 0;
		}
		$orders = Order::where('created_at', '>', now()->subYears(4)->format('Y-m-d H:i:s'))->get();

		$chartOrders = $orders->map(function ($order) {
			$order->time_created = Carbon::parse($order->created_at)->format('Y');
			return $order;
		})
			->groupBy('time_created')->transform(function ($order) {
				return $order->sum('total_price');
			})->toArray();

		$chartOrders = array_values(array_merge($years, $chartOrders));

		return $this->sendResponse($chartOrders, 'Lấy dữ liệu biểu đồ thành công');


	}
}
