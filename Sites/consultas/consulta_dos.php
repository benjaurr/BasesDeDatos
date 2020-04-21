<?php include('../templates/header.html');   ?>

<body>

  <?php
  require("../config/conexion.php"); #Llama a conexión, crea el objeto PDO y obtiene la variable $db

  $pais = $_POST["pais"];
  $query = "SELECT cnombre FROM Cuidades, Paises WHERE pnombre LIKE '%$pais%';";
  $result = $db -> prepare($query);
  $result -> execute();
  $cuidades = $result -> fetchAll(); #Obtiene todos los resultados de la consulta en forma de un arreglo
  ?>

  <table>
    <tr class="table-danger">
      <th>Cuidades</th>
      
    </tr>
  <?php
  foreach ($cuidades as $p) {
    echo "<tr class="table-danger"> <td>$p</td> </tr>";
  }
  ?>
  </table>

<?php include('../templates/footer.html'); ?>
