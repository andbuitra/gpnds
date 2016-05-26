<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = ['like_id', 'user_id', 'post_id'];
    protected $primaryKey = 'like_id';

    public function user()
    {
      return $this->belongsTo('App\Models\User');
    }

    public function post()
    {
      return $this->belongsTo('App\Models\Post');
    }
}
