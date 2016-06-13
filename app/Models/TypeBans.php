<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeBans extends Model
{
    protected $table = 'typebans';
    protected $fillable = ['description'];
    protected $primaryKey = 'typeBan_id';

    public function bans(){
      return $this->hasMany('App\Models\Bans');
    }
}
