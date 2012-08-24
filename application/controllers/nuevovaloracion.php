<?php if ( ! defined('BASEPATH')) exit('Acceso denegado!!!');
/*
 * Creado el 27/11/2011
 * Actualizado el 27/11/2011
 * Por: Jesse Javier Cogollo A.
 */
class nuevovaloracion extends CI_Controller{

 function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('insertar_model');
        $this->load->model('consultar_model');
        $this->_var_session();
    }
    function index(){
    	$data['Listar'] = $this->consultar_model->listarvalsubval();
    	$data['titulo']= 'Nueva Valoracion';
        $data['main_contenido']= 'configuracion_usuario/nuevovaloracion';
        $this->load->view('includes/templateingresado',$data);
    }
    
    function _var_session(){
		$logueado = $this->session->userdata('esta_logueado');
		if( $logueado != TRUE){
			redirect('inicio');	
		}
	}
	
    function insertarval(){
            $Tvalo = $this->input->post('txtTipoValoracion');
            $SValo = $this->input->post('txtSubtipoValoracion');
            $NValo = $this->input->post('txtNombreValoracion');     
            $Tabla = 'tbvaloraciones';
        	$insval = array (
                'Valoracion' => $Tvalo,
                'TipoValoracion' => $SValo,
                'NombreValoracion' => $NValo,
            );
        $insertareVal = $this->insertar_model->insertar($insval,$Tabla);
        redirect('nuevovaloracion');
    }
}
?>