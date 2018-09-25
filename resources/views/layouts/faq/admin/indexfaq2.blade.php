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
                      <small>Modulo de Faqs Description</small>
                  </h1>

             
             <!-- <div class="alert alert-success alert-dismissible" role="alert">
             <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
             <strong>Info!</strong> 
            </div> -->
          

                <a href="{{ route('faq2.create') }}" class="btn btn-success">
                <i class="glyphicon glyphicon-list"></i> New Faq Desc
                </a>

                <a href="{{ route('admin') }}" class="btn btn-primary">
                <i class="glyphicon glyphicon-list"></i> Atras
                </a>
             <hr>

             <table class="table table-bordered">
             <tr>
                 <th>#</th>
                 <th>Titulo</th>
                 <th>Parrafo 1</th>
                 <th>Parrafo 2</th>
                
                 <th colspan="2">Actions</th>
             </tr>
 
             @foreach($faq2s as $faq2)
         <tr>
             <td>{{ $faq2->id }}</td>
             <td>{{ $faq2->title }}</td>
             <td>{{ $faq2->description }}</td>
             <td>{{ $faq2->description2 }}</td>
             
             <td>
                
             <a href="{{ route('faq2.edit',$faq2->id) }}" class="btn btn-primary">
             <i class="glyphicon glyphicon-edit"></i>
        </a>
             </td>
             <td>
                 <button class="btn btn-danger" data-action="{{ route('faq2.destroy',$faq2->id) }}" data-name="{{ $faq2->title }}" data-toggle="modal"
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
                                registro?</p>
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