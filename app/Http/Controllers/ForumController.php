<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Models\Forum_Question as ForumQuestion;
use App\Models\Forum_Answer as ForumAnswers;

class ForumController extends Controller
{
    public function listQuestions()
    {
      $questions = DB::select('
        SELECT q.title as title, q.body as body, u.name as name, q.created_at as creation, q.forum_question_id as id
        FROM forum_questions q
        INNER JOIN users u
        ON q.user_id = u.user_id
      ');
      $answers = DB::select('
        SELECT a.answer as answer, a.created_at as creation, u.name as name, a.forum_question_id as idQ
        FROM forum_answers a
        INNER JOIN users u
        ON u.user_id = a.user_id
      ');
      return view('pages.forum')->with(compact('questions', 'answers'));
    }
}
