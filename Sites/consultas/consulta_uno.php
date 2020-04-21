<?php include('../templates/header.html');   ?>

<body>
<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  
  #Se construye la consulta como un string
 	$query = "SELECT username, correo FROM Usuarios;";

  #Se prepara y ejecuta la consulta. Se obtienen TODOS los resultados
	$result = $db -> prepare($query);
	$result -> execute();
	$usercorreo = $result -> fetchAll();
  ?>

  <table class="table table-hover">
    <thread>
      <tr class="table-success">
         <th>Username</th>
         <th>Correo</th>
      </tr>
    </thread>
    <tbody>
      <?php
        foreach ($usercorreo as $p) {
          echo "<tr><td>$p[0]</td><td>$p[1]</td></tr>";
      }
      ?>
    
    </tbody>
  </table>

<?php include('../templates/footer.html'); ?>
