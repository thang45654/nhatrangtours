<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Tour;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
	public function index()
	{
		$orders = Order::orderBy('created_at', 'desc')->get();

		$partner = DB::table('partners')->selectRaw('count(*) as total_partners')->first();

		$data = [
			'page_name' => 'Quản lý bán hàng',
			'orders' => $orders,
			'total_partners' => $partner->total_partners,
			'total_tickets' => $orders->sum('quatity'),
			'total_revenue' => $orders->sum('total_price'),
			'total_tours' => $orders->groupBy('tour_id')->count()
		];
		return view('pages.admin.orders.index')->with($data);
	}

	public function show($id)
	{
		$order = Order::findOrFail($id);

		$data = [
			'page_name'	 => 'Chi tiết đơn hàng',
			'order' => $order
		];
		return view('pages.admin.orders.show')->with($data);

	}
}
