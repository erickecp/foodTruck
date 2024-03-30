<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    protected $fillable =[
        'category',
        'description',
    ];


    public function foods(){
        $this->belongsToMany(food::class);
    }
}
