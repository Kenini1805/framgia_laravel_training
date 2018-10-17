<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'product_name', 
        'price', 
        'quantity',
        'description',
        'hot',
    ];

    public function category() {
    	return $this->belongsTo(Category::class);
    }

    public function order() {
    	return $this->belongsToMany(Order::class);
    }
}
