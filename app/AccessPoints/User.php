<?php
namespace App\AccessPoints;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\User as UserM;
use Auth;
use Mail;
use DB;

class User extends Authenticatable{

  public static function login(){

    $credentials = [
      'email' => request()->input('email'),
      'password' => request()->input('password'),
      'confirmed' => 1
    ];
    return Auth::attempt($credentials, true);
  }

  public static function logout(){
    if(Auth::check()){
      Auth::logout();
    }
  }

  public static function register(){

    $name = request()->input('name');
    $email = request()->input('email');
    $pwd = bcrypt(request()->input('password'));
    $confirmation_code = str_random(55);

    UserM::create([
      'name' => $name,
      'email' => $email,
      'password' => $pwd,
      'confirmation_code' => $confirmation_code
    ]);

    self::sendConfirmationEmail($confirmation_code);

    return $dataForTheView = array(
      'name' => $name,
      'email' => $email
    );
  }

  private static function sendConfirmationEmail($confirmation_code){
    Mail::send('email.verify', ['confirmation_code' => $confirmation_code], function($message) {
      $message->from('usuarios@gpnds.com', 'GPNDS')->to(request()->input('email'), explode(' ',trim(request()->input('name')))[0])->subject('Verifica tu correo.');
    });
  }

  public static function confirm($confirmationCode){
    if(!$confirmationCode){
      dd('No se encontró ningún código de verificación en la URL');
    }
    # Search and retrieve the user with the UNIQUE confirmation code
    $user = UserM::where('confirmation_code', $confirmationCode)->first();
    if(!$user){
      return false;
    }
    $user->confirmed = 1;
    $user->confirmation_code = null;
    $user_id = $user->user_id;
    $user->save();

    # Pass the user_id field to the session to be used later
    session()->flash('user_id', $user_id);
    return true;
  }

  public static function setUsername(){
    # Gets the user_id from the session
    # Requests the username from the input
    # Updates the user with the given username
    $user_id = session()->get('user_id');
    $username = request()->input('username');
    session()->flash('user_id', $user_id);
    DB::table('users')->where('user_id', $user_id)->update(['username' => $username]);
    $user = DB::table('users')->where('user_id', $user_id)->get();
    if(!is_null($user)){
      return true;
    }
    return false;
  }

  public static function wasSuccessfullyRegistered(){
    $user_id = session()->get('user_id');
    if($user_id != null){
      session()->forget('user_id');
      return true;
    }
    return false;
  }
}
