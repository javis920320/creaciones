<?php 

/**
* 
*/
class prueba
{
	private $conexion;
	
	function __construct()
	{
		require('conectar.php');
		$this->conexion = new Conexion();
		$this->conexion->conectar();

	}

	 function lista(){
	 	$sql="SELECT *  FROM categorizacion";
	 	$resultado=$this->conexion->conexion->query($sql);
	 	 while ($resul=$resultado->fetch_array()) {
	 	 	$arreglo[]=$resul;
	 	 }

	 	 	return $arreglo;

	 }

	 function contar(){
	 	$sql="SELECT sum(id_categoria)  FROM categorizacion" ;
	 	$resultado=$this->conexion->conexion->query($sql);
	 	 while ($resul=$resultado->fetch_array()) {
	 	 	$arreglo=$resul;
	 	 }

	 	 	
	 	 	return $arreglo;

	 }
}

$ins=  new prueba();
$res=$ins->contar();
print_r($res);
echo $res[0];

/*$ins=  new prueba();
$res=$ins->lista();
print_r($res);*/



 ?>