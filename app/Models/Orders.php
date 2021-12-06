<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    public function product(){
    	return $this->belongsTo(Products::class, 'product_id');
    }

    public function customer(){
    	return $this->belongsTo(User::class, 'user_id');
    }
}
