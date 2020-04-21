<?php include('../templates/header.html');   ?>

<body>
<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  $username = $_POST["username"];

 	$query = "SELECT pnombre FROM Cuidades, (SELECT idcuidad FROM Hoteles, (SELECT idhotel FROM Reservas WHERE uid = (SELECT uid FROM Usuarios WHERE username = $username)));";
  #Podria ser IN
   $result = $db -> prepare($query);
	$result -> execute();
	$paises = $result -> fetchAll();
  ?>

	<table>
    <tr class="table-info">
      <th scope="col">País</th>
    
    </tr>
  <?php
	foreach ($paises as $pais) {
  		echo "<tr class="table-info"><td>$pais</td></tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
