<?php if ( ! defined('BASEPATH')) exit('Acceso denegado!!!');
/*
 * Creado el 27/11/2011
 * Actualizado el 27/11/2011
 * Por: Jesse Javier Cogollo A.
 */
class nuevahabitacion extends CI_Controller{    
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('insertar_model');
        $this->load->model('consultar_model');
        $this->_var_session();
    }
    function index(){
        $data['Listar'] = $this->consultar_model->listarhab();
        $data['main_contenido']= 'configuracion_usuario/nuevahabitacion';
        $data['titulo']= 'Nueva Habitacion';
        $this->load->view('includes/templateingresado',$data);
    }
    
    function _var_session(){
		$logueado = $this->session->userdata('esta_logueado');
		if( $logueado != TRUE){
			redirect('inicio');	
		}
	}
	
    function inserthab(){
        $coHab = $this->input->post('txtcodigoHabitacion');
        $capac = $this->input->post('txtcapacidadHabitacion');
        $descrip = $this->input->post('txtdescripciontxtcapacidadHabitacion');
        $this->form_validation->set_rules('txtcodigoHabitacion','Codigo','required|max_length[5]');
        $this->form_validation->set_rules('txtcapacidadHabitacion','Capacidad','required|max_length[2]');
        $this->form_validation->set_rules('txtdescripciontxtcapacidadHabitacion','descripcion','required|max_length[50]');
        $this->form_validation->set_message('required','Campo %s requerido!');
        $this->form_validation->set_message('max_length','Campo %s excede tamaño permitido!');
        if($this->form_validation->run() != FALSE){ 
        $Tabla ='tbhabitaciones';
        $insHabi = array (
                'CODIGO' => $coHab,
                'CAPACIDAD' => $capac,
                'DESCRIPCION' => $descrip,
            );
        $insertarHab = $this->insertar_model->insertar($insHabi,$Tabla);
        redirect('nuevahabitacion');
        }
        else 
        {
        	echo '<script>
        	alert("Campos obligatorios y/o campos numericos!!!");
        	document.location.href="http://localhost:8080/Age/nuevahabitacion";	
        	</script>';
        	//$this->index();
        }
    }
}
?>