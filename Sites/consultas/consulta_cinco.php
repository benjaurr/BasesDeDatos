<?php include('../templates/header.html');   ?>

<body>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");


 	$query = "SELECT Usuarios.usuario_id, Usuarios.nombre, Reservas.fecha_llegada, Reservas.fecha_salida FROM Usuarios, Reservas, Hoteles WHERE Usuarios.usuario_id = Reservas.usuario_id AND Reservas.id_hotel = Hoteles.id_hotel AND Reservas.fecha_llegada >= '2020-01-01' AND Reservas.fecha_salida <= '2020-03-31';";
	$result = $db -> prepare($query);
	$result -> execute();
	$datos = $result -> fetchAll();
  ?>

	<table>
    <tr class="table-secondary">
      <th>Reservas entre estas fechas</th>
    </tr>
  <?php
	foreach ($datos as $d){
        echo "<tr><td>$d[0]</td><td>$d[1]</td><td>$d[2]</td><td>$d[3]</td><td>$d[4]</td></tr>";
    }
	
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
