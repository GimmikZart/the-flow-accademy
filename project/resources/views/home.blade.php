@extends('layouts.mainlayout')

@section('content')

  <div class="jumbotron">
    <div class="immagini">
      <img src="{{ asset('img/entrata.jpg')}}" alt="">
    </div>
    <i class="fas fa-angle-double-down"></i>

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
  <h1 id="titolo-corsi"> IL NOSTRO PLANNING </h1>

  <div class="corsi-section">
    <div class="planning">
      <img id="planning-img" src="{{ asset('img/planner.jpg')}}" alt="planning.jpg">
    </div>

    <div class="guide-stili">
      <ul>
        <li>
          <div class="guide-left-side streetdance-color">
            <h3>HIP HOP</h3>
          </div>
          <div class="guide-right-side">
            <div class="more">
              <small>Scopri di più</small>
              <i class="fas fa-angle-down"></i>
            </div>
          </div>
          <div class="guide-more-detail">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
          </div>
        </li>

        <!-- <li>
          <div class="guide-left-side streetdance-color">
            <h3>POPPIN</h3>
          </div>
          <div class="guide-right-side">
            <div class="more">
              <small>Scopri di più</small>
              <i class="fas fa-angle-down"></i>
            </div>
          </div>
          <div class="guide-more-detail">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
          </div>
        </li>

        <li>
          <div class="guide-left-side streetdance-color">
            <h3>LOCKIN</h3>
          </div>
          <div class="guide-right-side">
            <div class="more">
              <small>Scopri di più</small>
              <i class="fas fa-angle-down"></i>
            </div>
          </div>
          <div class="guide-more-detail">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
          </div>
        </li>

        <li>
          <div class="guide-left-side streetdance-color">
            <h3>HOUSE-DANCE</h3>
          </div>
          <div class="guide-right-side">
            <div class="more">
              <small>Scopri di più</small>
              <i class="fas fa-angle-down"></i>
            </div>
          </div>
          <div class="guide-more-detail">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
          </div>
        </li> -->

        <li>
          <div class="guide-left-side streetdance-color">
            <h3>BREAKING</h3>
          </div>
          <div class="guide-right-side">
            <div class="more">
              <small>Scopri di più</small>
              <i class="fas fa-angle-down"></i>
            </div>
          </div>
          <div class="guide-more-detail">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
          </div>
        </li>

        <li>
          <div class="guide-left-side streetdance-color">
            <h3>AFROBEAT</h3>
          </div>
          <div class="guide-right-side">
            <div class="more">
              <small>Scopri di più</small>
              <i class="fas fa-angle-down"></i>
            </div>
          </div>
          <div class="guide-more-detail">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
          </div>
        </li>

        <li>
          <div class="guide-left-side streetdance-color">
            <h3>DANCEHALL</h3>
          </div>
          <div class="guide-right-side">
            <div class="more">
              <small>Scopri di più</small>
              <i class="fas fa-angle-down"></i>
            </div>
          </div>
          <div class="guide-more-detail">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
          </div>
        </li>

        <li>
          <div class="guide-left-side dance-color">
            <h3>CLASSICO</h3>
          </div>
          <div class="guide-right-side">
            <div class="more">
              <small>Scopri di più</small>
              <i class="fas fa-angle-down"></i>
            </div>
          </div>
          <div class="guide-more-detail">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
          </div>
        </li>

        <li>
          <div class="guide-left-side dance-color">
            <h3>MODERNO</h3>
          </div>
          <div class="guide-right-side">
            <div class="more">
              <small>Scopri di più</small>
              <i class="fas fa-angle-down"></i>
            </div>
          </div>
          <div class="guide-more-detail">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
          </div>
        </li>

        <li>
          <div class="guide-left-side dance-color">
            <h3>POLE DANCE</h3>
          </div>
          <div class="guide-right-side">
            <div class="more">
              <small>Scopri di più</small>
              <i class="fas fa-angle-down"></i>
            </div>
          </div>
          <div class="guide-more-detail">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
          </div>
        </li>

        <li>
          <div class="guide-left-side dance-color">
            <h3>POLE FLUIDITY</h3>
          </div>
          <div class="guide-right-side">
            <div class="more">
              <small>Scopri di più</small>
              <i class="fas fa-angle-down"></i>
            </div>
          </div>
          <div class="guide-more-detail">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
          </div>
        </li>

        <li>
          <div class="guide-left-side dance-color">
            <h3>SALSA & PACHANGA</h3>
          </div>
          <div class="guide-right-side">
            <div class="more">
              <small>Scopri di più</small>
              <i class="fas fa-angle-down"></i>
            </div>
          </div>
          <div class="guide-more-detail">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
          </div>
        </li>

        <li>
          <div class="guide-left-side fitness-color">
            <h3>ZUMBA</h3>
          </div>
          <div class="guide-right-side">
            <div class="more">
              <small>Scopri di più</small>
              <i class="fas fa-angle-down"></i>
            </div>
          </div>
          <div class="guide-more-detail">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
          </div>
        </li>

        <li>
          <div class="guide-left-side fitness-color">
            <h3>THAI FIT</h3>
          </div>
          <div class="guide-right-side">
            <div class="more">
              <small>Scopri di più</small>
              <i class="fas fa-angle-down"></i>
            </div>
          </div>
          <div class="guide-more-detail">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
          </div>
        </li>

        <li>
          <div class="guide-left-side fitness-color">
            <h3>PILATES</h3>
          </div>
          <div class="guide-right-side">
            <div class="more">
              <small>Scopri di più</small>
              <i class="fas fa-angle-down"></i>
            </div>
          </div>
          <div class="guide-more-detail">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
          </div>
        </li>

        <li>
          <div class="guide-left-side fitness-color">
            <h3>YOGA</h3>
          </div>
          <div class="guide-right-side">
            <div class="more">
              <small>Scopri di più</small>
              <i class="fas fa-angle-down"></i>
            </div>
          </div>
          <div class="guide-more-detail">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
          </div>
        </li>

        <li>
          <div class="guide-left-side mamme-color">
            <h3>MAMME E BEBE'</h3>
          </div>
          <div class="guide-right-side">
            <div class="more">
              <small>Scopri di più</small>
              <i class="fas fa-angle-down"></i>
            </div>
          </div>
          <div class="guide-more-detail">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
          </div>
        </li>

        <li>
          <div class="guide-left-side mamme-color">
            <h3>MASSAGGIO NEONATALE</h3>
          </div>
          <div class="guide-right-side">
            <div class="more">
              <small>Scopri di più</small>
              <i class="fas fa-angle-down"></i>
            </div>
          </div>
          <div class="guide-more-detail">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
          </div>
        </li>

        <li>
          <div class="guide-left-side mamme-color">
            <h3>BABY WEARING</h3>
          </div>
          <div class="guide-right-side">
            <div class="more">
              <small>Scopri di più</small>
              <i class="fas fa-angle-down"></i>
            </div>
          </div>
          <div class="guide-more-detail">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
          </div>
        </li>
      </div>
  </div>



















  <!-- SEZIONE STAFF ------------------------------------------------------------------------------------------------------------------->
  <div id="scroll-to-staff">

  </div>
  <h1 id="titolo-staff" > IL NOSTRO STAFF</h1>


  <div class="contenitore staff-section">

    <!-- ALEX -->
    <div class="card-staff streetdance-color">
      <div class="title-branca">
        <h2>STREETDANCE</h2>
      </div>
      <h3 class="teacher-name">Alex Castagnetti</h3>
      <div class="img-teacher">

      </div>
      <p class="teacher-description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <div class="title-style">
        <h2>HIP HOP</h2>
      </div>
    </div>

    <!-- DEXIO -->
    <div class="card-staff streetdance-color">
      <div class="title-branca">
        <h2>STREETDANCE</h2>
      </div>
      <h3 class="teacher-name">Dexio</h3>
      <div class="img-teacher">

      </div>
      <p class="teacher-description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <div class="title-style">
        <h2>BREAKING</h2>
      </div>
    </div>

    <!-- MANU ANGE -->
    <div class="card-staff streetdance-color">
      <div class="title-branca">
        <h2>STREETDANCE</h2>
      </div>
      <h3 class="teacher-name">Manu Ange</h3>
      <div class="img-teacher">

      </div>
      <p class="teacher-description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <div class="title-style">
        <h2>AFROBEAT</h2>
      </div>
    </div>

    <!-- MAD MIKE -->
    <div class="card-staff streetdance-color">
      <div class="title-branca">
        <h2>STREETDANCE</h2>
      </div>
      <h3 class="teacher-name">Mad Mike</h3>
      <div class="img-teacher">

      </div>
      <p class="teacher-description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <div class="title-style">
        <h2>DANCEHALL</h2>
      </div>
    </div>

    <!-- SUSANNA SALVINI -->
    <div class="card-staff dance-color">
      <div class="title-branca">
        <h2>DANCE</h2>
      </div>
      <h3 class="teacher-name">Susanna Salvini</h3>
      <div class="img-teacher">

      </div>
      <p class="teacher-description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <div class="title-style">
        <h2>CLASSICA/MODERN</h2>
      </div>
    </div>

    <!-- SIMONA PORFILIO -->
    <div class="card-staff dance-color">
      <div class="title-branca">
        <h2>DANCE</h2>
      </div>
      <h3 class="teacher-name">Simona Porfilio</h3>
      <div class="img-teacher">

      </div>
      <p class="teacher-description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <div class="title-style">
        <h2>POLE DANCE</h2>
      </div>
    </div>

    <!-- CHIARA ALINOVI -->
    <div class="card-staff dance-color">
      <div class="title-branca">
        <h2>DANCE</h2>
      </div>
      <h3 class="teacher-name">Chiara Alinovi</h3>
      <div class="img-teacher">

      </div>
      <p class="teacher-description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <div class="title-style">
        <h2>POLE FLUIDITY</h2>
      </div>
    </div>

    <!-- COSIMO E LORENA -->
    <div class="card-staff dance-color">
      <div class="title-branca">
        <h2>DANCE</h2>
      </div>
      <h3 class="teacher-name">Cosimo e Lorena</h3>
      <div class="img-teacher">

      </div>
      <p class="teacher-description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <div class="title-style">
        <h2>SALSA & PACHANGA</h2>
      </div>
    </div>

    <!-- JAVI FERNAN -->
    <div class="card-staff fitness-color">
      <div class="title-branca">
        <h2>FITNESS</h2>
      </div>
      <h3 class="teacher-name">Javi Fernan</h3>
      <div class="img-teacher">

      </div>
      <p class="teacher-description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <div class="title-style">
        <h2>ZUMBA</h2>
      </div>
    </div>

    <!-- MAX ARCIDIACO -->
    <div class="card-staff fitness-color">
      <div class="title-branca">
        <h2>FITNESS</h2>
      </div>
      <h3 class="teacher-name">Max Arcidiaco</h3>
      <div class="img-teacher">

      </div>
      <p class="teacher-description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <div class="title-style">
        <h2>THAI FIT</h2>
      </div>
    </div>

    <!-- DONATELLA NICCOLAI -->
    <div class="card-staff fitness-color">
      <div class="title-branca">
        <h2>FITNESS</h2>
      </div>
      <h3 class="teacher-name">Donatella Niccolai</h3>
      <div class="img-teacher">

      </div>
      <p class="teacher-description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <div class="title-style">
        <h2>PILATES</h2>
      </div>
    </div>

    <!--RAFFAELLA BRUNELLI -->
    <div class="card-staff fitness-color">
      <div class="title-branca">
        <h2>FITNESS</h2>
      </div>
      <h3 class="teacher-name">Raffaella Brunelli</h3>
      <div class="img-teacher">

      </div>
      <p class="teacher-description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <div class="title-style">
        <h2>YOGA</h2>
      </div>
    </div>

    <!-- FULVIA FRAMBATI -->
    <div class="card-staff mamme-color">
      <div class="title-branca">
        <h2>MAMME</h2>
      </div>
      <h3 class="teacher-name">Fulvia Frambati</h3>
      <div class="img-teacher">

      </div>
      <p class="teacher-description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <div class="title-style">
        <h2>MAMMA E BEBE'</h2>
      </div>
    </div>

    <!-- SHANTI MACCHIAVELLI -->
    <div class="card-staff mamme-color">
      <div class="title-branca">
        <h2>MAMME</h2>
      </div>
      <h3 class="teacher-name">Shanti Macchiavelli</h3>
      <div class="img-teacher">

      </div>
      <p class="teacher-description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <div class="title-style">
        <h2>MASSAGGIO NEONATALE</h2>
      </div>
    </div>

    <!-- ALICE MONTAGNA -->
    <div class="card-staff mamme-color">
      <div class="title-branca">
        <h2>MAMME</h2>
      </div>
      <h3 class="teacher-name">Ali ce Montagna</h3>
      <div class="img-teacher">

      </div>
      <p class="teacher-description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <div class="title-style">
        <h2>BABY WEARING</h2>
      </div>
    </div>

    <!-- FABRIZIO RICCI -->
    <div class="card-staff service-color">
      <div class="title-branca">
        <h2>SERVIZI</h2>
      </div>
      <h3 class="teacher-name">Fabrizio Ricci</h3>
      <div class="img-teacher">

      </div>
      <p class="teacher-description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <div class="title-style">
        <h2>MASSAGGI SHATSU</h2>
      </div>
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
    <i class="fas fa-angle-double-up"></i>
  </div>



  <script type="text/javascript" src="{{ asset('js/home.js')}}"></script>

@endsection
