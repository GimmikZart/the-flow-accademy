<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/96b15bae54.js" crossorigin="anonymous"></script>
    <link rel='stylesheet' type='text/css' href='https://api.tomtom.com/maps-sdk-for-web/cdn/5.x/5.60.0/maps/maps.css'>
    <script src="https://api.tomtom.com/maps-sdk-for-web/cdn/5.x/5.60.0/maps/maps-web.min.js"></script>
    <script src="https://api.tomtom.com/maps-sdk-for-web/cdn/5.x/5.60.0/services/services-web.min.js"></script>
    <title>The Flow Accademy</title>
  </head>
  <body>

    {{-- header --}}
      @include('components.header')
    {{-- fine header --}}

    <section class="main-content">
      @include('jumbotron')
      @include('sezioneuno')
      @include('corsi')
      @include('staff')

      <div id="button-scroll-up">
        <img class="fas fa-angle-double-up" src="{{ asset('img/arrow-right.png')}}" alt="">
      </div>
      <script type="text/javascript" src="{{ asset('js/home.js')}}"></script>
    </section>

    {{-- footer --}}
      @include('components.footer')
    {{-- fine footer --}}


  </body>
</html>
