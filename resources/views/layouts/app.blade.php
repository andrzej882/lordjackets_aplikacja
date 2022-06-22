<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/frontend/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/frontend/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/frontend/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/frontend/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/frontend/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/frontend/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/frontend/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/frontend/custom.css') }}" type="text/css">

    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>

    <script src="https://kit.fontawesome.com/dadb75eae3.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="preloder">
        <div class="loader"></div>
    </div>

<div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
            <li>
                <li><span class=" mila icon_search search-switch"></span></li>
                <li>
                    <a href="{{ route('shopcart') }}"><span class="fila icon_cart_alt"></span>
                </a>
            </li>
        </ul>
        <div class="offcanvas__logo">
            <a href="/"><img src="" alt=""></a>
        </div>
        <div>
        <nav>
                        <ul style = "list-style-type: none;">
                            <li><a class="restlink" style = "color:black" href="{{ route('home') }}">{{ __('Strona główna') }}</a></li>
                            <li><a class="restlink" style = "color:black" href="{{ route('shop') }}">Damskie</a></li>
                            <li><a class="restlink" style = "color:black" href="{{ route('shop') }}">Męskie</a></li>
                            <li><a class="restlink" style = "color:black" href="{{ route('faq') }}">Pomoc</a></li>
                            <li><a class="restlink" style = "color:black" href="{{ route('contact') }}">Kontakt</a></li>

                        </ul>
                    </nav>


        </div>

    </div>

    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('img/logo.png') }}" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <nav class="header__menu">
                        <ul>
                            <li><a class="restlink" href="{{ route('home') }}">{{ __('Strona główna') }}</a></li>
                            <li><a class="restlink" href="{{ route('shop') }}">Damskie</a></li>
                            <li><a class="restlink" href="{{ route('shop') }}">Męskie</a></li>
                            <li><a class="restlink" href="{{ route('faq') }}">Pomoc</a></li>
                            <li><a class="restlink" href="{{ route('contact') }}">Kontakt</a></li>

                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__right">
                        <ul class="header__right__widget">
                            <li><div class="account-icons text-center">
                            <span class="far fa-user" aria-expanded="false"></span>
                            <p class="d-block header_icon_desc">Konto</p>

                                    <p class="d-block header_icon_desc"></p>
                            </div>
                            </li>
                            <li>
                            <div class="search-icons text-center search-switch">
                            <span class="icon_search"></span>
                            <p class="d-block header_icon_desc">Wyszukaj</p>
                            </div>
                            </li>
                            <li>
                            <a href="{{ route('shopcart') }}">
                            <div class="cart-icons text-center">
                            <span class="icon_cart_alt"></span>
                                <p class="d-block header_icon_desc">Koszyk</p>
                            </div>
                            </a>
                            </li>
                        </ul>
                        </div>
                    </div>
            </div>

                            <div class="canvas__open">
                            <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>

<div class = "row">
        <div class="offset-10">
            <ul class = "list-group toogle-div position-absolute col-2 border-0 float-right" style = "display:none;">

        <li class="list-group-item">
                <h5 class = "h5_class">Jesteś użytkownikiem?<br /></h5>
               <a class = "color_button btn btn-primary button_class" href="{{route('login')}}">Logowanie</a>
        </li>
        <li class="list-group-item class2">
                <h5 class = "h5_class">Nowy użytkownik?<br /></h5>
                <a class = "color_button btn btn-primary button_class2" href="{{route('register')}}">Rejestracja</a>
        </li>
                <li class="list-group-item">
                    <h5 class = "h5_class">Twoje konto<br /></h5>
                    <a class = "color_button btn btn-primary button_class" href="{{route('user.dashboard')}}">Panel klienta</a>
                </li>


            </ul>
    </div>
</div>
    @if (\Session::has('success'))
        <div class="alert alert-success">
           {!! \Session::get('success') !!}
        </div>
    @endif

    @yield('content')
    @yield('homepage')
    @yield('contact')
    @yield('shop')
    @yield('favourites')
    @yield('shopcart')
    @yield('mobileauth')

<section class="services spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-truck"></i>
                    <h6>Darmowa dostawa</h6>
                    <p>Dla zamówień</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-money"></i>
                    <h6>Gwarantowany zwrot</h6>
                    <p>Jesli nie jesteś usatysfakcjonowany</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-support"></i>
                    <h6>Pomoc 24/7</h6>
                    <p>Dedykowana pomoc</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-shield-alt"></i>
                    <h6>Ochrona płatnosci</h6>
                    <p>100% ochrona płatnosci</p>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-7">
                <div class="footer__about">
                    <div class="footer__logo">
                        <a href="/">
                        <img src="{{ asset('img/logo.png') }}" alt="">

                        </a>
                    </div>
                    <p>Sklep z produkcją w Polsce <br />Wysoka jakość <br />na każdy sezon.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-5">
                <div class="footer__widget">
                    <h6>Szybkie linki</h6>
                    <ul>
                        <li><a href="{{ route('about-us') }}">O nas</a></li>
                        <li><a href="{{ route('policy') }}">Regulamin</a></li>
                        <li><a href="{{ route('faq') }}">Pomoc</a></li>
                        <li><a href="{{ route('contact') }}">Kontakt</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-4">
                <div class="footer__widget">
                    <h6>Konto</h6>
                    <ul>
                        <li><a href="{{ route('user.dashboard') }}">Moje konto</a></li>
                        <li><a href="{{ route('user.dashboard') }}">Moje zamówienia</a></li>
                        <li><a href="/shop-cart">Koszyk</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">

                 <div class="footer__copyright__text">
                    <p>LordJackets &copy; <script>document.write(new Date().getFullYear());</script> Wszystkie prawa zastrzeżone</p>
                </div>

            </div>
        </div>
    </div>
</footer>

<div class="search-model">
  <div class = "logo_searching"><img src="{{ asset('img/logo.png') }}" alt="Logo" class = img_logo_search></div>
    <div class="h-75 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form" method="GET" action="{{ route('search') }}">

            <input type="text" id="search-input" name="search-input" placeholder="Szukaj produktów..">
            <br/>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary bg-dark text-center border-0 col-8 mt-4">Szukaj</button>
            </div>
        </form>
    </div>

</div>

@yield('js-scripts')
<script src="{{ asset('js/frontend/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/frontend/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/frontend/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/frontend/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/frontend/mixitup.min.js') }}"></script>
<script src="{{ asset('js/frontend/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('js/frontend/jquery.slicknav.js') }}"></script>
<script src="{{ asset('js/frontend/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/frontend/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('js/frontend/main.js') }}"></script>
<script src="{{ asset('js/frontend/sweetalerts.js') }}"></script>
<script src="{{ asset('js/frontend/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/frontend/checkout-form-validation.js') }}"></script>
@yield('scripts')
</body>
</html>
