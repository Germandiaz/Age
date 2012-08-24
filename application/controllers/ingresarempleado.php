<?php
class ingresarempleado extends CI_Controller{
 /*
 * creado: German Díaz
 * fecha creado: 20- Nov-2011
 * ultima Actualiza: 04-Dic-2011
*/
  //  var $cargo="";
      var $nombre;
  //  var $celular="";
 function __construct() {
        parent::__construct();
        $this->load->model('consultar_model');
        $this->load->model('persona_model');
        $this->load->model('insertar_model');
        $this->load->library('form_validation');
        $this->load->helper('form');
     //   $this->load->helper('date');
        //validar que inicie sesion y evitar que pueda abrir una interfaz directamente
        $this->_var_session();  
    }
    
   /* function setcargo($cargo){
        $this->cargo = $cargo;
    }
    function getcardo() {
        return $this->cargo;
    } */
    function setdireccion($nombre){
       $this->nombre = $nombre;
    }
    function getdireccion() {
        return $this->nombre;
    }
 /*   function setcelular($celular){
        $this->celular = $celular;
    }
    function getcedula() {
        return $this->cedula;
    } */
    function _var_session(){
		$logueado = $this->session->userdata('esta_logueado');
		if( $logueado != TRUE){
			redirect('inicio');	
		}
	}
    function index(){
     //  redirect('ingresarempleado/inicio');
       $Tabla = 'TBESTADOSCIVILES';
        $Tabla2 = 'TBTIPODOCUMENTOS';
        $Tabla3 = 'TBSEXOS';
        $Tabla4 = 'TBSUBCARGOS';
        $Tabla5 = 'TBPAISES';
        $Tabla6 = 'TBDEPARTAMENTOS';
        $Tabla7 = 'TBMUNICIPIOS';
        $Tabla8 = 'TBRELIGIONES';
        $data['ListarEstCiv'] = $this->consultar_model->listarDropDownestcivil($Tabla);
        $data['ListarTipoDoc'] = $this->consultar_model->listarDropDowntipodoc($Tabla2);
        $data['ListarSexo'] = $this->consultar_model->listarDropDownsexo($Tabla3);
        $data['ListarCarg'] = $this->consultar_model->listardropdownsubcargo($Tabla4);
        $data['ListarPaise'] = $this->consultar_model->listarDropDownpais($Tabla5);
        $data['Listardeparta'] = $this->consultar_model->listarDropDowndep($Tabla6);
        $data['Listarmunic'] = $this->consultar_model->listarDropDownmun($Tabla7);
        $data['Listarreligio'] = $this->consultar_model->listarDropDownrel($Tabla8);     
       /* $fechaform = "%m/%d/%Y";
        $time = time('America/New_York for -5.0/no DST');
        $fech = mdate($fechaform, $time);
        $data['fecha'] = $fech;*/

        $data['titulo']= 'Ingresar Empleado';
        $data['main_contenido']= 'persona/ingresarempleado';
        $this->load->view('includes/templateingresado',$data); 
    }

   function ingresaemple(){
       $this->form_validation->set_rules('txtprimernombreEmpleado', 'Primer nombre', 'trim|required');
       $this->form_validation->set_rules('textprimerapellidoEmpleado', 'Primer apellido', 'trim|required'); 
       $this->form_validation->set_rules('txtfechaingresoempleado', 'Apellido', 'trim|required');
       $this->form_validation->set_rules('txtfechanacimientoEmpleado', 'Apellido', 'trim|required');
       $this->form_validation->set_rules('txtnumerodocumentoEmpleado', 'Apellido', 'trim|required');
       $this->form_validation->set_rules('txtdireccionresidenciaEmpleado', 'Apellido', 'trim|required');
       $this->form_validation->set_message('required', 'El campo %s es requerido'); 
       if ($this->form_validation->run() == FALSE){
           $this->index();
           }else{
       $objempleado =array( 
        'DIRECCIONRES'=>  $this->input->post('txtdireccionresidenciaEmpleado'),
        'CELULAR'=> $this->input->post('txtcelularEmpleado'),
        'PNOMBRE'=> $this->input->post('txtprimernombreEmpleado'),
        'SNOMBRE'=>  $this->input->post('textsegundonombreEmpleado'),
        'PAPELLIDO'=>  $this->input->post('textprimerapellidoEmpleado'),
        'SAPELLIDO'=>  $this->input->post('textsegundoapellidoEmpleado'),
        'ESTCIVIL_ID'=>  $this->input->post('selectestadoCivi'),
        'TIPODOC_ID'=>  $this->input->post('selecttipoDocumento'),
        'SUBCARGO_ID'=>  $this->input->post('selectcargo'),
        'SEXO'=>  $this->input->post('selectsexos'),
        'RH'=>  $this->input->post('selectRh'),
        'TELEFONORES'=>  $this->input->post('txttelefonoEmpleado'),
        'EMAIL'=>  $this->input->post('txtcorreoelectronicoEmpleado'),
        'FECHAINGRESO'=>  $this->input->post('txtfechaingresoempleado'),
        'FECHANAC'=>  $this->input->post('txtfechanacimientoEmpleado'),
        
        'NUMERODOC'=>  $this->input->post('txtnumerodocumentoEmpleado'),
        'RELIGION_ID'=>  $this->input->post('selectreligiones'),
        'USUARIO'=>  strtolower($this->input->post('txtprimernombreEmpleado'))."".strtolower($this->input->post('textprimerapellidoEmpleado')),
        'CONTRASENA'=>  $this->input->post('txtnumerodocumentoEmpleado'),
        'ESTADO'=>'Activo',
        'MUNICIPIO_ID'=>  $this->input->post('selectmunici'),
        'TBSESION_ID' => '1',
        ); 
    $Tabla = 'TBPERSONAS';
    $this->insertar_model->insertar($objempleado,$Tabla);
    redirect('ingresarempleado');
           }
           
}
}
?>
