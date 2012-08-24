<?php if ( ! defined('BASEPATH')) exit('Acceso denegado!!!');

class buscarempleado extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('consultar_model');
        $this->load->model('persona_model');
      //  $this->_var_session();
    }
    function index(){
        $data['titulo']= 'Buscar Empleado';
        $data['listpersona']=$this->consultar_model->listarperso();
        $data['main_contenido']= 'persona/buscarempleado';
        $this->load->view('includes/templateingresado',$data);
    }
    
    function _var_session(){
		$logueado = $this->session->userdata('esta_logueado');
		if( $logueado != TRUE){
			redirect('inicio');	
		}
	}

     function verpersona($id){
        $data['titulo']= 'Consulta Persona';     
        $data['main_contenido']= 'persona/editarempleado';
        $data["listarestciv"] = $this->consultar_model->listarDropDownestadociv('TBESTADOSCIVILES');
        $data['listarpaises']= $this->consultar_model->listarDropDown('TBPAISES');
        $data["listardeparta"] = $this->consultar_model->listarDropDowndeparta('TBDEPARTAMENTOS');
        $data["listarmunic"] = $this->consultar_model->listarDropDownmunicipio('TBMUNICIPIOS');
        $data['resultadoconsul']=$this->persona_model->listarpersona($id);
        $this->load->view('includes/templateingresado',$data);
        
    }
    function actualizarempleado(){
        $id= $this->input->post('txtidpersona');
        $direccion= $this->input->post('txtdirres');
        $telefo= $this->input->post('txttelres');
        $celu= $this->input->post('txtcelular');
        $numhijos= $this->input->post('txtnumhij');
        $foto = $this->input->post('txtfoto');
        $data['actualizarpersona']=$this->persona_model->actualizarpers($id, $direccion, $telefo, $celu,$foto, $numhijos);
        redirect('buscarempleado');
    /*    $data['titulo']= 'Editar Empleado';
        $data['main_contenido']= 'per/editarempleado';
        $this->load->view('includes/templateingresado',$data);*/
    }
    
}
   
?>
