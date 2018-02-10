<?php
defined("BASEPATH") OR die("El acceso al script no está permitido");

class Pdf_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

   /* public function getProvincias()
    {
         $this->db->select('p.factura,p.facultad,p.cantidad,p.talla,p.descripcion,pe.nombres,p.fecha_ingreso');
		$this->db->from('pedido p');
		$this->db->join('cliente c','c.idpersona=p.idcliente');
		$this->db->join('persona pe','pe.idpersona=c.idpersona');
        $resul=$this->db->get();
		return $resul->result();

    }*/


    public  function procesos(){


        $query=$this->db->query("
select DISTINCT(p.idproceso),pe.factura,pe.facultad,pe.talla,pe.descripcion,pro.nomprod,p.cantidad,precio1,p.fecha,per.nombres 
from periodo x,proceso p
inner join pedido pe on p.idpedido = pe.idpedido 
inner join tipo_producto tp on pe.idtipoprod = tp.idtipoprod 
inner join producto pro on pro.id_prod = p.id_prod 
inner join precio pre on pre.id_prod = p.id_prod
inner join trabajador t on t.idtrabajador = p.idtrabajador 
inner join persona per on per.idpersona = t.idpersona 
where p.fecha between x.fechai and x.fechaf order by per.nombres");



return $query->result();
    }







}
/* End of file pdf_model.php */
/* Location: ./application/models/pdf_model.php */
