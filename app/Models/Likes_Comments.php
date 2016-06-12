<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Likes_Comments extends Model
{
    protected $table = 'likes_comments';
    protected $fillable = ['comment_id','user_id'];
    protected $primaryKey = 'like_comment_id';

    public function comments(){
      return $this->belongsTo('App\Models\Comments');
    }

    public function users(){
      return $this->belongsTo('App\Models\User');
    }
}
