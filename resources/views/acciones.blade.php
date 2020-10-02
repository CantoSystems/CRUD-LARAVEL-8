@extends('welcome')

@section('content')
    <div class="container">
        <form method="POST" action="{{route('subir')}}" accept-charset="UTF-8" enctype="multipart/form-data">
            {{ csrf_field() }}
            <label for="archivo"><b>Archivo: </b></label><br>
            <input type="file" name="archivo" required>
             <br><br>
            <label for="">Seleccione la empresa:</label>
            <select name="empresa" id="">
            <option value="">Seleccione una opcion</option>
            @foreach ($empresas as $empresa)
            <option value="{{$empresa->nombre}}">{{$empresa->nombre}}</option>
            @endforeach
            </select>
            <br>
            <input class="btn btn-success" type="submit" value="Enviar" >
          </form>
    </div>
@endsection