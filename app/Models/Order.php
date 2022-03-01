<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'partner_id', 'ticket', 'total_price', 'status', 'quatity', 'note'];

	public function tour()
	{
		return $this->belongsTo(Tour::class);
    }

}
