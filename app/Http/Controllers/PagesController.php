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

    public function eventos(){
    	return view('pages.eventos');
    }

    public function contacto(){
    	return view('pages.contacto');
    }

    public function blog(){
    	//return view('pages.blog');
    	return "En construcción";
    }

    public function login(){
    	return view('pages.login');
    }

    public function registro(){
    	return view('pages.registro');
    	
    }

}
