<!-- Features -->
<div class="section-seperator">
            <div class="content-lg container">
                <div class="row">
                   
                    <?php $i = 3 ?>
                        @foreach( $infos as $info )
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".{{ $i }}s">
                            <h3>{{ $info->titulo }}</h3>
                            <p>{{ $info->desc_res }}</p>
                            <a class="link"data-name="{{ $info->titulo }}"
                    data-toggle="modal"
                    data-target="#read_{{$info->id}}">Read More</a>
                        </div>
                    </div> 
                    
                    <div class="modal fade" id="read_{{$info->id}}" tabindex="-1"
                 role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                       <h3> {{ $info->titulo }}</h3>
                        </div>
                        <div class="modal-body">
                       {{ $info->descripcion }}
                        </div>
                        <div class="modal-footer">
                        
                                <button type="button"
                                        class="btn btn-default"
                                        data-dismiss="modal">Salir
                                </button>
                               
                            
                        </div>
                    </div>
                </div>
         </div>
         <?php $i-- ?>
                      @endforeach 
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Features -->