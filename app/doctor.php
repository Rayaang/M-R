<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class doctor extends Authenticatable
{
     use Notifiable;
}
