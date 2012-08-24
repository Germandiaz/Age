<?php if ( ! defined('BASEPATH')) exit('Acceso denegado!!!');
class nuevaagendapersona extends CI_Controller{

 function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('consultar_model');
        $this->_var_session();
    }
    function index(){
    	$data['Listar'] = $this->consultar_model->listarasistentes(); 
        $data['main_contenido']= 'evento/tbpersonasxtbagendas';
        $data['titulo']= 'Evento (Agregar asistentes)';
        $this->load->view('includes/templatevenemer',$data);
    }
    
    function insertarasistente(){
    	
    }
    
function _var_session(){
		$logueado = $this->session->userdata('esta_logueado');
		if( $logueado != TRUE){
			redirect('inicio');	
		}
	}
}
?>