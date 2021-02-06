<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Crear Cuenta</title>
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.png">
    <link rel="stylesheet" href="../css/style.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style type="text/css">
      h1,h2,h3 {
        color: #ff1801;
      }

    </style>
  </head>
  <body>
    <nav>
      <div class="logo"><a href="index.html"><img src="../img/f1.png" href="index.html" /></a></div>
      <input type="checkbox" id="click" />
      <label for="click" class="menu-btn">
        <i class="fas fa-bars"></i>
      </label>
      <ul>
        <li><a href="../index.html">Inicio</a></li>
        <li><a href="../historia.php">Historia</a></li>
        <li><a href="../social.html">Social</a></li>
        <li><a href="../galeria.html">Galería</a></li>
        <li><a href="../contacto.html">Contacto</a></li>
        <li><a class="active" href="../signin.html">Mi cuenta</a></li>
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
		?> 
    <div class="content">
      <h2>Bienvenido <?php echo "$usuario"; ?>.</h2>
      <p>Actualmente esta página está bajo construcción.</p>
      <p>Lamentamos las moléstias.</p>
      <h2>‎‎‎</h2>
      <div class="loader">
        <div class="loaderBar"></div>
      </div>
      <img src="../img/construction.png">
    </div>
<?php	}else{
				header( "refresh:6;url=../signin.html" );  ?> 
        <div class="content">
          <h2>¡Error! Esta cuenta no existe. Verifica tu correo electrónico y contraseña y vuelve a intentarlo.</h2>
          <p>¿No estás registrado? <a href="../signup.html">Crear una cuenta</a>.</p>
          <p>Serás redirigido en unos segundos.</p>
          <p>Si no te redirige automáticamente pulsa <a href="../signin.html">aquí</a>.</p>
        </div>
    <?php } ?>
  </body>
</html>

