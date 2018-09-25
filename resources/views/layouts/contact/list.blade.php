  <!-- Contact List -->
  <div class="section-seperator">
  <div class="content-lg container">
      <div class="row">
          <!-- Contact List -->
          @foreach ($contacts as $contact)

          <div class="col-sm-4 sm-margin-b-50">
              <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                  <h3><a href="#">{{ $contact->city }}</a> <span class="text-uppercase margin-l-20">{{ $contact->title }}</span></h3>
                  <p>{{ $contact->description }}</p>
                  <ul class="list-unstyled contact-list">
                      <li><i class="margin-r-10 color-base icon-call-out"></i> {{ $contact->number }}</li>
                      <li><i class="margin-r-10 color-base icon-envelope"></i> {{ $contact->email }}</li>
                  </ul>
              </div>
          </div>
          @endforeach
    </div>
</div>
</div> 
         <!-- End Contact List -->