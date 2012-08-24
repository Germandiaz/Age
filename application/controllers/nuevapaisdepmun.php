<?php if ( ! defined('BASEPATH')) exit('Acceso denegado!!!');
/*
 * Creado el 27/01/2012
 * Actualizado el 27/01/2012
 * Por: Jesse Javier Cogollo A.
 */
class nuevapaisdepmun extends CI_Controller{

 	function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('insertar_model');
        $this->load->model('consultar_model');
        $this->_var_session();
    }
    
    function index(){
        $data['Listar'] = $this->consultar_model->listarpais();
        //$data['ListarD'] = $this->consultar_model->listardep();
        //$data['ListarM'] = $this->consultar_model->listarmun();   
        $data['titulo']= 'Pais - Departamento - Municipio';     
        $data['main_contenido']= 'configuracion_usuario/nuevapaisdepmun';
        $this->load->view('includes/templateingresado',$data);
    }
    
    function _var_session(){
		$logueado = $this->session->userdata('esta_logueado');
		if( $logueado != TRUE){
			redirect('inicio');	
		}
	} 
    function insertarpaisdepmun(){
        $indpais= $this->input->post('txtindicativopais');
        $nompais = $this->input->post('txtnombrepais');
        $this->form_validation->set_rules('txtindicativopais','Indicativo','max_length[3]');
        $this->form_validation->set_rules('txtnombrepais','Nombre','required|max_length[30]');
        $this->form_validation->set_message('required','Campo %s requerido!');
        $this->form_validation->set_message('max_length','Campo %s excede tamaño permitido!');
        if($this->form_validation->run() != FALSE){ 
        $Tabla = 'tbpaises';
        $inspais = array (
                'INDICATIVO' => $indpais,
                'TBPAISESNOMBRE' => $nompais,
            );
        $insertareEps = $this->insertar_model->insertar($inspais,$Tabla);
        redirect('nuevapaisdepmun');
        }
        else 
        {
        	echo '<script>
        	alert("Campos obligatorios y/o campos numericos!!!");
        	document.location.href="http://localhost:8080/Age/nuevapaisdepmun.html";	
        	</script>';
        	//$this->index();
        }
    }
}
 ?>