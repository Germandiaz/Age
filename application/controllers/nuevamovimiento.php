<?php if ( ! defined('BASEPATH')) exit('Acceso denegado!!!');
class nuevamovimiento extends CI_Controller{

 function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('consultar_model');
        $this->load->model('insertar_model');
        $this->_var_session();
    }
    function index($dato){
    	$Tablatmov = 'TBTIPOMOVIMIENTOS';
    	$data["Listartmov"] = $this->consultar_model->listarDropDowntmov($Tablatmov);
    	$data['Listar'] = $this->consultar_model->listarmovimiento($dato); 
        $data['main_contenido']= 'inventario/nuevamovimiento';
        $data['titulo']= 'Inventario (Agregar productos)';
        $this->load->view('includes/templatevenemer',$data);
    }  
    function insertarprod(){
    	$prodid= $this->input->post('txtprodid');
    	$movid= $this->input->post('selecttmov');
    	$perid= $this->input->post('hdperid');
    	$fechmov= $this->input->post('txtfecmov');
    	$cant= $this->input->post('txtcant');
    	$med= $this->input->post('txtmedida');
    	$this->form_validation->set_rules('txtprodid','Producto','required|max_length[11]|integer');
    	$this->form_validation->set_rules('hdperid','Persona','required|max_length[11]|integer');
    	$this->form_validation->set_rules('txtfecmov','Fecha movimiento','required');
    	$this->form_validation->set_rules('txtcant','Cantidad','required|max_length[11]|integer');
    	$this->form_validation->set_rules('txtmedida','Medida','max_length[11]|integer');
    	$this->form_validation->set_message('required','Campo %s requerido!');
        $this->form_validation->set_message('max_length','Campo %s excede tamaño permitido!');
        $this->form_validation->set_message('integer','Solo valores numericos!');
        if($this->form_validation->run() != FALSE){ 
        $Tabla = 'tbmovimientos';
        $insmov = array (
        		'INVPROD_ID' => $prodid,
        		'TIPOMOV_ID' => $movid,
        		'PERSONA_ID' => $perid,
        		'FECHAMOVIMIENTO' => $fechmov,
        		'CANTIDAD' => $cant,
        		'MEDIDA' => $med,
            );
        $insertarcargo = $this->insertar_model->insertar($insmov,$Tabla);
        redirect('nuevamovimiento/index/'.$perid);
        }
        else 
        {
        	echo '<script>
        	alert("Campos obligatorios y/o campos numericos!!!");
        	document.location.href="http://localhost:8080/Age/nuevamovimiento/index/'.$perid.'.html";	
        	</script>';
        	//$this->index();
        }
    }
    
    function actualizarprodact($dato){//voy aca
    	redirect('nuevamovimientoact/'.$dato);
    	//echo '<script>
        	//document.location.href="http://localhost:8080/Age/nuevamovimientoact/index/'.$dato.'.html";	
        	//</script>';	
    }
    
function _var_session(){
		$logueado = $this->session->userdata('esta_logueado');
		if( $logueado != TRUE){
			redirect('inicio');	
		}
	}
}
?>