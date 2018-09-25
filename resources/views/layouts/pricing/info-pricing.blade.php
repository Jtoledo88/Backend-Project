  <!-- Pricing -->
  <div class="bg-color-sky-light">
  <div class="content-lg container">
      <div class="row row-space-1">

      @foreach($pricings as $pricing)

@if($pricing->id ===2)

    <div class="col-sm-4 sm-margin-b-2">
              <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                  <!-- Pricing -->
                  <div class="pricing pricing-active">
                      <div class="margin-b-30">
                          <i class="pricing-icon icon-badge"></i>
                          <h3>{{ $pricing->titulo}}  <span> - $</span> {{ $pricing->precio }}</h3>
                          <p>{{ $pricing->descripcion }}</p>
                      </div>
                      <ul class="list-unstyled pricing-list margin-b-50">
                      <li class="pricing-list-item">{{ $pricing->ad1 }}</li>
                      <li class="pricing-list-item">{{ $pricing->ad2 }}</li>
                      <li class="pricing-list-item">{{ $pricing->ad3 }}</li>
                      </ul>
                      <a href="pricing.html" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Choose</a>
                  </div>
                  <!-- End Pricing -->
              </div>
          </div>
@else

    <div class="col-sm-4 sm-margin-b-2">
              <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                  <!-- Pricing -->
                  <div class="pricing">
                      <div class="margin-b-30">
                          <i class="pricing-icon icon-chemistry"></i>
                          <h3>{{ $pricing->titulo}} <span> - $</span> {{ $pricing->precio }}</h3>
                          <p>{{ $pricing->descripcion }}</p>
                      </div>
                      <ul class="list-unstyled pricing-list margin-b-50">
                      <li class="pricing-list-item">{{ $pricing->ad1 }}</li>
                      <li class="pricing-list-item">{{ $pricing->ad2 }}</li>
                      <li class="pricing-list-item">{{ $pricing->ad3 }}</li>
                      </ul>
                      <a href="pricing.html" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Choose</a>
                  </div>
                  <!-- End Pricing -->
              </div>
          </div>

         @endif
   
   
      
         

       

         @endforeach      

        </div>
             <!--// end row -->
    </div>
   </div>