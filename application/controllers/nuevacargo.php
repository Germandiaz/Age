<?php if ( ! defined('BASEPATH')) exit('Acceso denegado!!!');
/*
 * Creado el 27/01/2012
 * Actualizado el 27/01/2012
 * Por: Jesse Javier Cogollo A.
 */
class nuevacargo extends CI_Controller{

 	function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('insertar_model');
        $this->load->model('consultar_model');
        $this->_var_session();
    }
    
    function index(){
        $data['Listar'] = $this->consultar_model->listarcargos();  
        $data['titulo']= 'Cargos - Subcargos';     
        $data['main_contenido']= 'configuracion_usuario/nuevacargo';
        $this->load->view('includes/templateingresado',$data);
    }
    
    function _var_session(){
		$logueado = $this->session->userdata('esta_logueado');
		if( $logueado != TRUE){
			redirect('inicio');	
		}
	} 
    function insertarcargo(){
        $nomcargo= $this->input->post('txtnomcargo');
        $this->form_validation->set_rules('txtnomcargo','Cargo','max_length[30]|required');
    	$this->form_validation->set_message('required','Campo %s requerido!');
    	if($this->form_validation->run() != FALSE){ 
        $Tabla = 'tbcargos';
        $inscargos = array (
                'NOMBRE' => $nomcargo,
            );
        $insertarcargo = $this->insertar_model->insertar($inscargos,$Tabla);
        redirect('nuevacargo');
    	}
        else 
        {
        	echo '<script>
        	alert("Campos obligatorios y/o campos numericos!!!");
        	document.location.href="http://localhost:8080/Age/nuevacargo.html";	
        	</script>';
        	//$this->index();
        }
    }
}
 ?>