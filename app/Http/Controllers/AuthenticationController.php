<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use Auth;
use Mail;
use Laracasts\Flash;

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
        'credentials' => 'Error al logear'
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
    $profileID = rand(1000000, 9999999);

    User::create(array(
      'name' => $name,
      'email' => $email,
      'password' => $pwd,
      'role' => $role,
      'confirmation_code' => $confirmation_code,
      'profileID' => $profileID
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
    $user->save();

    return redirect('iniciar-sesion');

  }

}
