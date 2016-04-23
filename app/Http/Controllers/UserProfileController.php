<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\User;

use Auth;

class UserProfileController extends Controller
{
    public function show($profileID){
      $user = User::where('profileID', $profileID)->firstOrFail();
      return view('pages.editProfile', compact($user));
      //return ('Aquí va el perfil');
    }

    public function showEditForm($profileID){
      $user = User::where('profileID', $profileID)->firstOrFail();
      if(Auth::user()->profileID === $user->profileID){
        return view('pages.editProfile', compact($user));
      }else{
        abort(404);
      }
    }

    public function me(){
      if(Auth::check()){
        $user = User::where('profileID', Auth::user()->profileID)->firstOrFail();
        return redirect('profile/'.$user->profileID);
      }
    }
}
