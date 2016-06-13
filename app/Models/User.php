<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';

    protected $fillable = ['name', 'email', 'password', 'confirmation_code'];

    protected $hidden = ['password', 'remember_token'];

    protected $primaryKey = 'user_id';

    public function likes()
    {
      return $this->hasMany('App\Models\Like');
    }

    public function specialist(){
      return $this->belongsTo('App\Models\Specialist');
    }

    public function comment(){
      return $this->hasMany('App\Models\Comments');
    }

    public function likes_comments(){
      return $this->hasMany('App\Models\Likes_Comments');
    }

    public function forum_answers(){
      return $this->hasMany('App\Models\Forum_Answers');
    }

    public function files(){
      return $this->hasMany('App\Models\Files');
    }

    public function posts(){
      return $this->hasMany('App\Models\Post');
    }

    public function bans(){
      return $this->hasMany('App\Models\Bans');
    }
}
