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
                     Editado de Ciudades
                      <small>Modulo de Agencias</small>
                  </h1>

                  <form action="{{ route('city.update', $contact->id) }}" method="POST">
    {!! csrf_field() !!} <!--  asi evitamos que un robot use nuestro formulario se utiliza put para poder editar el otro controlador que ya fue creado -->
    {!! method_field('PUT') !!}
    <div class="form-group has-feedback">
        <input type="text" class="form-control" id="city" name="city" placeholder="Ingresa Ciudad" value="{{ $contact->city }}">
    </div>

    <div class="form-group has-feedback">
        <input type="text" class="form-control" id="title" name="title" placeholder="Ingresa Descripcion" value="{{ $contact->title }}">
    </div>
   
    <div class="form-group has-feedback">
        <textarea class="form-control" id="description" name="description" placeholder="Ingresa Direccion">{{ $contact->description }}</textarea>
    </div>

    <div class="form-group has-feedback">
        <input type="text" class="form-control" id="number" name="number" placeholder="Ingresa Numero" value="{{ $contact->number }}">
    </div>

    <div class="form-group has-feedback">
        <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa Email" value="{{ $contact->email }}">
    </div>

    <button class="form-control btn btn-warning">
    Guardar
    </button>
    </form>

</div>   

@include('admin.footer')
</body>
</html>             