<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeBans extends Model
{
    protected $table = 'typebans';
    protected $fillable = ['description'];
    protected $primaryKey = 'typeBan_id';
}
