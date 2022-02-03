$(document).ready(function(){

  // Matrialize-Funktionen
  $('.materialboxed').materialbox();
  $('.sidenav').sidenav();
  $('.collapsible').collapsible();
  $('.parallax').parallax();
  $(".dropdown-trigger").dropdown();

  // Fensterhöhe für Index-Bild
  $( "#one" ).css( "height", $(window).height()-100 );
  $( "#one img" ).css( "height", $(window).height()-100 );

  // Scrollbar auf Startseite ausblenden
  if (window.location.pathname.length == 1) {
    $( "html" ).css( "scroll-behavior", "smooth" );
  }
});