<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vaccine extends Model
{
    public function suppliers()
    {
    	return $this->hasMany('App\supplier');
    }
}
