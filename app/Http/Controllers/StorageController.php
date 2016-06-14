<?php

namespace App\Http\Controllers;

use File;
use Storage;
use Illuminate\Http\Request;
use App\Http\Requests;

class StorageController extends Controller
{
    public function inicio(){
      return view('pages.uploads');
    }

    public function upload(){
      // Obtenemos el campo file definido en el formulario
      $file = request()->file('file');

      // Ahora obtenemos el nombre correspondiente
      $nombre = $file->getClientOriginalName();

      // Indicamos si queremos guardar el nuevo archivo en el disco local
      Storage::disk('local')->put($nombre, File::get($file));

      return "archivo guardado";
    }

    public function inicioDescarga(){
      return view('pages.downloads');
    }

    public function download(){

      //Obtenemos el nombre del archivo que el user quiere descargar
      $nombre = request()->input('nombre');

      //Obtenemos la url de nuestra carpeta de descargas
      $url = storage_path('app').'/'.$nombre;

      //Verificamos si existe tal archivo
      if(Storage::exists($nombre)){
        return response()->download($url);
      }
      return "no se encontro archivo con el nombre ".$nombre;
    }
}
