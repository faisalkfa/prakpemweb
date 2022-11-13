<?php
$servername = "localhost";
$database = "faisalkh_prak5";
$username = "faisalkh_prak5";
$password = "faisalkh_prak5";
 
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) 
    die("Koneksi gagal: " . mysqli_connect_error());
?>
