<?php include('templates/header.html');   ?>

<body>
  <div class="p-3 mb-2 bg-dark text-white">
  <h1 align="center">Entrega 2 - Grupo 95 </h1>
  <p style="text-align:center;">Consultas a la base de datos</p>
  </div>
  <br>

  <div class="p-3 mb-2 bg-success text-white">
  <h3 align="center"> ¿Quieres ver todos los username y correos?</h3>

  <form align="center" action="consultas/consulta_uno.php" method="post">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>
  </div>
  
  
  <div class="p-3 mb-2 bg-danger text-white">
  <h3 align="center"> ¿Quieres buscar todas las cuidades de un país?</h3>

  <form align="center" action="consultas/consulta_dos.php" method="post">
    Ingresa el país:
    <input type="text" name="pais">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>
  </div>


  <div class="p-3 mb-2 bg-info text-white">
  <h3 align="center"> ¿Quieres conocer todos los países en los que un usuario se ha hospedado con hoteles de la agencia?</h3>

  <form align="center" action="consultas/consulta_tres.php" method="post">
    Ingresa su username:
    <input type="text" name="username">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>
  </div>

  <div class="p-3 mb-2 bg-primary text-white">
  <h3 align="center">¿Quieres saber la cantidad de dinero que ha gastado un usuario en todos los tickets que ha comprado?</h3>

  <form align="center" action="consultas/consulta_cuatro.php" method="post">
    Ingresa un identificador de usuario:
    <input type="text" name="uid">
    <br><br>
    <input type="submit" value="Buscar">
  </form>
  </div>

  <div class="p-3 mb-2 bg-secondary text-white">
  <h3 align="center">Información sobre las reservas de hotel desde el 01/01/2020 hasta el 31/03/2020</h3>

  <form align="center" action="consultas/consulta_cinco.php" method="post">

    <br><br>
    <input type="submit" value="Buscar">
  </form>
  </div>

  <div class="p-3 mb-2 bg-warning text-white">
  <h3 align="center"> ¿Quieres ver las ventas de tickets entre dos fechas?</h3>

  <form align="center" action="consultas/consulta_seis.php" method="post">
    Ingresa la fecha de inicio (YYYY-MM-DD):
    <input type="text" name="f_inicio">
    <br/><br/>
    Ingresa la fecha de fin (YYYY-MM-DD):
    <input type="text" name="f_fin">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>
  </div>
  <br>
  <br>
  <br>
  <br>
</body>
</html>
