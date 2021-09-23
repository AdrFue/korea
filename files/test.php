<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$response = file_get_contents('https://api.openweathermap.org/data/2.5/weather?q=Seoul&APPID=1766952cda1c37eaf3b9a8fb47e0d654');
$response = json_decode($response);

echo "<br><br>";
echo $response->main->temp- 273.15 . "<br>";
echo $response->weather[0]->description . "<br>";
echo "Stand: " . date("d.m.Y H:i:s") . "<br>";
?>