<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Forum_Question extends Model
{
    protected $table = 'forum_questions';
    protected $fillable = ['title','body','tags','slug','user_id'];
    protected $primaryKey = 'forum_question_id';

    public function user(){
      return $this->belongsTo('App\Models\User');
    }

    public function forum_answers(){
      return $this->hasMany('App\Models\Forum_Answers');
    }
}
