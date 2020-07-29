$( document ).ready(function() {
  console.log('culoooo');


  // FRECCIA SCROLL
  $( ".fa-arrow-circle-down" ).click(function() {
    $('html,body').animate({
        scrollTop: $('#primaSezione').offset().top
      },'slow');
  });


  $(window).on("scroll", function() {
      if($(window).scrollTop() > 50) {
          $("#navbar").removeClass(".nav-start");
          $("#navbar").addClass(".nav-scroll");
      } else {
          //remove the background property so it comes transparent again (defined in your css)
         $("#navbar").toggleClass("active");
      }
  });







});
