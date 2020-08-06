@extends('layouts.mainlayout')

@section('content')

  <div class="jumbotron">
    <div class="immagini">
      <img src="{{ asset('img/entrata.jpg')}}" alt="">
    </div>
    <img class="fas fa-angle-double-down" src="{{ asset('img/arrow-right.png')}}" alt="">
  </div>

  {{-- inizio sezioni home --}}

  <!-- SEZIONE ATTIVITA' GENERICHE ----------------------------------------------------------------------------------------------------------------->

  {{-- STREETDANCE --}}
  <div class="contenitore">
    <div id="primaSezione"></div>
    <h1 id="titolo-home" > COSA PUOI TROVARE ALLA THE FLOW ACCADEMY</h1>
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

    <div class="separatore"></div>

    <section class="sezioni-home">
      <div id="img-poledance"></div>
      <div class="paragrafi">
        <h2>Sport & Dance Summer Camp</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </section>

    <div class="separatore"></div>

    <section class="sezioni-home">
      <div class="paragrafi">
        <h2>Piccolizie #unareteperlemamme</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div id="img-fitness"></div>
    </section>
  </div>

  <!-- SEZIONE CORSI ---------------------------------------------------------------------------------------------------------------->

  <div id="scroll-to-corsi">

  </div>
  <h1 id="titolo-corsi"> I NOSTRI CORSI</h1>


  <div class="contenitore corsi-section">
    <!-- BREAKING-->
      <div class="card-corsi">
        <i class="fas fa-info-circle"></i>
        <img src="{{ asset('img/breaking_corso.jpg')}}" alt="" class="corso-hip-hop">
        <h2 class="corso-title breaking">Breaking</h2>
      </div>
      <!-- CONTENITORE LATERALE -->
      <div class="corsi-side-content">
        <img class="fas fa-chevron-circle-right" src="{{ asset('img/arrow-right.png')}}" alt="">
        <img class="side-content-image" src="{{ asset('img/breaking_corso.jpg')}}" alt="">
        <h2 class="side-content-title">Breaking</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/dexio_staff.jpg')}}" alt="">
      </div>



      <!-- HIP HOP -->
      <div class="card-corsi">
        <i class="fas fa-info-circle"></i>
        <img src="{{ asset('img/hiphop_corso.jpg')}}" alt="" class="corso-hip-hop">
        <h2 class="corso-title hip-hop">Hip-Hop</h2>
      </div>
      <!-- CONTENITORE LATERALE -->
      <div class="corsi-side-content">
        <img class="fas fa-chevron-circle-right" src="{{ asset('img/arrow-right.png')}}" alt="">
        <img class="side-content-image" src="{{ asset('img/hiphop_corso.jpg')}}" alt="">
        <h2 class="side-content-title">HipHop</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/dexio_staff.jpg')}}" alt="">
      </div>

      <!-- HOUSE -->
      <div class="card-corsi">
        <i class="fas fa-info-circle"></i>
        <img src="{{ asset('img/housedance_corso.jpg')}}" alt="" class="corso-hip-hop">
        <h2 class="corso-title house-dance">House Dance</h2>
      </div>
      <!-- CONTENITORE LATERALE -->
      <div class="corsi-side-content">
        <img class="fas fa-chevron-circle-right" src="{{ asset('img/arrow-right.png')}}" alt="">
        <img class="side-content-image" src="{{ asset('img/housedance_corso.jpg')}}" alt="">
        <h2 class="side-content-title">House Dance</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/dexio_staff.jpg')}}" alt="">
      </div>

      <!-- LOCKING -->
      <div class="card-corsi">
        <i class="fas fa-info-circle"></i>
        <img src="{{ asset('img/locking_corso.jpg')}}" alt="" class="corso-hip-hop">
        <h2 class="corso-title locking">Locking</h2>
      </div>
      <!-- CONTENITORE LATERALE -->
      <div class="corsi-side-content">
        <<img class="fas fa-chevron-circle-right" src="{{ asset('img/arrow-right.png')}}" alt="">
        <img class="side-content-image" src="{{ asset('img/locking_corso.jpg')}}" alt="">
        <h2 class="side-content-title">Locking</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/dexio_staff.jpg')}}" alt="">
      </div>

      <!-- POPPING -->
      <div class="card-corsi">
        <i class="fas fa-info-circle"></i>
        <img src="{{ asset('img/popping_corso.jpg')}}" alt="" class="corso-hip-hop">
        <h2 class="corso-title popping">Popping</h2>
      </div>
      <!-- CONTENITORE LATERALE -->
      <div class="corsi-side-content">
        <img class="fas fa-chevron-circle-right" src="{{ asset('img/arrow-right.png')}}" alt="">
        <img class="side-content-image" src="{{ asset('img/popping_corso.jpg')}}" alt="">
        <h2 class="side-content-title">Popping</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/dexio_staff.jpg')}}" alt="">
      </div>

      <div class="" style="width:100%;height:2px;background-color:black;margin: 25px 0;"></div>

      <!-- AFROBEAT -->
      <div class="card-corsi">
        <i class="fas fa-info-circle"></i>
        <img src="{{ asset('img/afrobeat_corso.jpg')}}" alt="" class="corso-hip-hop">
        <h2 class="corso-title afrobeat">Afrobeat</h2>
      </div>
      <!-- CONTENITORE LATERALE -->
      <div class="corsi-side-content">
        <img class="fas fa-chevron-circle-right" src="{{ asset('img/arrow-right.png')}}" alt="">
        <img class="side-content-image" src="{{ asset('img/afrobeat_corso.jpg')}}" alt="">
        <h2 class="side-content-title">Afrobeat</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/dexio_staff.jpg')}}" alt="">
      </div>



      <!-- DANCEHALL -->
      <div class="card-corsi">
        <i class="fas fa-info-circle"></i>
        <!-- <div class="corso-hip-hop"> </div> -->
        <img src="{{ asset('img/dancehall_corso.jpg')}}" alt="" class="corso-hip-hop">
        <h2 class="corso-title dancehall">Dancehall</h2>
      </div>
      <!-- CONTENITORE LATERALE -->
      <div class="corsi-side-content">
        <img class="fas fa-chevron-circle-right" src="{{ asset('img/arrow-right.png')}}" alt="">
        <img class="side-content-image" src="{{ asset('img/dancehall_corso.jpg')}}" alt="">
        <h2 class="side-content-title">Dancehall</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/dexio_staff.jpg')}}" alt="">
      </div>

      <!-- CLASSICA -->
      <div class="card-corsi">
        <i class="fas fa-info-circle"></i>
        <!-- <div class="corso-hip-hop"> </div> -->
        <img src="{{ asset('img/classica_corso.jpg')}}" alt="" class="corso-hip-hop">
        <h2 class="corso-title classica">Classica</h2>
      </div>
      <!-- CONTENITORE LATERALE -->
      <div class="corsi-side-content">
        <img class="fas fa-chevron-circle-right" src="{{ asset('img/arrow-right.png')}}" alt="">
        <img class="side-content-image" src="{{ asset('img/classica_corso.jpg')}}" alt="">
        <h2 class="side-content-title">Classica</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/dexio_staff.jpg')}}" alt="">
      </div>

      <!-- MODERN -->
      <div class="card-corsi">
        <i class="fas fa-info-circle"></i>
        <!-- <div class="corso-hip-hop"> </div> -->
        <img src="{{ asset('img/modern_corso.jpg')}}" alt="" class="corso-hip-hop">
        <h2 class="corso-title">Modern</h2>
      </div>
      <!-- CONTENITORE LATERALE -->
      <div class="corsi-side-content">
        <img class="fas fa-chevron-circle-right" src="{{ asset('img/arrow-right.png')}}" alt="">
        <img class="side-content-image" src="{{ asset('img/modern_corso.jpg')}}" alt="">
        <h2 class="side-content-title">Modern</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/dexio_staff.jpg')}}" alt="">
      </div>

      <!-- POLEDANCE -->
      <div class="card-corsi">
        <i class="fas fa-info-circle"></i>
        <!-- <div class="corso-hip-hop"> </div> -->
        <img src="{{ asset('img/poledance_corso.jpg')}}" alt="" class="corso-hip-hop">
        <h2 class="corso-title">Pole Dance</h2>
      </div>
      <!-- CONTENITORE LATERALE -->
      <div class="corsi-side-content">
        <img class="fas fa-chevron-circle-right" src="{{ asset('img/arrow-right.png')}}" alt="">
        <img class="side-content-image" src="{{ asset('img/poledance_corso.jpg')}}" alt="">
        <h2 class="side-content-title">Pole Dance</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/dexio_staff.jpg')}}" alt="">
      </div>

      <div class="" style="width:100%;height:2px;background-color:black;margin: 25px 0;"></div>


      <!-- LINDY HOP -->
      <div class="card-corsi">
        <i class="fas fa-info-circle"></i>
        <!-- <div class="corso-hip-hop"> </div> -->
        <img src="{{ asset('img/lindyhop_corso.jpg')}}" alt="" class="corso-hip-hop">
        <h2 class="corso-title">Lindy hop</h2>
      </div>
      <!-- CONTENITORE LATERALE -->
      <div class="corsi-side-content">
        <img class="fas fa-chevron-circle-right" src="{{ asset('img/arrow-right.png')}}" alt="">
        <img class="side-content-image" src="{{ asset('img/lindyhop_corso.jpg')}}" alt="">
        <h2 class="side-content-title">Lindy hop</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/dexio_staff.jpg')}}" alt="">
      </div>

      <!-- SALSA -->
      <div class="card-corsi">
        <i class="fas fa-info-circle"></i>
        <!-- <div class="corso-hip-hop"> </div> -->
        <img src="{{ asset('img/salsa_corso.jpg')}}" alt="" class="corso-hip-hop">
        <h2 class="corso-title">Salsa</h2>
      </div>
      <!-- CONTENITORE LATERALE -->
      <div class="corsi-side-content">
        <img class="fas fa-chevron-circle-right" src="{{ asset('img/arrow-right.png')}}" alt="">
        <img class="side-content-image" src="{{ asset('img/salsa_corso.jpg')}}" alt="">
        <h2 class="side-content-title">Salsa</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/dexio_staff.jpg')}}" alt="">
      </div>


      <!-- BACHATA -->
      <div class="card-corsi">
        <i class="fas fa-info-circle"></i>
        <!-- <div class="corso-hip-hop"> </div> -->
        <img src="{{ asset('img/bachata_corso.jpg')}}" alt="" class="corso-hip-hop">
        <h2 class="corso-title">Bachata</h2>
      </div>
      <!-- CONTENITORE LATERALE -->
      <div class="corsi-side-content">
        <img class="fas fa-chevron-circle-right" src="{{ asset('img/arrow-right.png')}}" alt="">
        <img class="side-content-image" src="{{ asset('img/bachata_corso.jpg')}}" alt="">
        <h2 class="side-content-title">Bachata</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/dexio_staff.jpg')}}" alt="">
      </div>

      <!-- PACHANGA -->
      <div class="card-corsi">
        <i class="fas fa-info-circle"></i>
        <!-- <div class="corso-hip-hop"> </div> -->
        <img src="{{ asset('img/pachanga_corso.jpg')}}" alt="" class="corso-hip-hop">
        <h2 class="corso-title">Pachanga</h2>
      </div>
      <!-- CONTENITORE LATERALE -->
      <div class="corsi-side-content">
        <img class="fas fa-chevron-circle-right" src="{{ asset('img/arrow-right.png')}}" alt="">
        <img class="side-content-image" src="{{ asset('img/pachanga_corso.jpg')}}" alt="">
        <h2 class="side-content-title">Pachanga</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/dexio_staff.jpg')}}" alt="">
      </div>

      <!-- DANZA AEREA -->
      <div class="card-corsi">
        <i class="fas fa-info-circle"></i>
        <!-- <div class="corso-hip-hop"> </div> -->
        <img src="{{ asset('img/danza_aerea_corso.jpg')}}" alt="" class="corso-hip-hop">
        <h2 class="corso-title">Danza Aerea</h2>
      </div>
      <!-- CONTENITORE LATERALE -->
      <div class="corsi-side-content">
        <img class="fas fa-chevron-circle-right" src="{{ asset('img/arrow-right.png')}}" alt="">
        <img class="side-content-image" src="{{ asset('img/danza_aerea_corso.jpg')}}" alt="">
        <h2 class="side-content-title">Danza Aerea</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/dexio_staff.jpg')}}" alt="">
      </div>

      <div class="" style="width:100%;height:2px;background-color:black;margin: 25px 0;"></div>

      <!-- ZUMBA -->
      <div class="card-corsi">
        <i class="fas fa-info-circle"></i>
        <!-- <div class="corso-hip-hop"> </div> -->
        <img src="{{ asset('img/zumba_corso.jpg')}}" alt="" class="corso-hip-hop">
        <h2 class="corso-title">Zumba</h2>
      </div>
      <!-- CONTENITORE LATERALE -->
      <div class="corsi-side-content">
        <img class="fas fa-chevron-circle-right" src="{{ asset('img/arrow-right.png')}}" alt="">
        <img class="side-content-image" src="{{ asset('img/zumba_corso.jpg')}}" alt="">
        <h2 class="side-content-title">Zumba</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/dexio_staff.jpg')}}" alt="">
      </div>

      <!-- KANGOO JUMPS -->
      <div class="card-corsi">
        <i class="fas fa-info-circle"></i>
        <!-- <div class="corso-hip-hop"> </div> -->
        <img src="{{ asset('img/kangoo_jumps_corso.jpg')}}" alt="" class="corso-hip-hop">
        <h2 class="corso-title">Kangoo Jumps</h2>
      </div>
      <!-- CONTENITORE LATERALE -->
      <div class="corsi-side-content">
        <img class="fas fa-chevron-circle-right" src="{{ asset('img/arrow-right.png')}}" alt="">
        <img class="side-content-image" src="{{ asset('img/kangoo_jumps_corso.jpg')}}" alt="">
        <h2 class="side-content-title">Kangoo Jumps</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/dexio_staff.jpg')}}" alt="">
      </div>

      <!-- THAI FIT -->
      <div class="card-corsi">
        <i class="fas fa-info-circle"></i>
        <!-- <div class="corso-hip-hop"> </div> -->
        <img src="{{ asset('img/thai_fit_corso.jpg')}}" alt="" class="corso-hip-hop">
        <h2 class="corso-title">Thai Fit</h2>
      </div>
      <!-- CONTENITORE LATERALE -->
      <div class="corsi-side-content">
        <img class="fas fa-chevron-circle-right" src="{{ asset('img/arrow-right.png')}}" alt="">
        <img class="side-content-image" src="{{ asset('img/thai_fit_corso.jpg')}}" alt="">
        <h2 class="side-content-title">Thai Fit</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/dexio_staff.jpg')}}" alt="">
      </div>

      <!-- PILATES -->
      <div class="card-corsi">
        <i class="fas fa-info-circle"></i>
        <!-- <div class="corso-hip-hop"> </div> -->
        <img src="{{ asset('img/pilates_corso.jpg')}}" alt="" class="corso-hip-hop">
        <h2 class="corso-title">Pilates</h2>
      </div>
      <!-- CONTENITORE LATERALE -->
      <div class="corsi-side-content">
        <img class="fas fa-chevron-circle-right" src="{{ asset('img/arrow-right.png')}}" alt="">
        <img class="side-content-image" src="{{ asset('img/pilates_corso.jpg')}}" alt="">
        <h2 class="side-content-title">Pilates</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/dexio_staff.jpg')}}" alt="">
      </div>

      <!-- PICCOLIZIE -->
      <div class="card-corsi">
        <i class="fas fa-info-circle"></i>
        <!-- <div class="corso-hip-hop"> </div> -->
        <img src="{{ asset('img/piccolizie_corso.jpg')}}" alt="" class="corso-hip-hop">
        <h2 class="corso-title">Piccolizie</h2>
      </div>
      <!-- CONTENITORE LATERALE -->
      <div class="corsi-side-content">
        <img class="fas fa-chevron-circle-right" src="{{ asset('img/arrow-right.png')}}" alt="">
        <img class="side-content-image" src="{{ asset('img/piccolizie_corso.jpg')}}" alt="">
        <h2 class="side-content-title">Piccolizie</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/dexio_staff.jpg')}}" alt="">
      </div>

      <div class="" style="width:100%;height:2px;background-color:black;margin: 25px 0;"></div>

      <!-- BABY WEARING -->
      <div class="card-corsi">
        <i class="fas fa-info-circle"></i>
        <!-- <div class="corso-hip-hop"> </div> -->
        <img src="{{ asset('img/baby_wearing_corso.jpg')}}" alt="" class="corso-hip-hop">
        <h2 class="corso-title">Baby Wearing</h2>
      </div>
      <!-- CONTENITORE LATERALE -->
      <div class="corsi-side-content">
        <img class="fas fa-chevron-circle-right" src="{{ asset('img/arrow-right.png')}}" alt="">
        <img class="side-content-image" src="{{ asset('img/baby_wearing_corso.jpg')}}" alt="">
        <h2 class="side-content-title">Baby Wearing</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/dexio_staff.jpg')}}" alt="">
      </div>

      <!-- YOGA INTEGRALE -->
      <div class="card-corsi">
        <i class="fas fa-info-circle"></i>
        <!-- <div class="corso-hip-hop"> </div> -->
        <img src="{{ asset('img/yoga_corso.jpg')}}" alt="" class="corso-hip-hop">
        <h2 class="corso-title">Yoga Integrale</h2>
      </div>
      <!-- CONTENITORE LATERALE -->
      <div class="corsi-side-content">
        <img class="fas fa-chevron-circle-right" src="{{ asset('img/arrow-right.png')}}" alt="">
        <img class="side-content-image" src="{{ asset('img/yoga_corso.jpg')}}" alt="">
        <h2 class="side-content-title">Yoga Integrale</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/dexio_staff.jpg')}}" alt="">
      </div>

      <!-- TRATTAMENTI SHIATSU -->
      <div class="card-corsi">
        <i class="fas fa-info-circle"></i>
        <!-- <div class="corso-hip-hop"> </div> -->
        <img src="{{ asset('img/shiatsu_corso.jpg')}}" alt="" class="corso-hip-hop">
        <h2 class="corso-title">Trattamenti Shiatsu</h2>
      </div>
      <!-- CONTENITORE LATERALE -->
      <div class="corsi-side-content">
        <img class="fas fa-chevron-circle-right" src="{{ asset('img/arrow-right.png')}}" alt="">
        <img class="side-content-image" src="{{ asset('img/shiatsu_corso.jpg')}}" alt="">
        <h2 class="side-content-title">Trattamenti Shiatsu</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/dexio_staff.jpg')}}" alt="">
      </div>




  </div>



  <!-- SEZIONE STAFF ------------------------------------------------------------------------------------------------------------------->
  <div id="scroll-to-staff">

  </div>
  <h1 id="titolo-staff" > IL NOSTRO STAFF</h1>


  <div class="contenitore staff-section">

    <!-- DEXIO -->
    <div class="card-staff">
      <div class="foto-insegnante">
        <img src="{{ asset('img/dexio_staff.jpg')}}" alt="" class="foto-staff">
        <h2 class="nome-insegnante" style="color:rgb(1, 177, 76)">DEXIO</h2>
      </div>
      <div class="retro-stile" style="background-color:rgb(1, 177, 76)">
        <h2 class="stile-insegnante">BREAKING</h2>
      </div>
    </div>
    <!-- CONTENITORE LATERALE -->
    <div class="staff-side-content">
      <img class="fas fa-chevron-circle-left" src="{{ asset('img/arrow-right.png')}}" alt="">
      <img class="side-content-image" src="{{ asset('img/dexio_staff.jpg')}}" alt="">
      <h2 class="side-content-title">DEXIO</h2>
      <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <!--FABIO BOSS -->
    <div class="card-staff">
      <div class="foto-insegnante">
        <img src="{{ asset('img/fabio_staff.jpg')}}" alt="" class="foto-staff">
        <h2 class="nome-insegnante" style="color: rgb(0, 255, 233)">FABIO BOSS</h2>
      </div>
      <div class="retro-stile">
        <h2 class="stile-insegnante" style="background-color: rgb(0, 255, 233);">HOUSE DANCE</h2>
      </div>
    </div>
    <!-- CONTENITORE LATERALE -->
    <div class="staff-side-content">
      <img class="fas fa-chevron-circle-left" src="{{ asset('img/arrow-right.png')}}" alt="">
      <img class="side-content-image" src="{{ asset('img/fabio_staff.jpg')}}" alt="">
      <h2 class="side-content-title">FABIO BOSS</h2>
      <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <!-- SUSANNA SALVINI -->
    <div class="card-staff">
      <div class="foto-insegnante">
        <img src="{{ asset('img/susanna_staff.jpg')}}" alt="" class="foto-staff">
        <h2 class="nome-insegnante" style="color: rgb(249, 189, 180);font-size: 18px;">SUSANNA SALVINI</h2>
      </div>
      <div class="retro-stile" style="background-color: rgb(249, 189, 180);">
        <h2 class="stile-insegnante" style="font-size: 17px;bottom: 0px;height: 25%;padding:5px">
          DANZA CLASSICA MODERN/CONTEMP
         </h2>
      </div>
    </div>
    <!-- CONTENITORE LATERALE -->
    <div class="staff-side-content">
      <img class="fas fa-chevron-circle-left" src="{{ asset('img/arrow-right.png')}}" alt="">
      <img class="side-content-image" src="{{ asset('img/susanna_staff.jpg')}}" alt="">
      <h2 class="side-content-title">SUSANNA SALVINI</h2>
      <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <!-- ALEX -->
    <div class="card-staff">
      <div class="foto-insegnante">
        <img src="{{ asset('img/fabio_staff.jpg')}}" alt="" class="foto-staff">
        <h2 class="nome-insegnante">FABIO BOSS</h2>
      </div>
      <div class="retro-stile">
        <h2 class="stile-insegnante">HOUSE DANCE</h2>
      </div>
    </div>
    <!-- CONTENITORE LATERALE -->
    <div class="staff-side-content">
      <img class="fas fa-chevron-circle-left" src="{{ asset('img/arrow-right.png')}}" alt="">
      <img class="side-content-image" src="{{ asset('img/dexio_staff.jpg')}}" alt="">
      <h2 class="side-content-title">DEXIO</h2>
      <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <!-- ALEX -->
    <div class="card-staff">
      <div class="foto-insegnante">
        <img src="{{ asset('img/fabio_staff.jpg')}}" alt="" class="foto-staff">
        <h2 class="nome-insegnante">FABIO BOSS</h2>
      </div>
      <div class="retro-stile">
        <h2 class="stile-insegnante">HOUSE DANCE</h2>
      </div>
    </div>
    <!-- CONTENITORE LATERALE -->
    <div class="staff-side-content">
      <img class="fas fa-chevron-circle-left" src="{{ asset('img/arrow-right.png')}}" alt="">
      <img class="side-content-image" src="{{ asset('img/dexio_staff.jpg')}}" alt="">
      <h2 class="side-content-title">DEXIO</h2>
      <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <!-- ALEX -->
    <div class="card-staff">
      <div class="foto-insegnante">
        <img src="{{ asset('img/fabio_staff.jpg')}}" alt="" class="foto-staff">
        <h2 class="nome-insegnante">FABIO BOSS</h2>
      </div>
      <div class="retro-stile">
        <h2 class="stile-insegnante">HOUSE DANCE</h2>
      </div>
    </div>
    <!-- CONTENITORE LATERALE -->
    <div class="staff-side-content">
      <img class="fas fa-chevron-circle-left" src="{{ asset('img/arrow-right.png')}}" alt="">
      <img class="side-content-image" src="{{ asset('img/dexio_staff.jpg')}}" alt="">
      <h2 class="side-content-title">DEXIO</h2>
      <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>


  <!-- ORARI ---------------------------------------------------------------------------------------------------------------->

  <div id="scroll-to-orari">

  </div>
  <h1 id="titolo-orari"> IL NOSTRO PLANNING </h1>

  <div class="orari-section">
    <div class="planning">
      <img id="planning-img" src="{{ asset('img/planner.jpg')}}" alt="planning.jpg">
    </div>
  </div>

  <!-- CONTATTI ----------------------------------------------------->

  <div id="scroll-to-contatti">

  </div>

  <div class="contenitore contatti-section">
    <div id="zona-mappa">
      <div id='map'></div>
    </div>

  </div>




  <div id="button-scroll-up">
    <img class="fas fa-angle-double-up" src="{{ asset('img/arrow-right.png')}}" alt="">
  </div>



  <script type="text/javascript" src="{{ asset('js/home.js')}}"></script>

@endsection
