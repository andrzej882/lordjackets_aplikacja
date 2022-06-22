@extends('layouts.app')
@section('content')
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.html"><i class="fa fa-home"></i>Strona główna</a>
                        <a href="#">Kurtki</a>
                        <span>Kurtka męska</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__left product__thumb nice-scroll">

                            <a class="pt active" href="#photo-1">
                                <img src='{{ asset("/images/men/jeans_B_1.jpg") }}' alt="">
                            </a>
                            <a class="pt" href="#photo-2">
                                <img src='{{ asset("/images/men/jeans_B_2.jpg") }}' alt="">
                            </a>
                            <a class="pt" href="#photo-3">
                                <img src='{{ asset("/images/men/jeans_B_3.jpg") }}' alt="">
                            </a>
                        </div>
                        <div class="product__details__slider__content">
                            <div class="product__details__pic__slider owl-carousel">
                                <img data-hash="product-1" class="product__big__img" src="{{ asset('/images/men/jeans_B_1.jpg') }}" alt="">
                                <img data-hash="product-2" class="product__big__img" src="{{ asset('/images/men/jeans_B_2.jpg') }}" alt="">
                                <img data-hash="product-3" class="product__big__img" src="{{ asset('/images/men/jeans_B_3.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product__details__text">
                        <h3>
                        Kurtka męska - XL

                         </h3>
                        <div class="product__details__price">
                                100 zł
                        </div>
                        <p></p>
                        <div class="product__details__button">
                            <div class="quantity">
                                <span>Quantity:</span>
                                <div class="pro-qty">

                                    <form id="add-to-cart" action="{{ route('shopcart') }}" method="GET" class="d-none">
                                        @csrf
                                    </form>

                                    <input type="number" id="number__quantity" name="quantity" form="add-to-cart" value="1" min="1" max="50">
                                </div>
                            </div>
                            <a style="cursor: pointer" href="{{ route('shopcart') }}" class="cart-btn"><span class="icon_cart_alt"></span> Dodaj do koszyka</a>
                        </div>
                        <div class="product__details__widget">
                            <ul>
                                <li>
                                    <span>Kolor:</span>
                                    <div class="color__checkbox">
                                        <label for="red">
                                            <input type="radio" name="color__radio" id="red" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label for="black">
                                            <input type="radio" name="color__radio" id="black">
                                            <span class="checkmark black-bg"></span>
                                        </label>
                                        <label for="grey">
                                            <input type="radio" name="color__radio" id="grey">
                                            <span class="checkmark grey-bg"></span>
                                        </label>

                                    </div>
                                </li>
                                <li>
                                    <span>Rozmiar:</span>
                                    <div class="size__btn">
                                        <label for="xs-btn" class="active">
                                            <input type="radio" id="xs-btn">

                                        </label>
                                        <label for="s-btn">
                                            <input type="radio" id="s-btn">
                                            s
                                        </label>
                                        <label for="m-btn">
                                            <input type="radio" id="m-btn">
                                            m
                                        </label>
                                        <label for="l-btn">
                                            <input type="radio" id="l-btn">
                                            l
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <span>Rabat:</span>
                                    <p>15%</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Kompozycje i konserwacja</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Opis</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <!--<h6>Description</h6>-->
                                <p> Prać w 40 stopniach.</p>
                            </div>

                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <p>  Kurtka skórzana.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->
@endsection
