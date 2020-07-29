@extends('layouts.mainlayout')

@section('content')

  <div class="jumbotron">
    <div class="immagini">
      <img src="{{ asset('img/entrata.jpg')}}" alt="">
    </div>
    <i class="fas fa-arrow-circle-down"></i>

  </div>

  {{-- inizio sezioni home --}}

  {{-- STREETDANCE --}}
  <div class="contenitore">
    <h1 id="primaSezione" > COSA PUOI TROVARE ALLA THE FLOW ACCADEMY</h1>
    <section class="sezioni-home">
      <div id="img-streetdance"></div>
      <div class="paragrafi">
        <h2>StreetDance</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </section>

    <div class="separatore"></div>

    <section class="sezioni-home">
      <div class="paragrafi">
        <h2>Dance</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div id="img-dance"></div>
    </section>

    <div class="separatore"></div>

    <section class="sezioni-home">
      <div id="img-poledance"></div>
      <div class="paragrafi">
        <h2>Pole Dance</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </section>

    <div class="separatore"></div>

    <section class="sezioni-home">
      <div class="paragrafi">
        <h2>Fitness</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div id="img-fitness"></div>
    </section>
  </div>



  <script type="text/javascript" src="{{ asset('js/home.js')}}"></script>

@endsection
