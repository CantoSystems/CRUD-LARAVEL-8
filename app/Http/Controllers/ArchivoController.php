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
         $request->file('archivo')->store('public'.'/'.$request->empresa);
         dd("subido y guardado");
  }
}
