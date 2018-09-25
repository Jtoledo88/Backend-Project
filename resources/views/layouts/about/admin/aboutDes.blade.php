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
                     Listado de Descripciones
                      <small>Modulo de Descripciones</small>
                  </h1>

             
             <!-- <div class="alert alert-success alert-dismissible" role="alert">
             <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
             <strong>Info!</strong> 
            </div> -->
          

                

                <a href="{{ route('admin') }}" class="btn btn-primary">
                <i class="glyphicon glyphicon-list"></i> Atras
                </a>

             <hr>

             <table class="table table-bordered">
             <tr>
                 <th>#</th>
                 <th>Imagen</th>
                 <th>Titulo</th>
                 <th>Descripcion</th>
                 
                
                 <th colspan="2">Actions</th>
             </tr>
 
             @foreach($abouts as $about)
         <tr>
             <td>{{ $about->id }}</td>
             <td>{{ $about->image_name }}</td>
             <td>{{ $about->titulo }}</td>
             <td>{{ $about->descripcion }}</td>
             
            
             
             <td>
                
                 <a href="{{ route('abouts.edit',$about->id) }}" class="btn btn-primary">
                     <i class="glyphicon glyphicon-edit"></i>
                </a>
             </td>
            
         </tr>
 
 
         @endforeach
         
        
         </table>
</div>
 

              

              @include('admin.footer')
</body>
</html>