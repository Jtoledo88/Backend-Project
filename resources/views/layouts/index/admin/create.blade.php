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
                     Creado de Slider
                      <small>Modulo de Slider</small>
                  </h1>

    <form action="{{ route('sliders') }}" method="POST" enctype="multipart/form-data">
    {!! csrf_field() !!} <!--  asi evitamos que un robot use nuestro formulario -->
    {!! method_field('POST') !!}


    <div class="form-group has-feedback">
            <input type="text" class="form-control" id="title" name="title" 
            placeholder="Ingrese Titulo" value="{{ old('title') }}">
        </div>

    <div class="form-group has-feedback">
        <textarea class="form-control" id="intro" name="intro" placeholder="Ingresa Intro">{{ old('content') }}</textarea>
    </div>

   
    <button class="form-control btn btn-primary">
    Enviar
    </button>
    </form>

</div>
 @include('admin.footer')
</body>
</html>
