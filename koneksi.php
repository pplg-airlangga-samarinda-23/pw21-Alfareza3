<?php 
//untuk koneksi ke database
$hostname ="Localhost";
$username ="root";
$password ="";
$database ="db_iventori";

$koneksi = new mysqli($hostname, $username, $password, $database);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>