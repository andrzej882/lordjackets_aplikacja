@extends('layouts.app')
@section('shop')

 <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{ route('home')}}"><i class="fa fa-home"></i> Glowna</a>
                        <span>Sklep</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="shop__sidebar">
                        <div class="sidebar__categories">
                            <div class="section-title">
                                <h4>Kategorie</h4>
                            </div>
                            <div class="categories__accordion">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-heading active">
                                            <a data-toggle="collapse" data-target="#collapseOne">Kurtki</a>
                                        </div>
                                        <div id="collapseOne" class="collapse" data-parent="#accordionExample">
                                            <div class="card-body">

                                                <ul>
                                                    <li><a href="">Pikowane</a></li>
                                                    <li><a href="">Skorzane</a></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-heading">
                                            <a data-toggle="collapse" data-target="#collapseTwo">Spodnie</a>
                                        </div>
                                        <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <ul>
                                                <li><a href="">Dzinsowe</a></li>
                                                    <li><a href=""></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-heading">
                                            <a data-toggle="collapse" data-target="#collapseThree">Bluzy</a>
                                        </div>
                                        <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <ul>
                                                    <li><a href="" >Dresowe</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-heading">
                                            <a data-toggle="collapse" data-target="#collapseFour">Akcesoria</a>
                                        </div>
                                        <div id="collapseFour" class="collapse" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <ul>
                                                    <li><a href="">breloki</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar__filter">
                            <div class="section-title">
                                <h4>Sortowanie wg ceny</h4>
                            </div>
                            <div class="filter-range-wrap">

                                <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                data-min="20" data-max="700"></div>
                                <div class="range-slider">
                                    <div class="price-input">

                                    <form id="filtr-by-prize" action="" method="get" class="d-none">

                                    </form>
                                        <br />
                                        <p>Cena:</p>
                                        <input type="text" name="min-amount" id="minamount" form="filtr-by-prize">ZŁ
                                        -
                                        <input type="text" name="max-amount" id="maxamount" form="filtr-by-prize">ZŁ
                                    </div>
                                </div>

                            </div>
                            <br /><br />
                            <a form="filtr-by-prize" style="cursor:pointer" onclick="window.location.reload();">
                                Filtruj
                            </a>
                        </div>
                        <div class="sidebar__sizes">
                            <div class="section-title">
                                <h4>Sortuj wg rozmiaru</h4>
                            </div>
                            <div class="size__list">

                                <form method="get" action="/productsbySize/meskie/kurtki">
                                    <label for="S">
                                        S
                                        <input type="checkbox" id="S" name="checked[]" value="S">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label for="M">
                                        M
                                        <input type="checkbox" id="M" name="checked[]" value="M">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label for="L">
                                        L
                                        <input type="checkbox" id="L" name="checked[]" value="L">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label for="XL">
                                        XL
                                        <input type="checkbox" id="XL" name="checked[]" value="XL">
                                        <span class="checkmark"></span>
                                    </label>

                                    <div class="sidebar__filter">
                                        <div class="filter-range-wrap">
                                            <div class="range-slider">
                                            </div>
                                        </div>

                                        <a style="cursor: pointer;" onclick="window.location.reload();">Filtruj</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="sidebar__color">
                            <div class="section-title">
                                <h4>Sortuj wg koloru</h4>
                            </div>
                            <div class="size__list color__list">

                                <form method="get" id="filtr-by-color" action="/productsbyColor/meskie/kurtki">
                                        <label for="Czarny">
                                            Czarny
                                            <input type="checkbox" id="Czarny" form="filtr-by-color" name="checked-color[]" value="Czarny">
                                            <span class="checkmark"></span>
                                        </label>
                                    <label for="Czerwony">
                                        Czerwony
                                        <input type="checkbox" id="Czerwony" form="filtr-by-color" name="checked-color[]" value="Czerwony">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label for="Brązowy">
                                        Brązowy
                                        <input type="checkbox" id="Brązowy" form="filtr-by-color" name="checked-color[]" value="Brązowy">
                                        <span class="checkmark"></span>
                                    </label>
                            </div>
                            <div class="sidebar__filter">
                                <div class="filter-range-wrap">
                                    <div class="range-slider">
                                    </div>
                                </div>
                                <a style="cursor: pointer;" onclick="window.location.reload();">Filtruj</a>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 products-wrapper">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 single-product">
                            <div class="product__item" href="{{ route('productdetails') }}">
                                <div class="product__item__pic set-bg" data-setbg='{{ asset ("/images/men/jeans_B_1.jpg") }}'>
                                    <ul class="product__hover">
                                        <li><a href='{{ asset("/images/men/jeans_B_1.jpg") }}' class="image-popup"><span class="arrow_expand"></span></a></li>
                                        <li><a href=""><span class="icon_cart_alt"></span></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="/products/details/">Kurtka 1</a></h6>
                                    <div class="product__price">
                                        100 zł
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-product">
                            <div class="product__item" href="{{ route('productdetails') }}">
                                <div class="product__item__pic set-bg" data-setbg='{{ asset ("/images/men/jeans_B_1.jpg") }}'>
                                    <ul class="product__hover">
                                        <li><a href='{{ asset("/images/men/jeans_B_1.jpg") }}' class="image-popup"><span class="arrow_expand"></span></a></li>
                                        <li><a href=""><span class="icon_cart_alt"></span></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="/products/details/">Kurtka 2</a></h6>
                                    <div class="product__price">
                                        50 zł
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-product">
                            <div class="product__item" href="{{ route('productdetails') }}">
                                <div class="product__item__pic set-bg" data-setbg='{{ asset ("/images/men/jeans_B_1.jpg") }}'>
                                    <ul class="product__hover">
                                        <li><a href='{{ asset("/images/men/jeans_B_1.jpg") }}' class="image-popup"><span class="arrow_expand"></span></a></li>
                                        <li><a href=""><span class="icon_cart_alt"></span></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="/products/details/">Kurtka 3</a></h6>
                                    <div class="product__price">
                                       99 zł
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-product">
                            <div class="product__item" href="{{ route('productdetails') }}">
                                <div class="product__item__pic set-bg" data-setbg='{{ asset ("/images/men/jeans_B_1.jpg") }}'>
                                    <ul class="product__hover">
                                        <li><a href='{{ asset("/images/men/jeans_B_1.jpg") }}' class="image-popup"><span class="arrow_expand"></span></a></li>
                                        <li><a href=""><span class="icon_cart_alt"></span></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="/products/details/">Kurtka 4</a></h6>
                                    <div class="product__price">
                                        190 zł
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-product">
                            <div class="product__item" href="{{ route('productdetails') }}">
                                <div class="product__item__pic set-bg" data-setbg='{{ asset ("/images/men/jeans_B_1.jpg") }}'>
                                    <ul class="product__hover">
                                        <li><a href='{{ asset("/images/men/jeans_B_1.jpg") }}' class="image-popup"><span class="arrow_expand"></span></a></li>
                                        <li><a href=""><span class="icon_cart_alt"></span></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="/products/details/">Kurtka 5</a></h6>
                                    <div class="product__price">
                                        50 zł
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 single-product">
                            <div class="product__item" href="{{ route('productdetails') }}">
                                <div class="product__item__pic set-bg" data-setbg='{{ asset ("/images/men/jeans_B_1.jpg") }}'>
                                    <ul class="product__hover">
                                        <li><a href='{{ asset("/images/men/jeans_B_1.jpg") }}' class="image-popup"><span class="arrow_expand"></span></a></li>
                                        <li><a href=""><span class="icon_cart_alt"></span></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="/products/details/">Kurtka 6</a></h6>
                                    <div class="product__price">
                                        200 zł
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 text-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
