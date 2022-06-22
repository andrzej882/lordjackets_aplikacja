@extends('layouts.app')
@section('content')

<section>
    <div class="col-lg-12 col-md-12 mt-4 d-flex justify-content-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

            <h2 class="text-center mt-2 mb-4">Twoje zamówienia</h2>
            <div class="dashboard-div mt-4">
            <table class="table table-responsive">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Lp.</th>
          <th scope="col">Status</th>
          <th scope="col">Data zamówienia</th>
          <th scope="col">Metoda płatnośći</th>
          <th scope="col">Produkt</th>
          <th scope="col">Ilość</th>
          <th scope="col">Cena</th>
          <th scope="col">Kolor</th>
          <th scope="col">Rozmiar</th>
          <th scope="col">Całkowita wartość zamówienia</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>w realizacji</td>
          <td>28/06/2021</td>
          <td>Master card</td>
          <td>
              Kurtka 1
              Kurtka2
          </td>
          <td>
               2
          </td>
          <td>
              79.99
          </td>
          <td>
              Green
          </td>
          <td>
             XS
          </td>
          <td>159.99</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>w realizacji</td>
            <td>28/06/2021</td>
            <td>Master card</td>
            <td>
                Kurtka 3
                Kurtka 4
            </td>
            <td>
                2
            </td>
            <td>
                79.99
            </td>
            <td>
                Green
            </td>
            <td>
                XS
            </td>
            <td>159.99</td>
        </tr>
      </tbody>
    </table>
    </div>
        <h2 class="text-center mt-2 mb-4">Dane twojego konta</h2>

            <div class="dashboard-div mt-4 text-center user-data">
            <a class="float-right mt-2 mr-2 edit-user-data"><i class="fas fa-user-edit" role="button"></i></a><br />

                <h5 class="mt-4">Twoje konto</h5>
                    <h6 class="mt-4">Imię<h6>
                    <p class="user-name">Andrzej</p>
                    <h6>Nazwisko<h6>
                    <p class="user-surname">Prokopiak</p>
                    <h6>Numer telefonu<h6>
                    <p class="user-mobile">897 676 545</p>
                    <h6>Email<h6>
                    <p class="user-email">user@gmail.com</p><br />
            </div>

            <div class="dashboard-div mt-4 text-center user-address-data">

            <a class="float-right mt-2 mr-2 edit-user-address-data"><i class="fas fa-cog" role="button"></i></a><br />

            <h5 class="mt-4">Dane adresowe</h5>
                    <h6 class="mt-4">Ulica<h6>
                    <p class="name-of-street">Krakowska</p>
                    <h6>Numer domu<h6>
                    <p class="apartment-number">66</p>
                    <h6>Numer mieszkania<h6>
                    <p class="house-number">7</p>
                    <h6>Kod pocztowy<h6>
                    <p class="post-code">37-030</p>
                    <h6>Miasto<h6>
                    <p class="name-of-city">Rzeszów</p>
                    <h6>Województwo<h6>
                    <p class="name-of-state">podkarpackie</p>
                    <h6>Kraj<h6>
                    <p class="name-of-country">Polska</p>

                </div>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection
