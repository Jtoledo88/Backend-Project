<!DOCTYPE html>
<html lang="en" class="no-js">
   @include('layouts/general.head')

    <!-- BODY -->
    <body>

        <!--========== HEADER ==========-->
        @include('layouts/general.header')
        <!--========== END HEADER ==========-->

        <!--========== PARALLAX ==========-->
        @include('layouts/contact.parallax-contact')
        <!--========== PARALLAX ==========-->

        <!--========== PAGE LAYOUT ==========-->
        @include('layouts/contact.list')

        <!-- Google Map -->
        @include('layouts/contact.map')

        <!-- Promo Section -->
        @include('layouts/products.clients')
        <!-- End Promo Section -->
        <!--========== END PAGE LAYOUT ==========-->

        <!--========== FOOTER ==========-->
         @include('layouts/general.footer')

    </body>
    <!-- END BODY -->
</html>