<?php if ( ! defined('BASEPATH')) exit('Acceso denegado!!!');
/*
 * Creado el 27/11/2011
 * Actualizado el 27/11/2011
 * Por: Jesse Javier Cogollo A.
 * nota: 
 */
class editarcuenta extends CI_Controller{

 function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('consultar_model');
        $this->load->model('actualizar_model');
        $this->_var_session();
    }
    function index(){
    	$idsession = $this->session->userdata('id');
        $data['Listar'] = $this->consultar_model->listarpersona($idsession);
        $data['titulo']= 'Cuenta';
        $data['main_contenido']= 'configuracion_usuario/editarcuenta';
        $this->load->view('includes/templateingresado',$data);
    }
    
    function _var_session(){
		$logueado = $this->session->userdata('esta_logueado');
		if( $logueado != TRUE){
			redirect('inicio');
		}
	}
	
	function actper(){
		//$pnombre ? this->input->post('txtnombre');
		$paisres = $this->input->post('txtmunres');
		$depres = $this->input->post('txtmunres');
		$munres = $this->input->post('txtmunres');
		$estcivil = $this->input->post('txtestcivil');
		$dirres = $this->input->post('txtdirres');
		$telres = $this->input->post('txttelres');
		$celular = $this->input->post('txtcelular');
		$foto = $this->input->post('txtfoto');
		$numhij = $this->input->post('txtnumhij');
		
		$datos = array(
			//'PNOMBRE'	=>	$paisres,
			//'DEP_ID'	=>	$depres,
			//'MUNICIPIO_ID'	=>	$munres,
			//'ESTCIVIL_ID'	=>	$estcivil,
			'DIRECCIONRES'	=>	$dirres,
			'TELEFONORES'	=>	$telres,
			'CELULAR'	=>	$celular,
			'FOTO'	=>	$foto,
			'NUMHIJOS'	=>	$numhij
		);
		$condicion = $this->session->userdata('id');
		$actualizarper = $this->actualizar_model->actualizarusu($datos,$condicion);
        redirect('usuarioingresadocuenta');
	}
}
?>