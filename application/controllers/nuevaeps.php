<?php if ( ! defined('BASEPATH')) exit('Acceso denegado!!!');
/*
 * Creado el 27/11/2011
 * Actualizado el 27/11/2011
 * Por: Jesse Javier Cogollo A.
 */
class nuevaeps extends CI_Controller{

 	function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        $this->load->model('insertar_model');
        $this->load->model('consultar_model');
        $this->load->model('actualizar_model');
        $this->_var_session();
    }
    
    function index(){
        $data['Listar'] = $this->consultar_model->listareps();   
        $data['titulo']= 'Nueva Eps';     
        $data['main_contenido']= 'configuracion_usuario/nuevaeps';
        $this->load->view('includes/templateingresado',$data);
    }
    
    function _var_session(){
		$logueado = $this->session->userdata('esta_logueado');
		if( $logueado != TRUE){
			redirect('inicio');	
		}
	} 
    function insertareps(){
        $nomEps = $this->input->post('txtnombreEps');
        $tele = $this->input->post('txttelefonoEps');
        $direcc = $this->input->post('txtdireccionEps');
        $tipoSeg = $this->input->post('txttiposeguridadEps');
        $this->form_validation->set_rules('txtnombreEps','nombre EPS','required|max_length[50]');
        $this->form_validation->set_rules('txttelefonoEps','telefono','required|max_length[15]');
        $this->form_validation->set_rules('txtdireccionEps','direcci&#243;n','required|max_length[20]');
        $this->form_validation->set_rules('txttiposeguridadEps','tipo seguridad','required|max_length[15]');
        $this->form_validation->set_message('required','Campo %s requerido!');
        $this->form_validation->set_message('max_length','Campo %s excede tamaño permitido!');
        if($this->form_validation->run() != FALSE){ 
        $Tabla = 'tbeps';
        $insEps = array (
                'TBEPSNOMBRE' => $nomEps,
                'TELEFONO' => $tele,
                'DIRECCION' => $direcc,
                'TIPOSEGURIDADSOCIAL' => $tipoSeg,
            );
        $insertareEps = $this->insertar_model->insertar($insEps,$Tabla);
        redirect('nuevaeps');
        }
        else 
        {
        	echo '<script>
        	alert("Campos obligatorios y/o campos numericos!!!");
        	document.location.href="http://localhost:8080/Age/nuevaeps";	
        	</script>';
        	//$this->index();
        	//redirect('nuevaeps');
        }
    }
    
    function actualizareps($datos) {
    	$actnom = $datos[1];
    	$acttel = $datos[2];
    	$actdir = $datos[3];
    	$acttseg = $datos[4];
    	$condicion = $datos[0];
    	$acteps = array(
    			'NOMBRE' => $actnom,
                'TELEFONO' => $acttel,
                'DIRECCION' => $actdir,
                'TIPOSEGURIDADSOCIAL' => $acttseg,
    	);
    	$actualizaeeps = $this->actualizar_model->actualizareps($acteps,$condicion);
    }

    function listardropeps(){
        $Tabla = 'tbeps';
        $data["Listar"] = $this->consultar_model->listardropdown($Tabla);
        $data['titulo']= 'Nueva Eps';
        $data['main_contenido']= 'configuracion_usuario/nuevaeps';
        $this->load->view('includes/templateingresado',$data); 
    }
}
 ?>