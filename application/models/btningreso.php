<?php if ( ! defined('BASEPATH')) exit('Acceso denegado!!!');
/*
 * Creado el 24/11/2011
 * Actualizado el 27/11/2011
 * Por: Jesse Javier Cogollo A.
 * nota: 
 */
class btningreso extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('persona_model');
        $this->load->library('form_validation');
        $this->load->helper('form');
    }
    /*
 	* en el index se carga el pantallazo inicial.
 	* Actualizado el 24/11/2011
 	* Por: Jesse Javier Cogollo A.
 	*/
    function index(){
    	redirect('inicio');
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
        $this->form_validation->set_rules('txtusuario','Usuario','trim|required|callback__validar_nombreusuario');
        $this->form_validation->set_rules('txtcontrasena','Contrasena','trim|required');
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
				echo '<script>
				alert("',$usuario,',Contraseña incorrecta!!!");
				document.location.href="http://localhost:8080/Age";
				</script>';
				//$this->index();	
			}
        }else{
        	echo '<script>
        	alert("Campos obligatorios y/o usuario incorrecto!!!");
        	document.location.href="http://localhost:8080/Age";	
        	</script>';
           	//$this->index();
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