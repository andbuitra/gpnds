<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['title','body','tags', 'user_id', 'slug', 'description', 'cover_image'];

    protected $primaryKey = 'post_id';

    public function user(){
      return $this->belongsTo('App\Models\User');
    }

    public function likes()
    {
      return $this->hasMany('App\Models\Like');
    }

}
