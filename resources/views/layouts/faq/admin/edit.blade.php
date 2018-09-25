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
                     Editado de FAQ
                      <small>Modulo de Preguntas Frecuentes</small>
                  </h1>

                  <form action="{{ route('faq.update', $faq->id) }}" method="POST">
    {!! csrf_field() !!} <!--  asi evitamos que un robot use nuestro formulario se utiliza put para poder editar el otro controlador que ya fue creado -->
    {!! method_field('PUT') !!}
    <div class="form-group has-feedback">
        <input type="text" class="form-control" id="question" name="question" placeholder="Ingresa Pregunta" value="{{ $faq->question }}">
    </div>

   
    <div class="form-group has-feedback">
        <textarea class="form-control" id="response" name="response" placeholder="Ingresa Respuesta">{{ $faq->response }}</textarea>
    </div>

   
    <button class="form-control btn btn-warning">
    Guardar
    </button>
    </form>

</div>   

@include('admin.footer')
</body>
</html>             