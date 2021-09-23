<?php

include 'login.php';

$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8';


try {
  $pdo = new PDO($dsn, $username, $passwd);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'Verbindung fehlgeschlagen: ' . $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="de">
  <head>
    <title>Auslandssemester Korea</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="https://korea.adrianf.de/images/flagge.png"/>

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Hover.css -->
    <link rel="stylesheet" href="https://korea.adrianf.de/styles/hover.css">

    <!-- CSS -->
    <link rel="stylesheet" href="https://korea.adrianf.de/styles/main.css">
  </head>

  <body> 


    <div id="head_container">
      <nav class="white">
        <a href="https://korea.adrianf.de/" id="logo">
          <img src="https://korea.adrianf.de/images/flagge.png">
        </a>
        <a href="https://korea.adrianf.de/">Home</a>
        <a href="https://korea.adrianf.de/files/quarantaene">Quarantäne</a>
        <a href="https://korea.adrianf.de/files/uni">Universität</a>
        <a href="https://korea.adrianf.de/files/seoul">Seoul</a>  
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
 
      </nav>

      <ul id="slide-out" class="sidenav">
        <li><div class="user-view">
          <a href="https://korea.adrianf.de/"><img src="https://korea.adrianf.de/images/flagge.png"></a>
        </div></li>
        <li><a href="https://korea.adrianf.de/">Home</a></li>
        <li><a href="https://korea.adrianf.de/files/quarantaene">Quarantäne</a></li>
        <li><a href="https://korea.adrianf.de/files/uni">Universität</a></li>
        <li><a href="https://korea.adrianf.de/files/seoul">Seoul</a></li>
      </ul>
     </div>

