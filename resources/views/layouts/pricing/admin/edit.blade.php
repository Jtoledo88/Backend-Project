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
                     Editado de Precio
                      <small>Modulo de Paquetes</small>
                  </h1>

                  <form action="{{ route('pricing.update', $pricing->id) }}" method="POST">
    {!! csrf_field() !!} <!--  asi evitamos que un robot use nuestro formulario se utiliza put para poder editar el otro controlador que ya fue creado -->
    {!! method_field('PUT') !!}
    <div class="form-group has-feedback">
        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingresa Titulo" value="{{ $pricing->titulo }}">
    </div>

    <div class="form-group has-feedback">
        <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Ingresa Descripcion">{{ $pricing->descripcion }}</textarea>
    </div>

    <div class="form-group has-feedback">
        <input type="text" class="form-control" id="precio" name="precio" placeholder="Ingresa Precio" value="{{ $pricing->precio }}">
    </div>

    <div class="form-group has-feedback">
        <input type="text" class="form-control" id="ad1" name="ad1" placeholder="Ingresa Ventaja" value="{{ $pricing->ad1 }}">
    </div>

    <div class="form-group has-feedback">
        <input type="text" class="form-control" id="ad2" name="ad2" placeholder="Ingresa Ventaja" value="{{ $pricing->ad2 }}">
    </div>

    <div class="form-group has-feedback">
        <input type="text" class="form-control" id="ad3" name="ad3" placeholder="Ingresa Ventaja" value="{{ $pricing->ad3 }}">
    </div>
    
   
    <button class="form-control btn btn-warning">
    Guardar
    </button>
    </form>

</div>   

@include('admin.footer')
</body>
</html>             