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
    $this->load->model('Pdf_model');
    $this->load->library('mydompdf');
    $data['usuarios'] = $this->Pdf_model->procesos();
    $data['valores'] = $this->Pdf_model->valores();
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
	
	
	

    
/* for ($i=0; $i<count($y) ; $i++) { 
 
$data[$i] = $this->Pdf_model->imp($y[$i]);

 $data[$i]['string']=$data[$i];
 
 }*/
 
//var_dump($data);

 $data['string'] = $this->Pdf_model->imp($y);

 var_dump( $data['string']);


 
 
    
  /*  $html= $this->load->view('pdf/lista', $data, true);
     $this->mydompdf->set_paper("A4", "landscape");
    $this->mydompdf->load_html($html);
    $this->mydompdf->render();
    $this->mydompdf->set_base_path('./assets/css/style.css'); //agregar de nuevo el css
    $this->mydompdf->stream("welcome.pdf", array("Attachment" => false));/*
 }

}