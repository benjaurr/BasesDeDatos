<?php include('../templates/header.html');   ?>

<body>
<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  $username = $_POST["username"];

 	$query = "SELECT Paises.pnombre FROM Ciudades, (SELECT Hoteles.idcuidad FROM Hoteles, (SELECT Reservas.idhotel FROM Reservas WHERE Reservas.usuario_id = (SELECT Usuarios.usuario_id FROM Usuarios WHERE Usuarios.username = $username)));";
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
  		echo "<tr><td>$pais[0]</td></tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
