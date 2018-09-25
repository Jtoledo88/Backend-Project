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
                     Editado de Opinión
                      <small>Modulo de Preguntas Frecuentes</small>
                  </h1>

                  <form action="{{ route('review.update', $testimonial->id) }}" method="POST">
    {!! csrf_field() !!} <!--  asi evitamos que un robot use nuestro formulario se utiliza put para poder editar el otro controlador que ya fue creado -->
    {!! method_field('PUT') !!}
    <div class="form-group has-feedback">
        <input type="text" class="form-control" id="texto" name="texto" placeholder="Ingresa Pregunta" value="{{ $testimonial->texto }}">
    </div>

   
    <div class="form-group has-feedback">
        <textarea class="form-control" id="escritor" name="escritor" placeholder="Ingresa Respuesta">{{ $testimonial->escritor }}</textarea>
    </div>

   
    <button class="form-control btn btn-warning">
    Guardar
    </button>
    </form>

</div>   

@include('admin.footer')
</body>
</html>             