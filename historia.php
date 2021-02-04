<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Inicio</title>
    <link rel="shortcut icon" type="image/x-icon" href="./img/favicon.png">
    <link rel="stylesheet" href="./css/style.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style type="text/css">
      h1,h2,h3 {
        color: #ff1801;
      }
      nav{
        position: fixed;
      }
      #first{
        margin-top: 50px;
      }
    </style>
  </style>
  </head>
  <body>
    <nav>
      <div class="logo"><a href="index.html"><img src="./img/f1.png" href="index.html" /></a></div>
      <input type="checkbox" id="click" />
      <label for="click" class="menu-btn">
        <i class="fas fa-bars"></i>
      </label>
      <ul>
        <li><a href="index.html">Inicio</a></li>
        <li><a class="active" href="historia.php">Historia</a></li>
        <li><a href="social.html">Social</a></li>
        <li><a href="galeria.html">Galería</a></li>
        <li><a href="contacto.html">Contacto</a></li>
        <li><a href="signin.html">Iniciar Sesión</a></li>
      </ul>
    </nav>
    <h1>‎‎‎</h1>
    <h1>‎‎‎</h1>
    <h1>‎‎‎</h1>
    <?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "practicafinal";

    $connect = mysqli_connect ($host, $user, $pass, $db) or die ("Error de Connexión");
    $sentenciasql = "SELECT * FROM pilotos;";
    $seleccio = mysqli_query($connect, $sentenciasql);

    ?>
    
    <table>
        <tr>
            <th>Año</th>
            <th>Nombre</th>
            <th>Escudería</th>
            <th>Victorias</th>
        </tr>
    <?php
        while($row = mysqli_fetch_array($seleccio))
        {
    ?>
        <tr>
            <th><?php echo$row['YEAR'] ?></th>
            <th><?php echo$row['NOMBRE'] ?></th>
            <th><?php echo$row['ESCUDERIA'] ?></th>
            <th><?php echo$row['VICTORIAS'] ?></th>
        </tr>
    <?php
        }
    ?>
    </table>
  </body>
</html>
