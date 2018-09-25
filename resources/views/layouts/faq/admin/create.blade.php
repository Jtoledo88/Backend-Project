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
                     Creado de FAQ
                      <small>Modulo de Preguntas Frecuentes</small>
                  </h1>

    <form action="{{ route('faqs') }}" method="POST" enctype="multipart/form-data">
    {!! csrf_field() !!} <!--  asi evitamos que un robot use nuestro formulario -->
    {!! method_field('POST') !!}


    <div class="form-group has-feedback">
            <input type="text" class="form-control" id="question" name="question" 
            placeholder="Ingrese Pregunta" value="{{ old('question') }}">
        </div>

    <div class="form-group has-feedback">
        <textarea class="form-control" id="response" name="response" placeholder="Ingresa Respuesta">{{ old('content') }}</textarea>
    </div>

   
    <button class="form-control btn btn-primary">
    Enviar
    </button>
    </form>

</div>
 @include('admin.footer')
</body>
</html>
