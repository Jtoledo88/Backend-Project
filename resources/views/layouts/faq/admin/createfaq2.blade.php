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

    <form action="{{ route('faq2s') }}" method="POST" enctype="multipart/form-data">
    {!! csrf_field() !!} <!--  asi evitamos que un robot use nuestro formulario -->
    {!! method_field('POST') !!}


 

    <!-- <div class="form-group has-feedback {{ $errors->has('question') ? 'has-error' : '' }}">
        <input type="text" class="form-control" id="question" name="question" placeholder="Ingresa Titulo" value="{{ old('question') }}">
        @if($errors->has('question'))
            <span class="help-block">
                <strong>{{ $errors->first('question') }}</strong>
            </span>

        @endif
    </div> -->

    <div class="form-group has-feedback">
            <input type="text" class="form-control" id="title" name="title" 
            placeholder="Ingrese Titulo" value="{{ old('title') }}">
        </div>

    <div class="form-group has-feedback">
        <textarea class="form-control" id="description" name="description" placeholder="Ingresa Parrafo 1">{{ old('content') }}</textarea>
    </div>

    <div class="form-group has-feedback">
        <textarea class="form-control" id="description2" name="description2" placeholder="Ingresa Parrafo 2">{{ old('content') }}</textarea>
    </div>

   
    <button class="form-control btn btn-primary">
    Enviar
    </button>
    </form>

</div>
 @include('admin.footer')
</body>
</html>
