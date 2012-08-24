<?php if ( ! defined('BASEPATH')) exit('Acceso denegado!!!');
class nuevamovimientoact extends CI_Controller{

 function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('consultar_model');
        $this->load->model('actualizar_model');
        $this->_var_session();
    }
    function index($dato){
    	$data['Listarprod'] = $this->consultar_model->listarproductoact($dato); 
        $data['main_contenido']= 'inventario/nuevamovimientoact';
        $data['titulo']= 'Inventario (Actualizar productos)';
        $this->load->view('includes/templatevenemer',$data);
    }
    
function _var_session(){
		$logueado = $this->session->userdata('esta_logueado');
		if( $logueado != TRUE){
			redirect('inicio');	
		}
	}
}