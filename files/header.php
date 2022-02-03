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

    <!-- Header Breit -->
    <div id="head_container">
      <ul id="dropdown1" class="dropdown-content">
        <li><a href="https://korea.adrianf.de/files/newsletter">Newsletter</a></li>
        <li><a href="https://korea.adrianf.de/files/quarantaene">Quarantäne</a></li>
        <li><a href="https://korea.adrianf.de/files/uni">Konkuk Uni</a></li>
        <li><a href="https://korea.adrianf.de/files/andere_unis">Andere Unis</a></li>
        <li><a href="https://korea.adrianf.de/files/food_drinks">Food & Drinks</a></li>
        <li><a href="https://korea.adrianf.de/files/city_views">Stadtaussicht</a></li>
      </ul>
      <nav class="white">
        <a href="https://korea.adrianf.de/" id="logo">
          <img src="https://korea.adrianf.de/images/flagge.png">
        </a>
        <a href="https://korea.adrianf.de/">Home</a>
        <a href="https://korea.adrianf.de/files/seoul">Seoul</a>  
        <a href="https://korea.adrianf.de/files/busan">Busan</a>  
        <a href="https://korea.adrianf.de/files/daegu">Daegu</a>
        <a class="dropdown-trigger" href="#!" data-target="dropdown1">Mehr<i class="material-icons right">arrow_drop_down</i></a>
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
       </nav>

      <!-- Header Sidenav -->
      <ul id="slide-out" class="sidenav">
        <li><div class="user-view">
          <a href="https://korea.adrianf.de/"><img src="https://korea.adrianf.de/images/flagge.png"></a>
        </div></li>
        <li><a href="https://korea.adrianf.de/">Home</a></li>
        <li><a href="https://korea.adrianf.de/files/seoul">Seoul</a></li>
        <li><a href="https://korea.adrianf.de/files/busan">Busan</a></li>
        <li><a href="https://korea.adrianf.de/files/daegu">Daegu</a></li>
        <li><a href="https://korea.adrianf.de/files/newsletter">Newsletter</a></li>
        <li><a href="https://korea.adrianf.de/files/quarantaene">Quarantäne</a></li>
        <li><a href="https://korea.adrianf.de/files/uni">Konkuk Uni</a></li>
        <li><a href="https://korea.adrianf.de/files/andere_unis">Andere Unis</a></li>
        <li><a href="https://korea.adrianf.de/files/food_drinks">Food & Drinks</a></li>
        <li><a href="https://korea.adrianf.de/files/city_views">Stadtaussicht</a></li>

      </ul> 
    </div>

