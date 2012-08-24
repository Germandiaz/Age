<?php if ( ! defined('BASEPATH')) exit('Acceso denegado!!!');
/*
 * Creado el 27/11/2011
 * Actualizado el 27/11/2011
 * Por: Jesse Javier Cogollo A.
 */
class usuarioingresado extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('persona_model');
        $this->load->model('consultar_model');
        $this->_var_session();
    }
    function index(){
    	$data['listar']= $this->consultar_model->listarultmovimientos();
        $data['titulo']= 'Usuario Ingresado AGE';
        $data['main_contenido']= 'usuarioingresado';
        $this->load->view('includes/templateingresado',$data);
    }
 /*
 * Este metodo va en todas las clases donde el usuario debe estar logueado para poder visualizarlo.
 * Actualizado el 27/11/2011
 * Por: Jesse Javier Cogollo A.
 */   
function _var_session(){
		$logueado = $this->session->userdata('esta_logueado');
		if( $logueado != TRUE){
			redirect('inicio');	
		}
	}
}
?>
