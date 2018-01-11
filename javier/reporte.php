<?php

include('./fpdf/fpdf.php');
  class PDF extends FPDF
  {


         function Header()
        {
         

         $this->SetXY(0,15); 
          /*$this->SetY(15);
          $this->SetX(0);*/

        // Select Arial bold 15
          $this->SetFont('Arial','',10);
          // Move to the right
          $this->Cell(20);
          // Framed title
          $this->Image('logo.png',20,20,-200);

          $this->Cell(40,30 ,'',1,0,'C');

           $this->Cell(100,30,'TERMINAL DE  TRANSPORTES DE',1,0,'C');

           $this->SetXY(60,22); 
           $this->Cell(100,25,'PASTO  S.A',0,0,'C');
           $this->SetXY(60,25); 
            $this->Cell(100,30,'Nit. 800.057.019-7',0,0,'C');
             $this->SetXY(160,15); 
             $this->Cell(30,30,'',1,0,'C');

           

          // Line break
          $this->Ln(20); 
        }

         function Footer()
        {
            // Go to 1.5 cm from bottom
            $this->SetY(-40);
            // Select Arial italic 8
           
            $this->SetFont('Arial','B',8);
            // Print centered page number
            $this->Cell(50,25,' ELABORADO POR :SGC',1,0,'C');
            $this->Cell(50,25,' REVISADO POR:GERENTE',1,0,'C');
            $this->Cell(50,25,' APROBADO POR:GERENTE',1,0,'C');
            $this->Cell(40,25,'',1,0,'C');
            $this->Image('vg.png',165,260,-198);

          $this->ln(25);

            $this->Cell(0,10,'Page '.$this->PageNo(),0,1,'C');
        }



  }
  date_default_timezone_set('UTC');
  $mm=date('m');
$meses = array(   '1' => 'Enero ',
                  '2' => 'Febrero ',
                  '3' => 'Marzo ',
                  '4' =>'Abril ',
                  '5' => 'Mayo ',
                  '6' =>'Julio ',
                  '7' => 'Agosto ',
                  '8' =>'Septiembre',
                  '9' =>'Octubre ',
                  '10' =>'Noviembre',
                  '11' =>  'diciembre');

   $val=intval($mm);

$fecha= $d=date('d').' de '. $meses[$val].' de '.$y=date('Y');

$nombres=' JAVIER  ALEXANDER  LOPEZ';
$cedula='1085298221';// cambiar  por  el dato   get
$html='LA SUSCRITA JEFE DE OFICINA JURIDICA DEL';
$echo='TERMINAL DE TRANSPORTES DE PASTO S.A';
$echo1='CERTIFICA: ';
$echo2='Que el  '.utf8_decode("Señor").':'.$nombres.' , identificado con Cedula de '.utf8_decode("ciudadanía").' No.'.$cedula.'';

/*
Este paz y salvo se anulara cuando el usuario infrinja el Manual Operativo Vigente de la

Sociedad Terminal de Transportes de Pasto, y no tendrá valides para excusar informes de

infracción realizados con una anterioridad de quince (15) días hábiles a la fecha de su

elaboración, ya que dentro de este término se respetara el proceso de descargos, descuentos y

traslados del Área Técnica a la Oficina Jurídica.

*/
$echo3='se encuentra a PAZ Y SALVO y sin registros en la base de datos de SANCIONES PENDIENTES ';
$echo4='del terminal de transportes de Pasto S.A.';

$echo5='Este paz y salvo se anulara cuando el usuario infrinja el Manual Operativo Vigente de la Sociedad';
$echo6='Terminal de Transportes de Pasto, y no '.utf8_decode('tendrá').' valides para excusar informes de '.utf8_decode('infracción');
$echo7='realizados con una anterioridad de quince (15) '.utf8_decode(' días hábiles').' a la fecha de su '.utf8_decode('elaboración , ya que ');
$echo8='dentro de este  '.utf8_decode('término'). ' se respetara el proceso de descargos, descuentos y';
$echo9='traslados del '.utf8_decode('Área  Técnica').'  a la Oficina '.utf8_decode('Jurídica').'.';

/*Para constancia se firma en San Juan de Pasto, el día 20 de Febrero de 2017.*/
$parrafo='Para constancia se firma en San Juan de Pasto,el '.utf8_decode('día  ').$fecha.'.';
$responsable='YAMILE  REVELO DEL  VALLE';
$cargo='JEFE OFICINA JURIDICA';
$t='S.T.T.P';



  $pdf=  new PDf();
  $pdf->AliasNbPages();
  $pdf->AddPage();
  $pdf->SetFont('Arial','B',10);
   $pdf->SetXY(70,50); 
  $pdf->Cell(70,20,$html,0,0,'C');
  $pdf->ln(3);
   $pdf->Cell(190,30,$echo,0,0,'C');
   $pdf->ln(20);
   $pdf->Cell(190,30,$echo1,0,0,'C');
   $pdf->ln(30);
 
    $pdf->SetFont('Arial','I',10);
    $pdf->SetXY(25,95);
    $pdf->Cell(225,30,$echo3,0,0,'L');
    $pdf->SetXY(25,90); 
    $pdf->Cell(225,30,$echo2,0,0,'L');
     $pdf->SetXY(25,100); 
     $pdf->Cell(225,30,$echo4,0,0,'L');

    
      $pdf->SetXY(25,120); 
     $pdf->Cell(225,30,$echo5,0,0,'L');
      $pdf->SetXY(25,125); 
     $pdf->Cell(225,30,$echo6,0,0,'L');
      $pdf->SetXY(25,130); 
     $pdf->Cell(225,30,$echo7,0,0,'L');
      $pdf->SetXY(25,135); 
     $pdf->Cell(225,30,$echo8,0,0,'L');
      $pdf->SetXY(25,140); 
     $pdf->Cell(225,30,$echo9,0,0,'L');
     $pdf->SetXY(25,160); 
     $pdf->Cell(225,30,$parrafo,0,0,'L');

      $pdf->SetXY(0.05,180);
      $pdf->SetFont('Arial','B',10);
     $pdf->Cell(225,30,$responsable,0,0,'C');
      $pdf->SetXY(0.05,185);
      $pdf->SetFont('Arial','B',10);
     $pdf->Cell(225,35,$cargo,0,0,'C');
      $pdf->SetXY(0.05,190);
      $pdf->SetFont('Arial','B',10);
     $pdf->Cell(225,40,$t,0,0,'C');
    $pdf->Output();



/*



*/


  ?>