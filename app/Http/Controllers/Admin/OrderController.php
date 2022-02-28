<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
	public function index()
	{
		$orders = Order::orderBy('created_at', 'desc')->get();

		$data = [
			'page_name' => 'Quản lý bán hàng',
			'orders' => $orders,
		];
		return view('pages.admin.orders.index')->with($data);
	}
}
