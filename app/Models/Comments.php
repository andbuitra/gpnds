<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = 'comments';
    protected $fillable = ['body','post_id','user_id'];
    protected $primaryKey = 'comment_id';

    public function users(){
      return $this->belongsTo('App\Models\User');
    }

    public function posts(){
      return $this->belongsTo('App\Models\Post');
    }

    public function likes_comments(){
      return $this->hasMany('App\Models\Lokes_Comments');
    }
}
