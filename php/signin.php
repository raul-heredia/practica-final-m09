<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Inicio</title>
    <link rel="stylesheet" href=".././css/style.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <nav>
      <div class="logo"><img src=".././img/f1.png" href="index.html" /></div>
      <input type="checkbox" id="click" />
      <label for="click" class="menu-btn">
        <i class="fas fa-bars"></i>
      </label>
      <ul>
        <li><a class="active" href="../index.html">Inicio</a></li>
        <li><a href="../contacto.html">Contacto</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="../galeria.html">Galería</a></li>
        <li><a href="../signin.html">Sign In</a></li>
      </ul>
    </nav>
    <?php

	// Variables amb els camps del formulari
	$usuario = $_POST['Correo'];
    $passwd = md5($_POST['Passwd']);

	// Variables connexió MySQL
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "practicafinal";
	
	// Realitzem la connexió amb la base de dades
	$connect = mysqli_connect ($host, $user, $pass, $db) or die ("Error de Connexió");
	
	// Sentencia SQL a executar
	$sentenciasql = "SELECT * FROM USERS WHERE CORREO = '$usuario' AND PASSWD = '$passwd';";
	
	// Executem la sentencia SQL amb la connexió donada
    $registre = mysqli_query($connect, $sentenciasql);    
	if(mysqli_fetch_row($registre)){
		echo "Benvingut ".$usuario;
	}else{
        echo "$passwd <br>";
		echo "Error, estás seguro de que tienes una cuenta?";
	}
?>
  </body>
</html>

