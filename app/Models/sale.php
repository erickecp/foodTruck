<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'total',
        'order_id'
    ];


    public function orders(){
        $this->belongsTo(order::class);
    }


}

