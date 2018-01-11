<?php
/**
* 
*/
class conexion
{
  private $servidor;
  private $usuario;
  private $password;
  private $basedatos;
  public $conexion;
  
  function __construct()

  {
    $this->servidor ='localhost';
    $this->usuario = 'root';
    $this->password = '';
    $this->basedatos = 'prueba';

    # code...
  }

  function  conectar(){


    $this->conexion= new mysqli($this->servidor,$this->usuario,$this->password,$this->basedatos);

  }



  function cerrar(){



    $this->conexion->close();
  }


}

?>