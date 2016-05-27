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
    $credentials = [
      'email' => request()->input('email'),
      'password' => request()->input('password'),
      'confirmed' => 1
    ];
    if (Auth::attempt($credentials, true)) {
      return redirect()->intended('/');
    }else{
      return redirect()->back()->withInput()->withErrors([
        'credentials' => 'Email o contraseña incorrectos'
      ]);
    }
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
      'password' => 'required|min:8|max:32',
      'repassword' => 'required|same:password'
    ],[
      'email.unique' => 'Este email ya está en uso',
      'repassword.same' => 'Las contraseñas deben coincidir',
      'password.min' => 'La contraseña debe tener por lo menos ocho caracteres',
      'password.max' => 'La contraseña no puede tener más de 32 caracteres'
    ]);
    $name = request()->input('name');
    $email = request()->input('email');
    $pwd = bcrypt(request()->input('password'));
    $confirmation_code = str_random(55);

    User::create(array(
      'name' => $name,
      'email' => $email,
      'password' => $pwd,
      'confirmation_code' => $confirmation_code
    ));


    #* The technology just isn't there yet

    Mail::send('email.verify', ['confirmation_code' => $confirmation_code], function($message) {
      $message->from('test@gpnds.com', 'GPNDS')->to(request()->input('email'), explode(' ',trim(request()->input('name')))[0])->subject('Verifica tu correo.');
    });

    $returnThisData = array(
      'name' => $name,
      'email' => $email
    );

    return view('pages.cemail')->with($returnThisData);

  }

  public function confirm($confirmationCode){
    if(!$confirmationCode){
      dd('No se encontró ningún código de verificación en la URL');
    }
    $user = User::where('confirmation_code', $confirmationCode)->first();
    if(!$user){
      dd('Lo sentimos. Este código de confirmación ya ha sido usado.');
    }
    $user->confirmed = 1;
    $user->confirmation_code = null;
    $user_id = $user->user_id;
    $user->save();

    return redirect('assign-username')->with(compact('user_id'));

  }

  public function showAssignUsernameForm()
  {
    return view('pages.createusername');
  }

  public function assignUsername()
  {
    $user_id = request()->input('user_id');
    $username = request()->input('username');
    if(User::where('username', '=', $username)->exists()){
      return redirect()->back()->withInput()->withErrors([
        'username' => 'Este usuario ya se encuentra registrado. Intenta nuevamente'
      ]);
    }else{
      DB::table('user')->where('user_id', $user_id)->update(['username' => $username]);
    }
  }

}
