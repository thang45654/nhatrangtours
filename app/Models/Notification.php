<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $table = 'notifications';

	public function partners()
	{
		return $this->belongsToMany(Partner::class, 'notification_partner');
    }
}
