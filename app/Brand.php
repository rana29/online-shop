<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'Brand_name', 'Brand_slug', 'password',
    ];

    public function product(){

    	return $this->belongsTo(product::class);
    }
}
