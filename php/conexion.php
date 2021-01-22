<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "practicafinal";

$connect = mysqli_connect ($host, $user, $pass, $db) or die ("Error de Connexión");
$sentenciasql = "SELECT * FROM pilotos;";
$seleccio = mysqli_query($connect, $sentenciasql);
?>