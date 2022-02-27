<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
class Tour extends Model
{
    use HasFactory;
    protected $table = 'tours';
    protected $type = [
       0=>[
            'class'=>'btn-danger',
            'name'=>'Ngừng bán'
        ],
        1=>[
            'class'=>'btn-success',
            'name'=>'Cho phép bán'
        ]
    ];

    public function getStatus(){
        return Arr::get($this->type, $this->status, ['N\A']);
    }
}
