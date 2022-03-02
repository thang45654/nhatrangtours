<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Partner extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    const TRANSFER = 1;
    const CASH = 2;

    const TYPE =[
        1 =>'Chuyển khoản',
        2 =>'Tiền mặt'
    ];
    protected $fillable = [
        'mobile',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

	public function paymentHistories()
	{
		return $this->hasMany(PaymentHistory::class);
    }

	public function orders()
	{
		return $this->hasMany(Order::class);
	}

	public function notifications()
	{
		return $this->belongsToMany(Notification::class, 'notification_partner');
	}

	public function devices()
	{
		return $this->hasMany(Device::class);
	}

	public function getDeviceTokens()
	{
		return $this->hasMany(Device::class);
	}

	public function routeNotificationForFcm()
	{
		return $this->getDeviceTokens()->pluck('fcm_token')->toArray();
	}

    public  function getType(){
        return Arr::get($this->type, $this->payment, "[N\A]");

    }

    public function getPaymentTypeAttribute()
    {
        if ($this->payment === self::CASH) {
            return self::TYPE[$this->payment];
        }

        return $this->bank . ' - ' . $this->account_number;
    }
}
