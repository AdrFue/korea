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

    <div id="seoul-con">

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

      <br>

      <div class="parallax-container">
        <div class="parallax"><img src="https://drive.google.com/uc?export=view&id=1CYLgfGau67l9DjT8uru1kdmoIYo9qKom"></div>
      </div>

      <div class="section white z-depth-3">
        <div class="row container">
          <a href="seoul_f/war_memorial_of_korea" class="hvr-underline-from-left">
              <h3 class="header">
                War Memorial of Korea&nbsp;<i class="medium material-icons">arrow_forward</i>
              </h3>
            </a>
        </div>
      </div>

      <div class="parallax-container">
        <div class="parallax"><img src="https://drive.google.com/uc?export=view&id=1EURLiAU-grbrPrsn5a8pygCDOS_erakU"></div>
      </div>

      <div class="section white z-depth-3">
        <div class="row container">
          <a href="seoul_f/deoksugung" class="hvr-underline-from-left">
            <h3 class="header">
              Deoksugung&nbsp;<i class="medium material-icons">arrow_forward</i>
            </h3>
          </a>
         </div>
      </div>

      <div class="parallax-container">
        <div class="parallax"><img src="https://drive.google.com/uc?export=view&id=1BPqpiyflXSInnyBxfytp1hfoecSWFMMa"></div>
      </div>

      <div class="section white z-depth-3">
        <div class="row container">
          <a href="seoul_f/seokjojeon" class="hvr-underline-from-left">
            <h3 class="header">
              Seokjojeon&nbsp;<i class="medium material-icons">arrow_forward</i>
            </h3>
          </a>
         </div>
      </div>

      <div class="parallax-container">
        <div class="parallax"><img src="https://drive.google.com/uc?export=view&id=1X6gG5FPL9yaEiuutxNIcSi1khdFk9sEK"></div>
      </div>

      <div class="section white z-depth-3">
        <div class="row container">
          <a href="seoul_f/gyeongbokgung" class="hvr-underline-from-left">
            <h3 class="header">
              Gyeongbokgung&nbsp;<i class="medium material-icons">arrow_forward</i>
            </h3>
          </a>
         </div>
      </div>

      <div class="parallax-container">
        <div class="parallax"><img src="https://drive.google.com/uc?export=view&id=1ob_Y559qwPcVjdUDQDvCrCtTmwNHJMi3"></div>
      </div>

      <div class="section white z-depth-3">
        <div class="row container">
          <a href="seoul_f/rainbow_bridge" class="hvr-underline-from-left">
            <h3 class="header">
              Rainbow Bridge&nbsp;<i class="medium material-icons">arrow_forward</i>
            </h3>
          </a>
         </div>
      </div>

      <div class="parallax-container">
        <div class="parallax"><img src="https://drive.google.com/uc?export=view&id=1l4X3v8zr2iOCiGwRUT3ygYVZi0m34K8U"></div>
      </div>

      <div class="section white z-depth-3">
        <div class="row container">
          <a href="seoul_f/namsangol" class="hvr-underline-from-left">
            <h3 class="header">
              Namsangol Hanok Village&nbsp;<i class="medium material-icons">arrow_forward</i>
            </h3>
          </a>
         </div>
      </div>

      <div class="parallax-container">
        <div class="parallax"><img src="https://drive.google.com/uc?export=view&id=1lhXcNLiib9t3GooTSZp2A9FbOrMzSkJm"></div>
      </div>

      <div class="section white z-depth-3">
        <div class="row container">
          <a href="seoul_f/namsan_tower" class="hvr-underline-from-left">
            <h3 class="header">
              Namsan Tower&nbsp;<i class="medium material-icons">arrow_forward</i>
            </h3>
          </a>
         </div>
      </div>

      <div class="parallax-container">
        <div class="parallax"><img src="https://drive.google.com/uc?export=view&id=1HLfBhSMbQkMFuUJPhHeaf_A7-lc1NQ0H"></div>
      </div>

      <div class="section white z-depth-3">
        <div class="row container">
          <a href="seoul_f/943_kings_cross" class="hvr-underline-from-left">
            <h3 class="header">
              943 King's Cross&nbsp;<i class="medium material-icons">arrow_forward</i>
            </h3>
          </a>
         </div>
      </div>

      <div class="parallax-container">
        <div class="parallax"><img src="https://drive.google.com/uc?export=view&id=1zPveButGlgVb3X39FjSGN8VHPObCHkkI"></div>
      </div>

      <div class="section white z-depth-3">
        <div class="row container">
          <a href="seoul_f/seonjeongneung" class="hvr-underline-from-left">
            <h3 class="header">
              Seonjeongneung&nbsp;<i class="medium material-icons">arrow_forward</i>
            </h3>
          </a>
         </div>
      </div>

      <div class="parallax-container">
        <div class="parallax"><img src="https://drive.google.com/uc?export=view&id=1q4mv--CMwZciTynHTI8NfPtYn8v1mdNj"></div>
      </div>

      <div class="section white z-depth-3">
        <div class="row container">
          <a href="seoul_f/coex_mall" class="hvr-underline-from-left">
            <h3 class="header">
              COEX Mall&nbsp;<i class="medium material-icons">arrow_forward</i>
            </h3>
          </a>
         </div>
      </div>
      
      <div class="parallax-container">
        <div class="parallax"><img src="https://drive.google.com/uc?export=view&id=14KNBIALJQHBb34m5yBd_A_bbKlQ_W4Nh"></div>
      </div>

      <div class="section white z-depth-3">
        <div class="row container">
          <a href="seoul_f/gangnam" class="hvr-underline-from-left">
            <h3 class="header">
              Gangnam&nbsp;<i class="medium material-icons">arrow_forward</i>
            </h3>
          </a>
         </div>
      </div>
     
      <div class="parallax-container">
        <div class="parallax"><img src="https://drive.google.com/uc?export=view&id=1sjjiETBVKDAHaVZHdH2mu6FptEPur5nG"></div>
      </div>

      <div class="section white z-depth-3">
        <div class="row container">
          <a href="seoul_f/everland" class="hvr-underline-from-left">
            <h3 class="header">
              Everland&nbsp;<i class="medium material-icons">arrow_forward</i>
            </h3>
          </a>
         </div>
      </div>
     
      <div class="parallax-container">
        <div class="parallax"><img src="https://drive.google.com/uc?export=view&id=1jrYHUZ-BpSxuarArf-VScqfrhMjoxu4q"></div>
      </div>

      <div class="section white z-depth-3">
        <div class="row container">
          <a href="seoul_f/gwangjang_market" class="hvr-underline-from-left">
            <h3 class="header">
              Gwangjang Market&nbsp;<i class="medium material-icons">arrow_forward</i>
            </h3>
          </a>
         </div>
      </div>
         
      <div class="parallax-container">
          <div class="parallax"><img src="https://drive.google.com/uc?export=view&id=1I1Tb4o9ZPw5yKjn8KOEsCQ0BHGVAnIT6"></div>
        </div>

        <div class="section white z-depth-3">
          <div class="row container">
            <a href="seoul_f/design_plaza" class="hvr-underline-from-left">
              <h3 class="header">
                Design Plaza&nbsp;<i class="medium material-icons">arrow_forward</i>
              </h3>
            </a>
          </div>
        </div>
 
        <div class="parallax-container">
          <div class="parallax"><img src="https://drive.google.com/uc?export=view&id=1w-z2_UJgmJQrddXMrMihDUF0VkW9mF5d"></div>
        </div>

        <div class="section white z-depth-3">
          <div class="row container">
            <a href="seoul_f/hanyangdoseong" class="hvr-underline-from-left">
              <h3 class="header">
                Hanyangdoseong&nbsp;<i class="medium material-icons">arrow_forward</i>
              </h3>
            </a>
          </div>
        </div>
 
        <div class="parallax-container">
          <div class="parallax"><img src="https://drive.google.com/uc?export=view&id=1Z_ldfRPOJwa8Zq21EfFfI4qQ_UZMoN1z"></div>
        </div>

        <div class="section white z-depth-3">
          <div class="row container">
            <a href="seoul_f/naksan" class="hvr-underline-from-left">
              <h3 class="header">
                Naksan&nbsp;<i class="medium material-icons">arrow_forward</i>
              </h3>
            </a>
          </div>
        </div>

        <div class="parallax-container">
          <div class="parallax"><img src="https://drive.google.com/uc?export=view&id=1yQ3p4vYg0H030xNCUhqD6MZn9V_LkRxd"></div>
        </div>

        <div class="section white z-depth-3">
          <div class="row container">
            <a href="seoul_f/gwangmyeong_cave" class="hvr-underline-from-left">
              <h3 class="header">
                Gwangmyeong Cave&nbsp;<i class="medium material-icons">arrow_forward</i>
              </h3>
            </a>
          </div>
        </div>

        <div class="parallax-container">
          <div class="parallax"><img src="https://drive.google.com/uc?export=view&id=1F7Bmoln3tXwY_9OlRrzMPvppXbcFEwVi"></div>
        </div>

        <div class="section white z-depth-3">
          <div class="row container">
            <a href="seoul_f/eunpyeong" class="hvr-underline-from-left">
              <h3 class="header">
                Eunpyeong&nbsp;<i class="medium material-icons">arrow_forward</i>
              </h3>
            </a>
          </div>
        </div>

        <div class="parallax-container">
          <div class="parallax"><img src="https://drive.google.com/uc?export=view&id=1EMi1BYCwoDlrAmjBpO64pjO_3AJqEhpo"></div>
        </div>

        <div class="section white z-depth-3">
          <div class="row container">
            <a href="seoul_f/samcheonsa" class="hvr-underline-from-left">
              <h3 class="header">
                Samcheonsa&nbsp;<i class="medium material-icons">arrow_forward</i>
              </h3>
            </a>
          </div>
        </div>

        <div class="parallax-container">
          <div class="parallax"><img src="https://drive.google.com/uc?export=view&id=1QDG3Zh4cXw9w5_LNrGzG1_XKF7jaoF5t"></div>
        </div>

        <div class="section white z-depth-3">
          <div class="row container">
            <a href="seoul_f/jingwansa" class="hvr-underline-from-left">
              <h3 class="header">
                Jingwansa&nbsp;<i class="medium material-icons">arrow_forward</i>
              </h3>
            </a>
          </div>
        </div>



      </div>


<?php
  include "footer.php";
?>