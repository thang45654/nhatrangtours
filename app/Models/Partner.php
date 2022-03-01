<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
class Partner extends Model
{
    const TRANSFER = 1;
    const CASH = 2;
    protected $guarded=[''];
    protected $table = 'partners';
    const TYPE =[
            '1'=>'Chuyển khoản',
            '2'=>'Tiền mặt'
        ];
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
