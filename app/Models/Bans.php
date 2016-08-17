<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bans extends Model
{
  protected $fillable = ['user_id','ban_date_end','typeBan_id','description'];
  protected $primaryKey = 'ban_id';

  public function user(){
    return $this->belongsTo('App\Models\User');
  }

  public function typeban(){
    return $this->belongsTo('App\Models\TypeBans');
  }
}
