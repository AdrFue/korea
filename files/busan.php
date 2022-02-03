<?php 
  include "header.php";
  
  function echoWetterBusan() {

    $response = file_get_contents('https://api.openweathermap.org/data/2.5/weather?q=Busan&APPID=1766952cda1c37eaf3b9a8fb47e0d654');
    $response = json_decode($response);
  
    $temp = $response->main->temp - 273.15;
    $besc = $response->weather[0]->description;
    $ts = date("d.m.Y H:i:s");

    echo $temp . "°C, " . $besc . " (" . $ts . " GMT+2)";
  }
?>

<div id="kat-con">

  <div class="row">
    <h1>Busan</h1>
  </div>

  <ul class="collapsible busan_coll">
    <li>
      <div class="collapsible-header"><i class="material-icons">lightbulb_outline</i>Quick Facts</div>
      <div class="collapsible-body">
        <table>
          <tr><td>Einwohner:</td><td>ca. 3.5 Mio.</td></tr>
          <tr><td>Fläche:</td><td>ca. 768 km<sup>2</sup></td></tr>
          <tr><td>Bevölkerungsdichte:</td><td>ca. 4.5K pro km<sup>2</sup></td></tr>
          <tr><td>Standort: </td><td><a href="https://www.google.com/maps/place/Busan" target="_blank">Busan auf Google Maps</a></td></tr>
          <tr><td>Aktuelles Wetter: </td><td><?php echoWetterBusan(); ?></td></tr>
        </table>
      </div>
    </li>
  </ul>

  <div class="parallax-container">
    <div class="parallax"><img src="https://drive.google.com/uc?export=view&id=1syI-2r9Bz8QX7xzfKcm3i6OgainQyaWS"></div>
  </div>

  <div class="section white z-depth-3">
    <div class="row container">
      <a href="busan_f/busan_tower" class="hvr-underline-from-left">
        <h3 class="header">
          Busan Tower&nbsp;<i class="medium material-icons">arrow_forward</i>
        </h3>
      </a>
    </div>
  </div>


  <div class="parallax-container">
    <div class="parallax"><img src="https://drive.google.com/uc?export=view&id=1o0VHhJlZBmWyX3qaB1Rk93GBKA6BQd-t"></div>
  </div>

  <div class="section white z-depth-3">
    <div class="row container">
      <a href="busan_f/haedong_yonggungsa_temple" class="hvr-underline-from-left">
        <h3 class="header">
          Haedong Yonggungsa Tempel&nbsp;<i class="medium material-icons">arrow_forward</i>
        </h3>
      </a>
    </div>
  </div>


  <div class="parallax-container">
    <div class="parallax"><img src="https://drive.google.com/uc?export=view&id=1DYey5AKsSf6fkI7nLxr_WkEq4QDpvekj"></div>
  </div>

  <div class="section white z-depth-3">
    <div class="row container">
      <a href="busan_f/gwangalli_beach" class="hvr-underline-from-left">
        <h3 class="header">
          Gwangalli Beach&nbsp;<i class="medium material-icons">arrow_forward</i>
        </h3>
      </a>
    </div>
  </div>


  <div class="parallax-container">
    <div class="parallax"><img src="https://drive.google.com/uc?export=view&id=1UpbRulSzROvX1tu9p4y00A8Jgt6znUnS"></div>
  </div>

  <div class="section white z-depth-3">
    <div class="row container">
      <a href="busan_f/gamcheon_culture_village" class="hvr-underline-from-left">
        <h3 class="header">
          Gamcheon Culture Village&nbsp;<i class="medium material-icons">arrow_forward</i>
        </h3>
      </a>
    </div>
  </div>


  <div class="parallax-container">
    <div class="parallax"><img src="https://drive.google.com/uc?export=view&id=1wIzciYybwW63wbENywKVPWxwG1pZqeuI"></div>
  </div>

  <div class="section white z-depth-3">
    <div class="row container">
      <a href="busan_f/songdo_beach" class="hvr-underline-from-left">
        <h3 class="header">
          Songdo Beach&nbsp;<i class="medium material-icons">arrow_forward</i>
        </h3>
      </a>
    </div>
  </div>

  
  <div class="parallax-container">
    <div class="parallax"><img src="https://drive.google.com/uc?export=view&id=1LLzbRGMorPAXsaSFJoATmAjmFVy1uckS"></div>
  </div>

  <div class="section white z-depth-3">
    <div class="row container">
      <a href="busan_f/street_markets" class="hvr-underline-from-left">
        <h3 class="header">
          Street Markets&nbsp;<i class="medium material-icons">arrow_forward</i>
        </h3>
      </a>
    </div>
  </div>
  

  <div class="parallax-container">
    <div class="parallax"><img src="https://drive.google.com/uc?export=view&id=1UVWvtKpkYJHlaQMZuy4_KvrK9VWYAyWK"></div>
  </div>

  <div class="section white z-depth-3">
    <div class="row container">
      <a href="busan_f/china_town" class="hvr-underline-from-left">
        <h3 class="header">
          China Town&nbsp;<i class="medium material-icons">arrow_forward</i>
        </h3>
      </a>
    </div>
  </div>

  <iframe src="https://www.google.com/maps/d/u/1/embed?mid=1Qu4AUirwLJ4x_BNyOQ6KY3-SwFB5BuvF&ehbc=2E312F" id="seoul_map"></iframe>
 
 

</div>

<?php
  include "footer.php";
?>