<?php

$servername = "3.86.113.155"; 
$username = "root"; 
$password = "x3JqCv1UPYN"; 
$dbname = "Contacto"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}

$conn->set_charset("utf8");

?>

