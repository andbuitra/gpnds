<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum_Answers extends Model
{
    protected $table = 'forum_answers';
    protected $fillable = ['answer','forum_question_id','user_id'];
    protected $primaryKey = 'forum_answer_id';

    public function forum_questions(){
      return $this->belongsTo('App\Models\Forum_Questions');
    }

    public function users(){
      retunt $this->belongsTo('App\Models\User');
    }
}
