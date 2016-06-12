<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum_Questions extends Model
{
    protected $table = 'forum_questions';
    protected $fillable = ['title','body','tags','slug','user_id'];
    protected $primaryKey = 'forum_question_id'

    public function users(){
      return $this->belongsTo('App\Models\User');
    }

    public function forum_answers(){
      return $this->hasMany('App\Models\Forum_Answers');
    }
}
