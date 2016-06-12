<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    protected $table = 'files';
    protected $fillable = ['file_name','route','user_id'];
    protected $primaryKey = 'file_id';

    public function users(){
      return $this->belongsTo('App\Models\User');
    }
}
