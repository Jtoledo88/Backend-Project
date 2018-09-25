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
                     Listado de Portadas
                      <small>Modulo de Titulos</small>
                  </h1>

             
             <!-- <div class="alert alert-success alert-dismissible" role="alert">
             <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
             <strong>Info!</strong> 
            </div> -->
          

                <!-- <a href="{{ route('title.create') }}" class="btn btn-success">
                <i class="glyphicon glyphicon-list"></i> New FAQ
                </a> -->

                <a href="{{ route('admin') }}" class="btn btn-primary">
                <i class="glyphicon glyphicon-list"></i> Atras
                </a>

             <hr>

             <table class="table table-bordered">
             <tr>
                 <th>#</th>
                 <th>Titulo</th>
                 <th>Descripcion</th>
                
                 <th colspan="2">Actions</th>
             </tr>
 
             @foreach($portadas as $portada)
         <tr>
             <td>{{ $portada->id }}</td>
             <td>{{ $portada->titulo }}</td>
             <td>{{ $portada->subtitulo }}</td>
            
             
             <td>
                
                 <a href="{{ route('title.edit',$portada->id) }}" class="btn btn-primary">
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