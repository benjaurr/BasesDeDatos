<?php include('../templates/header.html');   ?>

<body>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

	$f_inicio = $_POST["f_inicio"];
	$f_fin = $_POST["f_fin"];


 	$query = "SELECT usuario_id, nombre, SUM(precio) FROM Usuarios, Tickets, Viajes WHERE fecha_llegada = $f_inicio AND fecha_salida = $f_fin;";
	$result = $db -> prepare($query);
	$result -> execute();
	$datos = $result -> fetchAll();
  ?>

	<table>
    <tr class="table-warning">
      <th>ID Usuario</th>
      <th> Nombre</th>
      <th>Dinero Gastado</th>
    </tr>
  <?php
	
  		echo "<tr> <td>$dinero[0]<td><td>$dinero[1]<td<td>$dinero[2]<td>></tr>";
	
  ?>
	</table>

<?php include('../templates/footer.html'); ?>