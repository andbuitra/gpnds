<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specialist extends Model
{
    protected $table = 'specialists';

    protected $fillable = ['specialist_id', 'degree', 'phone', 'address', 'user_id'];

    protected $primaryKey = 'specialist_id';

    public function user(){
      return $this->hasOne('App\Models\User');
    }
}
