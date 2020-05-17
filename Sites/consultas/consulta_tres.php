<?php include('../templates/header.html');   ?>

<body>
<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  $username = $_POST["username"];

  $query = "SELECT Ciudades.pnombre FROM Usuarios, Reservas, Ciudades, Hoteles WHERE Usuarios.usuario_id = Reservas.usuario_id AND Reservas.id_hotel = Hoteles.id_hotel AND Hoteles.id_ciudad = Ciudades.id_ciudad AND Usuarios.username iLIKE '$username';";
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
