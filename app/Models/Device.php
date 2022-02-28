<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $fillable = ['partner_id', 'fcm_token', 'timezone', 'device_name', 'device_model', 'app_version', 'os_version'];

}
