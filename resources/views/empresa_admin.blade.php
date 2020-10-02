@extends('welcome')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          <br>
            <div class="card">
                <div class="card-header">Empresas</div>
                <div class="card-body">
                    <br>
                    <table class="table" id="example1">
                        <thead class="thead-dark">
                        <tr>

                            <th scope="col">Clave</th>
                            <th scope="col">Empresa</th>
                            <th scope="col">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                          @foreach ($empresas as $empresa)
                            <tr>
                                <td>{{$empresa->clave}}</td>
                                <td>{{$empresa->nombre}}</td>
                                <td>
                                    <a href="#" class="btn btn-warning" data-target="#modal-update-{{$empresa->id}}" data-toggle="modal">Editar</a>
                                    <a href="#" id="eliminar" data-target="#modal-eliminar-{{$empresa->id}}" data-toggle="modal" style='width:40px; height:27px'>
                                        <button type="button" class="btn btn-danger"> Elimnar</button></a>
                                </td>
                            </tr>
                            <div class="container text-left">
                            @include('modalupdate')
                            @include('modaleliminar')
                            </div>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection