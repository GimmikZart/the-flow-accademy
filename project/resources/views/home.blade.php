@extends('layouts.mainlayout')

@section('content')

  <div class="jumbotron">
    <img src="{{ asset('img/arrow-right.png')}}" class="fas fa-chevron-left prev">
    <div class="immagini">
      <div style="background-image: url({{ asset('img/entrata.jpg')}}); background-size:cover;background-repeat: no-repeat" class="img active first"></div>
      <div style="background-image: url({{ asset('img/fitness.jpg')}}) ;background-size:cover;background-repeat: no-repeat" class="img"></div>
      <div style="background-image: url({{ asset('img/poledance.jpg')}}) ;background-size:cover;background-repeat: no-repeat" class="img"></div>
      <div style="background-image: url({{ asset('img/streetdance.jpg')}}) ;background-size:cover;background-repeat: no-repeat" class="img last"></div>
    </div>
    <div class="pallini">
      <i class="fas fa-circle first active"></i>
      <i class="fas fa-circle"></i>
      <i class="fas fa-circle"></i>
      <i class="fas fa-circle last"></i>
    </div>
    <img src="{{ asset('img/arrow-right.png')}}" class="fas fa-chevron-right next">

    <img class="fas fa-angle-double-down" src="{{ asset('img/arrow-right.png')}}" alt="">
  <div style="height: 150px; overflow: hidden;" id="curva" >
    <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
      <path d="M-3.10,15.28 C250.27,143.58 326.46,-64.63 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: rgb(181, 188, 195);">
      </path>
    </svg>
  </div>
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
      <div id="img-summercamp"></div>
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
      <div id="img-piccolizie"></div>
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
        <div class="" style="width:100%; height:40%;background-image: url({{ asset('img/breaking_corso.jpg')}});background-size:cover;background-repeat: no-repeat">
        </div>
        <h2 class="side-content-title">Breaking</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/dexio_staff.jpg')}}" data-staff= 'dexio' alt="">
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
        <div class="" style="width:100%; height:40%;background-image: url({{ asset('img/hiphop_corso.jpg')}});background-size:cover;background-repeat: no-repeat">
        </div>
        <h2 class="side-content-title">HipHop</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/alex_staff.jpg')}}" data-staff= 'alex' alt="">
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
        <div class="" style="width:100%; height:40%;background-image: url({{ asset('img/housedance_corso.jpg')}});background-size:cover;background-repeat: no-repeat">
        </div>
        <h2 class="side-content-title">House Dance</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/alex_staff.jpg')}}" data-staff= 'alex' alt="">
        <img class="mini-insegnante" src="{{ asset('img/fabio_staff.jpg')}}" data-staff= 'fabio' alt="">
      </div>

      <!-- LOCKING -->
      <div class="card-corsi">
        <i class="fas fa-info-circle"></i>
        <img src="{{ asset('img/locking_corso.jpg')}}" alt="" class="corso-hip-hop">
        <h2 class="corso-title locking">Locking</h2>
      </div>
      <!-- CONTENITORE LATERALE -->
      <div class="corsi-side-content">
        <img class="fas fa-chevron-circle-right" src="{{ asset('img/arrow-right.png')}}" alt="">
        <div class="" style="width:100%; height:40%;background-image: url({{ asset('img/locking_corso.jpg')}});background-size:cover;background-repeat: no-repeat">
        </div>
        <h2 class="side-content-title">Locking</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/alex_staff.jpg')}}" data-staff= 'alex' alt="">
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
        <div class="" style="width:100%; height:40%;background-image: url({{ asset('img/popping_corso.jpg')}});background-size:cover;background-repeat: no-repeat">
        </div>
        <h2 class="side-content-title">Popping</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/alex_staff.jpg')}}" data-staff= 'alex' alt="">
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
        <div class="" style="width:100%; height:40%;background-image: url({{ asset('img/afrobeat_corso.jpg')}});background-size:cover;background-repeat: no-repeat">
        </div>
        <h2 class="side-content-title">Afrobeat</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/dexio_staff.jpg')}}" data-staff= 'dexio' alt="">
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
        <div class="" style="width:100%; height:40%;background-image: url({{ asset('img/dancehall_corso.jpg')}});background-size:cover;background-repeat: no-repeat">
        </div>
        <h2 class="side-content-title">Dancehall</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/nazzari_staff.jpg')}}" data-staff= 'nazzari' alt="">
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
        <div class="" style="width:100%; height:40%;background-image: url({{ asset('img/classica_corso.jpg')}});background-size:cover;background-repeat: no-repeat">
        </div>
        <h2 class="side-content-title">Classica</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/susanna_staff.jpg')}}" data-staff= 'susanna' alt="">
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
        <div class="" style="width:100%; height:40%;background-image: url({{ asset('img/modern_corso.jpg')}});background-size:cover;background-repeat: no-repeat">
        </div>
        <h2 class="side-content-title">Modern</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/susanna_staff.jpg')}}" data-staff= 'susanna' alt="">
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
        <div class="" style="width:100%; height:40%;background-image: url({{ asset('img/poledance_corso.jpg')}});background-size:cover;background-repeat: no-repeat">
        </div>
        <h2 class="side-content-title">Pole Dance</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/simona_staff.jpg')}}" data-staff= 'simona' alt="">
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
        <div class="" style="width:100%; height:40%;background-image: url({{ asset('img/lindyhop_corso.jpg')}});background-size:cover;background-repeat: no-repeat">
        </div>
        <h2 class="side-content-title">Lindy hop</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/micheli_staff.jpg')}}" data-staff= 'micheli' alt="">
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
        <div class="" style="width:100%; height:40%;background-image: url({{ asset('img/salsa_corso.jpg')}});background-size:cover;background-repeat: no-repeat">
        </div>
        <h2 class="side-content-title">Salsa</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/cosimolorena_staff.jpg')}}" data-staff= 'cosimolorena' alt="">
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
        <div class="" style="width:100%; height:40%;background-image: url({{ asset('img/bachata_corso.jpg')}});background-size:cover;background-repeat: no-repeat">
        </div>
        <h2 class="side-content-title">Bachata</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/cosimolorena_staff.jpg')}}" data-staff= 'cosimolorena' alt="">
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
        <div class="" style="width:100%; height:40%;background-image: url({{ asset('img/pachanga_corso.jpg')}});background-size:cover;background-repeat: no-repeat">
        </div>
        <h2 class="side-content-title">Pachanga</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/cosimolorena_staff.jpg')}}" data-staff= 'cosimolorena' alt="">
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
        <div class="" style="width:100%; height:40%;background-image: url({{ asset('img/danza_aerea_corso.jpg')}});background-size:cover;background-repeat: no-repeat">
        </div>
        <h2 class="side-content-title">Danza Aerea</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/formenti_staff.jpg')}}" data-staff= 'formenti' alt="">
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
        <div class="" style="width:100%; height:40%;background-image: url({{ asset('img/zumba_corso.jpg')}});background-size:cover;background-repeat: no-repeat">
        </div>
        <h2 class="side-content-title">Zumba</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/javi_staff.jpg')}}" data-staff= 'javi' alt="">
        <img class="mini-insegnante" src="{{ asset('img/celani_staff.jpg')}}" data-staff= 'celani' alt="">
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
        <div class="" style="width:100%; height:40%;background-image: url({{ asset('img/kangoo_jumps_corso.jpg')}});background-size:cover;background-repeat: no-repeat">
        </div>
        <h2 class="side-content-title">Kangoo Jumps</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/vignali_staff.jpg')}}" data-staff= 'vignali' alt="">
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
        <div class="" style="width:100%; height:40%;background-image: url({{ asset('img/thai_fit_corso.jpg')}});background-size:cover;background-repeat: no-repeat">
        </div>
        <h2 class="side-content-title">Thai Fit</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/arcidiaco_staff.jpg')}}" data-staff= 'arcidiaco' alt="">
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
        <div class="" style="width:100%; height:40%;background-image: url({{ asset('img/pilates_corso.jpg')}});background-size:cover;background-repeat: no-repeat">
        </div>
        <h2 class="side-content-title">Pilates</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/niccolai_staff.jpg')}}" data-staff= 'niccolai' alt="">
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
        <div class="" style="width:100%; height:40%;background-image: url({{ asset('img/piccolizie_corso.jpg')}});background-size:cover;background-repeat: no-repeat">
        </div>
        <h2 class="side-content-title">Piccolizie</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/fulvia_staff.jpg')}}" data-staff= 'fulvia' alt="">
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
        <div class="" style="width:100%; height:40%;background-image: url({{ asset('img/baby_wearing_corso.jpg')}});background-size:cover;background-repeat: no-repeat">
        </div>
        <h2 class="side-content-title">Baby Wearing</h2>
        <p class="side-content-description" ></p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/alice_staff.jpg')}}" data-staff= 'alice' alt="">
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
        <div class="" style="width:100%; height:40%;background-image: url({{ asset('img/yoga_corso.jpg')}});background-size:cover;background-repeat: no-repeat">
        </div>
        <h2 class="side-content-title">Yoga Integrale</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/brunelli_staff.jpg')}}" data-staff= 'brunelli' alt="">
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
        <div class="" style="width:100%; height:40%;background-image: url({{ asset('img/shiatsu_corso.jpg')}});background-size:cover;background-repeat: no-repeat">
        </div>
        <h2 class="side-content-title">Trattamenti Shiatsu</h2>
        <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 class="side-content-title">Insegnanti:</h2>
        <img class="mini-insegnante" src="{{ asset('img/ricci_staff.jpg')}}" data-staff= 'ricci' alt="">
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
    <div class="staff-side-content" data-staff = 'dexio'>
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
    <div class="staff-side-content" data-staff = 'alex'>
      <img class="fas fa-chevron-circle-left" src="{{ asset('img/arrow-right.png')}}" alt="">
      <img class="side-content-image" src="{{ asset('img/alex_staff.jpg')}}" alt="">
      <h2 class="side-content-title">Alex Castagnetti</h2>
      <p class="side-content-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <!-- ZOTO -->
    <div class="card-staff">
      <div class="foto-insegnante">
        <img src="{{ asset('img/zoto_staff.jpg')}}" alt="" class="foto-staff">
        <h2 class="nome-insegnante" style="color: rgb(141, 255, 186);font-size: 25px;">ZOTO</h2>
      </div>
      <div class="retro-stile" style="background-color: rgb(141, 255, 186)">
        <h2 class="stile-insegnante" style="font-size: 17px;">
          AFROBEAT
        </h2>
      </div>
    </div>
    <!-- CONTENITORE LATERALE -->
    <div class="staff-side-content" data-staff = 'zoto'>
      <img class="fas fa-chevron-circle-left" src="{{ asset('img/arrow-right.png')}}" alt="">
      <img class="side-content-image" src="{{ asset('img/zoto_staff.jpg')}}" alt="">
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
    <div class="staff-side-content" data-staff = 'nazzari'>
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
    <div class="staff-side-content" data-staff = 'fabio'>
      <img class="fas fa-chevron-circle-left" src="{{ asset('img/arrow-right.png')}}" alt="">
      <img class="side-content-image" src="{{ asset('img/fabio_staff.jpg')}}" alt="">
      <h2 class="side-content-title">FABIO BOSS</h2>
      <p class="side-content-description" >Ho iniziato a ballare molto giovane all’età di 7 anni partendo dalle danze caraibiche. Ho sempre cercato di integrare questa disciplina con altre danze (classica, modern, flamenco, hip hop).
        <br><br>
      A 17 anni ho conosciuto la cultura House di cui mi sono subito appassionato formandomi con i migliori esponenti in Italia e dall’estero (Marjory Smarth, Link, Caleaf, Serial Steppers, Mamson, Gianni Wers, Vins e altri).
      <br><br>
      Attualmente studio a livello professionale alla Modulo Academy di Laccio tutti gli stili della cultura Hip hop a cui mi dedico esclusivamente integrando le varie esperienze professionali (tra cui la partecipazione come ballerino alla finale di X Factor 2019) alla mia indipendente attività creativa da ballerino in cui cerco di fondere la mia passione per la storia dell’arte e delle arti con la danza.

</p>
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
    <div class="staff-side-content" data-staff = 'susanna'>
      <img class="fas fa-chevron-circle-left" src="{{ asset('img/arrow-right.png')}}" alt="">
      <img class="side-content-image" src="{{ asset('img/susanna_staff.jpg')}}" alt="">
      <h2 class="side-content-title">SUSANNA SALVINI</h2>
      <p class="side-content-description" >Susanna Salvini, nata a Parma il 15/11/95.
      Danzatrice presso la compagnia Milano Contemporary Ballet di Roberto Altamura e Agora Coaching Project di Michele Merola ed Enrico Morelli, con le quali ha portato in scena spettacoli di coreografi internazionali in tutta Italia; attualmente collabora con Rodan Project di Camilla Negri.
      Ha partecipato a numerosi stage di danza con l'Accademia Teatro alla Scala, Scuola del Balletto di Roma, Aterballetto, Royal Ballet School, Studio Wayne McGregor, Peridance Capezio Center, Nunzio Impellizzeri Dance Company.
      Nel 2018 si diploma come Insegnante di Danza, presso l'A.S.C. di Roma.
      Nel 2019 si laurea presso la facoltà universitaria di Scienze Motorie, con voto 110/110 e lode.
      Nel 2020 si diploma come Istruttrice di Ginnastica Posturale (AICS).
      Attualmente è insegnante di danza classica e contemporanea e personal trainer. </p>
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
    <div class="staff-side-content" data-staff = 'simona'>
      <img class="fas fa-chevron-circle-left" src="{{ asset('img/arrow-right.png')}}" alt="">
      <img class="side-content-image" src="{{ asset('img/simona_staff.jpg')}}" alt="">
      <h2 class="side-content-title">SIMONA PIC</h2>
      <p class="side-content-description" >Simona Si avvicina alla Danza classica all’età di 10 anni per poi appassionarsi alla danza Moderna seguendo un corso professionale con Camilla Negri e partecipando a collaborazioni con Aterballetto e Artemis danza.
      Nello stesso periodo prosegue i suoi studi Universitari conseguendo la Laurea in Psicologia Clinica  e il diploma di Tecnico di Meditazione Sportiva.
      Successivamente sperimenta altre discipline come Cerchio Aereo e Tessuto Aereo.
      Nel 2016 conosce la Pole Dance e inizia a seguire corsi amatoriali con Chiara Alinovi fino ad appassionarsi a tal punto da conseguire nel 2020 il diploma di Insegnante di Ginnastica Acrobatica specialità Pole Dance ACSI con Elisa Boni.
      A ottobre 2019 vince la gara “Coppa Italia Pole Dance” categoria amatori. </p>
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
    <div class="staff-side-content" data-staff = 'micheli'>
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
    <div class="staff-side-content" data-staff = 'cosimolorena'>
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
    <div class="staff-side-content" data-staff = 'formenti'>
      <img class="fas fa-chevron-circle-left" src="{{ asset('img/arrow-right.png')}}" alt="">
      <img class="side-content-image" src="{{ asset('img/formenti_staff.jpg')}}" alt="">
      <h2 class="side-content-title">ALESSANDRA FORMENTI</h2>
      <p class="side-content-description" >Nata a Milano, a 4 anni inizia il suo percorso artistico-sportivo dedicandosi al Twirling. Due anni dopo, entra a far parte della squadra agonistica, vincendo negli anni diversi titoli regionali e nazionali. Si avvicina all’insegnamento nel 2002 e, una volta maggiorenne, ottiene le certificazioni di Giudice Federale e Tecnico di base della Federazione Italiana di Twirling (FITw). Qui trova la sua dimensione: insegnare è la sua vocazione! Allena bambini della pre-agonistica, allieve della serie A, diventa istruttrice di acquaticità per bambini normodotati e disabili ed Educatore Sportivo di II livello CONI, convita che lo sport debba essere forma di inclusione più che di competizione. Dopo la laurea triennale, diventa Counselor ed insegnante di Bioenergetica, presso l’istituto di Psicologia Somatorelazionale di Milano. Desiderosa di studiare una nuova disciplina acrobatica con attrezzi, si avvicina alla danza aerea e in pochi anni trasforma la sua passione in professione.

      Oggi è presidente dell’Associazione sportiva di promozione sociale “Fare per sentire”, attraverso la quale promuove progetti di consapevolezza e prevenzione del bullismo e della violenza di genere, attraverso il movimento e le discipline aeree. Nel 2019 lo CSEN le riconosce la qualifica di Formatore Nazionale per la disciplina di Danza Aerea Acrobatica su Tessuti Aerei, approvando il programma di studi di “Educazione attraverso lo sport”. È co-fondatrice di AIDA -Accademia Italiana Danza Aerea, dove tiene corsi di formazione per future insegnanti di danza aerea, insieme ad Elisa Alberga, fondatrice di Evolo - Danza Aero Dinamica, della quale è coach.</p>
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
    <div class="staff-side-content" data-staff = 'javi'>
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
    <div class="staff-side-content" data-staff = 'celani'>
      <img class="fas fa-chevron-circle-left" src="{{ asset('img/arrow-right.png')}}" alt="">
      <img class="side-content-image" src="{{ asset('img/celani_staff.jpg')}}" alt="">
      <h2 class="side-content-title">CARLOTTA CELANI</h2>
      <p class="side-content-description" >Da sempre nel ramo della Ginnastica Ritmica, ex ginnasta, istruttrice e ballerina.
        <br>
      Laureata in Scienze Motorie Sport e Salute.
      <br>
      Si appassiona alla danza HIP HOP nel 1999 diventando in seguito Istruttrice e praticandolo per 20 anni. Dal 2005 diventa istruttrice di ATP (Acquatic Training Program) FIF, nell’ambito dell’Acquafitness, conseguendo alla formazione per altri programmi quali: Acqua Bike, Water Trekking, Acqua Pole (FIPD) e Acqua Step.
      <br>
      Nel 2006 ottiene il diploma di PILATES “BASIC” Matwork Instructor 1° livello, successivamente “PILATES Matwork Advanced 121 Personal Trainer” e “PILATES nella DANZA”.
       <br>
      Dal 2010 nasce una passione incondizionata per la “ZUMBA” e la grande carica ed energia di questa disciplina la porta ad approfondire gli studi in questo ambito ottenendo il diploma “ZUMBA Instructor Network BASIC STEPS LEVEL 1°-ZIN-“ nel 2013, “ZUMBA Step Instructor” nel 2015 e “STRONG Nation” (allenamento funzionale sincronizzato con la musica) nel 2017.</p>
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
    <div class="staff-side-content" data-staff = 'vignali'>
      <img class="fas fa-chevron-circle-left" src="{{ asset('img/arrow-right.png')}}" alt="">
      <img class="side-content-image" src="{{ asset('img/vignali_staff.jpg')}}" alt="">
      <h2 class="side-content-title">SILVIA VIGNALI</h2>
      <p class="side-content-description" >Dal dicembre 2018 ho iniziato a frequentare per curiosità un corso nuovo mai visto prima chiamato Kangoo Power, scoprendo con sorpresa uno sport che consente di tenersi in forma divertendosi.

      Da semplice curiosità si è trasformata in una grande passione, che mi ha portato a decidere di partecipare a marzo 2019 (mettendomi decisamente in gioco) al corso di formazione KANGOO POWER e di diventare un’istruttrice qualificata.

      Ho insegnato presso la scuola ARP DANCE di Parma nella stagione 2019/2020.

      A febbraio 2020 ho deciso di migliorare e ampliare le mie capacità partecipando al corso di formazione KANGOO DANCE, prendendo così un ulteriore qualifica.

      Una delle mie caratteristiche migliori?

      Ci metto decisamente passione e tutto il mio cuore, le altre le faccio scoprire a voi se lo vorrete!</p>
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
    <div class="staff-side-content" data-staff = 'arcidiaco'>
      <img class="fas fa-chevron-circle-left" src="{{ asset('img/arrow-right.png')}}" alt="">
      <img class="side-content-image" src="{{ asset('img/arcidiaco_staff.jpg')}}" alt="">
      <h2 class="side-content-title">MAX ARCIDIACO</h2>
      <p class="side-content-description" >Maximilian Arcidiaco
      Diplomato alla scuola superiore per Odontotecnici. Atleta di Combat, da 20 anni lavora nel mondo del fitness, è un Personal Trainer, Top Trainer Street Workout Italia, Istruttore di Fitness, Combat, Functional Workout, Functional System, Functional  Training ed è il Founder per Thai Fit® Italia. Il suo motto è " Il tuo obiettivo è il mio obiettivo".</p>
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
    <div class="staff-side-content" data-staff = 'niccolai'>
      <img class="fas fa-chevron-circle-left" src="{{ asset('img/arrow-right.png')}}" alt="">
      <img class="side-content-image" src="{{ asset('img/niccolai_staff.jpg')}}" alt="">
      <h2 class="side-content-title">DONATELLA NICCOLAI</h2>
      <p class="side-content-description" >
        Studi scuola magistrale e diploma in tecniche erboristiche <br>
        Lavorato come insegnante elementare fino al 1998 <br>
        Addetta alle vendite presso negozio arredamento Mazzoni salotti PR fino al 2013 <br>
        Appassionata di sport e Running <br>
        Lavorato per un ventennio presso vari centri fitness di Parma e provincia(Fitnesstime,Squashinn,Wellfit,body club,ego Village ) <br>
        Collaborato presso la scuola di danza CID ,Parma e Showtime Basilicanova <br>
        Istruttrice fitness musicale ,step e aerobica presso FIF dal 1995 <br>
        Instruttrice body building e personal trainer FIF e Accademia del fitness di Massimo Spattini (PR)
        Istruttrice di pilates FIF <br>
        Istruttrice indoor Cycling dal 2018 con Group Cycling</p>
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
    <div class="staff-side-content" data-staff = 'frambati'>
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
    <div class="staff-side-content" data-staff = 'alice'>
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
    <div class="staff-side-content" data-staff = 'brunelli'>
      <img class="fas fa-chevron-circle-left" src="{{ asset('img/arrow-right.png')}}" alt="">
      <img class="side-content-image" src="{{ asset('img/brunelli_staff.jpg')}}" alt="">
      <h2 class="side-content-title">RAFFAELLA BRUNELLI</h2>
      <p class="side-content-description" >Febbraio 2012: Diploma di Yoga come Istruttore di 1° Livello conseguito a Verona, presso Parsifal Yoga Accademy e rilasciato dall’Ente MSP Italia, Ente riconosciuto dal CONI
        <br>
      Luglio 2020: Diploma di Istruttore di Yoga Integrale, conseguito a Milano presso Parsifal Yoga Accademy – corso triennale.
        <br>
      Negli anni ’90 ho iniziato il mio percorso con lo Yoga Integrale. Allieva del Maestro Walter Ferrero e Tersa Sintoni, Yoga Master da loro ho ricevuto e ricevo tutt’ora l’insegnamento per la pratica di questa antica Disciplina. Lo Yoga Integrale mi ha portata a scoprire in me il desiderio di approfondire la conoscenza del corpo attraverso l’arte del massaggio che ho appreso ormai da molti anni dalle mie guide.
      <br>
      Con Parsifal Yoga Academy, la Scuola fondata dai miei Maestri ho fatto molti viaggi di studio nei luoghi della tradizione. Sono stata più volte in India, poi in Turchia, in Marocco, in Spagna, il cammino di Santiago, in Portogallo, in Germania, in Francia, le Cattedrali gotiche, in Scozia e Isole Shetland e a Gerusalemme.
      <br>
      Adea edizioni è la casa editrice che pubblica i libri dei miei Maestri per la divulgazione del loro insegnamento.
      <br>
      ESPERIENZE PRATICHE LAVORATIVE
      <br>
      Ho iniziato il mio percorso lavorativo nell’ambito creativo in studi di architettura. La mia passione per la bellezza, la creatività e la cura ha iniziato dagli spazi esterni fino poi a ricercare una qualità interiore. Nel 1987 sono diventata madre e dopo 3 anni, il mio incontro con lo Yoga Integrale ha trasformato la mia vita.
      <br>
      Nel ’97 e fino al 2003, con alcuni compagni di pratica abbiamo aperto un centro, “Dimensione Corpo”, nella città di Cremona. Un centro rivolto al benessere della persona, in cui veniva insegnato lo Yoga Integrale, il Tai Chi Chuan e tutte le diverse di attività con il corpo libero, danza moderna e Tango Argentino. Una sala con attrezzi Thecnogym. Un centro estetico con attigua zona con sauna, bagno turco e solarium.
      <br>
      Ho insegnato a Parsifal Yoga Academy Cremona e tengo Corsi di Yoga a Busseto e in provincia di Mantova. Da aprile ho iniziato i corsi a Parma al centro di Danza The Flow Dance Academy.</p>
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
    <div class="staff-side-content" data-staff = 'ricci'>
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
  <section id="contatti">

    <h1 id="titolo-contatti"> CONTATTI </h1>

    <div class="contenitore contatti-section">
      <div id="zona-mappa">
        <div id='map'></div>
      </div>

      <div id="zona-info">
        <h2>Dove ci puoi trovare:</h2>
        <h3>Viale Europa, 108/A, 43122 Parma PR</h3>
        <br>
        <h2>Chiamaci al fisso:</h2>
        <h3>0521 062736</h3>
        <br>
        <h2>Il nostro Fax:</h2>
        <h3>0523 1924357</h3>
        <br>
        <h2>Chiamaci in giro:</h2>
        <h3>346 0883589</h3>
      </div>

    </div>
  </section>




  <div id="button-scroll-up">
    <img class="fas fa-angle-double-up" src="{{ asset('img/arrow-right.png')}}" alt="">
  </div>



  <script type="text/javascript" src="{{ asset('js/home.js')}}"></script>

@endsection
