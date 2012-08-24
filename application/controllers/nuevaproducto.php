<?php if ( ! defined('BASEPATH')) exit('Acceso denegado!!!');
/*
 * Creado el 27/01/2012
 * Actualizado el 27/01/2012
 * Por: Jesse Javier Cogollo A.
 */
class nuevaproducto extends CI_Controller{

 	function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('insertar_model');
        $this->load->model('consultar_model');
        $this->_var_session();
    }
    
    function index(){
        $data['Listar'] = $this->consultar_model->listarproducto(); 
        $data['titulo']= 'Productos';     
        $data['main_contenido']= 'configuracion_usuario/nuevaproducto';
        $this->load->view('includes/templateingresado',$data);
    }
    
    function _var_session(){
		$logueado = $this->session->userdata('esta_logueado');
		if( $logueado != TRUE){
			redirect('inicio');	
		}
	} 
    function insertarproducto(){
        $nomprod= $this->input->post('txtnomprod');
        $preprod= $this->input->post('txtpreprod');
        $this->form_validation->set_rules('txtnomprod','Nombre producto','required|max_length[50]');
        $this->form_validation->set_rules('txtpreprod','Presentacion','max_length[50]');
        $this->form_validation->set_message('required','Campo %s requerido!');
        $this->form_validation->set_message('max_length','Campo %s excede tamaño permitido!');
        if($this->form_validation->run() != FALSE){ 
        $Tabla = 'tbproductos';
        $insprod = array (
                'NOMBRE' => $nomprod,
        		'PRESENTACION' => $preprod,
            );
        $insertarfund = $this->insertar_model->insertar($insprod,$Tabla);
        redirect('nuevaproducto');
        }
        else 
        {
        	echo '<script>
        	alert("Campos obligatorios y/o campos numericos!!!");
        	document.location.href="http://localhost:8080/Age/nuevaproducto";	
        	</script>';
        	//$this->index();
        }
    }
}
 ?>