@extends('layouts.master')

@section('content')

<div class="row" style="margin-top:40px">
   <div class="offset-md-3 col-md-6">
      <div class="card">
         <div class="card-header text-center">
            Añadir producto
         </div>
         <div class="card-body" style="padding:30px">

            <form action="#" method="post" enctype="multipart/form-data">

            @csrf

            <div class="form-group">
               <label for="nombre">Nombre</label>
               <input type="text" name="nombre" id="nombre" class="form-control">
            </div>

            <div class="form-group">
              <label for="precio">Precio</label>
              <input type="number" name="precio" id="precio" class="form-control">
            </div>

            <div class="form-group">
              <label for="categoria">Categoría</label>
              <input type="text" name="categoria" id="categoria" class="form-control">
            </div>

            <div class="form-group">
              <label for="imagen">Imagen</label>
              <input type="text" name="imagen" id="imagen" class="form-control">
            </div>

            <div class="form-group">
               <label for="descripcion">Descripción</label>
               <textarea name="descripcion" id="descripcion" class="form-control" rows="3"></textarea>
            </div>

            <div class="form-group text-center">
               <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                   Añadir producto
               </button>
            </div>

          </form>

         </div>
      </div>
   </div>
</div>

@stop
