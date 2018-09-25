 <!-- Service -->


 <div class="bg-color-sky-light" data-auto-height="true">
            <div class="content-lg container">
                <div class="row row-space-1 margin-b-2">

                 @foreach ($faqs as $faq)

                    <div class="col-sm-6 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
                            <div class="service" data-height="height">
                                <h3>{{ $faq->question }}</h3>
                                <p class="margin-b-5">{{ $faq->response }}</p>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>

                @endforeach
                
                </div>
            </div>
                <!--// end row -->
        </div>
                   
                  
        <!-- End Service -->