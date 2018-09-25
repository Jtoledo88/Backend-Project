<!--========== HEADER ==========-->
<header class="header navbar-fixed-top">
<!-- Navbar -->
<nav class="navbar" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="menu-container">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="toggle-icon"></span>
            </button>

            <!-- Logo -->
            <div class="logo">
                <a class="logo-wrap" href="{{ route('welcome') }}">
                    <img class="logo-img logo-img-main" src="img/logo.png" alt="Asentus Logo">
                    <img class="logo-img logo-img-active" src="img/logo-dark.png" alt="Asentus Logo">
                </a>
            </div>
            <!-- End Logo -->
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse nav-collapse">
            <div class="menu-container">
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item"><a class="nav-item-child nav-item-hover" href="{{ route('welcome') }}">Inicio</a></li>
                    <li class="nav-item"><a class="nav-item-child nav-item-hover" href="{{ route('pricing') }}">Precios</a></li>
                    <li class="nav-item"><a class="nav-item-child nav-item-hover" href="{{ route('about') }}">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-item-child nav-item-hover" href="{{ route('product') }}">Productos</a></li>
                    <li class="nav-item"><a class="nav-item-child nav-item-hover" href="{{ route('faq') }}">Preguntas Frecuentes</a></li>
                    <li class="nav-item"><a class="nav-item-child nav-item-hover" href="{{ route('contact') }}">Contacto</a></li>
                    @if(Auth::check())
                    <li class="dropdown"><a href="" class="dropdown-toggle nav-item-child nav-item-hover" data-toggle="dropdown"
                            role="button"
                            aria-expanded="false"
                            aria-haspopup="true">
                            {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}" onclick="
                                    event.preventDefault();
                                    document.getElementById('logout-form').submit();">Logout</a>
                                    <form action="{{ route('logout') }}" id="logout-form" method="post">
                                    {!! csrf_field() !!}
                                    </form>
                                </li>
                                <li>
                                    <a href="{{ route('admin') }}" >Modificar</a>
                                    
                                </li>
                                @endif
                </ul>
            </div>
        </div>
        <!-- End Navbar Collapse -->
    </div>
</nav>
<!-- Navbar -->
</header>
<!--========== END HEADER ==========-->