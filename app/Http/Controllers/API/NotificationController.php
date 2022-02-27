<?php

namespace App\Http\Controllers\API;

use App\Notifications\SendPushNotification;
use App\Services\NotificationService;
use Kreait\Firebase\Messaging\CloudMessage;
use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\Partner;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class NotificationController extends Controller
{
	public function getNotification()
	{
		$user = auth('api')->user();
		$notifications = $user->notifications()->orderBy('notifications.created_at', 'desc')->whereDate('notifications.created_at', '>=', now()->subMonth())->get();
		return $this->sendResponse($notifications, 'Lấy dữ liệu thành công');
	}

	public function sendNotification(NotificationService $notification)
	{
		$user = auth('api')->user();
		$user->notify(new SendPushNotification($user, 'Chuyển tiền', 'Admin vừa gửi bạn 1.000.000 đồng'));
	}
}
