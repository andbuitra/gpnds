<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

z

class AuthController extends Controller
{
    public function authenticate()
    {
    	if(Auth::attempt(['email' => $email, 'password' => $password], $remember)){
    		return redirect('/');
    	}
    }
}
