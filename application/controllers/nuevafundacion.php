<?php if ( ! defined('BASEPATH')) exit('Acceso denegado!!!');
/*
 * Creado el 27/01/2012
 * Actualizado el 27/01/2012
 * Por: Jesse Javier Cogollo A.
 */
class nuevafundacion extends CI_Controller{

 	function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('insertar_model');
        $this->load->model('consultar_model');
        $this->_var_session();
    }
    
    function index(){
        $data['Listar'] = $this->consultar_model->listarfundacion(); 
        $data['titulo']= 'Fundaciones (Sedes)';     
        $data['main_contenido']= 'configuracion_usuario/nuevafundacion';
        $this->load->view('includes/templateingresado',$data);
    }
    
    function _var_session(){
		$logueado = $this->session->userdata('esta_logueado');
		if( $logueado != TRUE){
			redirect('inicio');	
		}
	} 
    function insertarfund(){
        $nomfund= $this->input->post('txtnomfund');
        $this->form_validation->set_rules('txtnomfund','Fundacion(Sede)','required|max_length[50]');
        $this->form_validation->set_message('required','Campo %s requerido!');
        if($this->form_validation->run() != FALSE){
        $Tabla = 'tbsesion_fundaciones';
        $insfund = array (
                'TBSESION_FUNDACIONESNOMBRE' => $nomfund,
            );
        $insertarfund = $this->insertar_model->insertar($insfund,$Tabla);
        redirect('nuevafundacion');
        }
        else 
        {
        	echo '<script>
        	alert("Campo obligatorio!!!");
        	document.location.href="http://localhost:8080/Age/nuevafundacion.html";	
        	</script>';
        	//$this->index();
        }
    }
}
 ?>