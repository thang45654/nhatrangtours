<?php
namespace App\Services;
use Illuminate\Http\UploadedFile;
use Kreait\Firebase\Contract\Messaging;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\Notification;

class NotificationService
{
	public $messaging;

	public $deviceToken = 'fQ43NO7nTMyLtQlIXr5Qha:APA91bELYcuWRiqgLZ3R0kaQkxfiyZzPBAV2WXUX6e2Jupy324gw_9pcG4B0eQA7xriiwIrQjaSpPXGSS-UmJ2TK0WUX1XjISVSrNALrBgPL_X-i-Wb1JoT5hjD-SjtlhyyVJPfwrt_N';

	public function __construct(Messaging $messaging)
	{
		$this->messaging = $messaging;
	}

	public function sendNotify()
	{
		$title = 'My Notification Title';
		$body = 'My Notification Body';

		$notification = Notification::create($title, $body);

		$changedNotification = $notification
			->withTitle('Changed title')
			->withBody('Changed body')
			->withImageUrl('http://lorempixel.com/200/400/');

		$deviceToken = '...';

		$message = CloudMessage::withTarget('token', $deviceToken)
			->withNotification($notification) // optional
		;
		$this->messaging->send($message);
	}
}

