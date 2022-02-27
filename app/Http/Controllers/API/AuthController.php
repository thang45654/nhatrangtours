<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
	public function login(Request $request)
	{
        $validate = Validator::make($request->all(), [
//            'email' => 'nullable|email|required_without:mobile|exists:users,email',
            'phone' => 'required|exists:partners,phone',
            'password' => 'required|min:6'
        ], [
//            'email.required_without' => 'Không được để trống email',
//            'email.exists' => 'Email chưa được đăng ký trong hệ thống',
//            'mobile.required_without' => 'Không được để trống số điện thoại',
            'password.required' => 'Không được để trống mật khẩu',
			'phone.required' => 'Không được để trống số điện thoại',
			'password.min' => 'Mật khẩu không được dưới 6 ký tự',
            'phone.exists' => 'Số điện thoại chưa được đăng ký trong hệ thống'
        ]);

        if ($validate->fails()) {
            return $this->response($validate->errors(), 400, $validate->errors()->first());
        }

		$credentials = $request->only([ 'password', 'phone']);

//        if ($request->filled('email')) {
//            $user = User::where('email', $credentials['email'])->first();
//
//            if (!Hash::check($credentials['password'],$user->password)) {
//                return $this->sendError(400, 'Tên đăng nhập hoặc mật không đúng');
//            }
//        }
		$user = Partner::where('phone', $credentials['phone'])->first();

		if (!$user->api_token) {
			$user->api_token = gen_token(32);
		}

		$user->link_web_qr = 'http://www.google.com';

		if (!Hash::check($credentials['password'], $user->password)) {
			return $this->sendError(400, 'Tên đăng nhập hoặc mật không đúng');
		}

		return $this->sendResponse(['api_token' => $user->api_token, 'user' => $user], 'Đăng nhập thành công');
	}

	public function getCurrentUser()
	{
		return $this->sendResponse(auth('api')->user(), 'Lấy user thành công');
	}

	public function changePassword(Request $request)
	{
		$validate = Validator::make($request->all(),[
			'password' => 'required|min:6',
			'old_password' => [
				'required', function ($attribute, $value, $fail) {
					if (!Hash::check($value,auth('api')->user()->password)) {
						$fail('Mật khẩu cũ không chính xác');
					}
				},
			],
			'confirm_password' => 'required|same:password'
		], [
			'password.required' => 'Bạn chưa nhập mật khẩu',
			'password.min' => 'Mật khẩu chứa ít nhất 6 ký tự',
			'old_password.required' => 'Bạn chưa nhập mật khẩu cũ',
			'confirm_password.required' => 'Bạn chưa nhập xác nhận mật khẩu',
			'confirm_password.same' => 'Mật khẩu xác nhận không giống với mật khẩu'
		]);
		if ($validate->fails()) {
			return $this->response($validate->errors(), 400, $validate->errors()->first());
		}
		$user = auth('api')->user();

		$user->password = Hash::make($request->password);
		$user->save();

		return $this->sendResponse($user, 'Đổi mật khẩu thành công');

	}

	public function saveFcmToken(Request $request)
	{
		$validate = Validator::make($request->all(),[
			'fcm_token' => 'required|string'
		], [
			'fcm_token.required' => 'Fcm token không được để trống',
			'fcm_token.string' => 'Fcm token phải là string',
		]);
		if ($validate->fails()) {
			return $this->response($validate->errors(), 400, $validate->errors()->first());
		}

		$user = auth('api')->user();

		$user->fcm_token = $request->get('fcm_token');
		$user->save();

		return $this->sendResponse($user, 'Lưu fcm token thành công');
	}


}
