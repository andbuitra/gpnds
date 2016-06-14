<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    protected $table = 'files';
    protected $fillable = ['url','name','ext','image_uri','user_id'];
    protected $primaryKey = 'file_id';

    public function users(){
      return $this->belongsTo('App\Models\User');
    }
}
