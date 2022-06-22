@extends('layouts.app')
@section('contact')
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.html"><i class="fa fa-home"></i>Główna</a>
                        <span>Kontakt</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__content">
                        <div class="contact__address">
                            <h5>Kontakt</h5>
                            <ul>
                                <li>
                                    <h6><i class="fa fa-map-marker"></i> Adres</h6>
                                    <p>Mazowiecka 69, Rzeszów</p>
                                </li>
                                <li>
                                    <h6><i class="fa fa-phone"></i> Telefon</h6>
                                    <p><span>+48 684-454-545</span></p>
                                </li>
                                <li>
                                    <h6><i class="fa fa-headphones"></i> E-mail</h6>
                                    <p>lordjackets@gmail.com</p>
                                </li>
                            </ul>
                        </div>
                        <div class="contact__form">
                            <h5>Wyslij wiadomosc</h5>
                            <form method="get" action="{{ route('ContactUsForm') }}">
                                @csrf
                                    <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name" placeholder="Imie ">
                                    <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email"  placeholder="Email">
                                    <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" name="subject"
                                    id="subject" placeholder="Temat">
                                    <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message"
                                        rows="3" placeholder="Wiadomosc"></textarea>
                                <button type="submit"  name="send" class="site-btn" style="background-color: black; !important;">Wyslij wiadomosc</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__map">
                        <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d81096.93440278934!2d21.94624656808597!3d50.56617314800739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473d2c95ff42408b%3A0x25160a7e508dd65b!2sStalowa%20Wola!5e0!3m2!1spl!2spl!4v1651272864519!5m2!1spl!2spl"
                        height="780" style="border:0" allowfullscreen="">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
