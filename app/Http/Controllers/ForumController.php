<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Auth;
use App\Models\Forum_Question as ForumQuestion;
use App\Models\Forum_Answer as ForumAnswers;

class ForumController extends Controller
{
  # Retrieves ALL the models of Question from the DB to render on the view
  public function listQuestions()
  {
    $questions = ForumQuestion::all();
    return view('pages.forum')->with(compact('questions'));
  }

  # Finds a question given a slug
  public function getQuestion($slug)
  {
    # Finds the question of a given slug
    # gets the id of the question
    $question = ForumQuestion::where('slug', $slug)->first();
    $question_id = $question->forum_question_id;

    # Finds the answer of the given question_id and renders them
    $answers = ForumAnswers::where('forum_question_id', $question_id)->get();
    return view('pages.forumPregunta', compact('question', 'answers'));
  }

  # Create a new answer to some question
  public function reply()
  {
    $answer_text = request()->input('answer');
    $question_id = request()->session()->get('forum_question_id');
    $answer = ForumAnswers::create([
      'answer' => $answer_text,
      'forum_question_id' => $question_id,
      'user_id' => Auth::user()->user_id
    ]);
    return redirect()->back();
  }

  public function newQuestion()
  {
    return view('pages.pregunta');
  }

  # Creates a new Question
  public function askQuestion()
  {
    # Retrieves the user-given info
    $user_id = Auth::user()->user_id;
    $title = request()->input('title');
    $tags = request()->input('tags');
    $body = request()->input('body');

    # Creates the model
    ForumQuestion::create(['title' => $title,
    'body' => $body,
    'tags' => $tags,
    'slug' => str_slug($title),
    'user_id' => $user_id
    ]);

    # Finds the question previously saved and renders it
    $question = ForumQuestion::where(['title' => $title, 'user_id' => $user_id])->first();
    return redirect('pregunta/'.str_slug($title));
  }
}
