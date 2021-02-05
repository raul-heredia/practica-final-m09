<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Historia</title>
    <link rel="shortcut icon" type="image/x-icon" href="./img/favicon.png">
    <link rel="stylesheet" href="./css/style.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style type="text/css">
      h1,h2,h3 {
        color: white;
        text-align: center;
      }
      #first{
        padding-top: 80px;
        color: #ff1801;
        margin-bottom: 10px;
      }
      nav{
        position: fixed;
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
    <?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "practicafinal";

    $connect = mysqli_connect ($host, $user, $pass, $db) or die ("Error de Connexión");
    $selectpilotos = "SELECT * FROM pilotos;";
    $seleccionpilotos = mysqli_query($connect, $selectpilotos);
    $selectescuderias = "SELECT * FROM escuderias;";
    $seleccionescuderias = mysqli_query($connect, $selectpilotos);

    ?>
    <h1 id="first">Campeonatos de F1 desde 1970</h1>
    <table class="table">
        <tr>
        <th colspan="4"><h1>Mundial De Pilotos</h1></th>
        </tr>
        <tr>
            <th>Año</th>
            <th>Nombre</th>
            <th>Escudería</th>
            <th>Victorias</th>
        </tr>
    <?php
        while($row = mysqli_fetch_array($seleccionpilotos))
        {
    ?>
        <tr>
            <td><?php echo$row['YEAR'] ?></td>
            <td><?php echo$row['NOMBRE'] ?></td>
            <td><?php echo$row['ESCUDERIA'] ?></td>
            <td><?php echo$row['VICTORIAS'] ?></td>
        </tr>
    <?php
        }
    ?>
    </table>
    <table class="table">
    <tr>
        <th colspan="3"><h1>Mundial De Constructores</h1></th>
        </tr>
      <tr>
            <th>Año</th>
            <th>Escudería</th>
            <th>Victorias</th>
        </tr>
    <?php
        while($row = mysqli_fetch_array($seleccionescuderias))
        {
    ?>
        <tr>
            <td><?php echo$row['YEAR'] ?></td>
            <td><?php echo$row['ESCUDERIA'] ?></td>
            <td><?php echo$row['VICTORIAS'] ?></td>
        </tr>
    <?php
        }
    ?>
    </table>
  </body>
</html>
