<?php
class ingresargeronte extends CI_Controller{
/*
 * creado: German Díaz
 * fecha creado: 20- Nov-2011
 * ultima Actualiza: 03-Enero-2012
*/

   var $habita;
   var $numhij;
   var $numerHerma;
   var $observa;
   var $datosboca;
   var $datosunas;
   var $datosojos;
   var $datosoidos;
   var $datosdieta;
   var $datostratamiento;
   var $datosfarmaco;
   var $objetnombre;
   var $documento;
   var $personaid;
   var $admisionid;
 
 function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('consultar_model');
        $this->load->model('insertar_model');
        $this->load->model('admisionxvaloracion');
        $this->load->model('admision_model');
        $this->_var_session();  
        
    }

    
    function index(){
        $Tabla = 'TBPAISES';
        $Tabla2 = 'TBTIPODOCUMENTOS';
        $Tabla3 = 'TBSEXOS';
        $Tabla4 = 'TBSUBCARGOS';
        $Tabla5 = 'TBESTADOSCIVILES';
        $Tabla6 = 'TBDEPARTAMENTOS';
        $Tabla7 = 'TBMUNICIPIOS';
        $Tabla8 = 'TBRELIGIONES';
      
        $data['ListarPaises']= $this->consultar_model->listarDropDown($Tabla);
        $data["ListarTipoDoc"] = $this->consultar_model->listarDropDowndoc($Tabla2);
        $data["ListarSexo"] = $this->consultar_model->listarDropDownsex($Tabla3);
        $data["ListarEstCiv"] = $this->consultar_model->listarDropDownestadociv($Tabla5);
        $data["Listardeparta"] = $this->consultar_model->listarDropDowndeparta($Tabla6);
        $data["Listarmunic"] = $this->consultar_model->listarDropDownmunicipio($Tabla7);
        $data["Listarreligio"] = $this->consultar_model->listarDropDownreligion($Tabla8);
        $data['main_contenido']= 'persona/ingresargeronte';
        $data['titulo']= 'Registrar Geronte';
        $this->load->view('includes/templateingresado',$data);
    }
    
    function valorfisica(){
        $data['main_contenido']= 'persona/ingresargerontevaloracionfisica';
        $data['titulo']= 'Ingresar Valoracion Fisica';
        $data['numerodoc']= $this->getdocumento();
        $data['idpersona']= $this->getidpersona();
        $this->load->view('includes/templateingresado',$data);
    }
    function informebiologico(){
        $data['main_contenido']= 'persona/ingresargeronteinformebiologico';
        $data['idadmision']=$this->getidadmision();
        $data['titulo']= 'Ingresar Informe Biologico';
        $this->load->view('includes/templateingresado',$data);
    }
    function gerontefim(){
        $data['main_contenido']= 'persona/ingresargerontefim';
        $data['idadmision']=$this->getidadmision();
        $data['titulo']= 'Ingresar Geronte Fim';
        $this->load->view('includes/templateingresado',$data);
    }
    function geronteabc(){
        $data['main_contenido']= 'persona/ingresargeronteabc';
        $data['idadmision']=$this->getidadmision();
        $data['titulo']= 'Geronte ABC';
        $this->load->view('includes/templateingresado',$data);
    }
    function aspectospsicologicos(){
        $data['main_contenido']= 'persona/ingresargeronteaspectospsicologicos';
        $data['idadmision']=$this->getidadmision();
        $data['titulo']= 'ingresar Aspectos Psicologicos';
        $this->load->view('includes/templateingresado',$data);
    }
    function aspectosfamiliares(){
        $data['main_contenido']= 'persona/ingresargeronteaspectosfamiliares';
        $data['idadmision']=$this->getidadmision();
        $data['titulo']= 'Ingresar Aspectos Familiares';
        $this->load->view('includes/templateingresado',$data);
    }
     function aspectossociales(){
        $data['main_contenido']= 'persona/ingresargeronteaspectossociales';
        $data['idadmision']=$this->getidadmision();
        $data['titulo']= 'Ingresar Aspectos Sociales';
        $this->load->view('includes/templateingresado',$data);
    }
    function geronteocupacion(){
        $data['main_contenido']= 'persona/ingresargerontedatosocupacion';
        $data['idadmision']=$this->getidadmision();
        $data['titulo']= 'Ingresar Geronte Ocupación';
        $this->load->view('includes/templateingresado',$data);
    }
    function gerontedxs(){
        $data['main_contenido']= 'persona/ingresargerontedxs';
        $data['titulo']= 'Evento';
        $data['idadmision']=$this->getidadmision();
        $this->load->view('includes/templateingresado',$data);
    }
    
    
    function  setdocumento(Array $datosdocumento){
        $this->documento = array ('NUMDOCUMENTO'=>$datosdocumento['DOCUMENTO']);
      }
    function getdocumento(){
        return $this->documento['NUMDOCUMENTO'];
    }
    function  setidpersona(Array $personaid){
        $this->personaid = array ('TBPERSONA_ID'=>$personaid['TBPERSONA_ID']);
      }
      function getidpersona(){
        return $this->personaid['TBPERSONA_ID'];
    }
    function  setidadmision(Array $admisionid){
        $this->admisionid = array ('ID'=>$admisionid['ID']);
      }
      function getidadmision(){
        return $this->admisionid['ID'];
    }
    function setFarmacologia($datosfarmaco){
        $this->$datosfarmaco = $datosfarmaco;
    }
    function getFarmacologia(){
        return $this->$datosfarmaco;
    }
    //validar que inicie sesion y evitar que pueda abrir una interfaz directamente
