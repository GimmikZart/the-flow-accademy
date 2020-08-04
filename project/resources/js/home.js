$( document ).ready(function() {
  console.log('culoooo');

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

  // HOME SCROLL
  $( "#home-button" ).click(function() {
    $('html,body').animate({
        scrollTop: $('.jumbotron').offset().top
      },'slow');
  });


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

// EVENTI CLICK ------------------------------------------------------------

// CORSI GUIDE


$( ".guide-right-side" ).click(function() {
  $( ".guide-right-side" ).next().hide();
  $(this).next().toggle();
  $(this).children('.more').hide();
  $(this).children('.less').show();

});

$('.less').click(function(){
  $( this ).hide();
  $(this).siblings('.more').show();
})

// $( "document" ).click(function() {
//   if ($( ".guide-right-side" ).next().hasClass('display-block')) {
//       console.log('lo ha');
//       $( ".guide-right-side" ).next().removeClass('display-block');
//   }
// });




  // TOM TOM

  var theFlowCoordinates = [ 10.328510, 44.825600];

  var map = tt.map({
    container: 'map',
    key: 'GA5MivJiK0ZxoB9tGaVHIhVkwckf4jOc',
    style: 'tomtom://vector/1/basic-main',
    center: theFlowCoordinates,
    zoom: 15
});

var marker = new tt.Marker().setLngLat(theFlowCoordinates).addTo(map);

}); //fine document ready
