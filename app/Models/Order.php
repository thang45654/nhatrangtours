<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'partner_id', 'tour_id', 'total_price', 'status', 'quatity', 'note', 'discount_money', 'customer_id', 'time_start'];

    protected $casts = [
    	'time_start' => 'datetime:d-m-Y H:i'
	];
	public function tour()
	{
		return $this->belongsTo(Tour::class);
    }

	public function getTimeStartTravelAttribute()
	{
		return $this->time_start ?Carbon::parse($this->time_start)->format('d-m-Y H:i') : '';
    }

	public function customer()
	{
		return $this->belongsTo(Customer::class);
    }

	public function partner()
	{
		return $this->belongsTo(Partner::class);
	}
}
