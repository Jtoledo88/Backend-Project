<div class="row margin-b-50">
    <!-- Our Exceptional Solutions -->
    @foreach($products as $product)
    <div class="col-sm-4 sm-margin-b-50">
        <div class="margin-b-20">
            <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                <img class="img-responsive" src="{{ asset('img/images/'.$product->image_name) }}" alt="Our Exceptional Solutions Image">
            </div>
        </div>
        <h3><a href="{{ route('pricing') }}">{{ $product->title }}</a> <span class="text-uppercase margin-l-20">{{ $product->subtitle }}</span></h3>
        <p>{{ $product->text }}</p>
       
       
        <a class="link"data-name="{{ $product->title }}"
                    data-toggle="modal"
                    data-target="#read_{{$product->id}}">Read More</a>
    </div>
    <div class="modal fade" id="read_{{$product->id}}" tabindex="-1"
                 role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h3>  {{ $product->title }} </h3>
                        </div>
                        <div class="modal-body">
                            <p> {{ $product->text }} </p>
                            <p class="nombre"></p>
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
    @endforeach
    <!-- End Our Exceptional Solutions -->
</div>
</div>
</div>