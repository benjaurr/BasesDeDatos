<?php include('../templates/header.html');   ?>

<body>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

	$uid = $_POST["uid"];


 	$query = "SELECT SUM(Viajes.precio) FROM Viajes, Tickets WHERE Viajes.id_viaje = Tickets.id_viaje HAVING Tickets.ususario_id = $uid;";
	$result = $db -> prepare($query);
	$result -> execute();
	$dinero = $result -> fetchAll();
  ?>

	<table>
    <tr class="table-primary">
      <th>Dinero Gastado</th>
    </tr>
  <?php
	    foreach ($dinero as $p) {
          echo "<tr> <td>$p[0]</td> </tr>";
           }
	
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
