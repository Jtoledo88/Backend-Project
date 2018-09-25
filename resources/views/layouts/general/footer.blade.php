 <!--========== FOOTER ==========-->
 <footer class="footer">
            <!-- Links -->
            <div class="footer-seperator">
                <div class="content-lg container">
                    <div class="row">
                        <div class="col-sm-2 sm-margin-b-50">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a class="footer-list-link" href="{{ route('welcome') }}">Inicio</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="{{ route('about') }}">Nosotros</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="{{ route('product') }}">Productos</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="{{ route('pricing') }}">Precios</a></li>
                                <!-- <li class="footer-list-item"><a class="footer-list-link" href="#">Clients</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Careers</a></li> -->
                                <li class="footer-list-item"><a class="footer-list-link" href="{{ route('contact') }}">Contáctenos</a></li>
                                <!-- <li class="footer-list-item"><a class="footer-list-link" href="#">Terms</a></li> -->
                            </ul>
                            <!-- End List -->
                        </div>
                        <div class="col-sm-4 sm-margin-b-30">
                            <!-- List -->
                            <!-- <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Twitter</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Facebook</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Instagram</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">YouTube</a></li>
                            </ul> -->
                            <!-- End List -->
                        </div>
                        <div class="col-sm-5 sm-margin-b-30">
                            <h2 class="color-white">Send Us A Note</h2>
                            <form method='post' action="{{ route('mail') }}">
                           {!! csrf_field() !!}
                           <input type="text" class="form-control footer-input margin-b-20" name="name" placeholder="Name" required>
                           <input type="email" class="form-control footer-input margin-b-20" name="email" placeholder="Email" required>
                           <input type="text" class="form-control footer-input margin-b-20" name="phone" placeholder="Phone" required>
                           <textarea class="form-control footer-input margin-b-30" rows="6" name="message" placeholder="Message" required></textarea>
                           <button type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Submit</button>
                           </form>
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
            <!-- End Links -->

            <!-- Copyright -->
            <div class="content container">
                <div class="row">
                    <div class="col-xs-6">
                        <img class="footer-logo" src="img/logo.png" alt="Asentus Logo">
                    </div>
                    <div class="col-xs-6 text-right">
                        <p class="margin-b-0"><a class="color-base fweight-700" href="http://keenthemes.com/preview/asentus/">Asentus</a> Theme Powered by: <a class="color-base fweight-700" href="http://www.keenthemes.com/">KeenThemes.com</a></p>
                    </div>
                </div>
                <!--// end row -->
            </div>
            <!-- End Copyright -->
        </footer>
        <!--========== END FOOTER ==========-->

       <!-- Back To Top -->
       <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

       <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
       <!-- CORE PLUGINS -->
       <script src="vendor/jquery.min.js" type="text/javascript"></script>
       <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
       <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

       <!-- PAGE LEVEL PLUGINS -->
       <script src="vendor/jquery.easing.js" type="text/javascript"></script>
       <script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
       <script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
       <script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
       <script src="vendor/jquery.parallax.min.js" type="text/javascript"></script>
       <script src="vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>

       <!-- PAGE LEVEL SCRIPTS -->
       <script src="js/layout.min.js" type="text/javascript"></script>
       <script src="js/components/wow.min.js" type="text/javascript"></script>
       <script src="js/components/gmap.min.js" type="text/javascript"></script>
       <script src="js/components/swiper.min.js" type="text/javascript"></script>
       <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U&amp;callback=initMap" async defer></script>

















