<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeBan extends Model
{
    protected $table = 'typebans';
    protected $fillable = ['description'];
    protected $primaryKey = 'typeBan_id';

    public function bans(){
      return $this->hasMany('App\Models\Bans');
    }
}
