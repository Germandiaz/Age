<?php if ( ! defined('BASEPATH')) exit('Acceso denegado!!!');
/*
 * Creado el 24/11/2011
 * Actualizado el 24/11/2011
 * Por: Jesse Javier Cogollo A.
 * Nota: Se estandarizo las tabulaciones y el orden de las clases.
 */
class vision extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
    }
    function index(){
       $data['contenido']= 'vision';
        $data['titulo']= 'Visi&#243;n';
        $this->load->view('includes/template',$data);
    }
}
?>
