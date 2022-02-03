<?php 
  include "header.php";
  
  function echoWetterDaegu() {

    $response = file_get_contents('https://api.openweathermap.org/data/2.5/weather?q=Daegu&APPID=1766952cda1c37eaf3b9a8fb47e0d654');
    $response = json_decode($response);
  
    $temp = $response->main->temp - 273.15;
    $besc = $response->weather[0]->description;
    $ts = date("d.m.Y H:i:s");

    echo $temp . "°C, " . $besc . " (" . $ts . " GMT+2)";
  }
?>

<div id="kat-con">

  <div class="row">
    <h1>Daegu</h1>
  </div>

  <ul class="collapsible busan_coll">
    <li>
      <div class="collapsible-header"><i class="material-icons">lightbulb_outline</i>Quick Facts</div>
      <div class="collapsible-body">
        <table>
          <tr><td>Einwohner:</td><td>ca. 2.5 Mio.</td></tr>
          <tr><td>Fläche:</td><td>ca. 884 km<sup>2</sup></td></tr>
          <tr><td>Bevölkerungsdichte:</td><td>ca. 2.8K pro km<sup>2</sup></td></tr>
          <tr><td>Standort: </td><td><a href="https://www.google.com/maps/place/Daegu" target="_blank">Daegu auf Google Maps</a></td></tr>
          <tr><td>Aktuelles Wetter: </td><td><?php echoWetterDaegu(); ?></td></tr>
        </table>
      </div>
    </li>
  </ul>

  <div class="parallax-container">
    <div class="parallax"><img src="https://drive.google.com/uc?export=view&id=1txJiCsTj2VQaXF3eeAAs-fqbeLfCV4QV"></div>
  </div>

  <div class="section white z-depth-3">
    <div class="row container">
      <a href="daegu_f/83_tower" class="hvr-underline-from-left">
        <h3 class="header">
          83 Tower&nbsp;<i class="medium material-icons">arrow_forward</i>
        </h3>
      </a>
    </div>
  </div>


  <div class="parallax-container">
    <div class="parallax"><img src="https://drive.google.com/uc?export=view&id=1M4bor_QIFI-4rbBvP1m7gCB-gAurwTzJ"></div>
  </div>

  <div class="section white z-depth-3">
    <div class="row container">
      <a href="daegu_f/eworld" class="hvr-underline-from-left">
        <h3 class="header">
         E-World&nbsp;<i class="medium material-icons">arrow_forward</i>
        </h3>
      </a>
    </div>
  </div>


  <div class="parallax-container">
    <div class="parallax"><img src="https://drive.google.com/uc?export=view&id=14juTKh4tR163AzlaCRdrb_S4Tqn9RBL_"></div>
  </div>

  <div class="section white z-depth-3">
    <div class="row container">
      <a href="daegu_f/daegu_jeil_church" class="hvr-underline-from-left">
        <h3 class="header">
          Daegu Jeil Church&nbsp;<i class="medium material-icons">arrow_forward</i>
        </h3>
      </a>
    </div>
  </div>


  <div class="parallax-container">
    <div class="parallax"><img src="https://drive.google.com/uc?export=view&id=1zVBMdNXB8nWyk5jHYmjsTDE_jIQpO0X1"></div>
  </div>

  <div class="section white z-depth-3">
    <div class="row container">
      <a href="daegu_f/street_markets" class="hvr-underline-from-left">
        <h3 class="header">
          Street Markets&nbsp;<i class="medium material-icons">arrow_forward</i>
        </h3>
      </a>
    </div>
  </div>


  <iframe src="https://www.google.com/maps/d/u/1/embed?mid=1g7JaUtJ9qcfUTKpOzjFkzMm8UzqQFr5h&ehbc=2E312F" id="seoul_map"></iframe>
 
 

</div>

<?php
  include "footer.php";
?>