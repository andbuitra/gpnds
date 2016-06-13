<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bans extends Model
{
    protected $table = 'bans';
    protected $fillable = ['user_id','ban_date_end','typeBan_id'];
    protected $primaryKey = ['user_id','typeBan_id'];

    public function users(){
      return $this->belongsTo('App\Models\User');
    }

    public function typebans(){
      return $this->belongsTo('App\Models\TypeBans');
    }
}
