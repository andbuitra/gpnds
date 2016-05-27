<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = ['name', 'email', 'password', 'confirmation_code'];
    protected $hidden = ['password', 'remember_token'];

    protected $primaryKey = 'user_id';

    public function posts(){
      return $this->hasMany('App\Models\Post');
    }

    public function likes()
    {
      return $this->hasMany('App\Models\Like');
    }

    public function AdditionalInfo(){
      return $this->hasMany('App\Models\AdditionalInfo');
    }

}
