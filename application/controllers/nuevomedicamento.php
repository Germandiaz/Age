<?php if ( ! defined('BASEPATH')) exit('Acceso denegado!!!');
/*
 * Creado el 27/11/2011
 * Actualizado el 27/11/2011
 * Por: Jesse Javier Cogollo A.
 */
class nuevomedicamento extends CI_Controller{

 function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('inventario_model');
        $this->_var_session();
    }
    function index(){
        $data['main_contenido']= 'configuracion_usuario/nuevomedicamento';
        $data['titulo']= 'Nuevo Medicamento';
        $this->load->view('includes/templateIngresado',$data);
    }
    
    function ingresarmed(){
            $NoMedica= $this->input->post('txtNombreMedicamento');
            $PresMedica= $this->input->post('txtPresentacionMedicamento');
            $insertarVa = $this->Inventario_Model->insertarMedi($NoMedica,$PresMedica);
    }
    
    function _var_session(){
		$logueado = $this->session->userdata('esta_logueado');
		if( $logueado != TRUE){
			redirect('inicio');	
		}
	}
}
?>