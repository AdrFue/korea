<?php
  include "header.php";

  if(isset($_GET['send'])) {
    $betreff = $_POST['betreff'];
    $nachricht = $_POST['nachricht'];
    $erfolg = true;
  
    $statement = $pdo->prepare("SELECT * FROM k_newsletter");
    $statement->execute();
    while($user = $statement->fetch()) {

      $empfaenger = $user['kn_email'];
      $from = "MIME-Version: 1.0" . "\r\n";
      $from .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      $from .= "From: <mail@adrianf.de>\r\n";

      $erfolg = mail($empfaenger, $betreff, $nachricht, $from);

      if (!$erfolg) {
          echo "E-Mail konnte nicht an " . $email . "versendet werden.";
          break;
      }
    }

    if ($erfolg) {
      echo "Alle Emails wurden versendet.";
    }

  }

?>

  <div class="row">
    <h1>Newsletter versenden</h1>
  </div>

  <form action="?send" method="post" class="nl_form">
    <input type="text" name="betreff" placeholder="Betreff">
    <textarea name="nachricht" placeholder="Nachricht" class="nl_ta materialize-textarea"></textarea>
    <button type="submit" class="nl_button">Senden</button>
  </form>

<?php
  include "footer.php";
?>