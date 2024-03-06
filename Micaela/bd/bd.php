<?php
$servidor = "localhost";
$baseDeDatos = "bdmicaela"; // Use the variable here instead of hardcoding the name
$username = "root";
$password = "110622"; // Provide the correct password if required

try {
  $conexion = new PDO("mysql:host=$servidor;dbname=$baseDeDatos", $username, $password);
} catch(PDOException $ex) {
  echo "Connection failed: " . $ex->getMessage();
}
?>
