<?php if ( ! defined('BASEPATH')) exit('Acceso denegado!!!');
class incidenciaingresado extends CI_Controller{

 function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('consultar_model');
        $this->load->model('insertar_model');
        $this->load->helper('form');
        $this->_var_session();
    }
    function index(){
    	$data['Listar'] = $this->consultar_model->listarincidencias();
        $data['main_contenido']= 'incidencia/incidenciaingresado';
        $data['titulo']= 'Incidencia';
        $this->load->view('includes/templateingresado',$data);
    } 
    
function _var_session(){
		$logueado = $this->session->userdata('esta_logueado');
		if( $logueado != TRUE){
			redirect('inicio');	
		}
	}

    function insertarincidencia(){
    	$perid = $this->input->post('txtperid');
    	$fecinc = $this->input->post('txtfecinc');
    	$med = $this->input->post('txtmed');
    	$obs = $this->input->post('txtdiainc');
    	$resid = $this->input->post('txtresid');
    	$this->form_validation->set_rules('txtperid','Persona','required|max_length[11]|integer');
    	$this->form_validation->set_rules('txtfecinc','Fecha incidencia','required');
    	$this->form_validation->set_rules('txtmed','Medicamentos','required|max_length[2]');
    	$this->form_validation->set_rules('txtdiainc','Diagnostico','required|max_length[50]');
    	$this->form_validation->set_rules('txtresid','Responsable','required|max_length[11]|integer');
    	$this->form_validation->set_message('required','Campo %s requerido!');
        $this->form_validation->set_message('max_length','Campo %s excede tamaño permitido!');
        if($this->form_validation->run() != FALSE){ 
    	$tabla = ('TBINCIDENCIAS');
    	$insertarinc = array(
    		'TBPERSONA_ID'=>$perid,
	    	'FECHAINCIDENCIA'=>$fecinc,
    		'MEDICAMENTOS'=>$med,
    		'DIAGNOSTICO'=>$obs,
    		'RESPONSABLE'=>$resid,
    	);
    	$insertaincidencia = $this->insertar_model->insertar($insertarinc,$tabla);
    	redirect('incidenciaingresado');
        }
        else 
        {
        	echo '<script>
        	alert("Campos obligatorios y/o campos numericos!!!");
        	document.location.href="http://localhost:8080/Age/incidenciaingresado.html";	
        	</script>';
        	//$this->index();
        }
    }
}
?>