<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Http\Controllers\EmpresaController;

class EmpresaController extends Controller
{
   public function index(){
       $empresas= Empresa::all();
       return view('empresa_admin', compact('empresas'));
   }

   public function registrar(Request $request){
   $empresa= new Empresa;
   $empresa->clave= $request->clave_empresa;
   $empresa->nombre= $request->nombre_empresa;
   $empresa->save();
   return redirect()->action([EmpresaController::class, 'index']);
   }

   public function actualizar(Request $request, $id){
    $empresa= Empresa::find($id);
    $empresa->clave= $request->clave_empresa;
   $empresa->nombre= $request->nombre_empresa;
    $empresa->save();
    return redirect()->action([EmpresaController::class, 'index']);
   }
   public function destroy($id)
   {
     $empresa = Empresa::find($id);
     $empresa->delete();
     return redirect()->action([EmpresaController::class, 'index']);
   }
}
