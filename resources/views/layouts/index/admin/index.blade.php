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
                     Listado de Sliders
                      <small>Modulo de Slider</small>
                  </h1>

             
             <!-- <div class="alert alert-success alert-dismissible" role="alert">
             <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
             <strong>Info!</strong> 
            </div> -->
          

                <!-- <a href="{{ route('slider.create') }}" class="btn btn-success">
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
                 <th>Intro</th>
                
                 <th colspan="2">Actions</th>
             </tr>
 
             @foreach($sliders as $slider)
         <tr>
             <td>{{ $slider->id }}</td>
             <td>{{ $slider->title }}</td>
             <td>{{ $slider->intro }}</td>
            
             
             <td>
                
                 <a href="{{ route('slider.edit',$slider->id) }}" class="btn btn-primary">
                     <i class="glyphicon glyphicon-edit"></i>
                </a>
             </td>
             <!-- <td>
                 <button class="btn btn-danger" data-action="{{ route('slider.destroy',$slider->id) }}" data-name="{{ $slider->title }}" data-toggle="modal"
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