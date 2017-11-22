<?php 

class Creporte extends PHPExcel
{
	
	public  function index(){


	$this->load->library('Excelfile');

	$file="./uploads/Book1.xlsx";
	$obj=PHPExcel_IOFactory::load($file);
	$cell=$obj->getActiveSheet()->getCellCollection();

	}


///https://www.youtube.com/watch?v=SAeDi_vNjaQ


}
 ?>