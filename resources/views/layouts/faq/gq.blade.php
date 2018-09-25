@foreach ($faq2s as $faq2)
 <!-- General Questions -->
 <div class="content-lg container">
            <div class="row margin-b-20">
                <div class="col-sm-6">
                    <h2>{{ $faq2->title }}</h2>
                </div>
            </div>
            <!--// end row -->

            <div class="row">
                <div class="col-sm-7 sm-margin-b-50">
                    <div class="margin-b-30">
                        <p>{{ $faq2->description }}</p>
                    </div>
                    <p>{{ $faq2->description2 }}</p>
                </div>
                <div class="col-sm-4 col-sm-offset-1">
                    <img class="img-responsive" src="img/640x380/01.jpg" alt="Our Office">
                </div>
            </div>
            <!--// end row -->
        </div>
        <!-- End General Questions -->
        @endforeach