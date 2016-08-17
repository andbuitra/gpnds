<?php
namespace App\AccessPoints;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Bans as Bans;
use Auth;

class Bans extends Authenticatable{

  public static function banearPersona(){
    $user_id = request()->input('user_id');
    $description = request()->input('description');
    $typeBan = TB::where('description',"=", $description)->first();
    $meses = request()->input('meses');
    $fecha = C::now()->addMonths($meses);
    $porque = request()->input('porque');
    B::create([
      'user_id' => $user_id,
      'typeBan_id' => $typeBan,
      'ban_date_end' => $fecha,
      'description' => $porque
    ]);
  }
}
