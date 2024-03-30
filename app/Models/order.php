<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    protected $fillable = [
        'state',
        'paid',
    ];

    public function sales(){
        $this->belongsToMany(sale::class);
    }

    public function foods(){
        return $this->belongsToMany(food::class);
    }
}
