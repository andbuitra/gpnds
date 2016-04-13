<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\User;

class UsersController extends Controller
{
  /*public function show(){
    return User::where(
      'email' => request()->input('email'),
      'password' => bcrypt(request()->input('password'))
    );
  }

  */

  public function store()
  {
    $this->validate(request(), [
      'name' => 'required',
      'email' => 'required|email|unique:users,email',
      'password' => 'required',
      'repassword' => 'required|same:password'
    ]);
    $name = request()->input('name');
    $email = request()->input('email');
    $pwd = bcrypt(request()->input('password'));

    User::create(array(
      'name' => $name,
      'email' => $email,
      'password' => $pwd
    ));

  }

  public function create()
  {
    return view('pages.registro');
  }
}
