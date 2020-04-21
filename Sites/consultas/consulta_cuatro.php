<?php include('../templates/header.html');   ?>

<body>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

	$uid = $_POST["uid"];


 	$query = "SELECT SUM(precio) FROM Viajes, Tickets WHERE ticket.uid = $uid";
	$result = $db -> prepare($query);
	$result -> execute();
	$dinero = $result -> fetchAll();
  ?>

	<table>
    <tr class="table-primary">
      <th>Dinero Gastado</th>
    </tr>
  <?php
	
  		echo "<tr> <td>$dinero</tr>";
	
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
