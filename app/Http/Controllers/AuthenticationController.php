<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use Auth;
use Mail;
use DB;

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
    # Retrieve credentials and store them in array.
    $credentials = [
      'email' => request()->input('email'),
      'password' => request()->input('password'),
      'confirmed' => 1
    ];

    # Attempt to authenticate with above credentials
    if (Auth::attempt($credentials, true)) {
      # If true redirect to the intended page or the root page in case the other page
      # isn't available
      return redirect()->intended('/');
    }else{
      # If false redirect back with errors message
      return redirect()->back()->withInput()->withErrors([
        'credentials' => 'Email o contraseña incorrectos'
      ]);
    }
  }

  public function logout()
  {
    # If logged the session gets distroyed
    if(Auth::check()){
      Auth::logout();
      return redirect('/');
    }

    # If not either way it will get redirected to root page.
    return redirect('/');

  }

  # Register related functions
  public function showRegistrationForm()
  {
    return view('pages.registro');
  }

  public function register()
  {
    # validate the data given by the user and
    # returns custom errors messages if needed
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

    # Create a new User model with given data

    User::create(array(
      'name' => $name,
      'email' => $email,
      'password' => $pwd,
      'confirmation_code' => $confirmation_code
    ));


    # Send the confirmation email

    Mail::send('email.verify', ['confirmation_code' => $confirmation_code], function($message) {
      $message->from('usuarios@gpnds.com', 'GPNDS')->to(request()->input('email'), explode(' ',trim(request()->input('name')))[0])->subject('Verifica tu correo.');
    });

    # Return name and email for verification email layout
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
    # Search and retrieve the user with the UNIQUE confirmation code
    $user = User::where('confirmation_code', $confirmationCode)->first();
    if(!$user){
      dd('Lo sentimos. Este código de confirmación ya ha sido usado.');
    }

    # In case it is founded set the confirmed status to TRUE (1)
    # Nullify the confirmation_code field
    # Save the changes made to the user

    $user->confirmed = 1;
    $user->confirmation_code = null;
    $user_id = $user->user_id;
    $user->save();

    # Pass the user_id field to the session to be used later
    session()->flash('user_id', $user_id);
    return redirect('assign-username');

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
