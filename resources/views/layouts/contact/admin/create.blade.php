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
                     Listado de Ciudades
                      <small>Modulo de Agencias</small>
                  </h1>

    <form action="{{ route('contacts') }}" method="POST" enctype="multipart/form-data">
    {!! csrf_field() !!} <!--  asi evitamos que un robot use nuestro formulario -->
    {!! method_field('POST') !!}


    <div class="form-group has-feedback">
            <input type="text" class="form-control" id="city" name="city" 
            placeholder="Ingrese Ciudad" value="{{ old('city') }}">
     </div>

     <div class="form-group has-feedback">
        <input type="text" class="form-control" id="title" name="title" placeholder="Ingrese Descripcion" value="{{ old('title') }}">
    </div>

    <div class="form-group has-feedback">
        <textarea class="form-control" id="description" name="description" placeholder="Ingresa Descripcion">{{ old('content') }}</textarea>
    </div>

    <div class="form-group has-feedback">
            <input type="text" class="form-control" id="number" name="number" placeholder="Ingrese Numero" value="{{ old('number') }}">
        </div>

        <div class="form-group has-feedback">
            <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese Email" value="{{ old('email') }}">
        </div>
   
    <button class="form-control btn btn-primary">
    Enviar
    </button>
    </form>

</div>
 @include('admin.footer')
</body>
</html>
