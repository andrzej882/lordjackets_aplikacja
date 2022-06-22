@extends('layouts.app')
@section('contact')

<section class="checkout spad">
        <div class="container">
            <form action="{{ route('place.order') }}" method="GET" name="checkout" class="checkout__form">
            @csrf
                <div class="row">
                    <div class="col-lg-8">
                        <h5>Dane do transakcji</h5>


                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Imię <span>*</span></p>
                                    <input type="text" id="fname" name="fname" min-length="3" placeholder="Imię" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Nazwisko <span>*</span></p>
                                    <input type="text" id="lname" name="lname" min-length="3" placeholder="Nazwisko" required>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Numer telefonu <span>*</span></p>
                                    <input type="text" id="phone" name="phone" min-length="3" placeholder="Numer telefonu" equired>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Email <span>*</span></p>
                                    <input type="email" id="email" name="email" min-length="5" placeholder="Adres e-mail" required>
                                </div>
                            </div>

                                <div class="col-lg-12">
                                <div class="checkout__form__input">
                                    <p>Ulica <span>*</span></p>
                                    <input type="text" id="street" name="street" min-length="3" placeholder="Ulica" required>
                                </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="checkout__form__input">
                                        <p>Numer domu <span>*</span></p>
                                        <input type="text" id="apartment_number" name="apartment_number" min-length="2" placeholder="Numer domu" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="checkout__form__input">
                                        <p>Numer mieszkania <span>*</span></p>
                                         <input type="text" id="house_number" name="house_number" min-length="2" placeholder="Numer mieszkania" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                <div class="checkout__form__input">
                                    <p>Postcode/Zip <span>*</span></p>
                                    <input type="text" id="postcode" name="postcode" min-length="5" placeholder="Kod pocztowy" required>
                                </div>
                                </div>
                                <div class="col-lg-12">
                                <div class="checkout__form__input">
                                    <p>Miasto <span>*</span></p>
                                    <input type="text" id="city" name="city" min-length="3" placeholder="Miejscowość" required>
                                </div>
                                </div>
                                <div class="col-lg-12">
                                <div class="checkout__form__input">
                                    <p>Województwo <span>*</span></p>
                                    <input type="text" id="state" name="state" min-length="3" placeholder="Wojewódzctwo" required>
                                </div>
                                </div>
                                <div class="col-lg-12">
                                <div class="checkout__form__input">
                                    <p> Kraj<span>*</span></p>
                                    <input type="text" id="country" name="country" min-length="3" placeholder="Państwo" required>
                                </div>
                                </div>
                            </div>
                          <!--  </div>-->

                        </div>
                        <div class="col-lg-4">
                            <div class="checkout__order">
                                <h5>Twoje zamówienie</h5>
                                <div class="checkout__order__product">
                                    <ul>
                                        <li>
                                            <span class="top__text">Produkty</span>
                                            <span class="top__text__right">Kwota całkowita</span>
                                        </li>
                                        <li>2 x Kurtka - L<span> {{ 2 * 199.99 }} zł</span></li>
                                    </ul>
                                </div>
                                <div class="checkout__order__total">
                                    <ul>
                                        <li>Dostawa<span>0 zł</span></li>
                                        <li>Kwota całkowita<span>399.98 zł</span></li>

                                        <li>Metoda płatności

                                        <div class="cnt_full text-center">
                                            <div class="cnt_min">
                                            <input type="radio" name="method" id="master-card" value="Master card" checked/><img  class="selected_img" src="{{ asset('img/payment/payment-1.png') }}" alt="">
                                            </div>
                                            <div class="cnt_min">
                                            <input type="radio" name="method" id="visa" value="Visa"/><img class="selected_img" src="{{ asset('img/payment/payment-2.png') }}" alt="">
                                            </div>
                                            <div class="cnt_min">
                                            <input type="radio" name="method" id="discover" value="Discover"/><img class="selected_img" src="{{ asset('img/payment/payment-3.png') }}" alt="">
                                            </div>
                                            <div class="cnt_min">
                                            <input type="radio" name="method" id="paypal" value="Paypal" /><img class="selected_img" src="{{ asset('img/payment/payment-4.png') }}" alt="">
                                            </div>
                                            <div class="cnt_min">
                                            <input type="radio" name="method" id="cirrus" value="Cirrus"/><img class="selected_img" src="{{ asset('img/payment/payment-5.png') }}" alt="">
                                            </div>
                                        </div>

                                        </li>

                                    </ul>
                                </div>
                                <div class="checkout__order__widget">
                                <button type="submit" class="site-btn place-order">Złóż zamówienie</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <script>
    $(document).ready(function(){
        $(".place-order']").click(function(){
            var radioValue = $("input[name='method']:checked").val();
            if(radioValue){
                alert("Your are a - " + radioValue);
            }
        });
    });
</script>

@endsection
