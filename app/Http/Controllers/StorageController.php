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

    # FOR TESTING ONLY - DELETE WHEN ON PRODUCTION
    public function upload(){
      // Obtenemos el campo file definido en el formulario
      $file = request()->file('file');

      // Ahora obtenemos el nombre correspondiente
      $nombre = $file->getClientOriginalName();
      $fixedName = str_replace(':', "-", $nombre);

      // Indicamos si queremos guardar el nuevo archivo en el disco local
      Storage::disk('documentos')->put($fixedName, File::get($file));

      return "subió";

    }

    public function uploadDoc()
    {
      $file = request()->file('file');
      $name = $file->getClientOriginalName();
      $fixedName = str_replace(':', "-", $name);
      Storage::disk('documentos')->put($fixedName, File::get($file));
      if(Storage::disk('documentos')->exists($name)){
        # TODO cambiar por vista
        File::create(array(

        ));
        return "Subida exitosa";
      }
      # TODO cambiar por vista
      return "Paila";
    }

    public function listDocsInLibrary()
    {
      $filenames = Storage::disk('documentos')->allFiles();
      $files = array();
      foreach ($filenames as $filename) {
        $explode = explode('.', $filename);
        $fileInfo = ['url' => storage_path().'/documentos/'.$filename,
                      'name' => $explode[0],
                      'ext' => '.'.$explode[1],
                      'image_uri' => '/assets/img/'.$explode[1].'.png'
                    ];
        array_push($files, $fileInfo);
      }

      
      return view('pages.library')->with(compact('files'));
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
