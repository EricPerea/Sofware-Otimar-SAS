<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "crc otimar sas";

$conn = mysqli_connect($host, $username, $password, $dbname);

if(!$conn){

    die("falla en la conexion: " . mysqli_connect_error());
}

?>