function _var_session(){
		$logueado = $this->session->userdata('esta_logueado');
		if( $logueado != TRUE){
			redirect('inicio');	
		}
	} 
    function capDatosGeronte(){ 
        $this->load->model('persona_model');
        $ultimocontrato = $this->persona_model->nrocontrato();
       $this->form_validation->set_rules('txtprimernombreGeronte', 'Primer nombre', 'trim|required|max_length[30]');
       $this->form_validation->set_rules('txtprimerapellidoGeronte', 'Primer apellido', 'trim|required|max_length[30]'); 
       $this->form_validation->set_rules('txtfechanacimientoGeronte', 'Fecha Nacimiento', 'trim|required');
       $this->form_validation->set_rules('txtnumerohijosGeronte', 'Número hijos', 'trim|required|integer|max_length[2]');
       $this->form_validation->set_rules('txtnumerohermanosGeronte', 'Número hermanos', 'trim|required|integer|max_length[2]');
       $this->form_validation->set_rules('txtfechaingresoGeronte', 'Fecha ingreso', 'trim|required');
       $this->form_validation->set_rules('txtnumerodocumentoGeronte', 'Número Documento', 'trim|required|integer|min_length[5]');
       $this->form_validation->set_rules('txtobservacionGeronte', 'Observación', 'trim|required|max_length[50]');
       $this->form_validation->set_message('required', 'El campo %s es requerido');
       if ($this->form_validation->run() == FALSE){
           $this->index();
           }else{
    /*   include_once 'bean_contratosinventario.php';
       $nuevonumcontrato = new bean_contratosinventario();
       $nuevocontrato = $nuevonumcontrato->nrofactura();*/
       $this->load->model('persona_model');
       $ultimocontrato = $this->persona_model->nrocontrato();
       $objegeronte = array(
        'PNOMBRE'=>$this->input->post('txtprimernombreGeronte'),
        'SNOMBRE'=>  $this->input->post('txtsegundonombreGeronte'),
        'PAPELLIDO'=>  $this->input->post('txtprimerapellidoGeronte'),
        'SAPELLIDO'=>  $this->input->post('txtsegundoapellidoGeronte'),
        'ESTCIVIL_ID'=>  $this->input->post('selectestadoCivi'),
        'TIPODOC_ID'=>  $this->input->post('selecttipoDocumento'),
        'FECHANAC'=> date('Y-d-m',  strtotime($this->input->post('txtfechanacimientoGeronte'))), 
        'HAB_CODIGO' => $this->input->post('selecthabitacion'),
        'NUMHIJOS' => $this->input->post('txtnumerohijosGeronte'),
        'SEXO' => $this->input->post('selectsexo'),  
       // FOTO -------------
    //     '' => $this->input->post(''),   
        'NUMEROCONTRA'=> $ultimocontrato,
        'FECHAINGRESO'=> date('Y-d-m',  strtotime($this->input->post('txtfechaingresoGeronte'))),     
        'MUNICIPIO_ID'=>  $this->input->post('selectmunicipios'),
        'PROCEDENCIA'=>  $this->input->post('selectprocedencia'),
        'NUMERODOC'=>  $this->input->post('txtnumerodocumentoGeronte'),
        'RELIGION_ID'=>  $this->input->post('selectreligiones'),
        'RH'=>  $this->input->post('selectRh'), 
        'NUMHERMANOS' => $this->input->post('txtnumerohermanosGeronte'),
        'OBSERVACION'=>  $this->input->post('txtobservacionGeronte'),
        'TBSESION_ID'=> '1',
        'SUBCARGO_ID'=>'10',
        ); 
       //Tabla para ingresar el registro
        $Tablapersona = 'TBPERSONAS';
        //Insertamos la persona
        $this->insertar_model->insertar($objegeronte,$Tablapersona);
        //enviamos el número del documento al beans
        $this->setdocumento($datos = array('DOCUMENTO'=>$objegeronte['NUMERODOC']));
        //Consulta de id de la persona para ingresar la admisión
         $consultaidpersona=$this->admisionxvaloracion->consultaridpersona($datos['DOCUMENTO']);
         $observacion=  array(
                        'OBSERVACIONGERONTE'=>$this->input->post('txtobservacionGeronte'),
                        'TBPERSONA_ID'=>$consultaidpersona
                        ); 
         $this->setidpersona($id = array('TBPERSONA_ID'=>$observacion['TBPERSONA_ID']));
        //Insertamos la admision
         $this->admision_model->ingresaradmision($observacion);
         $this->valorfisica();
        }
    }
    
    //Captura los datos del formulario Valoración fisica
    function capdatosvalofisica(){  
        /*Hay que hacer una condicion si edita el campo del documento haga una nueva consulta y envie el valor al setidpersona
         * $consultaidpersona=$this->admisionxvaloracion->consultar_modelidpersona($datos['DOCUMENTO']);
         */ 
        $numdocumento = $this->input->post('txtnumerodocumentovalfisica');
        $idpersona = $this->input->post('txtidpersona');
        $this->setdocumento($datos = array('DOCUMENTO'=>$numdocumento));
        $this->setidpersona($id = array('TBPERSONA_ID'=>$idpersona));
        $idpersonaadmision=$this->getidpersona();  
        $consultaidadmision=$this->admision_model->consultaridadmision($idpersonaadmision); 
        $this->setidadmision($admisionid = array('ID'=>$consultaidadmision));
        $idadmision = $this->getidadmision();
            // capturacion de datos boca
         $datosboca = array(
                array(
                      'TBADMISION_ID' =>$idadmision,
                      'TBVALORACION_ID' =>$this->input->post('selectDientes'),
                      'OBSERVACION' => $this->input->post('txtObsDientes'),
                    ),
                       
                array('TBADMISION_ID' =>$idadmision,
                      'TBVALORACION_ID' => $this->input->post('selectLengua'),
                      'OBSERVACION' => '',
                    ),
                array('TBADMISION_ID' =>$idadmision,
                      'TBVALORACION_ID' => $this->input->post('selectMucosaLengua'),
                      'OBSERVACION' => $this->input->post('txtObsLengua')
                    )
                    );
            $this->admisionxvaloracion->insertaradmisionxvaloracion($datosboca,$idadmision);
           // capturacion de datos uñas
            $datosunas = array(
                array( 'TBADMISION_ID' =>$idadmision,
                       'TBVALORACION_ID' => $this->input->post('selectestadounas'),
                       'OBSERVACION' => $this->input->post('txtObsUnas'))  
            );
            $this->admisionxvaloracion->insertaradmisionxvaloracion($datosunas,$idadmision);
            // capturacion de datos ojos
            $datoojos = array(
                array( 'TBADMISION_ID' =>$idadmision,
                       'TBVALORACION_ID'=>$this->input->post('selectlesionesojos'),
                       'OBSERVACION'=>$this->input->post('txtObsOjos')),
                array( 'TBADMISION_ID' =>$idadmision,
                       'TBVALORACION_ID'=>$this->input->post('selectlentesojos'),
                       'OBSERVACION' => '')  
            );
            $this->admisionxvaloracion->insertaradmisionxvaloracion($datoojos,$idadmision);
            // capturacion de datos oidos
            $datosoidos = array(
                array( 'TBADMISION_ID' =>$idadmision,
                       'TBVALORACION_ID' => $this->input->post('selectestadooidos'),
                       'OBSERVACION' => $this->input->post('txtObsOidos'))
            );
            $this->admisionxvaloracion->insertaradmisionxvaloracion($datosoidos,$idadmision);

            //Su dieta consiste en
             $datosdieta = array(
                array( 'TBADMISION_ID'=>$idadmision,
                       'TBVALORACION_ID'=> $this->input->post('chkfrutas'),
                       'OBSERVACION' => ''),
                array( 'TBADMISION_ID'=>$idadmision,
                       'TBVALORACION_ID' => $this->input->post('chkpescado'),
                       'OBSERVACION' => ''),
                array( 'TBADMISION_ID'=>$idadmision,
                       'TBVALORACION_ID' => $this->input->post('chkgrasas'),
                       'OBSERVACION' => ''),  
                array( 'TBADMISION_ID'=>$idadmision,
                       'TBVALORACION_ID' => $this->input->post('chksolidos'),
                       'OBSERVACION' => ''),  
                array( 'TBADMISION_ID'=>$idadmision,
                       'TBVALORACION_ID' => $this->input->post('chkharinas'),
                       'OBSERVACION' => ''),
                array( 'TBADMISION_ID'=>$idadmision,
                       'TBVALORACION_ID' => $this->input->post('chkvegetales'),
                       'OBSERVACION' => ''),
                array( 'TBADMISION_ID'=>$idadmision,
                       'TBVALORACION_ID' => $this->input->post('chkliquidos'),
                       'OBSERVACION' => ''),  
                array( 'TBADMISION_ID'=>$idadmision,
                       'TBVALORACION_ID' => $this->input->post('chkcarnes'),
                       'OBSERVACION' => ''),
                array( 'TBADMISION_ID'=>$idadmision,
                       'TBVALORACION_ID' => $this->input->post('chkotrosdieta'),
                       'OBSERVACION' => $this->input->post('txtotrosdieta'))
                    
                 
            );
            $this->admisionxvaloracion->insertaradmisionxvaloracion($datosdieta,$idadmision);
            //Tratamiento que recibe actualmente
            $datostratamiento = array(
                array( 'TBADMISION_ID' =>$idadmision,
                       'TBVALORACION_ID'=> $this->input->post('chkmedico'),
                       'OBSERVACION' => ''),
                array( 'TBADMISION_ID' =>$idadmision,
                       'TBVALORACION_ID' => $this->input->post('chkbioenergico'),
                       'OBSERVACION' => ''),
                array( 'TBADMISION_ID' =>$idadmision,
                       'TBVALORACION_ID' => $this->input->post('chkningunoMedico'),
                       'OBSERVACION' => ''),  
                array( 'TBADMISION_ID' =>$idadmision,
                       'TBVALORACION_ID' => $this->input->post('selectintoleramedicamentos'),  
                       'OBSERVACION' => $this->input->post('txttratamientocual'))
            );
             $this->admisionxvaloracion->insertaradmisionxvaloracion($datostratamiento,$idadmision);
            //Farmacologia  
         /*   $datosfarmaco = array(
                array( 'TBADMISION_ID' =>$idadmision,
                       'TBVALORACION_ID' => $this->input->post('selectnombremedicamento'),
                       'OBSERVACION' => ''),
                array( 'TBADMISION_ID' =>$idadmision,
                       'TBVALORACION_ID' => $this->input->post('selectdosisdiaria'),
                       'OBSERVACION' => ''),
                array( 'TBADMISION_ID' =>$idadmision,
                       'TBVALORACION_ID' => $this->input->post('selectpresentacionfarmaco'),
                       'OBSERVACION' => '')
            );
             $this->admisionxvaloracion->insertaradmisionxvaloracion($datosfarmaco);*/
    //}
            $this->informebiologico();
        }
    //Captura los datos del formulario informe biologico
    function capDatosGeronInforBiolog(){
        $idadmi=$this->input->post('txtidadmisioninformebiolo');
        $this->setidadmision($admisionid = array('ID'=>$idadmi));
        $idadmision = $this->getidadmision();
        $datosbiologicos= array(
        array('TBADMISION_ID' =>$idadmision,
              'TBVALORACION_ID' => $this->input->post('selecttalla'),
              'OBSERVACION' => ''),
        array('TBADMISION_ID' =>$idadmision,
              'TBVALORACION_ID' => $this->input->post('selectaparienciageneral'),
              'OBSERVACION' => '')
        );
        $this->admisionxvaloracion->insertaradmisionxvaloracion($datosbiologicos,$idadmision);
        //Medidas Antropomédicas
        $datosantropomedicas=array(
        array('TBADMISION_ID' =>$idadmision,
              'TBVALORACION_ID' =>'40',
              'OBSERVACION' => $this->input->post('txtestatura')),
        array('TBADMISION_ID' =>$idadmision,
              'TBVALORACION_ID' => '44',
              'OBSERVACION' => $this->input->post('txtpeso')) 
        );
         $this->admisionxvaloracion->insertaradmisionxvaloracion($datosantropomedicas,$idadmision);
        //Chequeo Signos vitales
        $datossignosvitales=array(
        array('TBADMISION_ID' =>$idadmision,
              'TBVALORACION_ID' =>'45',
              'OBSERVACION' => $this->input->post('txtpulsoporminuto')), 
        array('TBADMISION_ID' =>$idadmision,
              'TBVALORACION_ID' =>'47',
              'OBSERVACION' => $this->input->post('txttemperatura')),
        array('TBADMISION_ID' =>$idadmision,
              'TBVALORACION_ID' =>'46',
              'OBSERVACION' => $this->input->post('txtfrecuenciarespiratoria')),
        array('TBADMISION_ID' =>$idadmision,
              'TBVALORACION_ID' =>'48',
              'OBSERVACION' => $this->input->post('txtpresionsanguinea'))
        );
         $this->admisionxvaloracion->insertaradmisionxvaloracion($datossignosvitales,$idadmision);
        //Revision por sistemas
        $datosrevisionsistema =  array(
        array('TBADMISION_ID' =>$idadmision, 
             'TBVALORACION_ID' =>'49',
             'OBSERVACION' => $this->input->post('txtestadosensorial')), 
        array('TBADMISION_ID' =>$idadmision,
              'TBVALORACION_ID' => '50',
             'OBSERVACION'=> $this->input->post('txtsistemarenal')),
        array('TBADMISION_ID' =>$idadmision,
              'TBVALORACION_ID' => '51',
              'OBSERVACION'=> $this->input->post('txtsistemacardiovascular')),
        array('TBADMISION_ID' =>$idadmision,
              'TBVALORACION_ID' => '52',
             'OBSERVACION'=> $this->input->post('txtsistemaendocrino')),
        array('TBADMISION_ID' =>$idadmision,
              'TBVALORACION_ID' => '53',
             'OBSERVACION'=> $this->input->post('txtsistemarespiratorio')),
        array('TBADMISION_ID' =>$idadmision,
             'TBVALORACION_ID' => '54',
             'OBSERVACION'=> $this->input->post('txtsistemaintegumentario')),
        array('TBADMISION_ID' =>$idadmision,
             'TBVALORACION_ID' => '55',
             'OBSERVACION'=> $this->input->post('txtsistemaosteomuscular')),
        array('TBADMISION_ID' =>$idadmision,
             'TBVALORACION_ID' => '56',
             'OBSERVACION'=> $this->input->post('txtsistemadigestivo')),
        array('TBADMISION_ID' =>$idadmision,
              'TBVALORACION_ID' => '57',
             'OBSERVACION'=> $this->input->post('txtsistemanervioso'))
        );
        $this->admisionxvaloracion->insertaradmisionxvaloracion($datosrevisionsistema,$idadmision);
        //Antecedentes Tóxicos
      /*  $datostoxicos=array(
        array('TBADMISION_ID' =>$idadmision,
           //   $alcoholsino = foranea ' ',
              'OBSERVACION'=>$this->input->post('selectalcoholsino')),
        array('TBADMISION_ID' =>$idadmision,
           //   $alcoholfrecu = foranea ' ',
              'OBSERVACION'=>$this->input->post('selectalcoholfrecuencia')),   
        array('TBADMISION_ID' =>$idadmision,
           //   $alcoholcanti = foranea ' ',
              'OBSERVACION'=>$this->input->post('txtcantidadalcohol')),
        array('TBADMISION_ID' =>$idadmision,
          //    $cigarrillosino = foranea  ',
              'OBSERVACION'=>$this->input->post('selectcigarrillossino')),   
        array('TBADMISION_ID' =>$idadmision,
           //   $cigarrillofrecu = foranea ' ',
              'OBSERVACION'=>$this->input->post('selectcigarrillosfrecuencia')),   
        array('TBADMISION_ID' =>$idadmision,
          //    $cigarrillocanti = foranea ' ',
              'OBSERVACION'=>$this->input->post('txtcigarrocantidad')),
        array('TBADMISION_ID' =>$idadmision,
          //    $cafesino = foranea ' ',
              'OBSERVACION'=>$this->input->post('selectcafesino')),
        array('TBADMISION_ID' =>$idadmision,
          //    $cafefrecu = foranea ' ',
              'OBSERVACION'=>$this->input->post('selectcafefrecuencia')),   
        array('TBADMISION_ID' =>$idadmision,
          //    $cafecanti = foranea ' ',
              'OBSERVACION'=>$this->input->post('txtcafecantidad')),
        array('TBADMISION_ID' =>$idadmision,
           //   $drogassino = ' ',
              'OBSERVACION'=>$this->input->post('selectdrogassino')),   
        array('TBADMISION_ID' =>$idadmision,
           //   $drogasfrecu = ' ',
              'OBSERVACION'=>$this->input->post('selectdrogasfrecuencia')),   
        array('TBADMISION_ID' =>$idadmision,
          //    $drogascanti = ' ',
              'OBSERVACION'=>$this->input->post('txtdrogascantidad')),
        array('TBADMISION_ID' =>$idadmision,
          //    $otrosantecetoxi = ' ',
              'OBSERVACION'=>$this->input->post('txtotrosantecedentestoxicos'))
        );*/
        $this->gerontefim();
        
    }
    
    function capdatosgeronfim(){
        $idadmi=$this->input->post('txtidadmisiongerontefim');
        $this->setidadmision($admisionid = array('ID'=>$idadmi));
        $idadmision = $this->getidadmision();
        //autocuidado
        $objeautocomu= array(
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('radioautocuidadoalimentacion'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('radioautocuidadoapariencia'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('radioautocuidadobano'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('radioautocuidadovestidosuperior'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('radioautocuidadoaseo'),
                   'OBSERVACION' => '')
        );
        $this->admisionxvaloracion->insertaradmisionxvaloracion($objeautocomu,$idadmision);
        // control de esfinteres
        $objeesfinteres= array(
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('radioesfinteresvejiga'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('radioesfinteresintestino'),
                   'OBSERVACION' => '')
        );
        $this->admisionxvaloracion->insertaradmisionxvaloracion($objeesfinteres,$idadmision);
        //Movilidad - Desplazamiento
        $objemovilidad= array(
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('radiomovilidadcama'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('radiomovilidadsanitario'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('radiomovilidadtina'),
                   'OBSERVACION' => '')
        );
         $this->admisionxvaloracion->insertaradmisionxvaloracion($objemovilidad,$idadmision);
        //Locomoción
        $objelocomocion= array(
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('radiolocomocioncamina'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('radiolocomocionescaleras'),
                   'OBSERVACION' => '')
        );
         $this->admisionxvaloracion->insertaradmisionxvaloracion($objelocomocion,$idadmision);
        //Comunicación
        $objecomunicacion= array(
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('radiocomunicacioncompresion'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('radiocomunicacionexpresion'),
                   'OBSERVACION' => '')
        ); 
        $this->admisionxvaloracion->insertaradmisionxvaloracion($objecomunicacion,$idadmision);

        //Condición Social
        $objecondicionsocial= array(
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('radiocondicionsocial'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('radiocondicionmemoria'),
                   'OBSERVACION' => '')
        );
        $this->admisionxvaloracion->insertaradmisionxvaloracion($objecondicionsocial,$idadmision);

         $this->geronteabc();
    }
    function capdatosgeronabc(){
        $idadmi=$this->input->post('txtidadmisiongeronteabc');
        $this->setidadmision($admisionid = array('ID'=>$idadmi));
        $idadmision = $this->getidadmision();
        //Actividades basicas cotidianas Instrumentas
        $objeactividadesinstrumenta= array(
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chktelefonoactividadesbasicas'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkabrirpaquetesactividadesbasicas'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkcortarunasactividadesbasicas'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkusarradioteleactividadesbasicas'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkprepararalimentosactividadesbasicas'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chktomarmedicamentoactividadesbasicas'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chktrabajopesadoactividadesbasicas'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkmanejointerruptoresactividadesbasicas'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chktrabajolivianoactividadesbasicas'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkmanejogrifosactividadesbasicas'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chksaliractividadesbasicas'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkencendercerillasactividadesbasicas'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkmanejollavesactividadesbasicas'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chklavardientesactividadesbasicas'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkmanejopicaportesactividadesbasicas'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkmanejodineroactividadesbasicas'),
                   'OBSERVACION' => '')
        );
        $this->admisionxvaloracion->insertaradmisionxvaloracion($objeactividadesinstrumenta,$idadmision);
        //Actividades basicas cotidianas Avanzadas
        $objecotidianaavanza= array(
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('radiotransporteactividadesavanzadas'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('radioreligiososactividadesavanzadas'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('radiohacevisitasactividadesavanzadas'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('radiorecibevisitasactividadesavanzadas'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('radiofiestasactividadesavanzadas'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('radioorganizacionessocialesactividadesavanzadas'),
                   'OBSERVACION' => '')
        );
        $this->admisionxvaloracion->insertaradmisionxvaloracion($objecotidianaavanza,$idadmision);
        // Ayudas Ortopédicas
        $objeayudaortopedica= array(
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkningunoayudasortopedicas'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkmuletasayudasortopedicas'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkgafasayudasortopedicas'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkprotesisayudasortopedicas'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chksillaruedasayudasortopedicas'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkbastonayudasortopedicas'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkaudifonosayudasortopedicas'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkcaminadorayudasortopedicas'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => '151',
                   'OBSERVACION' => $this->input->post('txtotrosayudas'))
        );
        $this->admisionxvaloracion->insertaradmisionxvaloracion($objeayudaortopedica,$idadmision);
        $this->aspectospsicologicos();
    }
    function capdatosgeronasppsi(){
        $idadmi=$this->input->post('txtidadmisiongerontepsicologico');
        $this->setidadmision($admisionid = array('ID'=>$idadmi));
        $idadmision = $this->getidadmision();
           //Autovaloracion
          $objeautovaloracion= array(
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('selectautovaloracion'),
                   'OBSERVACION' => $this->input->post('txtobservacionautovaloracionasppsc'))
        );
          $this->admisionxvaloracion->insertaradmisionxvaloracion($objeautovaloracion,$idadmision);
          //Razonamiento
          $objerazonamiento= array(
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('selectrazonamiento'),
                   'OBSERVACION' => $this->input->post('txtobservacionrazonamientoasppsc'))
        );
          $this->admisionxvaloracion->insertaradmisionxvaloracion($objerazonamiento,$idadmision);
        //orientacion temporal
          $objeorientaciontemporal= array(
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkningunoayudasortopedicas'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkmuletasayudasortopedicas'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkgafasayudasortopedicas'),
                   'OBSERVACION' => '')
        );
          $this->admisionxvaloracion->insertaradmisionxvaloracion($objeorientaciontemporal,$idadmision);
          //Memoria
          $objememoria= array(
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('txtobservacionGeronte'),
                   'OBSERVACION' => '')
        );
          $this->admisionxvaloracion->insertaradmisionxvaloracion($objememoria,$idadmision);
        //Personalidad
           $objepersonalidad= array(
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkningunoayudasortopedicas'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkmuletasayudasortopedicas'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkgafasayudasortopedicas'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkgafasayudasortopedicas'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkgafasayudasortopedicas'),
                   'OBSERVACION' => '')
        );
           $this->admisionxvaloracion->insertaradmisionxvaloracion($objepersonalidad,$idadmision);
        //Estado de animo
            $objeanimo= array(
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkningunoayudasortopedicas'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkmuletasayudasortopedicas'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkgafasayudasortopedicas'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkgafasayudasortopedicas'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkgafasayudasortopedicas'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkgafasayudasortopedicas'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkotrasestadoanimo'),
                   'OBSERVACION' => $this->input->post('txtotrasestadoanimoasppsc'))
        );
            $this->admisionxvaloracion->insertaradmisionxvaloracion($objeanimo,$idadmision);
        //Inteligencia
            $objeinteligencia= array(
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('txtobservacionGeronte'),
                   'OBSERVACION' => '')
        );
            $this->admisionxvaloracion->insertaradmisionxvaloracion($objeinteligencia,$idadmision);
        //identidad
             $objeidentidad= array(
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('selectpercepcionsalud'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('selectaptitudesserquerido'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => '184',
                   'OBSERVACION' => $this->input->post('txtobservaciongeneralasppsc'))
        );
             $this->admisionxvaloracion->insertaradmisionxvaloracion($objeidentidad,$idadmision);
        $this->aspectosfamiliares();
    }
    function capdatosgeronaspfami(){
        $idadmi=$this->input->post('txtidadmisionaspectosfamiliares');
        $this->setidadmision($admisionid = array('ID'=>$idadmi));
        $idadmision = $this->getidadmision();
        //Cual es el motivo de su institucionalización
        $objeinstituciona= array(
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkconflictosmotivoinstitucionalizacion'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkbajosrecursosmotivoinstitucionalizacion'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chksoledadmotivoinstitucionalizacion'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chksaludmotivoinstitucionalizacion'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkedadmotivoinstitucionalizacion'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkotrasmotivoinstitucionalizacion'),
                   'OBSERVACION' => $this->input->post('txtotrasmotivoinstitucionalizacionaspfam'))
        );
        $this->admisionxvaloracion->insertaradmisionxvaloracion($objeinstituciona,$idadmision);
        //Con quien convivio durante su vida
        $objeconvivio= array(
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkpadresconvivencia'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkhermanosconvivencia'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chksoloconvivencia'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkconyugeconvivencia'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkhijosconvivencia'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkotrosconvivencia'),
                   'OBSERVACION' => $this->input->post('txtotrosconquienconcicioaspfam'))
        );
        $this->admisionxvaloracion->insertaradmisionxvaloracion($objeconvivio,$idadmision);
        //Relaciones con su familia
        $objerelacionfami= array(
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkbuenasrelacionesfamilia'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkmalasrelacionesfamilia'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkregularrelacionesfamilia'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chknosedanrelacionesfamilia'),
                   'OBSERVACION' => '')
        );
        $this->admisionxvaloracion->insertaradmisionxvaloracion($objerelacionfami,$idadmision);
        //Apoyo
        $objeapoyofami= array(
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkafectivoapoyofamiliar'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkeconomicoapoyofamiliar'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkrecreativoapoyofamiliar'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkespiritualapoyofamiliar'),
                   'OBSERVACION' => '')
        );
        $this->admisionxvaloracion->insertaradmisionxvaloracion($objeapoyofami,$idadmision);
        //En la datostoma de desiciones
        $objedesiciones= array(
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkfamiliainfluenciadesicion'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkinstitucioninfluenciadesicion'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkconyugeinfluenciadesicion'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chksoloinfluenciadesicion'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => '208',
                   'OBSERVACION' => $this->input->post('txtobservacionaspectosfamiliares'))
        ); 
        $this->admisionxvaloracion->insertaradmisionxvaloracion($objedesiciones,$idadmision);
        //Depresión
        $objedepresion = array(
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkmolestiasdepresion'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkreaccionesdepresion'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chksoledaddepresion'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chktrastornodepresion'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkdepresion'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkotrasdepresion'),
                   'OBSERVACION' => $this->input->post('txtotrasdepresionaspectosfamiliares'))
        );  
        $this->admisionxvaloracion->insertaradmisionxvaloracion($objedepresion,$idadmision);
        //Expresion ansiedad
        $objeansiedad= array(
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkaturdimientoansiedad'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chksensacionmuerteansiedad'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkpreocupacionesansiedad'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chksomatizacionesansiedad'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chksensacionmiedoansiedad'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkfobiasansiedad'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkotrasansiedad'),
                   'OBSERVACION' => $this->input->post('txtotrasexpresionansiedadaspectosfamiliares'))
        );
        $this->admisionxvaloracion->insertaradmisionxvaloracion($objeansiedad,$idadmision);
        $this->aspectossociales();
    }
    
    function capdatosgeronaspsoci(){
        $idadmi=$this->input->post('txtidadmisiongerontepsicologico');
        $this->setidadmision($admisionid = array('ID'=>$idadmi));
        $idadmision = $this->getidadmision();
        //Relacónes personales con los compañeros
        $objeautovalora= array(
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('selectautovaloracion'),
                   'OBSERVACION' => 'txtobservacionautovaloracionasppsc')
        );
        $this->admisionxvaloracion->insertaradmisionxvaloracion($objeautovalora,$idadmision);
        //Relacónes personales fuera de la institucion
         $objerazonamien= array(
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('selectrazonamiento'),
                   'OBSERVACION' => 'txtobservacionrazonamientoasppsc')
        );
         $this->admisionxvaloracion->insertaradmisionxvaloracion($objerazonamien,$idadmision);
         //Orientación Temporal
         $objeparticipaactividades= array(
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('selectparticipa'),
                   'OBSERVACION' => $this->input->post('txtporqueactividades'),)
        );
         $this->admisionxvaloracion->insertaradmisionxvaloracion($objeparticipaactividades,$idadmision);
        //Valoración Grupal
         $objevaloraciongrupal= array(
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkafectividadvaloracion'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkculturavaloracion'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chksocializacionvaloracion'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkcrecimientopersonalvaloracion'),
                   'OBSERVACION' => '')
        );
         $this->admisionxvaloracion->insertaradmisionxvaloracion($objevaloraciongrupal,$idadmision);
        //Pertenece a grupos sociales
         $objepertenecegrupossociales= array(
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkdanzassociales'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkgerontologicosociales'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkreligiososociales'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkpoliticossociales'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkcantosociales'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkteatrosociales'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkexprecorporalsociales'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkotrossociales'),
                   'OBSERVACION' => $this->input->post('txtotrospertenecegrupsociales'))
        );
         $this->admisionxvaloracion->insertaradmisionxvaloracion($objepertenecegrupossociales,$idadmision);
        //Que tipos de actividades reeducativas le gustaria realizar
         $objeactividadesreeducativas= array(
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkrecreativasactividades'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkmantenimientoactividades'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkeducacionalesactividades'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkergoterapeuticasactividades'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('chkprevocacionalesactividades'),
                   'OBSERVACION' => '')
        );
         $this->admisionxvaloracion->insertaradmisionxvaloracion($objeactividadesreeducativas,$idadmision);
        $this->geronteocupacion();
    }
    
    function capdatosgeronocupacion(){
        $idadmi=$this->input->post('txtidadmisionocupaciongeronte');
        $this->setidadmision($admisionid = array('ID'=>$idadmi));
        $idadmision = $this->getidadmision();
        //Actividades que realiza
        $objeactividadrealiza= array(
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('oraractividadesrealiza'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('juegosactividadesrealiza'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('fiestasactividadesrealiza'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('lecturaactividadesrealiza'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('escrituraactividadesrealiza'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('manualidadesactividadesrealiza'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('jardineriaactividadesrealiza'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('pinturaactividadesrealiza'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('musicaactividadesrealiza'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('gimnasiaactividadesrealiza'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('talleresactividadesrealiza'),
                   'OBSERVACION' => '')
        );
        $this->admisionxvaloracion->insertaradmisionxvaloracion($objeactividadrealiza,$idadmision);
        //Si el hogar le ofreciera otras actividades reeducativas en cuales participaría
        $objeactividadesofrece= array(
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('juegosotrasactividades'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('fiestasotrasactividades'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('lecturaotrasactividades'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('escrituraotrasactividades'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('manualidadesotrasactividades'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('jardineriaotrasactividades'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('pinturaotrasactividades'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('musicaotrasactividades'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('gimnasiaotrasactividades'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('talleresotrasactividades'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('cultivosotrasactividades'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('orarotrasactividades'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('caminarotrasactividades'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('pasearotrasactividades'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('otrasactividades'),
                   'OBSERVACION' => $this->input->post('txtotrosactividadesocupacion'))
        );
        $this->admisionxvaloracion->insertaradmisionxvaloracion($objeactividadesofrece,$idadmision);
        //De las actividades ofrecidas por la institución a cuales asistiria
        $objeasistenciaactiviofreci= array(
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('socioculturalesactividadesofrecidas'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('ocupacionesactividadesofrecidas'),
                   'OBSERVACION' => ''),
            array( 'TBADMISION_ID' =>$idadmision,
                   'TBVALORACION_ID' => $this->input->post('recreativasactividadesofrecidas'),
                   'OBSERVACION' => '')
        );
        $this->admisionxvaloracion->insertaradmisionxvaloracion($objeasistenciaactiviofreci,$idadmision);
        $this->gerontedxs();
    }
    function capdatosgerondxs(){
       $idadmi=$this->input->post('txtidadmisiongerontedxs');
       $this->setidadmision($admisionid = array('ID'=>$idadmi));
       $idadmision = $this->getidadmision();
       $observaciones = array(
        'OBSERVACIONMEDICO' => $this->input->post('txtobservacionmedico'),
        'OBSERVACIONGERONTOLOGO' => $this->input->post('txtobservaciongerontologicos'),
        'OBSERVACIONGERONTE' => $this->input->post('txtobservacionintervenciongerontologico'),
        'OBSERVACIONFISICA' => $this->input->post('txtobservacionfisica'),
        'OBSERVACIONPSICOLOGICA' => $this->input->post('txtobservacionpsicologica'),
        'OBSERVACIONFUNCIONAL' => $this->input->post('txtobservacionfuncionales'),  
        'OBSERVACIONSOCIOFAMILIAR' => $this->input->post('txtobservacionsociofamiliares'), 
    );  
       $consultaidpersona=$this->admision_model->consultar_modelidadmisionjoin($idadmision,$observaciones); 
     redirect('ingresarGeronte/index'); 
    }
  function nroultimocontrato(){
        $this->load->model('persona_model');
         echo  $ultimocontrato = $this->persona_model->nrocontrato();
    
    }
  function nroultimoidinventario(){
        $this->load->model('persona_model');
         echo  $ultimoidinventario = $this->persona_model->nroinventario();
    
    }
  }
?>

