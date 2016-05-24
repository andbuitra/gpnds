<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = ['name', 'email', 'password', 'confirmation_code'];
    protected $hidden = ['password', 'remember_token'];

    public function posts(){
      return $this->hasMany('App\Models\Post');
    }

}
