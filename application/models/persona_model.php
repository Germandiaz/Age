<?php
/*
 * Creado el 24/11/2011
 * Actualizado el 24/11/2011
 * Por: Jesse Javier Cogollo A.
 */
class persona_model extends CI_Model{
    function __construct() {
        parent::__construct();
    }
    
    function validar_nombreusuario($nombre){
        $this->db->where('USUARIO', $nombre);
        $query = $this->db->get('TBPERSONAS');
        if($query->num_rows()>0){
            return true;
        }  else {
            return false;
        }
    }
    
    function verif_ingreso($usuario, $contrasena){
        $this->db->where('USUARIO', $usuario);
        $this->db->where('CONTRASENA', $contrasena);
        $consulta = $this->db->get('TBPERSONAS');
        if($consulta->num_rows()>0){
            return $consulta->result();
        }  else {
            return false;
        }
    }
     function listarpersona($id){
		$consulta = $this->db->query('select ID,NUMERODOC,PNOMBRE,SNOMBRE,PAPELLIDO,SAPELLIDO,FECHAINGRESO,FECHANAC,DIRECCIONRES,TELEFONORES,RH,FOTO,CELULAR,NUMEROCONTRA,USUARIO,CONTRASENA,EMAIL from TBPERSONAS WHERE ID ='.$id); 
                /*join tbmunicipios on TBPERSONAS.MUNICIPIO_ID = tbmunicipios.id ' .
				'join tbsexos on TBPERSONAS.SEXO = tbsexos.ID '.
				'join tbestadosciviles on TBPERSONAS.ESTCIVIL_ID = tbestadosciviles.ID '.
				'join tbreligiones on TBPERSONAS.RELIGION_ID = tbreligiones.ID '.
				'join tbsesion_fundaciones on TBPERSONAS.TBSESION_ID = tbsesion_fundaciones.ID '.
				'join tbeps on TBPERSONAS.EPS_ID = tbeps.ID '.
				'join tbdepartamentos on tbmunicipios.TBDEPARTAMENTO_ID = tbdepartamentos.ID '.
				'join tbpaises on tbdepartamentos.TBPAIS_ID = tbpaises.ID '.
				'join tbsubcargos on TBPERSONAS.SUBCARGO_ID = tbsubcargos.ID '.
				'where TBPERSONAS.ID = 1'*/
    	
    	if($consulta->num_rows()>0){
    		$a = 0;
    		foreach ($consulta->result() as $fila){
            	$listar[$a]['id']=$fila->ID;
          //  	$listar[$a]['sesionid']=$fila->TBSESION_FUNDACIONESNOMBRE;
         //   	$listar[$a]['tipodocid']=$fila->TIPODOC_ID;
         //   	$listar[$a]['mun']=$fila->TBMUNICIPIOSNOMBRE;
         //   	$listar[$a]['dep']=$fila->TBDEPARTAMENTOSNOMBRE;
        //    	$listar[$a]['pais']=$fila->TBPAISESNOMBRE;
        //    	$listar[$a]['estcivilid']=$fila->TBESTADOSCIVILESNOMBRE;
       //     	$listar[$a]['subcargoid']=$fila->TBSUBCARGOSNOMBRE;
       //     	$listar[$a]['sexo']=$fila->TBSEXONOMBRE;
       //     	$listar[$a]['epsid']=$fila->TBEPSNOMBRE;
       //     	$listar[$a]['religionid']=$fila->TBRELIGIONESNOMBRE;
     //       	$listar[$a]['respid']=$fila->RESPONSABLE_ID;
           // 	$listar[$a]['habid']=$fila->HAB_CODIGO;
            	$listar[$a]['numdoc']=$fila->NUMERODOC;
            	$listar[$a]['primernom']=$fila->PNOMBRE;
            	$listar[$a]['snombre']=$fila->SNOMBRE;
            	$listar[$a]['papellido']=$fila->PAPELLIDO;
            	$listar[$a]['sapellido']=$fila->SAPELLIDO;
            	$listar[$a]['fechaing']=$fila->FECHAINGRESO;
            	$listar[$a]['fechanac']=$fila->FECHANAC;
         //   	$listar[$a]['numhijos']=$fila->NUMHIJOS;
         //   	$listar[$a]['numherm']=$fila->NUMHERMANOS;
        //    	$listar[$a]['parentescores']=$fila->PARENTESCORES;
            	$listar[$a]['dirres']=$fila->DIRECCIONRES;
            	$listar[$a]['telres']=$fila->TELEFONORES;
           // 	$listar[$a]['observacion']=$fila->OBSERVACION;
            	$listar[$a]['rh']=$fila->RH;
         //   	$listar[$a]['procedencia']=$fila->PROCEDENCIA;
            	$listar[$a]['foto']=$fila->FOTO;
            	$listar[$a]['celular']=$fila->CELULAR;
            	$listar[$a]['contrato']=$fila->NUMEROCONTRA;
            	$listar[$a]['usuario']=$fila->USUARIO;
            	$listar[$a]['contrasena']=$fila->CONTRASENA;
            //	$listar[$a]['estado']=$fila->ESTADO;
            	$listar[$a]['email']=$fila->EMAIL;
            	//$a++;
    		}
    	}
    	return $listar;
	}
        function listargeronte($id){
		$consulta = $this->db->query('select ID,HAB_CODIGO,NUMHERMANOS,NUMHIJOS,NUMERODOC,PNOMBRE,SNOMBRE,PAPELLIDO,SAPELLIDO,FECHAINGRESO,FECHANAC,DIRECCIONRES,TELEFONORES,RH,FOTO,CELULAR,NUMEROCONTRA,USUARIO,CONTRASENA from TBPERSONAS WHERE ID ='.$id); 
                /*join tbmunicipios on TBPERSONAS.MUNICIPIO_ID = tbmunicipios.id ' .
				'join tbsexos on TBPERSONAS.SEXO = tbsexos.ID '.
				'join tbestadosciviles on TBPERSONAS.ESTCIVIL_ID = tbestadosciviles.ID '.
				'join tbreligiones on TBPERSONAS.RELIGION_ID = tbreligiones.ID '.
				'join tbsesion_fundaciones on TBPERSONAS.TBSESION_ID = tbsesion_fundaciones.ID '.
				'join tbeps on TBPERSONAS.EPS_ID = tbeps.ID '.
				'join tbdepartamentos on tbmunicipios.TBDEPARTAMENTO_ID = tbdepartamentos.ID '.
				'join tbpaises on tbdepartamentos.TBPAIS_ID = tbpaises.ID '.
				'join tbsubcargos on TBPERSONAS.SUBCARGO_ID = tbsubcargos.ID '.
				'where TBPERSONAS.ID = 1'*/
    	
    	if($consulta->num_rows()>0){
    		$a = 0;
    		foreach ($consulta->result() as $fila){
            	$listar[$a]['id']=$fila->ID;
          //  	$listar[$a]['sesionid']=$fila->TBSESION_FUNDACIONESNOMBRE;
         //   	$listar[$a]['tipodocid']=$fila->TIPODOC_ID;
         //   	$listar[$a]['mun']=$fila->TBMUNICIPIOSNOMBRE;
         //   	$listar[$a]['dep']=$fila->TBDEPARTAMENTOSNOMBRE;
        //    	$listar[$a]['pais']=$fila->TBPAISESNOMBRE;
        //    	$listar[$a]['estcivilid']=$fila->TBESTADOSCIVILESNOMBRE;
       //     	$listar[$a]['subcargoid']=$fila->TBSUBCARGOSNOMBRE;
       //     	$listar[$a]['sexo']=$fila->TBSEXONOMBRE;
       //     	$listar[$a]['epsid']=$fila->TBEPSNOMBRE;
       //     	$listar[$a]['religionid']=$fila->TBRELIGIONESNOMBRE;
     //       	$listar[$a]['respid']=$fila->RESPONSABLE_ID;
            	$listar[$a]['habid']=$fila->HAB_CODIGO;
            	$listar[$a]['numdoc']=$fila->NUMERODOC;
            	$listar[$a]['primernom']=$fila->PNOMBRE;
            	$listar[$a]['snombre']=$fila->SNOMBRE;
            	$listar[$a]['papellido']=$fila->PAPELLIDO;
            	$listar[$a]['sapellido']=$fila->SAPELLIDO;
            	$listar[$a]['fechaing']=$fila->FECHAINGRESO;
            	$listar[$a]['fechanac']=$fila->FECHANAC;
            	$listar[$a]['numhijos']=$fila->NUMHIJOS;
            	$listar[$a]['numherm']=$fila->NUMHERMANOS;
        //    	$listar[$a]['parentescores']=$fila->PARENTESCORES;
            	$listar[$a]['dirres']=$fila->DIRECCIONRES;
            	$listar[$a]['telres']=$fila->TELEFONORES;
           // 	$listar[$a]['observacion']=$fila->OBSERVACION;
            	$listar[$a]['rh']=$fila->RH;
         //   	$listar[$a]['procedencia']=$fila->PROCEDENCIA;
            	$listar[$a]['foto']=$fila->FOTO;
            	$listar[$a]['celular']=$fila->CELULAR;
            	$listar[$a]['contrato']=$fila->NUMEROCONTRA;
            	$listar[$a]['usuario']=$fila->USUARIO;
            	$listar[$a]['contrasena']=$fila->CONTRASENA;
            //	$listar[$a]['estado']=$fila->ESTADO;
            //	$listar[$a]['email']=$fila->EMAIL;
            	//$a++;
    		}
    	}
    	return $listar;
	}
        function actualizarpers($id, $direccion, $telefo, $celu, $foto, $numhijos){
            $actualizar = array(
                    'NUMHIJOS'=>$numhijos,
                    'DIRECCIONRES'=>$direccion,
                    'TELEFONORES'=>$telefo,
                    'CELULAR'=>$celu,
                    'FOTO'=>$foto
                    );
           
            $this->db->update('TBPERSONAS', $actualizar, "id =".$id);
	}
        function nrocontrato(){
        $query= $this->db->query('SELECT MAX(NUMEROCONTRA) AS ultimocontrato from TBPERSONAS');
       if($query->num_rows()>0){ 
            $a=0;
        foreach ($query->result() as $fila) {
            $resultado =    $numfactura[$a]['numcontrato']=$fila->ultimocontrato + 1;     
            $a++;
        }
       }else{
            $resultado = '0';
       }
       return $resultado;
    
    }
    function nroinventario(){
        $query= $this->db->query('SELECT MAX(ID) AS IDINVENTARIO from TBINVENTARIOS');
       if($query->num_rows()>0){ 
            $a=0;
        foreach ($query->result() as $fila) {
            $resultado =    $numinventario[$a]['numinventario']=$fila->IDINVENTARIO + 1;     
            $a++;
        }
       }else{
            $resultado = '0';
       }
       return $resultado;
    
    }
        
}