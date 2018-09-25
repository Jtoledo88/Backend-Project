<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts/general.head')
</head>
<body>
@include('layouts/general.header')


@include('layouts/index.slider')
@include('layouts/about.service')

<!-- Latest Products -->
<div class="content-lg container">
<div class="row margin-b-40">
    <div class="col-sm-6">
        <h2>Ultimos Productos</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation</p>
    </div>
</div>
<!--// end row -->

@include('layouts/products.producto')
@include('layouts/pricing.clients-logo')
@include('layouts/index.testimonials-h')
@include('layouts/pricing.info-pricing')
@include('layouts/products.clients')
@include('layouts/index.portafolio')



@include('layouts/general.footer')
</body>
</html>