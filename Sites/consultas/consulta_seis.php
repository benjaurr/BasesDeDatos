<?php include('../templates/header.html');   ?>

<body>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

	$f_inicio = $_POST["f_inicio"];
	$f_fin = $_POST["f_fin"];


 	$query = "SELECT Usuarios.usuario_id, Usuarios.nombre, SUM(Viajes.precio) FROM Usuarios, Tickets, Viajes WHERE Tickets.id_viaje = Viajes.id_viaje AND Tickets.usuario_id = Usuarios.usuario_id AND Tickets.fecha_de_compra >= $f_inicio AND Tickets.fecha_de_compra <= $f_fin GROUP BY Usuarios.usuario_id;";
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
	  foreach ($datos as $d){
        echo "<tr><td>$d[0]</td><td>$d[1]</td><td>$d[2]</td></tr>";
    }
	
  ?>
	</table>

<?php include('../templates/footer.html'); ?>