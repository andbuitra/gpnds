<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class InfoPageController extends Controller
{
  public function sobreNosotros(){
    return view('pages.about');
  }
  public function puericultura(){
    return view('pages.puericultura');
  }
  public function preguntasFrecuentes(){
    return view('pages.preguntasFrecuentes');
  }
}
