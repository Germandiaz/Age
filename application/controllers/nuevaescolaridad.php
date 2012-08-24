<?php if ( ! defined('BASEPATH')) exit('Acceso denegado!!!');
/*
 * Creado el 27/01/2012
 * Actualizado el 27/01/2012
 * Por: Jesse Javier Cogollo A.
 */
class nuevaescolaridad extends CI_Controller{

 	function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('insertar_model');
        $this->load->model('consultar_model');
        $this->_var_session();
    }
    
    function index(){
        $data['Listar'] = $this->consultar_model->listarescolaridad(); 
        $data['titulo']= 'Escolaridad';     
        $data['main_contenido']= 'configuracion_usuario/nuevaescolaridad';
        $this->load->view('includes/templateingresado',$data);
    }
    
    function _var_session(){
		$logueado = $this->session->userdata('esta_logueado');
		if( $logueado != TRUE){
			redirect('inicio');	
		}
	} 
    function insertarescolaridad(){
        $nomesc= $this->input->post('txtnomesc');
        $this->form_validation->set_rules('txtnomesc','Escolaridad','required|max_length[45]');
        $this->form_validation->set_message('required','Campo %s requerido!');
        $this->form_validation->set_message('max_length','Campo %s excede tamaño permitido!');
        if($this->form_validation->run() != FALSE){ 
        $Tabla = 'tbescolaridades';
        $insesc = array (
                'NOMBRE' => $nomesc,
            );
        $insertarfund = $this->insertar_model->insertar($insesc,$Tabla);
        redirect('nuevaescolaridad');
        }
        else 
        {
        	echo '<script>
        	alert("Campos obligatorios !!!");
        	document.location.href="http://localhost:8080/Age/nuevaescolaridad";	
        	</script>';
        	//$this->index();
        }
    }
}
 ?>