<?php
/*
 * Creado el 27/01/2012
 * Actualizado el 28/01/2012
 * Por: Germán Dario Díaz
 */
//Almacenar en variable IS_AJAX si la petición es por ajax o http
/*define('IS_AJAX',isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');*/
class nuevafactura extends CI_Controller{

 function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('factura_model');
        $this->load->model('consultar_model');
        $this->_var_session();
    }
    function index(){
        $data['main_contenido']= 'factura/nuevofactura';
        $data['idsesion'] = $this->session->userdata('id');
        $data['nombre'] = $this->session->userdata('nombre');
        $data['apellido'] = $this->session->userdata('apellido');
        $data['conceptos'] = $this->consultar_model->listarconceptos();
      // $this->session->userdata('nombre');
        $data['titulo']= 'Nuava Factura';
       $this->load->view('includes/templateingresado',$data);
    }
    function _var_session(){
		$logueado = $this->session->userdata('esta_logueado');
		if( $logueado != TRUE){
			redirect('inicio');	
		}
	}
        
    function ajax(){
     $buscar = $this->input->get('term');
     if($buscar){
         $this->db->select('ID,NUMERODOC, PNOMBRE as value, SNOMBRE AS val, PAPELLIDO as priapellido,DIRECCIONRES AS direccion, TELEFONORES as telefono'); // , PAPELLIDO , SAPELLIDO
         $this->db->like('PNOMBRE',$buscar);
       //  $this->db->limit(10);
         $this->db->or_like('PNOMBRE',$buscar,'After');
       //  $this->db->like('PAPELLIDO',$buscar);
      //   $this->db->like('SAPELLIDO',$buscar);
         $query=$this->db->get('TBPERSONAS');
       //  $query['listar'] = $this->factura_model->consultarnombre($buscar);
         if($query->num_rows() > 0){
             foreach ($query->result_array() as $row){
                 $resultado[]= array(   'value' => $row['value'].' '.$row['val'].' '.$row['priapellido'],
                                        'id' => $row['ID'],
                                        'numerdoc'=>$row['NUMERODOC'],
                                        'telefono'=>$row['telefono'],
                                        'direccion'=>$row['direccion'],
                     
                     
                     );
             }
         }
         echo json_encode($resultado);
     }
    }
    function nrofactura(){
        $query= $this->db->query('SELECT MAX(NUMERO) AS ultimafac from TBFACTURAS');
      //  $query=$this->db->get('TBFACTURAS');
       if($query->num_rows()>0){ 
            $a=0;
        foreach ($query->result() as $fila) {
            echo    $numfactura[$a]['numfactura']=$fila->ultimafac + 1;     
            $a++;
        }
       }else{
           echo '0';
       }
    }
}
?>