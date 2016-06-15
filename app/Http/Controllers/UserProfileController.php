<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\User;

use Auth;
use DB;

class UserProfileController extends Controller
{

  public function show($username)
  {
    $user = User::where('username', $username)->first();
    return view('pages.profile', compact('user'));
  }

  public function me(){
    if(Auth::check()){
      $user = User::find(Auth::user()->user_id);
      return view('pages.profile', compact('user'));
    }else{
      return redirect()->to('/');
    }
  }

  public function showEditForm(){
    if(Auth::check()){
      $user = User::find(Auth::user()->user_id);
      return view('pages.editProfile', compact('user'));
    }else{
      return redirect()->to('/');
    }
  }

  public function saveEdit()
  {
    $user = User::find(Auth::user()->user_id);
    $user->name = request()->input('name');
    $user->email = request()->input('email');
    $user->about = request()->input('about');

    $user->save();
    return redirect()->back();
  }
}
