<?php 

include "header.php";

// SQL Abfrage Food
$statement = $pdo->prepare("SELECT * FROM k_food ORDER BY kf_datum");
$statement->execute();
$rows = $statement->fetchAll();

$gd_link = "https://drive.google.com/uc?export=view&id=";

?>

    <div id="quaran_con">
      <h1 class="centered">Quarantäne</h1>

      <ul class="collapsible">
          <li>
            <div class="collapsible-header"><i class="material-icons">lightbulb_outline</i>Quick FAQ</div>
            <div class="collapsible-body">
              <ul>
                <li>
                  <b>Wer muss in die Quarantäne?</b><br>
                  Zum Zeitpunkt meiner Einreise (August 2021) muss jede Person, die nach Korea einreist in die Quarantäne.
                  Koreanische Bürger oder familenangehörige von Koreanern können bei sich zuhause die Quarantäne abhalten. 
                  Alle anderen müssen in dafür vorgesehene Unterkünfte. Für Studenten gibt es spezielle Unterkünfte.
                  Es gibt aber auch Ausnahmen, die nicht in die Quarantäne müssen (Diplomaten, Regierungsbeamte, ...).
                </li>
                  <br>
                <li>
                  <b>Wie viel kostet der Quarantäneaufenthalt?</b><br>
                  Die Quarantäne kostet vergleichsweise viel Geld.
                  Es handelt sich um einen hohen dreistelligen Betrag.
                  Trotzdem muss man "glücklicherweise" sagen, dass es im Vergleich zu Regierungsunterkünften nicht ganz so viel Geld kosten. 
                </li>
                  <br>
                <li>
                  <b>Wo befindet sich die Quarantäneunterkunft?</b><br>
                  Das hängt ganz vom Anbieter ab.
                  In meinem Fall ist es ein umfunktinioniertes Hotel im Gebiet Jongno-gu in Seoul.<br>
                  <a href="https://www.google.com/maps/place/Jongno-gu,+Seoul/" target="_blank">Jongno-gu auf Google Maps</a>
                </li>
                  <br>
                <li>
                  <b>Wie muss man sich verhalten?</b><br>
                  Man darf nach Beginn der Isolierung für 14 Tage niemals aus dem Zimmer gehen und auch niemanden in sein Zimmer einladen.
                  Dadurch entfällt natürlich auch jeglicher Kontakt mit anderen Menschen.
                    <br>
                  Alkoholkonsum oder Rauchen ist verboten.
                  Waschen und Putzen muss per Hand im Zimmer gemacht werden.
                  Jeglicher Abfall muss in Müllbeuteln aufbewahrt werden und Essensreste werden mit dem Klo weggespült.
                    <br>
                  Über eine App von der Regierung muss man mehrfach täglich seinen Gesundheitsstatus eintragen.
                  Dafür hat auch jeder Isolierte ein Thermometer zur Temperaturerfassung bekommen.
                </li>
                  <br>
                <li>
                  <b>Wofür ist diese App gedacht?</b><br>
                  Diese App überwacht den Standort und Gesundheitsstand einer Person in Quarantäne und informiert die Regierung darüber.
                  Sollte man sich aus der Wohnung bewegen oder das Smartphone eine längere Zeit nicht benutzen/bewegen wird die Regierung ebenfalls benachrichtigt.
                  Das Nicht-Bewegen gilt natürlich nicht nachts.
                </li>
                  <br>
                <li>
                  <b>Als ob es die Regierung interessiert, wenn ein Student sein Smartphone für ein paar Stunden nicht benutzt</b><br>
                  Ich habe bereits von einer anderen Studentin gehört, dass sie Besuch von Regierungsbeauftragen bekommen hat, 
                  weil sie tagsüber mehrere Stunden am Stück geschlafen hat (wahrscheinlich Jetlag) und entsprechend ihr Smartphone nicht bewegt hat.
                </li>
                  <br>
                <li>
                  <b>Wie kommt man an Essen und Trinken?</b><br>
                  Essen gibt es jeden Tag zu festen Zeiten (8 Uhr, 12:30 Uhr, 17:30 Uhr). Es wird auf einen Stuhl vor die Tür gestellt.
                  Das ist die einzige Ausnahme, um die Tür zu öffnen (neben gesundheitsbedingten Problemen).<br>
                  Wasser bekommt man in 20x 500ml Wasserflaschen. Sollten diese leer gehen, kann man jederzeit Neue nachbestellen.
                  Teilweise gibt es zum Essen diverse Dosengetränke dazu.
                </li>
                  <br>
                <li>
                  <b>Wie steht man mit den Betreibern in Kontakt?</b><br>
                  Dafür wird der Messenger KakaoTalk genutzt. 
                  Er ist das Pendant zu WhatsApp in Deutschland, hat aber noch viele zusätzliche Funktionen.
                </li>
              </ul>
            </div>
          </li>
      </ul>
      
      <iframe class="seoul_f_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17887.948358772122!2d126.98130294289632!3d37.57455797760593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca2dc50a26c8d%3A0x8250ea36ca52434!2sibis%20Ambassador%20Seoul%20Insadong!5e0!3m2!1sde!2skr!4v1639284758277!5m2!1sde!2skr" loading="lazy"></iframe>

     
      <h2 class="centered">Zimmer</h2>
      <div id="quaran_imgs">
        <div class="card horizontal">
          <div class="card-image card_img">
            <img src="https://drive.google.com/uc?export=view&id=1eKYFZNbpJWjRmo_1d8-cdv39MDkKRlsN" class="materialboxed">
          </div>
          <div class="card-content valign-wrapper">Die Aussicht aus dem Quarantäne-Zimmer.</div>
        </div>
        <div class="card">
          <div class="card-image card_img">
            <img src="https://drive.google.com/uc?export=view&id=1IVHLhWjDLLOQAwHZj9AcAaPURsCZ30Cp" class="materialboxed">
          </div>
          <div class="card-content valign-wrapper">Das Zimmer mit den drei Betten.</div>
        </div>
        <div class="card horizontal">
          <div class="card-image card_img">
            <img src="https://drive.google.com/uc?export=view&id=1RrKamk9Id0HXZwq-KgSvFHhhz1LVmABN" class="materialboxed">
          </div>
          <div class="card-content valign-wrapper">Das Deluxe-Bad mit Wärme-Klobrille.</div>
        </div>
        <div class="card">
          <div class="card-image card_img">
            <img src="https://drive.google.com/uc?export=view&id=1ko7bQNsovntNFt9Au5IZAcswFmbkHn0S" class="materialboxed">
          </div>
          <div class="card-content valign-wrapper">Essen vom Lieferservice für ca. 13 €: Kimchimari Guksu</div>
        </div>
        <div class="card horizontal">
          <div class="card-image card_img">
            <img src="https://drive.google.com/uc?export=view&id=1xNBERSJe8UnYpM55l0SJAW7s5-4LCT3y" class="materialboxed">
          </div>
          <div class="card-content valign-wrapper">Der gesamte Müll der beiden Wochen.</div>
        </div>
        <div class="card">
          <div class="card-image card_img">
            <img src="https://drive.google.com/uc?export=view&id=1LdRlUzsLUxqOV_eZxdBT6EbcQa1kBbCo" class="materialboxed">
          </div>
          <div class="card-content valign-wrapper">So sieht das Zimmer am Ende aus.</div>
        </div>
        
        <h2 class="centered">Testzentrum</h2>
        <div class="card horizontal">
          <div class="card-image card_img">
            <img src="https://drive.google.com/uc?export=view&id=1GC5n_HJpbLI43zjkkqAIGwGw-Z86Vss4" class="materialboxed">
          </div>
          <div class="card-content valign-wrapper">Die Schlange vor dem Health Center für den PCR-Test.</div>
        </div>
        <div class="card horizontal">
          <div class="card-image card_img">
            <img src="https://drive.google.com/uc?export=view&id=1K8WtttWdNA2whWQ6LPTj5_nOn-3pDGEr" class="materialboxed" style="object-position: right;">
          </div>
          <div class="card-content valign-wrapper">
            In der kleinen Kammer rechts wird das Stäbchen in die Nase gesteckt.
          </div>
        </div>

        <h2 class="centered">Gebäude</h2>
        <div class="card">
          <div class="card-image card_img">
            <img src="https://drive.google.com/uc?export=view&id=1OVXmfer5YT5ojJOh0qUWz91sAIvM6n3d" class="materialboxed">
          </div>
          <div class="card-content valign-wrapper">Das Quarantäne-Hotel von außen</div>
        </div>
        <div class="card horizontal">
          <div class="card-image card_img">
            <img src="https://drive.google.com/uc?export=view&id=1MFhc7K-7UZif3p_aXGh4OzhnEBOjFjDd" class="materialboxed" style="object-position: right;">
          </div>
          <div class="card-content valign-wrapper">
            Da oben war ich für zwei Wochen isoliert.
          </div>
        </div>
      </div>
      

      <h2>Food</h2>
      <div id="quaran_table">
        <table class="centered">
          <thead>
            <tr>
              <th>Frühstück</th>
              <th>Mittag</th>
              <th>Abend</th>
              <th>Datum</th>
            </tr>
          </thead>
          <tbody>        
    <?php 
      foreach ($rows as $row) {
        $img_b = $gd_link . $row['kf_breakfast'];
        $img_l = $gd_link . $row['kf_lunch'];
        $img_d = $gd_link . $row['kf_dinner'];
    ?>
            <tr>
              <td><a href = "<?php echo $img_b; ?>" target="_blank">
                <img src="<?php echo $img_b; ?>" alt="">
              </a></td>
              <td><a href = "<?php echo $img_l; ?>" target="_blank">
                <img src="<?php echo $img_l; ?>" alt="">
              </a></td>
              <td><a href = "<?php echo $img_d; ?>" target="_blank">
                <img src="<?php echo $img_d; ?>" alt="">
              </a></td>
              <td><?php echo $row['kf_datum']; ?></td>
            </tr>
    <?php } ?>

          </tbody>
        </table>
      </div><!-- Table -->
    </div>
<?php
  include "footer.php";
?>