<?php if ( ! defined('BASEPATH')) exit('Acceso denegado!!!');
/*
 * Creado el 27/11/2011
 * Actualizado el 27/11/2011
 * Por: Jesse Javier Cogollo A.
 */
class contactenosingresado extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->_var_session();
    }
    function index(){
        $data['titulo']= 'Contactenos';
        $data['main_contenido']= 'contactenosingresado';
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