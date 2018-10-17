<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Identification extends Model
{
    //
    protected $fillable = [
        'id_code', 
        'place', 
    ];

    public function user() {
    	return $this->hasOne(Users::class);
    }
}
