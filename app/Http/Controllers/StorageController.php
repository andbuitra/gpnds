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
  # Shows the upload form
  public function showUploadForm(){
    return view('pages.uploads');
  }

  # Uploads the file
  public function upload(){
    # Gets the file and its name
    $file = request()->file('file');
    $name = $file->getClientOriginalName();

    # fix it's name so it won't mess up in systems like Windows where ":" isn't accepted on filenames.
    $fixedName = str_replace(':', "-", $name);

    # Save the file in the designed disk with it's fixed name
    Storage::disk('documentos')->put($fixedName, File::get($file));

    # Checks if the file exists and sends back to the view
    if(Storage::disk('documentos')->exists($fixedName)){
      # TODO cambiar por vista
      $explode = explode('.',$name);
      $cantidad = count($explode);
      $arrayNombre = array_slice($explode,0,$cantidad-2);
      $ext = $explode[$cantidad-1];
      $nombre = str_replace('.'.$ext,'',$fixedName);
      Files::create([
        'url' => 'storage/documentos/'.$fixedName,
        'name' => $nombre,
        'ext' => $ext,
        'image_uri' => '/assets/img/'.$ext.'.png',
        'user_id' => Auth::user()->user_id
      ]);
      return redirect()->to('library');
    }
    # TODO cambiar por vista
    return redirect()->back()->withInput()->withErrors([
      'archivo' => 'El archivo no se pudo guardar'
    ]);
  }

  # Lists the documents in the library
  public function listDocsInLibrary()
  {

    # Gets all the filenames from the DB

    $filenames = DB::select('
    SELECT f.name as fileName, u.name as userName, f.image_uri as image_uri, f.url, f.ext as ext
    FROM files f
    INNER JOIN users u
    ON u.user_id = f.user_id
    ');

    # Paginates the results and renders them
    $files = Files::paginate(5);

    return view('pages.library')->with(compact('filenames', 'files'));
  }

  public function inicioDescarga(){
    return view('pages.downloads');
  }

  # Download the requested file
  public function downloadThis($filename){

    # Gets the URL from the right disk and checks for the existence of that file
    $url = storage_path('documentos').'/'.$filename;
    if(Storage::disk('documentos')->exists($filename)){
      # If found returns a download response.
      return response()->download($url);
    }
    return "no se encontro archivo con el nombre ".$filename;
  }
}
