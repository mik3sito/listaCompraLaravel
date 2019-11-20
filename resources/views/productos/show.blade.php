@extends('layouts.master')

@section('content')

    Detalle Producto {{ $arrayProductos[0] }}
    <div class="row">

        <div class="col-sm-4">

            <img src="https://picsum.photos/200/300/?random" style="height:200px"/>

        </div>
        <div class="col-sm-8">

            <h1>{{$arrayProductos[0]}}</h1>
            <h2>Categoria :{{$arrayProductos[1]}}</h2>
            <h3>Estado: Producto actualmente comprado</h3>
            <button type="button" class="btn btn-danger">Pendiente de compra</button>
            <button type="button" class="btn btn-warning">Editar Producto</button>
            <button type="button" class="btn btn-default">Volver al listado</button>
        </div>
    </div>

@stop
