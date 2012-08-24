<?php if ( ! defined('BASEPATH')) exit('Acceso denegado!!!');
class personaingresado extends CI_Controller{

 function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('consultar_model');
        $this->load->helper('form');
        $this->_var_session(); 
    }
    function _var_session(){
		$logueado = $this->session->userdata('esta_logueado');
		if( $logueado != TRUE){
			redirect('inicio');	
		}
	}
    
    function index(){
    	$data['Listar'] = $this->consultar_model->listarpersonasing();
		$data['main_contenido']= 'persona_ingresado';
        $data['titulo']= 'Persona';
        $this->load->view('includes/templateingresado',$data);
    }
}
?>