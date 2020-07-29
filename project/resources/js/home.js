$( document ).ready(function() {
  console.log('culoooo');


  // FRECCIA SCROLL
  $( ".fa-arrow-circle-down" ).click(function() {
    $('html,body').animate({
        scrollTop: $('#primaSezione').offset().top
      },'slow');
  });


  $(function() {
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 10) {
            $("#navbar").removeClass("nav-start");
            $("#navbar").addClass("nav-scroll");
            $("header").css("top", "0");
        } else {
            $("#navbar").addClass("nav-start");
            $("#navbar").removeClass("nav-scroll");
            $("header").css("top", "50px");

        }
    });
});







});
