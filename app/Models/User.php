<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = ['name', 'email', 'password', 'role', 'confirmation_code', 'profileID'];
    protected $hidden = ['password', 'remember_token'];

    public function relationPost_User(){
      return $this->hasMany(Post_Usuario::class);
    }
}
