<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medicine extends Model
{
     public function suppliers()
    {
    	return $this->hasMany('App\supplier');
    }
}
