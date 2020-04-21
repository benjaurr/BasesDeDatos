<?php include('../templates/header.html');   ?>

<body>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");


 	$query = "SELECT usuario_id, nombre, fecha_llegada, fecha_salida FROM Usuarios, Reservas, Hoteles WHERE fecha_llegada = "2020-01-01" AND fecha_salida = "2020-03-31";";
	$result = $db -> prepare($query);
	$result -> execute();
	$datos = $result -> fetchAll();
  ?>

	<table>
    <tr class="table-secondary">
      <th>Dinero Gastado</th>
    </tr>
  <?php
	foreach ($datos as $d){
        echo "<tr><td>$d[0]</td><td>$d[1]</td><td>$d[2]</td><td>$d[3]</td><td>$d[4]</td></tr>";
    }
	
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
