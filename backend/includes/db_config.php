<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db = "moodmate";

$conn = mysqli_connect($host, $user, $pass, $db);

if(!$conn) {
  die("Anda Gagal Terhubung Ke Database". mysqli_connect_error());
}

?>