<!-- Team -->
<div class="bg-color-sky-light">
            <div class="content-lg container">
                <div class="row margin-b-40">
                    <div class="col-sm-6">
                        <h2>Conoce a Nuestro Equipo</h2>
                        <p>Este es nuestro destacado equipo trabajo, el cual puede hacer realidad tus sueños!!!</p>
                    </div>
                </div>
                <!--// end row -->

                <div class="row">

                @foreach( $teams as $team)
                    <!-- Team -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="bg-color-white margin-b-20">
                            <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                                <img class="img-responsive" src="{{ asset('img/770x860/'.$team->image_name) }}" alt="Team Image">
                            </div>
                        </div>
                        <h4><a href="#">{{ $team->nombre }}</a> <span class="text-uppercase margin-l-20">{{ $team->cargo }}</span></h4>
                        <p>{{ $team->mensaje }}</p>
                        
                    </div>
                    <!-- End Team -->
                    @endforeach
                   
                </div>
                <!--// end row -->
            </div>
        </div>
<!-- End Team -->