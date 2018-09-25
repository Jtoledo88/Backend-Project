<!-- About -->
<div class="content-lg container">
            <div class="row margin-b-20">
                <div class="col-sm-6">
                    <h2>{{ $abouts[0]->titulo }}</h2>
                </div>
            </div>
            <!--// end row -->

            <div class="row">
                <div class="col-sm-7 sm-margin-b-50">
                    <div class="margin-b-30">

                        <p>{{ $abouts[0]->descripcion }}</p>
                        
                    </div>
                </div>
                <div class="col-sm-4 col-sm-offset-1">
                    <img class="img-responsive" src="{{ asset('/img/640x380/'.$abouts[0]->image_name) }}" alt="Our Office">
                </div>
            </div>
            <!--// end row -->
</div>
 <!-- End About -->