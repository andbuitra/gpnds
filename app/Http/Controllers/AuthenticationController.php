<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use Auth;
use Mail;
use DB;
use App\AccessPoints\User as UserAP;

class AuthenticationController extends Controller
{

  # Login related functions
  public function showLoginForm(){
    if(Auth::check()){
      return view('pages.index');
    }
    return view('pages.login');
  }

  public function login(){
    if(UserAP::login()){
      return redirect()->intended('/');
    }

    return redirect()->back()->withInput()->withErrors([
      'credentials' => 'Email o contraseña incorrectos'
    ]);

  }

  public function logout(){
    UserAP::logout();
    return redirect('/');
  }

  # Register related functions
  public function showRegistrationForm(){

    if(Auth::check()){
      return redirect('/');
    }
    return view('pages.registro');
  }

  public function register(){
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

    $dataForTheView = UserAP::register();

    if($dataForTheView){
      return view('pages.cemail')->with($dataForTheView);
    }
  }

public function confirm($confirmationCode){
  if(UserAP::confirm($confirmationCode)){
    return redirect('assign-username');
  }
  return redirect('/');
}

public function showAssignUsernameForm()
{
  # Remember the user_id field
  session()->keep(['user_id']);
  return view('pages.createusername');
}

public function assignUsername()
{
  # Validates that the given input fits the requirements
  # Returns the needed error if not
  $this->validate(request(), [
    'username' => 'required|alpha_dash|unique:users,username'
  ], [
    'username.required' => 'Debes llenar este campo',
    'username.alpha_dash' => 'Aceptamos unicamente a-Z - y _',
    'username.unique' => 'Ya está en uso, digite otro'
  ]);
  # Gets the user_id from the session
  # Requests the username from the input
  # Updates the user with the given username
  $user_id = session()->get('user_id');
  $username = request()->input('username');
  session()->flash('user_id', $user_id);
  DB::table('users')->where('user_id', $user_id)->update(['username' => $username]);
  $user = DB::table('users')->where('user_id', $user_id)->get();
  return redirect('/succesfully-registered');
}

public function succesfullyRegistered()
{
  $user_id = session()->get('user_id');
  if($user_id != null){
    session()->forget('user_id');
    return view('pages.succesfully-registered');
  }else{
    return redirect('/');
  }
}

}
