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
                     Listado de Faqs Description
                      <small>Modulo de Faqs</small>
                  </h1>

                  <form action="{{ route('faq2.update', $faq2->id) }}" method="POST">
    {!! csrf_field() !!} <!--  asi evitamos que un robot use nuestro formulario se utiliza put para poder editar el otro controlador que ya fue creado -->
    {!! method_field('PUT') !!}
    <div class="form-group has-feedback">
        <input type="text" class="form-control" id="title" name="title" placeholder="Ingresa Titulo" value="{{ $faq2->title }}">
    </div>

   
    <div class="form-group has-feedback">
        <textarea class="form-control" id="description" name="description" placeholder="Ingresa Contenido">{{ $faq2->description }}</textarea>
    </div>

    <div class="form-group has-feedback">
        <textarea class="form-control" id="description2" name="description2" placeholder="Ingresa Contenido">{{ $faq2->description2 }}</textarea>
    </div>
   
    <button class="form-control btn btn-warning">
    Guardar
    </button>
    </form>

</div>   

@include('admin.footer')
</body>
</html>             