<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\TourController;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Partner;
use App\Models\Tour;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
	public function getTours()
	{
		$tours = Tour::orderBy('name', 'desc')->get();

		return $this->sendResponse($tours, 'Lấy dữ liệu thành công');
	}
	public function checkPartner(Request $request)
	{
		$validate = Validator::make($request->all(), [
			'referral_code' => 'nullable|exists:partners,referral_code'
		], [
			'referral_code.exists' => 'Mã giới thiệu không hợp lệ'
		]);
		if ($validate->fails()) {
			return $this->response($validate->errors(), 400, $validate->errors()->first());
		}
		$partner = Partner::where('referral_code', $request->referral_code)->first();
		return $this->sendResponse($partner, 'Mã giới thiệu hợp lệ');
	}
	public function createOrder(Request $request)
	{
		$validate = Validator::make($request->all(), [
			'customer_info' => 'required',
			'customer_name' => 'required',
			'tour_id' => 'required|exists:tours,id',
			'quatity' => 'required|min:1',
			'time_travel' => 'datetime:d-m-Y H:i',
			'note' => 'nullable',
			'referral_code' => 'nullable|exists:partners,referral_code'
		], [
			'customer_name.required' => 'Vui lòng nhập tên khách hàng',
			'customer_info.required' => 'Vui lòng nhập email hoặc SĐT',
			'tour_id.required' => 'Vui lòng chọn tour',
			'quatity.required' => 'Vui lòng nhập số lượng vé',
			'time_travel.datetime' => 'Vui lòng nhập đúng định dạng dd-mm-yyyy',
		]);
		if ($validate->fails()) {
			return $this->response($validate->errors(), 400, $validate->errors()->first());
		}

		$data = $request->only('tour_id', 'quatity', 'time_start', 'referral_code', 'note');

		$selected_tour = Tour::find($request->get('tour_id'));

		if (str_contains($request->get('customer_info'), '@')) {
			$customer = Customer::where('email', $request->get('customer_info'))->first();
		} else {
			$customer = Customer::where('mobile', $request->get('customer_info'))->first();
		}
		if (!$customer) {
			$customer = Customer::create([
				'name' => $request->get('customer_name'),
				'email' => str_contains($request->get('customer_info'), '@') ? $request->get('customer_info') : '',
				'mobile' => str_contains($request->get('customer_info'), '@') ? '' : $request->get('customer_info')
			]);
		}
		$data['customer_id'] = $customer->id;
		$data['time_start'] = Carbon::parse($request->get('time_start'))->format('Y-m-d H:i');
		$data['user_id'] = auth()->user()->id;
		$total_price = $data['quatity'] * $selected_tour->price;
		if ($request->filled('referral_code')) {
			$partner = Partner::where('referral_code', $request->get('referral_code'))->first();
			$data['partner_id'] = $partner->id;
			$total_price -= $total_price * $selected_tour->discount_percent_customer/100;
		}

		$data['total_price'] = $total_price;


		$order = Order::create($data);
		return $this->sendResponse($order, 'Tạo order thành công');
	}
	public function getOrderDetail(Request $request)
	{
		$validate = Validator::make($request->all(), [
			'order_id' => 'required|exists:orders,id'
		]);
		if ($validate->fails()) {
			return $this->response($validate->errors(), 400, $validate->errors()->first());
		}
		$order = Order::find($request->get('order_id'));
		$order->load('customer');
		$order->load('partner');

		$order->customer_name = $order->customer->name;
		$order->customer_info = $order->customer->mobile ?? $order->customer->email;
		$order->referral_code = @$order->partner->referral_code ?? '';
		return $this->sendResponse($order, 'Lấy dữ liệu thành công');
	}
	public function removeOrder(Request $request)
	{
		$validate = Validator::make($request->all(), [
			'order_id' => 'required|exists:orders,id'
		]);
		if ($validate->fails()) {
			return $this->response($validate->errors(), 400, $validate->errors()->first());
		}
		Order::find($request->get('order_id'))->delete();
		return $this->sendResponse([], 'Xóa đơn mua thành công!');
	}

}
