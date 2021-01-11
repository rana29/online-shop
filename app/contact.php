<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
     protected $fillable = [
        'address', 'mobile','email','facebook','twitter','youtube' 
    ];
}
