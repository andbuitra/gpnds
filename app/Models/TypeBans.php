<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeBans extends Model
{
  protected $fillable = ['description'];
  protected $primaryKey = 'typeBan_id';
  public $timestamps = false;

  public function bans(){
    return $this->hasMany('App\Models\Bans');
  }
}
