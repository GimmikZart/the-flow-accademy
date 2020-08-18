$( document ).ready(function() {
  console.log('culoooo');

// JUMBOTRON CAROUSEL---------------------------------------------------------

$(".next").click(
    // richiamoòa funzione next
     nextImg
  );

  $(".prev").click(
    // richiamoòa funzione next
     prevImg
  );

  setInterval(nextImg, 5000);

  // creo la funzione per scorrere all'immagine dopo
function nextImg() {
    var imgActive = $(".immagini div.active");
    var pallinoActive = $(".pallini i.active");
    imgActive.removeClass("active");
    pallinoActive.removeClass("active");

    if(imgActive.hasClass("last")){
      $(".immagini div.first").addClass("active");
      $(".pallini i.first").addClass("active");
  } else {
    imgActive.next().addClass("active");
    pallinoActive.next().addClass("active");
  }
}

// creo la funzione per scorrere all'immagine prima
function prevImg() {
    var imgActive = $(".immagini div.active");
    var pallinoActive = $(".pallini i.active");
    imgActive.removeClass("active");
    pallinoActive.removeClass("active");

    if(imgActive.hasClass("first")){
      $(".immagini div.last").addClass("active");
      $(".pallini i.last").addClass("active");
  } else {
    imgActive.prev().addClass("active");
    pallinoActive.prev().addClass("active");
  }
}

// FUNZIONI SCROLL --------------------------------------------------

  // FRECCIA SCROLL DOWN
  $( ".fa-angle-double-down" ).click(function() {
    $('html,body').animate({
        scrollTop: $('#primaSezione').offset().top
      },'slow');
  });

  // FRECCIA SCROLL UP
  $( "#button-scroll-up" ).click(function() {
    $('html,body').animate({
        scrollTop: $('.jumbotron').offset().top
      },'slow');
  });

  // CORSI SCROLL
  $( "#corsi-button" ).click(function() {
    $('html,body').animate({
        scrollTop: $('#scroll-to-corsi').offset().top
      },'slow');
  });

  // STAFF SCROLL
  $( "#staff-button" ).click(function() {
    $('html,body').animate({
        scrollTop: $('#scroll-to-staff').offset().top
      },'slow');
  });

  // ORARI SCROLL
  $( "#orari-button" ).click(function() {
    $('html,body').animate({
        scrollTop: $('#scroll-to-orari').offset().top
      },'slow');
  });

  // CONTATTI SCROLL
  $( "#contatti-button" ).click(function() {
    $('html,body').animate({
        scrollTop: $('#scroll-to-contatti').offset().top
      },'slow');
  });

  // HOME SCROLL
  $( "#home-button" ).click(function() {
    $('html,body').animate({
        scrollTop: $('.jumbotron').offset().top
      },'slow');
  });

  // HOME SCROLL-with logo
  $( "#logo-nav" ).click(function() {
    $('html,body').animate({
        scrollTop: $('.jumbotron').offset().top
      },'slow');
  });


  // HEADER SCROLL EFFECT CAMBIO CSS IN BASE AL DEVICE

  var mediaQueryPhone = window.matchMedia("(min-width: 999px)");

  function headerScrollEffect(x) {
    if (x.matches) {
      $(function() {
        $(window).on("scroll", function() {
            if($(window).scrollTop() > 10) {
                $("#navbar").removeClass("nav-start");
                $("#navbar").addClass("nav-scroll");
                $("header").css("top", "0");
                $("#button-scroll-up").css("display", "block");
            } else {
                $("#navbar").addClass("nav-start");
                $("#navbar").removeClass("nav-scroll");
                $("header").css("top", "50px");
                $("#button-scroll-up").css("display", "none");

            }
        });
      });
    };
  };

  headerScrollEffect(mediaQueryPhone);

// EVENTI CLICK ------------------------------------------------------------------------------------------

// CONTAINER LATERALI ------------------------------------------------------------

// comparsa box laterale CORSI
  $('.card-corsi').click(function(){
    $('.card-corsi').css('transition','ease 0.3s');
    $('.card-corsi').css('border','none');
    $(this).css('transition','ease 0.3s');
    $(this).css('border','5px solid yellow');
    $('.corso-hip-hop').css('filter','none');
    $('.corsi-side-content').removeClass('active');
    $(this).next().addClass('active');
    $(this).children('.corso-hip-hop').css('filter','grayscale(100%)');
  });

  //scomparsa box laterale CORSI

  $('.fa-chevron-circle-right').click(function(){
    $('.card-corsi').css('border', 'none');
    $(this).parent().addClass('slideOutRight');
    $('.corso-hip-hop').css('filter','none');
    setTimeout(exitRight,500);

    function exitRight(){
      $('.fa-chevron-circle-right').parent().removeClass('active');
      $('.fa-chevron-circle-right').parent().removeClass('slideOutRight');
      console.log($(this).parent());
    }
  });

  // comparsa box laterale STAFF --------------------------------
    $('.card-staff').click(function(){
      $('.staff-side-content').removeClass('active');
      $(this).next().addClass('active');
      $('.nav-scroll .contenitore #logo-nav').css({"transform": "rotate(0deg)", "height": "120%"})
    });

    //scomparsa box laterale STAFF------------

    $('.fa-chevron-circle-left').click(function(){
      $(this).parent().addClass('slideOutLeft');
      $('.nav-scroll .contenitore #logo-nav').css({"transform": "rotate(-10deg)", "height": "220%"})

      setTimeout(exitLeft,500);

      function exitLeft(){
        $('.fa-chevron-circle-left').parent().removeClass('active');
        $('.fa-chevron-circle-left').parent().removeClass('slideOutLeft');
        console.log($(this).parent());
      }
    });

    // LINK A CONTAINER STAFF

    $('.mini-insegnante').click(function(){

      $('.staff-side-content').removeClass('active');
      var staffLink = "'" + $(this).data('staff') + "'";
      console.log(staffLink);

      // console.log($('.staff-side-content[data-staff*=' + staffLink));
      $('.staff-side-content[data-staff*=' + staffLink).addClass('active');
      $('.nav-scroll .contenitore #logo-nav').css({"transform": "rotate(0deg)", "height": "120%"})

    })

    // LINK A CONTAINER CORSI

    $('.staff-style').click(function(){

      var mediaQueryPhone = window.matchMedia("(max-width: 550px)");

      if (mediaQueryPhone.matches) {
        var staffContainer = $(this).parent().parent();
        staffContainer.addClass('slideOutLeft');

        setTimeout(exitLeftDue,600);

        function exitLeftDue(){
          staffContainer.removeClass('active');
          staffContainer.removeClass('slideOutLeft');
        }

        $('.corsi-side-content').removeClass('active');
        var corsoLink = "'" + $(this).data('corso') + "'";
        // console.log($('.staff-side-content[data-staff*=' + staffLink));
        $('.corsi-side-content[data-corso*=' + corsoLink).addClass('active');

      } else {
        $('.corsi-side-content').removeClass('active');
        var corsoLink = "'" + $(this).data('corso') + "'";


        // console.log($('.staff-side-content[data-staff*=' + staffLink));
        $('.corsi-side-content[data-corso*=' + corsoLink).addClass('active');
      }


    })




  // TOM TOM----

  var theFlowCoordinates = [ 10.328510, 44.825600];

  var map = tt.map({
    container: 'map',
    key: 'GA5MivJiK0ZxoB9tGaVHIhVkwckf4jOc',
    style: 'tomtom://vector/1/basic-main',
    center: theFlowCoordinates,
    zoom: 15
});

var marker = new tt.Marker().setLngLat(theFlowCoordinates).addTo(map);





// MEDIA QUERY ---------------------------------------

  var navMobileOn = false;

  $('#hamburger-menu').click(function(){
    $('#nav-list').css('display','flex');
    $('#nav-list').addClass('navMobileSlideIn');
    navMobileOn = true;
  });

  $('#nav-list li').click(function(){

    var mediaQueryPhone = window.matchMedia("(max-width: 999px)");

    navMenuMobileExit(mediaQueryPhone);
  });

  $('.main-content').click(function(){
    var mediaQueryPhone = window.matchMedia("(max-width: 999px)");
    if (navMobileOn = true){
        navMenuMobileExit(mediaQueryPhone);
    }
  });

  function navMenuMobileExit(x) {
    if (x.matches) {
      $('#nav-list').removeClass('navMobileSlideIn');
      $('#nav-list').addClass('navMobileSlideOut');

      setTimeout(function(){
        $('#nav-list').css('display','none');
        $('#nav-list').removeClass('navMobileSlideOut');
      },500);
    };
  };




}); //fine document ready
