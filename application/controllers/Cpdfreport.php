<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cpdfreport extends CI_Controller
{
    public function index()
    {
        $this->load->view('menu_pdf');
        /* Ya que no es tema por el momento css y html
         * puedes poner en esta vista 3 <a> que lleven a cada 
         * uno de los métodos de este controlador
         * <a href="<?php echo base_url();?>welcome/pdf_blanco" target="_blank">
         * <a href="<?php echo base_url();?>welcome/header_footer" target="_blank">
         * <a href="<?php echo base_url();?>welcome/datos_bd" target="_blank">
         * Puedes bajar el zip para verlo como en las capturas de pantalla que pongo
         */
    }
    
    public function pdf_blanco()
    {
        //Carga la librería que agregamos
        $this->load->library('mydompdf');
        //$saludo será una variable dentro la vista
        $data["saludo"] = "Hola mundo!";
        //$html tendrá el contenido de la vista
        $html           = $this->load->view('pdf/blanco', $data, true);
        /*
         * load_html carga en dompdf la vista
         * render genera el pdf
         * stream ("nombreDelDocumento.pdf", Attachment: true | false)
         * true = forza a descargar el pdf
         * false = genera el pdf dentro del navegador
         */
        $this->mydompdf->load_html($html);
        $this->mydompdf->render();
        $this->mydompdf->stream("welcome.pdf", array(
            "Attachment" => false
        ));
    }



    function header_footer()
{
    $this->load->library('mydompdf');
    //Servirá para iterar y generar hojas para ver
        //el header y footer en varias hojas
    $data["numero"] = 250;
    $html = $this->load->view('pdf/header_footer', $data, true);
    $this->mydompdf->load_html($html);
    $this->mydompdf->render();
        //Así se agrega css a la vista que queremos renderizar
        //En la vista hay que agregarlo con link en el head del documento html
    $this->mydompdf->set_base_path('./assets/css/dompdf.css'); //agregar de nuevo el css
    $this->mydompdf->stream("welcome.pdf", array(
        "Attachment" => false
    ));
}


function datos_bd(){
   ini_set('max_execution_time', 0); 
ini_set('memory_limit','2048M');
    $this->load->model('Pdf_model');
    $this->load->library('mydompdf');
    $data['usuarios'] = $this->Pdf_model->procesos();
    $data['valores'] = $this->Pdf_model->valores();
    $data['lstbordados']=$this->Pdf_model->bordados();
	//print_r( $data['valores']);
	
   $html= $this->load->view('pdf/datos_db', $data, true);
     $this->mydompdf->set_paper("A4", "landscape");
    $this->mydompdf->load_html($html);
    $this->mydompdf->render();
    $this->mydompdf->set_base_path('./assets/css/style.css'); //agregar de nuevo el css
    $this->mydompdf->stream("welcome.pdf", array("Attachment" => false));
 }


 function imp(){
    $this->load->model('Pdf_model');
    $this->load->library('mydompdf');
	
		$datos['datos']=$this->input->get('selecciones');
 	$y=json_decode($datos['datos']);
     //print_r( $y[0]);
	
	
	// $string['string'] = $this->Pdf_model->imp($y);
	  $string['string'] = json_decode(json_encode($this->Pdf_model->imp($y), True));
  

    
    
   $html= $this->load->view('pdf/lista', $string, true);
 
    $this->mydompdf->set_paper("A4", "landscape");
    $this->mydompdf->load_html($html);
    $this->mydompdf->render();
   $this->mydompdf->set_base_path('./assets/css/imprimir.css'); //agregar de nuevo el css

    
    $this->mydompdf->stream("welcome.pdf", array("Attachment" => false));
 }
 
 
 function reportesatelite(){
	 
	 $s=$this->input->get('satel');
    $this->load->model('Pdf_model');
    $this->load->library('mydompdf');
    $data['string'] = $this->Pdf_model->satelite($s);
	 $data['saldos'] = $this->Pdf_model->saldosatelite($s);
	
	//saldosatelite();
   // $data['valores'] = $this->Pdf_model->valores();
    $html= $this->load->view('pdf/vsatelites', $data, true);
     $this->mydompdf->set_paper("A4", "landscape");
    $this->mydompdf->load_html($html);
    $this->mydompdf->render();
    $this->mydompdf->set_base_path('./assets/css/style.css'); //agregar de nuevo el css
    $this->mydompdf->stream("satelite".date('d-m-Y').".pdf", array("Attachment" => false));
 }
 
 
 public  function prueba(){
	  $this->load->model('Pdf_model');
	 
	 $res=$this->Pdf_model->procesos();
	 echo json_encode($res);
	 
 }



  public  function reportebordados(){
     //$s=$this->input->get('satel');
    $this->load->model('Pdf_model');
    $this->load->library('mydompdf');
    $data['usuarios'] = $this->Pdf_model->bordados();
     $data['saldos'] = $this->Pdf_model->saldo();
    
    //saldosatelite();
   // $data['valores'] = $this->Pdf_model->valores();
    $html= $this->load->view('pdf/vbordados', $data, true);
     $this->mydompdf->set_paper("A4", "landscape");
    $this->mydompdf->load_html($html);
    $this->mydompdf->render();
    $this->mydompdf->set_base_path('./assets/css/style.css'); //agregar de nuevo el css
    $this->mydompdf->stream("Bordados".date('d-m-Y').".pdf", array("Attachment" => false));
     
 }
 
 


}