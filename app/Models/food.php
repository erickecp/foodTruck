<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class food extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'img',
        'price',
        'price_sale',
        'description',
        'category_id',
    ];

    public function categories(){
        return $this->belongsTo(category::class);
    }
    public function orders(){
        return $this->belongsToMany(order::class);
    }
}
