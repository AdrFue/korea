$(document).ready(function(){

  // Matrialize-Funktionen
  $('.materialboxed').materialbox();
  $('.sidenav').sidenav();
  $('.collapsible').collapsible();

  $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true
  });

  $('.parallax').parallax();

  // Fensterhöhe für Index-Bild
  $( "#index_caro" ).css( "height", $(window).height()-100 );
  $( "#index_caro img" ).css( "height", $(window).height()-100 );

  // Scrollbar auf Startseite ausblenden
  if (window.location.pathname.length == 1) {
    $( "body" ).css( "overflow", "hidden" );
    $( "#footer" ).css( "display", "none" );
  }
});