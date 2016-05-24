<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['title','body','tags'];

    public function relationPost_User(){
      return $this->belongsTo(Post_Usuario::class);
    }
}
