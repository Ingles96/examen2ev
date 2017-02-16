<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>NBA</title>
  </head>
  <body>

  <a href="confeste.php">Conferencia Este</a>
  <a href="">Conferencia Oeste</a>
  <a href="index.php">Inicio</a>

<table border=1>
  <?php

  //Me conecto a la base de datos
  $conexion = new mysqli("localhost", "root", "", "nba");
  if ($conexion->connect_errno) {
      echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
    }else {
    }

//Sacaremos un listado de todos los partidos de la temporada 99/00

$partidos = $conexion->query("SELECT equipo_local,equipo_visitante,puntos_local,puntos_visitante FROM partidos");

echo "<tr>";
echo "<td>";
echo "<strong>Equipo Local</strong>";
echo "<td><strong>Equipo Visitante</strong></td>";
echo "<td><strong>Puntos Local</strong></td>";
echo "<td><strong>Puntos Visitante</strong></td>";
echo "</tr>";

    while ($fila=$partidos->fetch_assoc()) {
      echo "<tr>";
      echo "<td>";
      echo "".$fila["equipo_local"].  "<br>";
      echo "</td>";
      echo "<td>";
      echo "".$fila["equipo_visitante"].  "<br>";
      echo "</td>";
      echo "<td>";
      echo "".$fila["puntos_local"].  "<br>";
      echo "</td>";
      echo "<td>";
      echo "".$fila["puntos_visitante"].  "<br>";
      echo "</td>";
      echo "</tr>";
    }
    ?>
    </table>
  </body>
</html>
