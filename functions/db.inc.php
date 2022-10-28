<?php
// Databaskoppling
$serverName = "";
$dbUsername = "ll223vk";
$dbPassword = "W5dr4L";
$dbName = "ll223vk";

$connection = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$connection){
    die("Dålig anslutning" . mysqli_connect_error());
}