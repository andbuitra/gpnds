<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon as C;
use App\Http\Requests;
use App\Models\Bans as B;
use App\Models\TypeBans as TB;
use App\Models\User as U;

class BansController extends Controller
{
    public function banearPersona(){
      $user_id = request()->input('user_id');
      $description = request()->input('description');
      $typeBan = TB::where('description', $description)->first();
      $meses = request()->input('meses');
      $fecha = C::now()->addMonths($meses);
      B::create([
        'user_id' => $user_id,
        'typeBan_id' => $typeBan->typeBan_id,
        'ban_date_end' => $fecha
      ]);
      return redirect()->to('administrar/usuarios');
    }

    public function panelBaneo($user_id){
      $tiposBans = TB::all();
      $usuario = U::find($user_id);
      return view('pages.baneo', compact('tiposBans','usuario'));
    }
}
