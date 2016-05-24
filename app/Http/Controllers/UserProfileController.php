<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\User;

use Auth;
use DB;

class UserProfileController extends Controller
{

  public function me(){
    if(Auth::check()){
      $user = User::find(Auth::user()->user_id);
      return ($user);
    }else{
      return redirect()->to('/');
    }

  }

    public function showEditForm($profileID){
      $user = User::where('profileID', $profileID)->firstOrFail();
      if(Auth::user()->profileID === $user->profileID){
        return view('pages.editProfile', compact($user));
      }else{
        abort(404);
      }
    }
}
