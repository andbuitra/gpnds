<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Puericultura extends Model
{
    protected $fillable = ['queEs','porQue'];
    protected $primaryKey = 'puericultura_id';
    public $timestamps = false;
}
