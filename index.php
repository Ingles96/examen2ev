<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>NBA</title>
  </head>
  <body>

  <a href="confeste.php">Conferencia Este</a>
  <a href="">Conferencia Oeste</a>
  <a href="temporada.php">Temporada 99/00</a>

<table border=1>
  <?php

  //Me conecto a la base de datos
  $conexion = new mysqli("localhost", "root", "", "nba");
  if ($conexion->connect_errno) {
      echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
    }else {
    }

//sacaremos un listado de todos los equipos de la NBA
    $equipos = $conexion->query("SELECT * FROM equipos");

    echo "<tr>";
    echo "<td>";
    echo "<strong>Nombre</strong>";
    echo "<td><strong>Ciudad</strong></td>";
    echo "<td><strong>Conferencia</strong></td>";
    echo "<td><strong>Division</strong></td>";
    echo "</tr>";
    while ($fila=$equipos->fetch_assoc()) {

      echo "<tr>";
      echo "<td>";
      echo "".$fila["Nombre"].  "<br>";
      echo "</td>";
      echo "<td>";
      echo "".$fila["Ciudad"].  "<br>";
      echo "</td>";
      echo "<td>";
      echo "".$fila["Conferencia"].  "<br>";
      echo "</td>";
      echo "<td>";
      echo "".$fila["Division"].  "<br>";
      echo "</td>";
      echo "</tr>";
    }
    ?>
  </table>
  </body>
</html>
