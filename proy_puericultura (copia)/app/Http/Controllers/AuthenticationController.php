<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use Auth;
use Mail;

class AuthenticationController extends Controller
{

  # Login related functions
  public function showLoginForm(){
    if(Auth::check()){
      return view('pages.index');
    }
    return view('pages.login');
  }

  public function login()
  {
    $email = request()->input('email');
    $password = request()->input('password');
    if (Auth::attempt(['email' => $email, 'password' => $password], true)) {
      return redirect()->intended('/');
    }
    dd(Auth::attempt(['email' => $email, 'password' => $password]));
  }

  public function logout()
  {
    if(Auth::check()){
        Auth::logout();
        return redirect('/');
    }
    return redirect('/');

  }

  # Register related functions
  public function showRegistrationForm()
  {
    return view('pages.registro');
  }

  public function register()
  {
    $this->validate(request(), [
      'name' => 'required',
      'email' => 'required|email|unique:users,email',
      'password' => 'required',
      'repassword' => 'required|same:password'
    ],[
      'email.unique' => 'Este email ya está en uso',
      'repassword.same' => 'Las contraseñas deben coincidir'
    ]);
    $name = request()->input('name');
    $email = request()->input('email');
    $pwd = bcrypt(request()->input('password'));
    $role = 'regularuser';
    $confirmation_code = str_random(55);

    User::create(array(
      'name' => $name,
      'email' => $email,
      'password' => $pwd,
      'role' => $role,
      'confirmation_code' => $confirmation_code
    ));

    /* Soon.
    * The technology just isn't there yet

    Mail::send('email.verify', $confirmation_code, function() {
      $message->to($email, explode(' ',trim($name))[0])->subject('Verifica tu correo.');
    });

    */

  }

}
