<?php if ( ! defined('BASEPATH')) exit('Acceso denegado!!!');
/*
 * Creado el 27/01/2012
 * Actualizado el 27/01/2012
 * Por: Jesse Javier Cogollo A.
 */
class nuevaconpfactura extends CI_Controller{

 	function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('insertar_model');
        $this->load->model('consultar_model');
        $this->_var_session();
    }
    
    function index(){
        $data['Listar'] = $this->consultar_model->listarconpfactura();  
        $data['titulo']= 'Concepto facturas';     
        $data['main_contenido']= 'configuracion_usuario/nuevaconpfactura';
        $this->load->view('includes/templateingresado',$data);
    }
    
    function _var_session(){
		$logueado = $this->session->userdata('esta_logueado');
		if( $logueado != TRUE){
			redirect('inicio');	
		}
	} 
    function insertarconpfact(){
        $descconpfact= $this->input->post('txtdescconpfact');
        $this->form_validation->set_rules('txtdescconpfact','Concepto factura','max_length[50]|required');
    	$this->form_validation->set_message('required','Campo %s requerido!');
    	if($this->form_validation->run() != FALSE){ 
        $Tabla = 'tbconceptofacturas';
        $insconpfact = array (
                'DESCRIPCION' => $descconpfact,
            );
        $insertarconpfact = $this->insertar_model->insertar($insconpfact,$Tabla);
        redirect('nuevaconpfactura');
    	}
        else 
        {
        	echo '<script>
        	alert("Campos obligatorios y/o campos numericos!!!");
        	document.location.href="http://localhost:8080/Age/nuevaconpfactura.html";	
        	</script>';
        	//$this->index();
        }
    }
}
 ?>