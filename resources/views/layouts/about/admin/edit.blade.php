<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
@include('layouts/general.head')
</head>
<body>
@include('admin.header')
@include('admin.parallaxAdmin')
<div class="col-md-8">
    
                 <h1 class="page-header">
                     Listado de Infos
                      <small>Modulo de info</small>
                  </h1>

                  <form action="{{ route('infos.update', $info->id) }}" method="POST">
    {!! csrf_field() !!} <!--  asi evitamos que un robot use nuestro formulario se utiliza put para poder editar el otro controlador que ya fue creado -->
    {!! method_field('PUT') !!}
    <div class="form-group has-feedback">
        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingresa Titulo" value="{{ $info->titulo }}">
    </div>

   
    <div class="form-group has-feedback">
        <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Ingresa descripcion">{{ $info->descripcion }}</textarea>
    </div>
    <div class="form-group has-feedback">
        <textarea class="form-control" id="desc_res" name="desc_res" placeholder="Ingresa Contenido">{{ $info->desc_res }}</textarea>
    </div>

   
    <button class="form-control btn btn-warning">
    Guardar
    </button>
    </form>

    @include('admin.footer')
</body>
</html>             