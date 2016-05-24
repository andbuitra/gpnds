<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post_Usuario extends Model
{
    //
    protected $fillable = ['profileID','id_usuario'];

    public function relationPost(){
      return $this->hasOne(Post::class);
    }

    public function relationUsuario(){
      return $this->hasOne(User::class);
    }
}
