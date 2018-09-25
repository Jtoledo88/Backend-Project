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
                     Creando Personal
                      <small>Modulo de Personal</small>
                  </h1>

    <form action="{{ route('teams') }}" method="POST" enctype="multipart/form-data">
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
            <input type="text" class="form-control" id="nombre" name="nombre" 
            placeholder="Ingrese nombre" value="{{ old('nombre') }}">
        </div>

    <div class="form-group has-feedback">
        <textarea class="form-control" id="cargo" name="cargo" placeholder="Ingresa cargo">{{ old('cargo') }}</textarea>
    </div>
    <div class="form-group has-feedback">
        <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Ingresa mensaje">{{ old('mensaje') }}</textarea>
    </div>
    

   
    <button class="form-control btn btn-primary">
    Enviar
    </button>
    </form>

</div>
 @include('admin.footer')
</body>
</html>
