<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Log;
use NotificationChannels\Fcm\FcmChannel;
use NotificationChannels\Fcm\FcmMessage;
use NotificationChannels\Fcm\Resources\AndroidConfig;
use NotificationChannels\Fcm\Resources\AndroidFcmOptions;
use NotificationChannels\Fcm\Resources\AndroidNotification;
use NotificationChannels\Fcm\Resources\ApnsConfig;
use NotificationChannels\Fcm\Resources\ApnsFcmOptions;

class SendPushNotification extends Notification
{
	private $user;

	private $title;

	private $content;

	public function __construct($user, $title, $content)
	{
		$this->user = $user;
		$this->title = $title;
		$this->content = $content;
	}

	public function via($notifiable)
	{
		return [FcmChannel::class];
	}

	public function toFcm($notifiable)
	{
		$devices = $this->user->fcmTokens;

		return FcmMessage::create()
			->setData(['data1' => 'value', 'data2' => 'value2'])
			->setNotification(\NotificationChannels\Fcm\Resources\Notification::create()
				->setTitle($this->title)
				->setBody($this->content)
				->setImage('http://example.com/url-to-image-here.png'))
			->setAndroid(
				AndroidConfig::create()
					->setFcmOptions(AndroidFcmOptions::create()->setAnalyticsLabel('analytics'))
					->setNotification(AndroidNotification::create()->setColor('#0A0A0A'))
			)->setApns(
				ApnsConfig::create()
					->setFcmOptions(ApnsFcmOptions::create()->setAnalyticsLabel('analytics_ios')));

	}


	public function fcmProject($notifiable, $message)
	{
		return 'app';
	}

}