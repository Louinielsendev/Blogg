<?php

$serverName = "";
$dbUsername = "root";
$dbPassword = "Casiojbliphone1";
$dbName = "databas_blogg";

$connection = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$connection){
    die("Dålig anslutning" . mysqli_connect_error());
}