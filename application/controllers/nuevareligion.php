<?php if ( ! defined('BASEPATH')) exit('Acceso denegado!!!');
/*
 * Creado el 27/11/2011
 * Actualizado el 27/11/2011
 * Por: Jesse Javier Cogollo A.
 */
class nuevareligion extends CI_Controller{    
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('insertar_model');
        $this->load->model('consultar_model');
        $this->_var_session();
    }
    function index(){
        $data["Listar"] = $this->consultar_model->listarrel();
        $data['main_contenido']= 'configuracion_usuario/nuevaReligion';
        $data['titulo']= 'Nueva Religion';
        $this->load->view('includes/templateIngresado',$data);
    }
    
    function _var_session(){
		$logueado = $this->session->userdata('esta_logueado');
		if( $logueado != TRUE){
			redirect('inicio');	
		}
	}
	
    function insertarel(){
            $nombre = $this->input->post('txtnombreReligion');
            $this->form_validation->set_rules('txtnombreReligion','Religion','required|max_length[25]');
        	$this->form_validation->set_message('required','Campo %s requerido!');
        	$this->form_validation->set_message('max_length','Campo %s excede tamaño permitido!');
        	if($this->form_validation->run() != FALSE){ 
            $Tabla = 'tbreligiones';
            $insRelig = array (
                'TBRELIGIONESNOMBRE' => $nombre,
            );
            $insertarRe = $this->insertar_model->insertar($insRelig,$Tabla);
			redirect('nuevareligion');
        	}
        else 
        {
        	echo '<script>
        	alert("Campos obligatorios y/o campos numericos!!!");
        	document.location.href="http://localhost:8080/Age/nuevareligion";	
        	</script>';
        	//$this->index();
        }
    }
    
    
    
}
?>