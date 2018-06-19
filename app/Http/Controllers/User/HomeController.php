<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{


	public function __construct()
    {
        $this->middleware('auth:userr');
    }
     public function index()
    {
    	return view('user.home');
    }
}
