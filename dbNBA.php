<?php
/**
 * Permitir la conexion contra la base de datos
 */
class dbNBA
{
  //Atributos necesarios para la conexion
  private $host="localhost";
  private $user="nba";
  private $pass="nba123";
  private $db_name="nba";

  //Conector
  private $conexion;

  //Propiedades para controlar errores
  private $error=false;

  function __construct()
  {
      $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
      if ($this->conexion->connect_errno) {
        $this->error=true;
      }
  }

//Creamos la funcion mostrarEquipos para devolver el resultado de realizar la consulta a la tabla equipos
  public function mostrarEquipos(){
      if($this->error==false){
        $equipos = $this->conexion->query("SELECT * FROM equipos");

    }

}

//Creamos la funcion mostrarConfEste para devolver el resultado de realizar la consulta a la tabla equipos
  public function mostrarConfEste(){
      if($this->error==false){
        $este = $this->conexion->query("SELECT Nombre,Ciudad,Division FROM equipos WHERE Conferencia='East'");

    }

}

//Creamos la funcion mostrarTemporada para devolver el resultado de realizar la consulta a la tabla equipos
  //public function mostrarTemporada(){
    //  if($this->error==false){
        //$partidos= $this->conexion->query("SELECT equipo_local,equipo_visitante,puntos_local,puntos_visitante FROM partidos");

  //  }

//}

//Modificaremos función mostrarTemporada,  para que pueda recibir la temporada como parámetro, mostrarTemporada($temporada).
  public function mostrarTemporada($temporada){
      if($this->error==false){
        return $this->conexion->query("SELECT equipo_local,equipo_visitante,puntos_local,puntos_visitante FROM partidos");

   }

}





?>
