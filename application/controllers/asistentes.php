<?php if ( ! defined('BASEPATH')) exit('Acceso denegado!!!');
class asistentes extends CI_Controller{

 function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('consultar_model');
        $this->load->model('insertar_model');
        $this->load->model('actualizar_model');
        $this->_var_session();
    }
    function index($dato){
    	$data['Listar'] = $this->consultar_model->asistentes($dato);
    	$data["Listarper"] = $this->consultar_model->Listarper(); 
        $data['main_contenido']= 'Evento/tbpersonasxtbagendas';
        $data['titulo']= 'Eventos (Agregar asistentes)';
        $this->load->view('includes/templatevenemer',$data);
    }  
    function insertarasistente(){
    	$perid = $this->input->post('selectper');
    	$ageid = $this->input->post('hdperid');
    	$this->form_validation->set_rules('selectper','evento','required|max_length[11]|integer');
    	$this->form_validation->set_rules('hdperid','Persona','required|max_length[11]|integer');
        if($this->form_validation->run() != FALSE){ 
        $Tabla = 'tbpersonasxtbagendas';
        $insasis = array (
        		'TBAGENDA_ID' => $ageid,
        		'TBPERSONA_ID' => $perid,
            );
        $insertarasistente = $this->insertar_model->insertar($insasis,$Tabla);
        redirect('asistentes/index/'.$ageid);
        }
        else 
        {
        	echo '<script>
        	alert("Campos obligatorios y/o campos numericos!!!");
        	document.location.href="http://localhost:8080/Age/asistentes/index/'.$ageid.'.html";	
        	</script>';
        	//$this->index();
        }
    }
    
    function actualizarevento($even,$asis){
    	$tabla = 'tbpersonasxtbagendas';   
        $eliminarasistente = $this->actualizar_model->eliminarasis($tabla,$even,$asis);
        redirect('asistentes/index/'.$even);
    }
    
function _var_session(){
		$logueado = $this->session->userdata('esta_logueado');
		if( $logueado != TRUE){
			redirect('inicio');	
		}
	}
}
?>