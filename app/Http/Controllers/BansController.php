<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon as C;
use App\Http\Requests;
use App\Models\Bans as B;
use App\Models\TypeBans as TB;
use App\Models\User as U;
use App\AccessPoints\Bans as BansAP

class BansController extends Controller
{
    public function banearPersona(){
      BansAP::banearPersona();
      return redirect()->to('administrar/usuarios');
    }

    public function panelBaneo($user_id){
      $tiposBans = TB::all();
      $usuario = U::find($user_id);
      return view('pages.baneo', compact('tiposBans','usuario'));
    }

    public function
}
