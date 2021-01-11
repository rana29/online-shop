<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class color extends Model
{

	 public function product(){
    	return $this->hasMany('App\product',);
    }
    protected $fillable = [
        'color_name', 'color_slug', 'password',
    ]; 

     

}
