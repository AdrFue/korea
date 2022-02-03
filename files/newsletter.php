<?php
  include "header.php";

  if(isset($_GET['anmelden'])) {
    $msg = "";
    $email = $_POST['email'];
    $color = "red";
  
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $msg = 'Bitte eine gültige E-Mail-Adresse eingeben';
    }     
    
    // Überprüfen, dass die E-Mail-Adresse noch nicht registriert wurde
    if($msg == "") { 
      $statement = $pdo->prepare("SELECT * FROM k_newsletter WHERE kn_email = :email");
      $result = $statement->execute(array('email' => $email));
      $user = $statement->fetch();
      
      if($user !== false) {
        $msg = 'Diese E-Mail-Adresse ist bereits angemeldet.';

      }    
    }
    
    if($msg == "") {    
        
      $statement = $pdo->prepare("INSERT INTO k_newsletter (kn_email) VALUES (:email)");
      $result = $statement->execute(array('email' => $email));
      
      if($result) {
        $msg = 'Du wurdest erfolgreich angemeldet.';
        $color = "green";

        $empfaenger = $email;
        $betreff = "Newsletter Anmeldung korea.adrianf.de";
        $from = "MIME-Version: 1.0" . "\r\n";
        $from .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $from .= "From: <mail@adrianf.de>\r\n";

        $text = "Erfolgreich für den Newsletter auf <a href='korea.adrianf.de'>korea.adrianf.de</a> angemeldet.";
        mail($empfaenger, $betreff, $text, $from);

      } else {
        $msg = 'Beim Abspeichern ist leider ein Fehler aufgetreten';
      }
    }

    echo "<div class='nl_info' style='background: " . $color . "'>" . $msg . "</div>";
  }

  if(isset($_GET['abmelden'])) {
    $msg = "";
    $email = $_POST['email'];
    $color = "red";
  
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $msg = 'Bitte eine gültige E-Mail-Adresse eingeben';
    }     
    
    // Überprüfen, dass die E-Mail-Adresse noch nicht registriert wurde
    if($msg == "") { 
      $statement = $pdo->prepare("SELECT * FROM k_newsletter WHERE kn_email = :email");
      $result = $statement->execute(array('email' => $email));
      $user = $statement->fetch();
      
      if(count($user) < 6) {
        $msg = 'Diese E-Mail-Adresse ist nicht hinterlegt';
      }    
    }
    
    if($msg == "") {    
        
      $statement = $pdo->prepare("DELETE FROM k_newsletter WHERE kn_email = :email");
      $result = $statement->execute(array('email' => $email));
      if($result) {        
        $msg = 'Du wurdest erfolgreich abgemeldet.';
        $color = "green";

        $empfaenger = $email;
        $betreff = "Newsletter Abmeldung korea.adrianf.de";
        $from = "MIME-Version: 1.0" . "\r\n";
        $from .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $from .= "From: <mail@adrianf.de>\r\n";
        
        $text = "Erfolgreich von dem Newsletter auf <a href='korea.adrianf.de'>korea.adrianf.de</a> abgemeldet.";
        mail($empfaenger, $betreff, $text, $from);

      } else {
        $msg = 'Beim Löschen ist leider ein Fehler aufgetreten';
      }
    } 

    echo "<div class='nl_info' style='background: " . $color . "'>" . $msg . "</div>";
  }
?>

  <div class="row">
    <h1>Newsletter</h1>
  </div>

  <div class="nl_text">
    Für den Newsletter anmelden:
  </div>
  <form action="?anmelden" method="post" class="nl_form">
    <input type="text" name="email" placeholder="Email" />
    <button type="submit" class="nl_button">Anmelden</button>
  </form>

  <div class="nl_text">
    Für den Newsletter abmelden:
  </div>
  <form action="?abmelden" method="post" class="nl_form">
    <input type="text" name="email" placeholder="Email" />
    <button type="submit" class="nl_button nl_btn_bad">Abmelden</button>
  </form>
<?php
  include "footer.php";
?>