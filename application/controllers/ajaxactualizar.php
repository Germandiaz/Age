<?php if ( ! defined('BASEPATH')) exit('Acceso denegado!!!');

class ajaxactualizar extends CI_Controller{

 	function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('insertar_model');
        $this->load->model('consultar_model');
        $this->load->model('actualizar_model');
        $this->_var_session();
    }
    
    function index(){
        $tabla = $this->input->post('tabla');
    }
}
?>
