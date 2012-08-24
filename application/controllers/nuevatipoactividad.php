<?php if ( ! defined('BASEPATH')) exit('Acceso denegado!!!');
/*
 * Creado el 27/01/2012
 * Actualizado el 27/01/2012
 * Por: Jesse Javier Cogollo A.
 */
class nuevatipoactividad extends CI_Controller{

 	function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('insertar_model');
        $this->load->model('consultar_model');
        $this->_var_session();
    }
    
    function index(){
        $data['Listar'] = $this->consultar_model->listartipoactividad();  
        $data['titulo']= 'Tipo de actividades';     
        $data['main_contenido']= 'configuracion_usuario/nuevatipoactividad';
        $this->load->view('includes/templateingresado',$data);
    }
    
    function _var_session(){
		$logueado = $this->session->userdata('esta_logueado');
		if( $logueado != TRUE){
			redirect('inicio');	
		}
	} 
    function insertartipoact(){
        $nomtipoact= $this->input->post('txtnomtipoact');
        $this->form_validation->set_rules('txtnomtipoact','tipo actividad','required|max_length[30]');
        $this->form_validation->set_message('required','Campo %s requerido!');
        $this->form_validation->set_message('max_length','Campo %s excede tamaño permitido!');
        if($this->form_validation->run() != FALSE){
        $Tabla = 'tbtipoactividades';
        $instipoact = array (
                'NOMBRE' => $nomtipoact,
            );
        $insertartipoact = $this->insertar_model->insertar($instipoact,$Tabla);
        redirect('nuevatipoactividad');
        }
        else 
        {
        	echo '<script>
        	alert("Campos obligatorios y/o campos numericos!!!");
        	document.location.href="http://localhost:8080/Age/nuevatipoactividad";	
        	</script>';
        	//$this->index();
        }
    }
}
 ?>