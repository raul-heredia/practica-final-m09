
<html>
<head>
  <title> Articles magatzem </title>
  <meta content="text/html; charset=UTF-8" http-equiv="content-type">
</head>
<body>
  <?php
  //Variables del camps del formulari
  $nombre = $_POST['Nombre'];
  $correo = $_POST['Correo'];
  $passwd = md5($_POST['Passwd']);
  //variables connexió mysql    
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "practicafinal";
  // Realitzem la connexió amb la base de dades
  $connect = mysqli_connect ($host, $user, $pass, $db) or die ("Error de Connexió");
  // Sentencia SQL a executar
  $sentenciasql = "INSERT INTO USERS VALUES ('".$nombre."', '".$correo."', '".$passwd."');";
      
  if(mysqli_query($connect, $sentenciasql)){
          echo "Cuenta creada correctamente";
      }else{
          echo "Error, este correo ya está en uso";
      }
  ?>
</body>
</html>
