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
  <h1 id="titolo-staff"> IL NOSTRO STAFF</h1>


  <div class="contenitore staff-section">

    <!-- DEXIO -->
    <div class="card-staff">
      <div class="foto-insegnante">
        <img src="{{ asset('img/dexio_staff.jpg')}}" alt="" class="foto-staff">
        <h2 class="nome-insegnante" style="color:rgb(1, 177, 76); font-size: 25px">DEXIO</h2>
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

    <!--ALEX CASTAGNETTI -->
    <div class="card-staff">
      <div class="foto-insegnante">
        <img src="{{ asset('img/alex_staff.jpg')}}" alt="" class="foto-staff">
        <h2 class="nome-insegnante" style="color: rgb(47, 243, 33); font-size: 16px">ALEX CASTAGNETTI</h2>
      </div>
      <div class="retro-stile" style="background-color: rgb(47, 243, 33);">
        <h2 class="stile-insegnante" style="font-size:16px;padding:8px;" >HIP-HOP - HOUSE  POPPING - LOCKING</h2>
      </div>
    </div>
    <!-- CONTENITORE LATERALE -->
    <div class="staff-side-content">
      <img class="fas fa-chevron-circle-left" src="{{ asset('img/arrow-right.png')}}" alt="">
      <img class="side-content-image" src="{{ asset('img/alex_staff.jpg')}}" alt="">
      <h2 class="side-content-title">Alex Castagnetti</h2>
      <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <!-- ZOTO -->
    <div class="card-staff">
      <div class="foto-insegnante">
        <img src="{{ asset('img/susanna_staff.jpg')}}" alt="" class="foto-staff">
        <h2 class="nome-insegnante" style="color: rgb(141, 255, 186);font-size: 25px;">ZOTO</h2>
      </div>
      <div class="retro-stile" style="background-color: rgb(141, 255, 186)">
        <h2 class="stile-insegnante" style="font-size: 17px;">
          AFROBEAT
        </h2>
      </div>
    </div>
    <!-- CONTENITORE LATERALE -->
    <div class="staff-side-content">
      <img class="fas fa-chevron-circle-left" src="{{ asset('img/arrow-right.png')}}" alt="">
      <img class="side-content-image" src="{{ asset('img/susanna_staff.jpg')}}" alt="">
      <h2 class="side-content-title">ZOTO</h2>
      <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <!-- FEDERICA NAZZARI-->
    <div class="card-staff">
      <div class="foto-insegnante">
        <img src="{{ asset('img/nazzari_staff.jpg')}}" alt="" class="foto-staff">
        <h2 class="nome-insegnante" style="color: rgb(11, 186, 181);font-size: 16px;">FEDERICA NAZZARI</h2>
      </div>
      <div class="retro-stile" style="background-color: rgb(11, 186, 181)">
        <h2 class="stile-insegnante">DANCEHALL</h2>
      </div>
    </div>
    <!-- CONTENITORE LATERALE -->
    <div class="staff-side-content">
      <img class="fas fa-chevron-circle-left" src="{{ asset('img/arrow-right.png')}}" alt="">
      <img class="side-content-image" src="{{ asset('img/nazzari_staff.jpg')}}" alt="">
      <h2 class="side-content-title">FEDERICA NAZZARI</h2>
      <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <!-- FABIO BOSS -->
    <div class="card-staff">
      <div class="foto-insegnante">
        <img src="{{ asset('img/fabio_staff.jpg')}}" alt="" class="foto-staff">
        <h2 class="nome-insegnante" style="color: rgb(1, 254, 238);font-size: 20px;" >FABIO BOSS</h2>
      </div>
      <div class="retro-stile" style="background-color: rgb(1, 254, 238)">
        <h2 class="stile-insegnante">HOUSE DANCE</h2>
      </div>
    </div>
    <!-- CONTENITORE LATERALE -->
    <div class="staff-side-content">
      <img class="fas fa-chevron-circle-left" src="{{ asset('img/arrow-right.png')}}" alt="">
      <img class="side-content-image" src="{{ asset('img/dexio_staff.jpg')}}" alt="">
      <h2 class="side-content-title">FABIO BOSS</h2>
      <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <!-- SUSANNA SALVINI-->
    <div class="card-staff">
      <div class="foto-insegnante">
        <img src="{{ asset('img/susanna_staff.jpg')}}" alt="" class="foto-staff">
        <h2 class="nome-insegnante" style="color: rgb(253, 193, 184);font-size: 18px;">SUSANNA SALVINI</h2>
      </div>
      <div class="retro-stile" style="background-color: rgb(253, 193, 184)">
        <h2 class="stile-insegnante" style="font-size:15px">DANZA CLASSICA <br> MODERN/CONTEMP. </h2>
      </div>
    </div>
    <!-- CONTENITORE LATERALE -->
    <div class="staff-side-content">
      <img class="fas fa-chevron-circle-left" src="{{ asset('img/arrow-right.png')}}" alt="">
      <img class="side-content-image" src="{{ asset('img/susanna_staff.jpg')}}" alt="">
      <h2 class="side-content-title">SUSANNA SALVINI</h2>
      <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <!-- SIMONA PIC -->
    <div class="card-staff">
      <div class="foto-insegnante">
        <img src="{{ asset('img/simona_staff.jpg')}}" alt="" class="foto-staff">
        <h2 class="nome-insegnante" style="color: rgb(251, 118, 254);font-size: 18px;">SIMONA PIC</h2>
      </div>
      <div class="retro-stile" style="background-color: rgb(251, 118, 254)">
        <h2 class="stile-insegnante" style="font-size:15px;padding:8px">POLE DANCE - FLEXY POTENZIAMENTO</h2>
      </div>
    </div>
    <!-- CONTENITORE LATERALE -->
    <div class="staff-side-content">
      <img class="fas fa-chevron-circle-left" src="{{ asset('img/arrow-right.png')}}" alt="">
      <img class="side-content-image" src="{{ asset('img/simona_staff.jpg')}}" alt="">
      <h2 class="side-content-title">SIMONA PIC</h2>
      <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <!-- MANUEL MICHELI -->
    <div class="card-staff">
      <div class="foto-insegnante">
        <img src="{{ asset('img/micheli_staff.jpg')}}" alt="" class="foto-staff">
        <h2 class="nome-insegnante" style="color: rgb(236, 0, 138);font-size: 18px;">MANUEL MICHELI</h2>
      </div>
      <div class="retro-stile" style="background-color: rgb(236, 0, 138)">
        <h2 class="stile-insegnante">LINDY HOP</h2>
      </div>
    </div>
    <!-- CONTENITORE LATERALE -->
    <div class="staff-side-content">
      <img class="fas fa-chevron-circle-left" src="{{ asset('img/arrow-right.png')}}" alt="">
      <img class="side-content-image" src="{{ asset('img/micheli_staff.jpg')}}" alt="">
      <h2 class="side-content-title">MANUEL MICHELI</h2>
      <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <!-- COSIMO & LORENA -->
    <div class="card-staff">
      <div class="foto-insegnante">
        <img src="{{ asset('img/cosimolorena_staff.jpg')}}" alt="" class="foto-staff">
        <h2 class="nome-insegnante" style="color: rgb(190, 121, 246);font-size: 17px;">COSIMO & LORENA</h2>
      </div>
      <div class="retro-stile" style="background-color: rgb(190, 121, 246)">
        <h2 class="stile-insegnante" style="font-size:14px;padding:5px">SALSA / BACHATA <br> NY STYLE & PACHANGA</h2>
      </div>
    </div>
    <!-- CONTENITORE LATERALE -->
    <div class="staff-side-content">
      <img class="fas fa-chevron-circle-left" src="{{ asset('img/arrow-right.png')}}" alt="">
      <img class="side-content-image" src="{{ asset('img/cosimolorena_staff.jpg')}}" alt="">
      <h2 class="side-content-title">COSIMO & LORENA</h2>
      <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <!-- ALESSANDRA FORMENTI -->
    <div class="card-staff">
      <div class="foto-insegnante">
        <img src="{{ asset('img/formenti_staff.jpg')}}" alt="" class="foto-staff">
        <h2 class="nome-insegnante" style="color: rgb(242, 124, 133);font-size: 13px;">ALESSANDRA FORMENTI</h2>
      </div>
      <div class="retro-stile" style="background-color: rgb(242, 124, 133)">
        <h2 class="stile-insegnante"> DANZA AEREA</h2>
      </div>
    </div>
    <!-- CONTENITORE LATERALE -->
    <div class="staff-side-content">
      <img class="fas fa-chevron-circle-left" src="{{ asset('img/arrow-right.png')}}" alt="">
      <img class="side-content-image" src="{{ asset('img/formenti_staff.jpg')}}" alt="">
      <h2 class="side-content-title">ALESSANDRA FORMENTI</h2>
      <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <!-- JAVI FERNAN -->
    <div class="card-staff">
      <div class="foto-insegnante">
        <img src="{{ asset('img/javi_staff.jpg')}}" alt="" class="foto-staff">
        <h2 class="nome-insegnante" style="color: rgb(254, 242, 0);font-size: 18px;">JAVI FERNAN</h2>
      </div>
      <div class="retro-stile" style="background-color: rgb(254, 242, 0)">
        <h2 class="stile-insegnante">ZUMBA</h2>
      </div>
    </div>
    <!-- CONTENITORE LATERALE -->
    <div class="staff-side-content">
      <img class="fas fa-chevron-circle-left" src="{{ asset('img/arrow-right.png')}}" alt="">
      <img class="side-content-image" src="{{ asset('img/javi_staff.jpg')}}" alt="">
      <h2 class="side-content-title">JAVI FERNAN</h2>
      <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <!-- CARLOTTA CELANI -->
    <div class="card-staff">
      <div class="foto-insegnante">
        <img src="{{ asset('img/celani_staff.jpg')}}" alt="" class="foto-staff">
        <h2 class="nome-insegnante" style="color: rgb(252, 134, 1);font-size: 18px;">CARLOTTA CELANI</h2>
      </div>
      <div class="retro-stile" style="background-color: rgb(252, 134, 1)">
        <h2 class="stile-insegnante">ZUMBA</h2>
      </div>
    </div>
    <!-- CONTENITORE LATERALE -->
    <div class="staff-side-content">
      <img class="fas fa-chevron-circle-left" src="{{ asset('img/arrow-right.png')}}" alt="">
      <img class="side-content-image" src="{{ asset('img/celani_staff.jpg')}}" alt="">
      <h2 class="side-content-title">CARLOTTA CELANI</h2>
      <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <!-- SILVIA VIGNALI -->
    <div class="card-staff">
      <div class="foto-insegnante">
        <img src="{{ asset('img/vignali_staff.jpg')}}" alt="" class="foto-staff">
        <h2 class="nome-insegnante" style="color: rgb(254, 0, 0);font-size: 21px;">SILVIA VIGNALI</h2>
      </div>
      <div class="retro-stile" style="background-color: rgb(254, 0, 0)">
        <h2 class="stile-insegnante" style="font-size:15px">KANGOO JUMPS</h2>
      </div>
    </div>
    <!-- CONTENITORE LATERALE -->
    <div class="staff-side-content">
      <img class="fas fa-chevron-circle-left" src="{{ asset('img/arrow-right.png')}}" alt="">
      <img class="side-content-image" src="{{ asset('img/vignali_staff.jpg')}}" alt="">
      <h2 class="side-content-title">SILVIA VIGNALI</h2>
      <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <!-- MAX ARCIDIACO -->
    <div class="card-staff">
      <div class="foto-insegnante">
        <img src="{{ asset('img/arcidiaco_staff.jpg')}}" alt="" class="foto-staff">
        <h2 class="nome-insegnante" style="color: rgb(224, 180, 106);font-size: 20px;">MAX ARCIDIACO</h2>
      </div>
      <div class="retro-stile" style="background-color: rgb(224, 180, 106)">
        <h2 class="stile-insegnante" style="font-size:15px; text-align: right">THAI FIT & FUNCTIONAL SISTEM</h2>
      </div>
    </div>
    <!-- CONTENITORE LATERALE -->
    <div class="staff-side-content">
      <img class="fas fa-chevron-circle-left" src="{{ asset('img/arrow-right.png')}}" alt="">
      <img class="side-content-image" src="{{ asset('img/arcidiaco_staff.jpg')}}" alt="">
      <h2 class="side-content-title">MAX ARCIDIACO</h2>
      <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <!-- DONATELLA NICCOLAI-->
    <div class="card-staff">
      <div class="foto-insegnante">
        <img src="{{ asset('img/niccolai_staff.jpg')}}" alt="" class="foto-staff">
        <h2 class="nome-insegnante" style="color: rgb(158, 136, 98);font-size: 15px;">DONATELLA NICCOLAI</h2>
      </div>
      <div class="retro-stile" style="background-color: rgb(158, 136, 98)">
        <h2 class="stile-insegnante" style="font-size:18px; text-align: right">GINNASTICA METODO PILATES</h2>
      </div>
    </div>
    <!-- CONTENITORE LATERALE -->
    <div class="staff-side-content">
      <img class="fas fa-chevron-circle-left" src="{{ asset('img/arrow-right.png')}}" alt="">
      <img class="side-content-image" src="{{ asset('img/niccolai_staff.jpg')}}" alt="">
      <h2 class="side-content-title">DONATELLA NICCOLAI</h2>
      <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <!-- FULVIA FRAMBATI -->
    <div class="card-staff">
      <div class="foto-insegnante">
        <img src="{{ asset('img/fulvia_staff.jpg')}}" alt="" class="foto-staff">
        <h2 class="nome-insegnante" style="color: rgb(117, 190, 235);font-size: 18px;">FULVIA FRAMBATI</h2>
      </div>
      <div class="retro-stile" style="background-color: rgb(117, 190, 235)">
        <h2 class="stile-insegnante" style="font-size:13px; text-align: right">PICCOLIZIE #UNARETEPERLEMAMME</h2>
      </div>
    </div>
    <!-- CONTENITORE LATERALE -->
    <div class="staff-side-content">
      <img class="fas fa-chevron-circle-left" src="{{ asset('img/arrow-right.png')}}" alt="">
      <img class="side-content-image" src="{{ asset('img/fulvia_staff.jpg')}}" alt="">
      <h2 class="side-content-title">FULVIA FRAMBATI</h2>
      <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <!-- ALICE MONTAGNA -->
    <div class="card-staff">
      <div class="foto-insegnante">
        <img src="{{ asset('img/alice_staff.jpg')}}" alt="" class="foto-staff">
        <h2 class="nome-insegnante" style="color: rgb(75, 111, 246);font-size: 18px;">ALICE MONTAGNA</h2>
      </div>
      <div class="retro-stile" style="background-color: rgb(75, 111, 246)">
        <h2 class="stile-insegnante">BABY WEARING</h2>
      </div>
    </div>
    <!-- CONTENITORE LATERALE -->
    <div class="staff-side-content">
      <img class="fas fa-chevron-circle-left" src="{{ asset('img/arrow-right.png')}}" alt="">
      <img class="side-content-image" src="{{ asset('img/alice_staff.jpg')}}" alt="">
      <h2 class="side-content-title">ALICE MONTAGNA</h2>
      <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <!-- RAFFAELLA BRUNELLI -->
    <div class="card-staff">
      <div class="foto-insegnante">
        <img src="{{ asset('img/brunelli_staff.jpg')}}" alt="" class="foto-staff">
        <h2 class="nome-insegnante" style="color: rgb(173, 190, 210);font-size: 15px;">RAFFAELLA BRUNELLI</h2>
      </div>
      <div class="retro-stile" style="background-color: rgb(173, 190, 210)">
        <h2 class="stile-insegnante" style="font-size:20px; text-align: right;padding-top: 10px">YOGA INTEGRALE</h2>
      </div>
    </div>
    <!-- CONTENITORE LATERALE -->
    <div class="staff-side-content">
      <img class="fas fa-chevron-circle-left" src="{{ asset('img/arrow-right.png')}}" alt="">
      <img class="side-content-image" src="{{ asset('img/brunelli_staff.jpg')}}" alt="">
      <h2 class="side-content-title">RAFFAELLA BRUNELLI</h2>
      <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <!-- FABRIZIO RICCI -->
    <div class="card-staff">
      <div class="foto-insegnante">
        <img src="{{ asset('img/ricci_staff.jpg')}}" alt="" class="foto-staff">
        <h2 class="nome-insegnante" style="color: rgb(109, 110, 114);font-size: 20px;">FABRIZIO RICCI</h2>
      </div>
      <div class="retro-stile" style="background-color: rgb(109, 110, 114)">
        <h2 class="stile-insegnante" style="font-size:20px; text-align: right;padding-top: 10px">TRATTAMENTI SHIATSU</h2>
      </div>
    </div>
    <!-- CONTENITORE LATERALE -->
    <div class="staff-side-content">
      <img class="fas fa-chevron-circle-left" src="{{ asset('img/arrow-right.png')}}" alt="">
      <img class="side-content-image" src="{{ asset('img/ricci_staff.jpg')}}" alt="">
      <h2 class="side-content-title">FABRIZIO RICCI</h2>
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
