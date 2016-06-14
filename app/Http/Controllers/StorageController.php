<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Files as Files;
use File;
use Storage;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;

class StorageController extends Controller
{
    public function inicio(){
      return view('pages.uploads');
    }

    # FOR TESTING ONLY - DELETE WHEN ON PRODUCTION
    public function upload(){
      $file = request()->file('file');
      $name = $file->getClientOriginalName();
      $fixedName = str_replace(':', "-", $name);
      Storage::disk('documentos')->put($fixedName, File::get($file));
      if(Storage::disk('documentos')->exists($name)){
        # TODO cambiar por vista
        $explode = explode('.',$name);
        $cantidad = count($explode);
        $arrayNombre = array_slice($explode,0,$cantidad-2);
        $ext = $explode[$cantidad-1];
        $nombre = str_replace('.'.$ext,'',$name);
        Files::create([
          'url' => storage_path('documentos/'.$name),
          'name' => $nombre,
          'ext' => $ext,
          'image_uri' => '/assets/img/'.$ext.'.png',
          'user_id' => Auth::user()->user_id
        ]);
        return redirect()->to('library');;
      }
      # TODO cambiar por vista
      return redirect()->back()->withInput()->withErrors([
        'archivo' => 'El archivo no se pudo guardar'
      ]);
    }

    public function listDocsInLibrary()
    {
      $filenames = DB::select('
        SELECT f.name as fileName, u.name as userName, f.image_uri as image_uri, f.url
        FROM files f
        INNER JOIN users u
        ON u.user_id = f.user_id
      ');

      return view('pages.library')->with(compact('filenames'));
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
