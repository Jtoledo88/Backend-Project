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
                     Listado de Precios
                      <small>Modulo de Paquetes</small>
                  </h1>
                              
                <!-- <a href="{{ route('pricing.create') }}" class="btn btn-success">
                <i class="glyphicon glyphicon-list"></i> Nueva FAQ
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
                 <th>Precio</th>
                 <th>Ventaja 1</th>
                 <th>Ventaja 2</th>
                 <th>Ventaja 3</th>
                
                 <th colspan="2">Actions</th>
             </tr>
 
             @foreach($pricings as $pricing)
         <tr>
             <td>{{ $pricing->id }}</td>
             <td>{{ $pricing->titulo }}</td>
             <td>{{ $pricing->descripcion }}</td>
             <td>{{ $pricing->precio }}</td>
             <td>{{ $pricing->ad1 }}</td>
             <td>{{ $pricing->ad2 }}</td>
             <td>{{ $pricing->ad3 }}</td>
            
             
             <td>
                
                 <a href="{{ route('pricing.edit',$pricing->id) }}" class="btn btn-primary">
                     <i class="glyphicon glyphicon-edit"></i>
                </a>
             </td>
             <!-- <td>
                 <button class="btn btn-danger" data-action="" data-name="{{ $pricing->question }}" data-toggle="modal"
                  data-target="#confirm-delete">
                      <i class="glyphicon glyphicon-trash"></i>
                 </button>
                               
             </td> -->
         </tr>
 
 
         @endforeach
         
        
         </table>
</div>


              

              @include('admin.footer')
</body>
</html>