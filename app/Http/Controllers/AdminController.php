<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class AdminController extends Controller
{
  public function showAdminPanel()
  {
    return view('pages.admin');
  }

  public function showUsersPanel()
  {
    $users = DB::table('users')->select('user_id', 'name', 'username', 'email', 'created_at')->get();
    return view('pages.admin-users')->with(compact('users'));
  }
}
