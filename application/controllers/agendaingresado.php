<?php if ( ! defined('BASEPATH')) exit('Acceso denegado!!!');
class agendaingresado extends CI_Controller{

 function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('consultar_model');
        $this->load->model('insertar_model');
        $this->load->helper('form');
    }
    function index(){
    	$data['Listar'] = $this->consultar_model->listareventos();
        $data['main_contenido']= 'Evento/agendaingresado';
        $data['titulo']= 'Agenda';
        $this->load->view('includes/templateingresado',$data);
    }
    
    function insertarevento(){
    	$idevento = $this->input->post('txtidevento');
    	$tipoact = $this->input->post('txttactevento');
    	$perres = $this->input->post('txtidperreaevento');
    	$fecini = $this->input->post('txtfecini');
    	$fecfin = $this->input->post('txtfecfin');
    	$actdes = $this->input->post('txtactdes');
    	$estact = $this->input->post('txtestact');
    	$nomact = $this->input->post('txtnomact');
    	$this->form_validation->set_rules('txtidevento', 'ID', 'required|max_length[11]');
    	$this->form_validation->set_rules('txttactevento', 'Actividad', 'required|max_length[11]');
    	$this->form_validation->set_rules('txtidperreaevento', 'persona', 'required|max_length[11]');
    	$this->form_validation->set_rules('txtfecini', 'Fecha inicio', 'required|max_length[11]');
    	$this->form_validation->set_rules('txtfecfin', 'Fecha final', 'required|max_length[11]');
    	$this->form_validation->set_rules('txtactdes', 'Descripci&#243;n', 'required|max_length[100]');
    	$this->form_validation->set_rules('txtestact', 'Estado', 'required|max_length[10]');
    	$this->form_validation->set_rules('txtnomact', 'Nombre actividad', 'required|max_length[30]');
    	$this->form_validation->set_message('required','Campo %s requerido!');
        $this->form_validation->set_message('max_length','Campo %s excede tamaño permitido!');
        if($this->form_validation->run() != FALSE){ 
    	$Tabla = ('TBAGENDAS');
    	$insevento = array ('ID' => $idevento,'TBTIPOACTIVIDAD_ID' => $tipoact,'TBPERSONA_ID' => $perres,'FECHAINICIO' => $fecini,
    			'FECHAFIN' => $fecfin,'ACTIVIDAD_DESCRIPCION' => $actdes,'ESTADO_ACTIVIDAD' => $estact,'NOMBRE_ACTIVIDAD' => $nomact
        );
        $insertareEps = $this->insertar_model->insertar($insevento,$Tabla);
    	redirect('agendaingresado');
        }
        else 
        {
        	echo '<script>
        	alert("Campos obligatorios y/o campos numericos!!!");
        	document.location.href="http://localhost:8080/Age/agendaingresado.html";	
        	</script>';
        	//$this->index();
        	//redirect('nuevaeps');
        }
    }
}
?>