<?php if ( ! defined('BASEPATH')) exit('Acceso denegado!!!');
class nuevaincidenciamed extends CI_Controller{

 function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('consultar_model');
        $this->load->model('insertar_model');
        $this->load->helper('form');
        $this->_var_session();
    }
    function index($id,$bandera){
    	if($bandera <> 'NO')
    	{
    	$data['Listar'] = $this->consultar_model->listarincidencias();
        $data['main_contenido']= 'incidencia/incidenciaingresado';
        $data['titulo']= 'Medicamentos por incidencia';
        $this->load->view('includes/templateingresado',$data);
    	}else{
    		echo "<script languaje='javascript' type='text/javascript'>window.close();</script>";
    	}
    }
    
function _var_session(){
		$logueado = $this->session->userdata('esta_logueado');
		if( $logueado != TRUE){
			redirect('inicio');	
		}
	}
    
}