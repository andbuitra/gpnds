<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    protected $fillable = ['sobreNosotrs','mision','vision'];
    protected $primaryKey = 'about_uses_id';
    public $timestamps = false;
}
