<?php 
include_once('./php/conexion.php'); 
$query="select * from student"; 
$result=mysql_query($query); 
?> 
<!DOCTYPE html> 
<html> 
	<head>
        <meta charset="utf-8" />
        <title> Fetch Data From Database </title> 
        <link rel="stylesheet" href="./css/style.css" />
        <script src="https://kit.fontawesome.com/a076d05399.js"></script> 
		
	</head> 
	<body>
        <nav>
            <div class="logo"><img src="./img/f1.png" href="index.html" /></div>
            <input type="checkbox" id="click" />
            <label for="click" class="menu-btn">
              <i class="fas fa-bars"></i>
            </label>
            <ul>
              <li><a class="active" href="index.html">Inicio</a></li>
              <li><a href="contacto.html">Contacto</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="galeria.html">Galería</a></li>
              <li><a href="signin.html">Sign In</a></li>
            </ul>
          </nav> 
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="4"><h2>Mundial De Pilotos</h2></th> 
		</tr> 
			  <th> Año </th> 
			  <th> Nombre </th> 
			  <th> Escudería </th> 
			  <th> Nº De Victorias </th> 
			  
		</tr> 
		
		<?while($row = mysqli_fetch_assoc($seleccio)){ 
		?> 
		<tr> <td><?php echo $rows['AÑO']; ?></td> 
		<td><?php echo $rows['NOMBRE']; ?></td> 
		<td><?php echo $rows['ESCUDERÍA']; ?></td> 
		<td><?php echo $rows['VICTORIAS']; ?></td> 
		</tr> 
	<?php } ?> 
	</table> 
	</body> 
	</html>