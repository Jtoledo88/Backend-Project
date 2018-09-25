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
                     Creando Informacion
                      <small>Modulo de informacion</small>
                  </h1>

    <form action="{{ route('infos') }}" method="POST" enctype="multipart/form-data">
    {!! csrf_field() !!} <!--  asi evitamos que un robot use nuestro formulario -->
    {!! method_field('POST') !!}


    <div class="form-group has-feedback">
            <input type="text" class="form-control" id="titulo" name="titulo" 
            placeholder="Ingrese titulo" value="{{ old('titulo') }}">
        </div>

    <div class="form-group has-feedback">
        <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Ingresa descripcion">{{ old('descripcion') }}</textarea>
    </div>
    <div class="form-group has-feedback">
        <textarea class="form-control" id="desc_res" name="desc_res" placeholder="Ingresa descripcion resumida">{{ old('desc_res') }}</textarea>
    </div>

   
    <button class="form-control btn btn-primary">
    Enviar
    </button>
    </form>

</div>
 @include('admin.footer')
</body>
</html>
