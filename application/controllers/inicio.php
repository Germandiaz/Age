<?php if ( ! defined('BASEPATH')) exit('Acceso denegado!!!');
/*
 * Creado el 24/11/2011
 * Actualizado el 21/08/2012
 * Por: Jesse Javier Cogollo A.
 * nota: Se cambia diseño
 */
class Inicio extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('persona_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }
    /*
 	* en el index se carga el pantallazo inicial.
 	* Actualizado el 24/11/2011
 	* Por: Jesse Javier Cogollo A.
 	*/
    function index(){
    	$data['titulo']= 'Inicio';
        $data['contenido']= 'inicio';
        $this->load->view('includes/template',$data);
    }

    /*
 	* en el loguin se carga el pantallazo cuando esta logueado.
 	* Actualizado el 24/11/2011
 	* Por: Jesse Javier Cogollo A.
 	*/
    function loguin(){
		redirect('usuarioingresado');
    }
    /*
 	* en el verificar_acceso se valida si el ususario existe para darle acceso a aplicativo.
 	* Actualizado el 27/11/2011
 	* Por: Jesse Javier Cogollo A.
 	*/                
    function verificar_acceso(){
    	$usuario = $this->input->post('txtusuario');
        $contrasena = $this->input->post('txtcontrasena');
        $this->form_validation->set_rules('txtusuario','Usuario','required');
        $this->form_validation->set_rules('txtcontrasena','Contrasena','required|max_length[15]');
        $this->form_validation->set_message('required','Campo %s requerido!');
        if($this->form_validation->run() != FALSE){ 	
           	$log = $this->persona_model->verif_ingreso($usuario,$contrasena);
		   	if($log){
		   		$dat = array(
					'esta_logueado'		=>	TRUE,
					'id'		=>	$log[0]->ID,
					'usuario'	=>	$log[0]->USUARIO,
					'nombre'	=>	$log[0]->PNOMBRE,
					'apellido'	=>	$log[0]->PAPELLIDO,
					'usuario'	=>	$log[0]->SUBCARGO_ID						
				);
				$this->session->set_userdata($dat);
        		$this->loguin();
			}else{
				$this->index();	
			}
        }else{
           	$this->index();
    	}
    }
    
    function _validar_nombreusuario($nombre){
        return $this->persona_model->validar_nombreusuario($nombre);
    }
    
    function salir(){
		$this->session->sess_destroy();
		redirect('inicio');
	}
}
?>
