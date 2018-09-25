 <!-- Testimonials -->
 <div class="content-lg container">
            <div class="row">
                <div class="col-sm-9">
                    <h2>Porque los Clientes Escogen Asentus?</h2>

                    <!-- Swiper Testimonials -->
                    <div class="swiper-slider swiper-testimonials">
                        <!-- Swiper Wrapper -->
                        <div class="swiper-wrapper">
                            @foreach($testimonials as $testimonial)
                            <div class="swiper-slide">
                                <blockquote class="blockquote">
                                    <div class="margin-b-20">
                                        {{ $testimonial->texto}}
                                    </div>
                                    
                                    <p><span class="fweight-700 color-link">{{ $testimonial->escritor}}</span>, Metronic Customer</p>
                                </blockquote>
                            </div>
                            @endforeach
                        </div>
                        <!-- End Swiper Wrapper -->

                        <!-- Pagination -->
                        <div class="swiper-testimonials-pagination"></div>
                    </div>
                    <!-- End Swiper Testimonials -->
                </div>
            </div>
            <!--// end row -->
        </div>
        <!-- End Testimonials -->