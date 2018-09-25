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
                     Creado de Clientes
                      <small>Modulo de Clientes</small>
                  </h1>

    <form action="{{ route('clients') }}" method="POST" enctype="multipart/form-data">
    {!! csrf_field() !!} <!--  asi evitamos que un robot use nuestro formulario -->
    {!! method_field('POST') !!}
    <div class="form-group has-feedback {{ $errors->has('image-file') ? 'has-error' : '' }}">
            <input type="file" class="form-control" id="image-file" name="image-file">
            @if($errors->has('image-file'))
                <span class="help-block">
                    <strong>{{ $errors->first('image-file') }}</strong>
                </span>
            @endif
    </div>

    <div class="form-group has-feedback">
            <input type="text" class="form-control" id="title" name="title" 
            placeholder="Ingrese titulo" value="{{ old('title') }}">
        </div>

    <div class="form-group has-feedback">
        <textarea class="form-control" id="resume" name="resume" placeholder="Ingrese resumen">{{ old('content') }}</textarea>
    </div>

   
    <button class="form-control btn btn-primary">
    Enviar
    </button>
    </form>

</div>
 @include('admin.footer')
</body>
</html>