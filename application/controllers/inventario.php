<?php if ( ! defined('BASEPATH')) exit('Acceso denegado!!!');
class inventario extends CI_Controller{

 function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('consultar_model');
        $this->_var_session();
    }
    function index(){
    	$data['Listar'] = $this->consultar_model->listarinventario();
        $data['main_contenido']= 'inventario/inventarioingresado';
        $data['titulo']= 'Inventario';
        $this->load->view('includes/templateingresado',$data);
    }
    
function _var_session(){
		$logueado = $this->session->userdata('esta_logueado');
		if( $logueado != TRUE){
			redirect('inicio');	
		}
	}
}
?>