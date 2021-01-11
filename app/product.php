<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{

	
     protected $fillable = [
        'product_name', 'catagory_id','brand_id','product_price','long_desc','short_desc','youtube', 
    ];


    public function catagory(){
    	return $this->belongsTo(Catagory::class,'catagory_id','id');
    }

    public function brand(){
    	return $this->belongsTo(Brand::class,'brand_id','id');
    }

    public function color(){
    	return $this->belongsTo(color::class,'color_id','id');
    }


    public function size(){
    	return $this->belongsTo(size::class,'size_id','id');
    }

  

}
