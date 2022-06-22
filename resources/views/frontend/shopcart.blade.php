@extends('layouts.app')
@section('shopcart')
 <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{ route('home') }}"><i class="fa fa-home"></i> Strona Główna</a>
                        <span>Koszyk</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="shop-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop__cart__table">
                        <table id="cart">
                            <thead>
                                <tr>
                                    <th>Produkt</th>
                                    <th>Cena<th>
                                    <th>Ilość</th>
                                    <th>Cena całkowita</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr id="1">
                                    <td class="cart__product__item">
                                        <a href="/products/details/1">
                                            <img src="{{ asset("/images/men/jeans_B_1.jpg") }}" alt="">
                                        </a>
                                        <div class="cart__product__item__title">
                                           <a href="/products/details/1">
                                                <h6>Kurtka - L</h6>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="cart__price">199.99 zł</td>
                                    <td class="cart__quantity">
                                        <div class="pro-qty">
                                            <input id="quantity" type="text" value="2">
                                        </div>
                                    </td>
                                    <td class="cart__total">{{ 199.99 * 2}} zł </td>
                                    <td class="cart__close" data-id="1">
                                    <a class="remove-from-cart" data-id="1"><span class="icon_close"></span></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn">
                        <a href="{{ route('home')}}">Kontynuuj zakupy</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn update__btn" style="cursor: pointer">
                        <a class="update-cart-all"><span class="icon_loading"></span>
                           Zaktualizuj koszyk</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                </div>
                <div class="col-lg-4 offset-lg-2">
                    <div class="cart__total__procced">
                        <h6> Całkowita kwota zamówienia</h6>
                        <ul>
                            <li>Kwota<span>399.98 zł</span></li>
                        </ul>
                        <a href="{{ route('checkout')}}"checkout class="primary-btn">Finalizuj transakcję</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @section('scripts')
    <script type="text/javascript">
          $(".update-cart-all").click(function (e) {
              alert("Koszyk został pomyślnie zaktualizowany");
              e.preventDefault();
        });

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();
            if(confirm("Jesteś pewien, że chcesz usunąć ten produkt z koszyka")) {
                e.preventDefault();
            }
        });
    </script>
@endsection
