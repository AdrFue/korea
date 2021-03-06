<?php
  include "header.php";

  function echoWetter() {

    $response = file_get_contents('https://api.openweathermap.org/data/2.5/weather?q=Seoul&APPID=1766952cda1c37eaf3b9a8fb47e0d654');
    $response = json_decode($response);
  
    $temp = $response->main->temp - 273.15;
    $besc = $response->weather[0]->description;
    $ts = date("d.m.Y H:i:s");

    echo $temp . "°C, " . $besc . " (" . $ts . " GMT+2)";
  }

?>

  <div id="seoul_k-con">

    <h1>Seoul</h1>
    <ul class="collapsible">
        <li>
          <div class="collapsible-header"><i class="material-icons">lightbulb_outline</i>Quick Facts</div>
          <div class="collapsible-body">
            <table>
              <tr><td>Hauptstadt von</td><td>Republik Korea</td></tr>
              <tr><td>Einwohner:</td><td>ca. 10 Mio. (#32 weltweit)</td></tr>
              <tr><td>Fläche:</td><td>ca. 600 km<sup>2</sup></td></tr>
              <tr><td>Bevölkerungsdichte:</td><td>ca. 16,5K pro km<sup>2</sup> (#58 weltweit)</td></tr>
              <tr><td>Standort: </td><td><a href="https://www.google.com/maps/place/Seoul" target="_blank">Seoul auf Google Maps</a></td></tr>
              <tr><td>Währung:</td><td>KRW (Südkoreanischer Won)</td></tr>
              <tr><td>Umrechnung: </td><td>1 KRW ~ 0,00074 € oder 1 € ~ 1350 KRW</td></tr>
              <tr><td>Aktuelles Wetter: </td><td><?php echoWetter(); ?></td></tr>
            </table>
          </div>
        </li>
    </ul>
    
    <div class="seoul_k">
      <a href="architektur">
        <img src="https://drive.google.com/uc?export=view&id=1I1Tb4o9ZPw5yKjn8KOEsCQ0BHGVAnIT6">
        <div class="seoul_k-text">Architektur</div>
      </a>
    </div>

    <div class="seoul_k">
      <a href="palaeste_tempel_hanoks">
        <img src="https://drive.google.com/uc?export=view&id=1X6gG5FPL9yaEiuutxNIcSi1khdFk9sEK">  
        <div class="seoul_k-text">Paläste, Tempel & Hanoks</div>
      </a>
    </div>

    <div class="seoul_k">
      <a href="bezirke">
        <img src="https://drive.google.com/uc?export=view&id=14KNBIALJQHBb34m5yBd_A_bbKlQ_W4Nh">   
        <div class="seoul_k-text">Bezirke</div>
      </a>
    </div>

    <div class="seoul_k">
      <a href="cafes_malls">
        <img src="https://drive.google.com/uc?export=view&id=1q4mv--CMwZciTynHTI8NfPtYn8v1mdNj"> 
        <div class="seoul_k-text">Cafés & Malls</div>
      </a>
    </div>

    <div class="seoul_k">
      <a href="museen">
        <img src="https://drive.google.com/uc?export=view&id=136up6c4FP9cu4k-pfNS8PHnvtBXL48pi">  
        <div class="seoul_k-text">Museen</div>
      </a>
    </div>

    <div class="seoul_k">
      <a href="freizeit_parks">
        <img src="https://drive.google.com/uc?export=view&id=1_1dbOoWJpPMNcm1GiLOZvTDqUSft4h3m">  
        <div class="seoul_k-text">(Freizeit) Parks</div>
      </a>
    </div>


    <iframe src="https://www.google.com/maps/d/u/1/embed?mid=1_MdPO16Xru8xewNw22UTG0hzL3PvLxDG&ehbc=2E312F" id="seoul_map"></iframe>

  </div>


<?php
  include "footer.php";
?>