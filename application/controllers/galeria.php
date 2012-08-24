<?php if ( ! defined('BASEPATH')) exit('Acceso denegado!!!');
/*
 * Creado el 27/11/2011
 * Actualizado el 27/11/2011
 * Por: Jesse Javier Cogollo A.
 * nota: 
 */
class galeria extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('persona_model');
        $this->load->library('form_validation');
        $this->load->helper('form');
    }
    /*
 	* en el index se carga el pantallazo inicial.
 	* Actualizado el 24/11/2011
 	* Por: Jesse Javier Cogollo A.
 	*/
    function index(){
    	$data['titulo']= 'Galerìa de Imagenes';
        $data['contenido']= 'galeria';
        $this->load->view('includes/template',$data);
    }
}
?>