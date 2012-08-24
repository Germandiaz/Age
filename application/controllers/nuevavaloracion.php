<?php if ( ! defined('BASEPATH')) exit('Acceso denegado!!!');
/*
 * Creado el 27/01/2012
 * Actualizado el 27/01/2012
 * Por: Jesse Javier Cogollo A.
 */
class nuevavaloracion extends CI_Controller{

 	function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('insertar_model');
        $this->load->model('consultar_model');
        $this->_var_session();
    }
    
    function index(){
        $data['Listar'] = $this->consultar_model->listartipoval();
        //$data['ListarV'] = $this->consultar_model->listarval();  
        $data['titulo']= 'Valoraciones - Tipo valoraciones';     
        $data['main_contenido']= 'configuracion_usuario/nuevavaloracion';
        $this->load->view('includes/templateingresado',$data);
    }
    
    function _var_session(){
		$logueado = $this->session->userdata('esta_logueado');
		if( $logueado != TRUE){
			redirect('inicio');	
		}
	} 
    function insertartipoval(){
        //$idtipoval = $this->input->post('txtidtipoval');
        $nomtipoval= $this->input->post('txtnomtipoval');
        //$this->form_validation->set_rules('txtidtipoval','tipo valoracion','required|max_length[11]');
        $this->form_validation->set_rules('txtnomtipoval','Valoracion','required|max_length[50]');
        $this->form_validation->set_message('required','Campo %s requerido!');
        $this->form_validation->set_message('max_length','Campo %s excede tamaño permitido!');
        if($this->form_validation->run() != FALSE){ 
        $Tabla = 'tbtipovaloraciones';
        $instipoval = array (
                'ID' => $idtipoval,
                'TIPVALNOMBRE' => $nomtipoval,
            );
        $insertartipoval = $this->insertar_model->insertar($instipoval,$Tabla);
        redirect('nuevavaloracion');
        }
        else 
        {
        	echo '<script>
        	alert("Campos obligatorios y/o campos numericos!!!");
        	document.location.href="http://localhost:8080/Age/nuevavaloracion";	
        	</script>';
        	//$this->index();
        }
    }
}
 ?>