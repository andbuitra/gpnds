<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Forum_Question as ForumQuestion;
use App\Models\Forum_Answer as ForumAnswers;

class ForumController extends Controller
{
    public function listQuestions()
    {
      $questions = ForumQuestion::all();
      $answers = ForumAnswers::all();
      return view('pages.forum')->with(compact('questions', 'answers'));
    }
}
