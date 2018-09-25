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
                     Editado de Portada
                      <small>Modulo de Titulos</small>
                  </h1>

                  <form action="{{ route('title.update', $portada->id) }}" method="POST">
    {!! csrf_field() !!} <!--  asi evitamos que un robot use nuestro formulario se utiliza put para poder editar el otro controlador que ya fue creado -->
    {!! method_field('PUT') !!}
    <div class="form-group has-feedback">
        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingresa Titulo" value="{{ $portada->titulo }}">
    </div>

   
    <div class="form-group has-feedback">
        <textarea class="form-control" id="subtitulo" name="subtitulo" placeholder="Ingresa Descripcion">{{ $portada->subtitulo }}</textarea>
    </div>

   
    <button class="form-control btn btn-warning">
    Guardar
    </button>
    </form>

</div>   

@include('admin.footer')
</body>
</html>             