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
                     Listado de Personal
                      <small>Modulo de Personal</small>
                  </h1>

             
             <!-- <div class="alert alert-success alert-dismissible" role="alert">
             <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
             <strong>Info!</strong> 
            </div> -->
          

            <a href="{{ route('teams.create') }}" class="btn btn-success">
                <i class="glyphicon glyphicon-list"></i> Nuevo Personal
                </a>

                <a href="{{ route('admin') }}" class="btn btn-primary">
                <i class="glyphicon glyphicon-list"></i> Atras
                </a>

             <hr>

             <table class="table table-bordered">
             <tr>
                 <th>#</th>
                 <th>Imagen</th>
                 <th>Nombre</th>
                 <th>Cargo</th>
                 <th>Mensaje</th>
                 
                
                 <th colspan="2">Actions</th>
             </tr>
 
             @foreach($teams as $team)
         <tr>
             <td>{{ $team->id }}</td>
             <td>{{ $team->image_name }}</td>
             <td>{{ $team->nombre }}</td>
             <td>{{ $team->cargo }}</td>
             <td>{{ $team->mensaje }}</td>
                                      
             
             <td>
                
                 <a href="{{ route('teams.edit',$team->id) }}" class="btn btn-primary">
                     <i class="glyphicon glyphicon-edit"></i>
                </a>
             </td>
             <td>
                 <button class="btn btn-danger" data-action="{{ route('teams.destroy',$team->id) }}" data-name="{{ $team->nombre }}" data-toggle="modal"
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