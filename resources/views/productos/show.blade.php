@extends('layouts.master')

@section('content')

    Detalle Producto {{ $producto->nombre}}
    <div class="row">

        <div class="col-sm-4">

            <img src="https://picsum.photos/200/300/?random" style="height:200px"/>

        </div>
        <div class="col-sm-8">

            <h1>{{$producto->nombre}}</h1>
            <h2>Categoria :{{$producto->categoria}}</h2>
            <h3>Estado:
              @if($producto->pendiente)
              Producto actualmente comprado
              @else
              Producto en stock
              @endif
            </h3>
            <button type="button" class="btn btn-danger">Pendiente de compra</button>
            <a class="btn btn-warning" href="{{ url('/productos/edit/' . $producto->id ) }}">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                Editar producto</a>
            <a class="btn btn-outline-info" href="{{ action('ProductoController@getIndex') }}">Volver al listado</a>
        </div>
    </div>

@stop
