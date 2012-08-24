<?php if ( ! defined('BASEPATH')) exit('Acceso denegado!!!');
/*
 * Creado el 27/11/2011
 * Actualizado el 27/11/2011
 * Por: Jesse Javier Cogollo A.
 * nota: 
 */
class usuarioingresadocuenta extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('consultar_model');
        $this->_var_session();
    }
    
    function index(){
    	$idsession = $this->session->userdata('id');
        $data['Listar'] = $this->consultar_model->listarpersona($idsession);
        $data['titulo']= 'Cuenta';
        $data['main_contenido']= 'configuracion_usuario/cuentausuario';
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
