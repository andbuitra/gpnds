<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function inicio(){
    	return view('pages.index');
    }

    public function sobreNosotros(){
    	return view('pages.about');
    }
    public function puericultura(){
        return view('pages.puericultura');
    }

    public function eventos(){
    	return view('pages.eventos');
    }

    public function contacto(){
    	return view('pages.contacto');
    }

    public function galeria(){
        return view('pages.galeria');
    }

    public function registro(){
    	return view('pages.registro');

    }

	   public function profile(){
    	return view('pages.profile');

    }


	   public function questions(){
    	return view('pages.questions');

    }
    public function cemail(){
        return view('pages.cemail');

    }

     public function tpost(){
        return view('pages.tpost');

    }
    public function library(){
        return view('pages.library');

    }

    public function chatp(){
        return view('pages.chatp');

    }

}
