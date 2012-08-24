<?php if ( ! defined('BASEPATH')) exit('Acceso denegado!!!');
/*
 * Creado el 27/01/2012
 * Actualizado el 27/01/2012
 * Por: Jesse Javier Cogollo A.
 */
class nuevadocumento extends CI_Controller{

 	function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('insertar_model');
        $this->load->model('consultar_model');
        $this->_var_session();
    }
    
    function index(){
        $data['Listar'] = $this->consultar_model->listardocumento(); 
        $data['titulo']= 'Documentos';     
        $data['main_contenido']= 'configuracion_usuario/nuevadocumento';
        $this->load->view('includes/templateingresado',$data);
    }
    
    function _var_session(){
		$logueado = $this->session->userdata('esta_logueado');
		if( $logueado != TRUE){
			redirect('inicio');	
		}
	} 
    function insertardocumento(){
        $nomdoc= $this->input->post('txtnomdoc');
        $this->form_validation->set_rules('txtnomdoc','Documento','max_length[30]|required');
    	$this->form_validation->set_message('required','Campo %s requerido!');
    	if($this->form_validation->run() != FALSE){
        $Tabla = 'tbtipodocumentos';
        $insdoc = array (
                'TBTIPODOCUMENTOSNOMBRE' => $nomdoc,
            );
        $insertarfund = $this->insertar_model->insertar($insdoc,$Tabla);
        redirect('nuevadocumento');
    	}
        else 
        {
        	echo '<script>
        	alert("Campos obligatorios y/o campos numericos!!!");
        	document.location.href="http://localhost:8080/Age/nuevadocumento.html";	
        	</script>';
        	//$this->index();
        }
    }
}
 ?>