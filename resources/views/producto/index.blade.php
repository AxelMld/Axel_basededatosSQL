@extends('layouts.plantillabase');


@section('contenido')

<button href="articulos/create" type="button" class="btn btn-success">Agregar</button>

<table class="table table-bordered">
    <table>
        <tr>
            <tr scope="col">id</tr>
            <tr scope="col">Nombre</tr>
            <tr scope="col">Descripcion</tr>
            <tr scope="col">Categoria</tr>
            <tr scope="col">Sucursal</tr>
        </tr>
      <tbody>
        @foreach ($productos as $producto)
        <tr>
            <td>{{$producto->id  }} </td>
            <td>{{$producto->nombre  }} </td>
            <td>{{$producto->descripcion}} </td>
            <td>{{$producto->categoria}} </td>
            <td>{{$producto->sucursal}} </td>
            <td>
                <button href="articulos/create" type="button" class="btn btn-success">Agregar</button>
                

            </td>
        </tr>
            
        @endforeach
  </table>

@endsection