@foreach ($clients as $client)
<!-- Promo Section -->
<div class="promo-section overflow-h">
            <div class="container">
                <div class="clearfix">
                    <div class="ver-center">
                        <div class="ver-center-aligned">
                            <div class="promo-section-col">
                                <h2>{{ $client->title }}</h2>
                                <p>{{ $client->resume }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="promo-section-img-right">
                <img class="img-responsive" src="{{ asset('img/images/'.$client->image_name) }}" alt="Content Image">
            </div>
        </div>
        @endforeach
        <!-- End Promo Section -->
        <!--========== END PAGE LAYOUT ==========-->