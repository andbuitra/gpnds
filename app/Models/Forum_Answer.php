<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum_Answer extends Model
{
    protected $table = 'forum_answers';
    protected $fillable = ['answer','forum_question_id','user_id'];
    protected $primaryKey = 'forum_answer_id';

    public function forum_question(){
      return $this->belongsTo('App\Models\Forum_Questions');
    }

    public function user(){
      return $this->belongsTo('App\Models\User');
    }
}
