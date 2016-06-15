<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ban extends Model
{
    protected $table = 'bans';
    protected $fillable = ['user_id','ban_date_end','typeBan_id'];
    protected $primaryKey = ['user_id','typeBan_id'];

    public function user(){
      return $this->belongsTo('App\Models\User');
    }

    public function typeban(){
      return $this->belongsTo('App\Models\TypeBans');
    }
}
