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
                     Listado de Testimoniales
                      <small>Modulo de testimoniales</small>
                  </h1>

             
             <!-- <div class="alert alert-success alert-dismissible" role="alert">
             <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
             <strong>Info!</strong> 
            </div> -->
          

            <a href="{{ route('testimonials.create') }}" class="btn btn-success">
                <i class="glyphicon glyphicon-list"></i> Nuevo Testimonio
                </a>

                <a href="{{ route('admin') }}" class="btn btn-primary">
                <i class="glyphicon glyphicon-list"></i> Atras
                </a>

             <hr>

             <table class="table table-bordered">
             <tr>
                 <th>#</th>
                 <th>Nota</th>
                 <th>Escritor</th>
                 
                
                 <th colspan="2">Actions</th>
             </tr>
 
             @foreach($testimonials as $testimonial)
         <tr>
             <td>{{ $testimonial->id }}</td>
             <td>{{ $testimonial->nota }}</td>
             <td>{{ $testimonial->escritor }}</td>
             
            
             
             <td>
                
                 <a href="{{ route('testimonials.edit',$testimonial->id) }}" class="btn btn-primary">
                     <i class="glyphicon glyphicon-edit"></i>
                </a>
             </td>
             <td>
                 <button class="btn btn-danger" data-action="{{ route('testimonials.destroy',$testimonial->id) }}" data-name="{{ $testimonial->titulo }}" data-toggle="modal"
                  data-target="#confirm-delete">
                      <i class="glyphicon glyphicon-trash"></i>
                 </button>
                               
             </td>
         </tr>
 
 
         @endforeach
         
        
         </table>
</div>
 
<div class="modal fade" id="confirm-delete" tabindex="-1"
                 role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">

                        </div>
                        <div class="modal-body">
                            <p>¿Seguro que desea eliminar este
                                Testimonial?</p>
                            <p class="nombre"></p>
                        </div>
                        <div class="modal-footer">
                            <form class="form-inline form-delete"
                                  role="form"
                                  method="POST"
                                  action="">
                                {!! method_field('DELETE') !!}
                                {!! csrf_field() !!}
                                <button type="button"
                                        class="btn btn-default"
                                        data-dismiss="modal">Cancelar
                                </button>
                                <button id="delete-btn"
                                        class="btn btn-danger"
                                        title="Eliminar">Eliminar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
              </div>  

              

              @include('admin.footer')
</body>
</html>