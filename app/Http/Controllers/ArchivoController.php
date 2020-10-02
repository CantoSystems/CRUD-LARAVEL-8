<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Empresa;

class ArchivoController extends Controller
{
  public function index(){
  $empresas= Empresa::all();
  return view('acciones', compact('empresas'));
  }

  public function subir(Request $request)
  {
    $file= $request->file('archivo');
    $name=$file->getClientOriginalName();
    $ruta=public_path().'/'.$request->nombre;
    $file->move($ruta,$name);
         dd("subido y guardado");
  }
}
