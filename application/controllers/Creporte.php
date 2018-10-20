<?php 

class Creporte  extends CI_Controller
{
	

	public  function index(){

//load our new PHPExcel library
 $this->load->model('Mtrabajos');	

$this->load->library('Excel');
//activate worksheet number 1
$param['fechai']=$this->input->get('fechai');
$param['fechaf']=$this->input->get('fechaf');
$res=$this->Mtrabajos->tblexcel($param);
$title=$this->Mtrabajos->tbltitle($param);
$titlev=$this->Mtrabajos->titleresumentotal();
$datosres=$this->Mtrabajos->datares();




$this->excel->setActiveSheetIndex(0);
//name the worksheet
$this->excel->getActiveSheet()->setTitle('Reporte Creaciones');
//set cell A1 content with some text





/*
$this->excel->getActiveSheet()->setCellValue('A1', 'Factura');
$this->excel->getActiveSheet()->setCellValue('B1', 'producto');
$this->excel->getActiveSheet()->setCellValue('C1', 'Descripcion');
$this->excel->getActiveSheet()->setCellValue('D1', 'Cantidad');
$this->excel->getActiveSheet()->setCellValue('E1', 'Precio');*/

  //$fields = $query->list_fields();
    $col = 0;
    foreach ($title as $field)
    {
       $this->excel->getActiveSheet()->setCellValueByColumnAndRow($col, 1, $field);
      
        $col++;
    }

    // Fetching the table data
    $row = 2;
    foreach($res as $data)
    {
        $col = 0;
        foreach ($title as $field)
        {
            $this->excel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $data->$field);


            $col++;
        }

        $row++;
    }
   

     $ancho=$this->excel->getActiveSheet()->getHighestRow();
     $r=$ancho+5;

    $col = 0;
    foreach ($titlev as $field2)
    {
       $this->excel->getActiveSheet()->setCellValueByColumnAndRow($col, $r, $field2);
      
        $col++;
    }
$rd=$ancho+6;

foreach($datosres as $data)
    {
        $col = 0;
        foreach ($titlev as $field2)
        {
            $this->excel->getActiveSheet()->setCellValueByColumnAndRow($col, $rd, $data->$field2);


            $col++;
        }

        $rd++;
    }


    // $S->setCellValueExplicit('A'.$r, $row_data['vclaimed']);

 //$this->excel->getActiveSheet()->setCellValue('A'.$r,"VALOR CONFECCION");
  //$this->excel->getActiveSheet()->setCellValue('B'.$r,"VALOR BORDADO");
  //$this->excel->getActiveSheet()->setCellValue('C'.$r,"VALOR TOTAL");




  //$formula = "=SUM(G2:G".$ancho.")";
 /* $x=$ancho+6;
  $resp=$this->Mtrabajos->saldo();
  foreach ($resp as $key ) {
      # code...
    $this->excel->getActiveSheet()->setCellValue("A".$x,$key->prep);
  }*/





 

//change the font size
/*$this->excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(8);
$this->excel->getActiveSheet()->getStyle('B1')->getFont()->setSize(8);*/
//make the font become bold
//$this->excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
//$this->excel->getActiveSheet()->getStyle('B1')->getFont()->setBold(true);
//merge cell A1 until D1
$this->excel->getActiveSheet()->getStyle('A1:M1')->getFont()->setBold(true);
$this->excel->getActiveSheet()->mergeCells('A1:A1');
//set aligment to center for that merged cell (A1 to D1)

 $this->excel->getActiveSheet()->getRowDimension('1')->setRowHeight(30);
 $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(10);
 $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(10);
 $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(50);
 $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(50);
 $this->excel->getActiveSheet()->getColumnDimension('E')->setWidth(50);
 $this->excel->getActiveSheet()->getColumnDimension('F')->setWidth(10);
 $this->excel->getActiveSheet()->getColumnDimension('G')->setWidth(10);
 $this->excel->getActiveSheet()->getColumnDimension('H')->setWidth(10);
 $this->excel->getActiveSheet()->getColumnDimension('I')->setWidth(10);
 $this->excel->getActiveSheet()->getColumnDimension('J')->setWidth(10);
 $this->excel->getActiveSheet()->getColumnDimension('K')->setWidth(50);
 $this->excel->getActiveSheet()->getColumnDimension('L')->setWidth(50);

  $this->excel->getActiveSheet()
        ->getStyle('A1:L1')
        ->getFill()
        ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
        ->getStartColor()
        ->setRGB('#7400dd');
        //$e=$this->excel->getHighestRow();


$this->excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
 
$filename='REPORTE CREACIONES.xls'; //save our workbook as this file name
header('Content-Type: application/vnd.ms-excel'); //mime type
header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
header('Cache-Control: max-age=0'); //no cache
             
//save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
//if you want to save it as .XLSX Excel 2007 format
$objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');  
//force user to download the Excel file without writing it to server's HD
$objWriter->save('php://output');



	}
	



///https://www.youtube.com/watch?v=SAeDi_vNjaQ


	


}
 ?>