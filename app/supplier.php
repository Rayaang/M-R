<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
     public function vaccines()
     {
     	 return $this->hasMany('App\vaccine');
     }

       public function medecines()
     {
     	 return $this->hasMany('App\medecine');
     }
}
