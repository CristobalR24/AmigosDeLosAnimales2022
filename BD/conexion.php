<?php
$servername = "localhost";
$username = "amigos_animales";
$password = "AmigosAnimales22";

try {
  $conn = new PDO("mysql:host=$servername;dbname=amigosanimales", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Conexion correcta";
} catch(PDOException $e) {
  echo "Algo salio mal: " . $e->getMessage();
}

?>