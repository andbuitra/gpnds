<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specialist extends Model
{
    protected $fillable = ['additional_info_id', 'degree', 'phone', 'address', 'user_id'];
    protected $primaryKey = 'additional_info_id';

    public function user(){
      return $this->hasOne('App\Models\User');
    }
}
