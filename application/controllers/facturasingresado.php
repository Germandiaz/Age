<?php if ( ! defined('BASEPATH')) exit('Acceso denegado!!!');
class facturasingresado extends CI_Controller{

 function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('consultar_model');
        $this->load->helper('form');
    }
    function index(){
    	$data['Listar'] = $this->consultar_model->listarfactura();
        $data['main_contenido']= 'factura/facturasingresado';
        $data['titulo']= 'Factura';
        $this->load->view('includes/templateingresado',$data);
    }
}
?>