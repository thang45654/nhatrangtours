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

class StatisticController extends Controller
{
	public function index()
	{
		$orders = Order::where('created_at', '>=', now()->subDays(6)->format('Y-m-d H:i:s'))
			->orderBy('created_at')->get();
		$data = [
			'page_name' => 'Báo cáo thống kê',
			'total_price_week' => $orders->sum('total_price'),
			'total_ticket_week' => $orders->sum('quatity'),
			'orders' => $orders,
			'revenue_month' =>@DB::table('orders')->whereDate('created_at', '>=', now()->startOfMonth()->format('Y-m-d'))->where('created_at', '<=', now()->endOfMonth()->format('Y-m-d'))->selectRaw('SUM(total_price) as total_price')->first()->total_price,
			'total_partners' => Partner::get()->count(),
			'total_tours' => @DB::select(DB::raw('SELECT COUNT(*) as total_tours FROM (SELECT DISTINCT time_start, tour_id FROM  orders) as dt'))[0]->total_tours ?? 0

		];
		return view('pages.admin.statistic.index')->with($data);
	}
}
