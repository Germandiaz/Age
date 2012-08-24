<?php
/*
 * Creado el 24/11/2011
 * Actualizado el 27/11/2011
 * Por: Jesse Javier Cogollo A.
 * nota: 
 */
class consultar_model extends CI_Model{
    function __construct() {}
    
	function listarinventario(){
    	$consulta = $this->db->query('select per.id, per.numerodoc , per.pnombre,per.snombre, per.papellido, per.sapellido, sum(inv.cantidad) "cantidad" from TBPERSONAS per
									join TBINVENTARIOS inv on per.ID = inv.tbpersona_id group by per.numerodoc');
    	if($consulta->num_rows()>0){
        	$a=0;
        	foreach ($consulta->result() as $fila){
            	$listar[$a]['id']=$fila->id;
            	$listar[$a]['documento']=$fila->numerodoc;
            	$listar[$a]['pnombre']=$fila->pnombre;
            	$listar[$a]['snombre']=$fila->snombre;
            	$listar[$a]['papellido']=$fila->papellido;
            	$listar[$a]['sapellido']=$fila->sapellido;
            	$listar[$a]['cantidad']=$fila->cantidad;
            	$a++;
        	}
    	}
    	return $listar;
	}
	
	function listarultmovimientos(){
		$consulta = $this->db->query('select "Ingreso persona " descripcion,fechaingreso fec from TBPERSONAS per
									union all select "Incidencia " descripcion,fechaincidencia fec from TBINCIDENCIAS inc
									union all select "Eventos " descripcion,fechainicio fec from TBAGENDAS age
									union all select "facturas " descripcion, fechaelaboracion fec from TBFACTURAS fac
									union all select "Movimientos " descripcion,fechamovimiento fec from TBMOVIMIENTOS mov
									order by 2 desc'
		);
		if ($consulta->num_rows()>0){
			$a=0;
        	foreach ($consulta->result() as $fila){
            	$listar[$a]['descripcion']=$fila->descripcion;
            	$listar[$a]['fec']=$fila->fec;
            	$a++;
        	}
    	}
    	return $listar;
	}
	
function listarfacturas(){
    	$consulta = $this->db->query('select fac.NUMERO, perela.NUMERODOC docela,perela.PNOMBRE nomela,perela.PAPELLIDO apeela,perrec.NUMERODOC docrec,perrec.PNOMBRE nomrec,perrec.PAPELLIDO aperec,fac.FECHAELABORACION, fac.FECHAPAGOMENSUALIDAD, cfac.DESCRIPCION  
									from TBPERSONAS perela inner join TBFACTURAS fac on perela.ID = fac.TBPERSONAELABORA_ID
									inner join TBCONCEPTOFACTURAS cfac on fac.CONSECUTIVOTOTFAC = cfac.ID inner join TBPERSONAS perrec on perrec.ID = fac.TBPERSONARECIBE_ID');
    	if($consulta->num_rows()>0){
        	$a=0;
        	foreach ($consulta->result() as $fila){
            	$listar[$a]['numero']=$fila->NUMERO;
            	$listar[$a]['docela']=$fila->docela;
            	$listar[$a]['nomela']=$fila->nomela;
            	$listar[$a]['apeela']=$fila->apeela;
            	$listar[$a]['docrec']=$fila->docrec;
            	$listar[$a]['nomrec']=$fila->nomrec;
            	$listar[$a]['aperec']=$fila->aperec;
            	$listar[$a]['fecharea']=$fila->FECHAELABORACION;
            	$listar[$a]['fechamen']=$fila->FECHAPAGOMENSUALIDAD;
            	$listar[$a]['concepto']=$fila->DESCRIPCION;
            	$a++;
        	}
    	}
    	return $listar;
	}
	
function listarincidencias(){
    	$consulta = $this->db->query('select inc.ID,per.NUMERODOC,per.PNOMBRE,per.PAPELLIDO,inc.FECHAINCIDENCIA,inc.MEDICAMENTOS,inc.DIAGNOSTICO, inc.RESPONSABLE 
									from TBINCIDENCIAS inc join TBPERSONAS per on inc.TBPERSONA_ID = per.ID');
    	if($consulta->num_rows()>0){
        	$a=0;
        	foreach ($consulta->result() as $fila){
            	$listar[$a]['id']=$fila->ID;
            	$listar[$a]['documento']=$fila->NUMERODOC;
            	$listar[$a]['pnombre']=$fila->PNOMBRE;
            	$listar[$a]['papellido']=$fila->PAPELLIDO;
            	$listar[$a]['fecharea']=$fila->FECHAINCIDENCIA;
            	$listar[$a]['medicamento']=$fila->MEDICAMENTOS;
            	$listar[$a]['observacion']=$fila->DIAGNOSTICO;
            	$listar[$a]['responsable']=$fila->RESPONSABLE;
            	$a++;
        	}
    	}
    	return $listar;
	}
	
function listarasistentes(){
    	$consulta = $this->db->query('select perage.TBPERSONASXTBAGENDAS,per.NUMERODOC, per.PNOMBRE,per.PAPELLIDO,age.NOMBRE_ACTIVIDAD from TBPERSONAS per 
									join TBPERSONASXTBAGENDAS perage on per.ID = perage.TBPERSONA_ID join TBAGENDAS age on perage.TBAGENDA_ID = age.ID');
    	if($consulta->num_rows()>0){
        	$a=0;
        	foreach ($consulta->result() as $fila){
            	$listar[$a]['id']=$fila->TBPERSONASXTBAGENDAS;
            	$listar[$a]['cedula']=$fila->NUMERODOC;
            	$listar[$a]['nombre']=$fila->PNOMBRE;
            	$listar[$a]['apellido']=$fila->PAPELLIDO;
            	$listar[$a]['actividad']=$fila->NOMBRE_ACTIVIDAD;
            	$a++;
        	}
    	}
    	return $listar;
	}
	
function listareventos(){
    	$consulta = $this->db->query('select age.ID,age.NOMBRE_ACTIVIDAD,tact.NOMBRE,per.NUMERODOC,age.FECHAINICIO,age.FECHAFIN,age.ACTIVIDAD_DESCRIPCION,age.ESTADO_ACTIVIDAD 
									from TBPERSONAS per join TBAGENDAS age on per.ID = age.TBPERSONA_ID join TBTIPOACTIVIDADES tact on age.TBTIPOACTIVIDAD_ID = tact.ID
    								order by age.FECHAINICIO desc');
    	if($consulta->num_rows()>0){
        	$a=0;
        	foreach ($consulta->result() as $fila){
            	$listar[$a]['id']=$fila->ID;
            	$listar[$a]['actividad']=$fila->NOMBRE_ACTIVIDAD;
            	$listar[$a]['tactividad']=$fila->NOMBRE;
            	$listar[$a]['responsable']=$fila->NUMERODOC;
            	$listar[$a]['finicio']=$fila->FECHAINICIO;
            	$listar[$a]['ffinal']=$fila->FECHAFIN;
            	$listar[$a]['descripcion']=$fila->ACTIVIDAD_DESCRIPCION;
            	$listar[$a]['estado']=$fila->ESTADO_ACTIVIDAD;
            	$a++;
        	}
    	}
    	return $listar;
	}
	
function listarmovimiento($condicion){
		
    	$consulta = $this->db->query('SELECT MOV.id, prod.NOMBRE, prod.PRESENTACION,inv.FECHAVENCIMIENTO, MOV.FECHAMOVIMIENTO, MOV.CANTIDAD, inv.ESTADO,tmov.NOMBRE TIPOMOV
									FROM TBINVENTARIOS inv join TBMOVIMIENTOS MOV on inv.TBPERSONA_ID = MOV.persona_id
									JOIN TBPRODUCTOS prod ON MOV.INVPROD_ID = prod.ID JOIN TBTIPOMOVIMIENTOS tmov ON MOV.TIPOMOV_ID = tmov.ID
									WHERE MOV.PERSONA_ID = "'.$condicion.'"');
   	if($consulta->num_rows()>0){
        	$a=0;
        	foreach ($consulta->result() as $fila){
        		$listar[$a]['inv']=$condicion;
            	$listar[$a]['id']=$fila->id;
            	$listar[$a]['nombre']=$fila->NOMBRE;
            	$listar[$a]['presentacion']=$fila->PRESENTACION;
            	$listar[$a]['fechavencimiento']=$fila->FECHAVENCIMIENTO;
            	$listar[$a]['fechamovimiento']=$fila->FECHAMOVIMIENTO;
            	$listar[$a]['cantidad']=$fila->CANTIDAD;
            	$listar[$a]['estado']=$fila->ESTADO;
            	$listar[$a]['tipomov']=$fila->tipomov;
            	$a++;
        	}
    	}else {
    			$listar[0]['inv']=$condicion;
    			$listar[0]['id']="";
            	$listar[0]['nombre']="";
            	$listar[0]['presentacion']="";
            	$listar[0]['fechavencimiento']="";
            	$listar[0]['fechamovimiento']="";
            	$listar[0]['cantidad']="";
            	$listar[0]['estado']="";
            	$listar[0]['tipomov']="";
    	}
    	return $listar;
	}
	
function asistentes($condicion){
		
    	$consulta = $this->db->query('select TBPERSONAS.ID IDPER,TBPERSONAS.NUMERODOC CEDULA,TBPERSONAS.PNOMBRE NOMBRE, TBPERSONAS.PAPELLIDO APELLIDO from TBPERSONASXTBAGENDAS 
					join TBPERSONAS on TBPERSONASXTBAGENDAS.TBPERSONA_ID = TBPERSONAS.ID
					join TBAGENDAS on TBPERSONASXTBAGENDAS.TBAGENDA_ID = TBAGENDAS.ID
					WHERE TBPERSONASXTBAGENDAS.TBAGENDA_ID = "'.$condicion.'"');
   	if($consulta->num_rows()>0){
        	$a=0;
        	foreach ($consulta->result() as $fila){
        		$listar[$a]['EVENTO']=$condicion;
        		$listar[$a]['IDPER']=$fila->IDPER;
            	$listar[$a]['CEDULA']=$fila->CEDULA;
            	$listar[$a]['NOMBRE']=$fila->NOMBRE;
            	$listar[$a]['APELLIDO']=$fila->APELLIDO;
            	$a++;
        	}
    	}else {
    			$listar[0]['EVENTO']=$condicion;
    			$listar[0]['CEDULA']="";
            	$listar[0]['NOMBRE']="";
            	$listar[0]['APELLIDO']="";
    	}
    	return $listar;
	}
	
	function Listarper(){
		$consulta = $this->db->query('select  id,concat(numerodoc," ",pnombre," ",papellido) Nombre from TBPERSONAS');
		if($consulta->num_rows()>0){
        	$a=0;
        	foreach ($consulta->result() as $fila){
        		$listar[$a]['id']=$fila->id;
        		$listar[$a]['Nombre']=$fila->Nombre;
        		$a++;
        	}
    	}else {
    			$listar[0]['id']="";
        		$listar[0]['Nombre']="";
    	}
    	return $listar;
	}
	
function listareps(){
    	$consulta = $this->db->query('select * from TBEPS');
    	if($consulta->num_rows()>0){
        	$a=0;
        	foreach ($consulta->result() as $fila){
            	$listar[$a]['id']=$fila->ID;
            	$listar[$a]['Nombre']=$fila->TBEPSNOMBRE;
            	$listar[$a]['Telefono']=$fila->TELEFONO;
            	$listar[$a]['Direccion']=$fila->DIRECCION;
            	$listar[$a]['TipoSeguridad']=$fila->TIPOSEGURIDADSOCIAL;
            	$a++;
        	}
    	}
    	return $listar;
	}
	
		function listarrel(){
    	$consulta = $this->db->query('select * from TBRELIGIONES');
    	if($consulta->num_rows()>0){
        	$a=0;
        	foreach ($consulta->result() as $fila){
            	$listar[$a]['id']=$fila->ID;
            	$listar[$a]['Nombre']=$fila->TBRELIGIONESNOMBRE;
            	$a++;
        	}
    	}
    	return $listar;
	}
	
	function listarpais(){
	    $consulta = $this->db->query('select  * from TBPAISES');
	    if($consulta->num_rows()>0){
	        $a=0;
	        foreach ($consulta->result() as $fila){
	            $listarP[$a]['id']=$fila->ID;
	            $listarP[$a]['indicativo']=$fila->INDICATIVO;
	            $listarP[$a]['nombrepais']=$fila->TBPAISESNOMBRE;
	            $a++;
	        }
	    }
	    return $listarP;
	}
	
function listarconpfactura(){
	    $consulta = $this->db->query('select  * from TBCONCEPTOFACTURAS');
	    if($consulta->num_rows()>0){
	        $a=0;
	        foreach ($consulta->result() as $fila){
	            $listar[$a]['id']=$fila->ID;
	            $listar[$a]['conpfact']=$fila->DESCRIPCION;
	            $a++;
	        }
	    }
	    return $listar;
	}
	
function listartipoval(){
	    $consulta = $this->db->query('select  * from TBTIPOVALORACIONES');
	    if($consulta->num_rows()>0){
	        $a=0;
	        foreach ($consulta->result() as $fila){
	            $listar[$a]['id']=$fila->ID;
	            $listar[$a]['nomtipoact']=$fila->TIPVALNOMBRE;
	            $a++;
	        }
	    }
	    return $listar;
	}
	
function listarproducto(){
	    $consulta = $this->db->query('select  * from TBPRODUCTOS');
	    if($consulta->num_rows()>0){
	        $a=0;
	        foreach ($consulta->result() as $fila){
	            $listar[$a]['id']=$fila->ID;
	            $listar[$a]['nomprod']=$fila->NOMBRE;
	            $listar[$a]['preprod']=$fila->PRESENTACION;
	            $a++;
	        }
	    }
	    return $listar;
	}
	
function listarproductoact($dato){
	    $consulta = $this->db->query('select  * from TBPRODUCTOS where ID = "'.$dato.'"');
	    if($consulta->num_rows()>0){
	        $a=0;
	        foreach ($consulta->result() as $fila){
	            $listar[$a]['id']=$fila->ID;
	            $listar[$a]['nomprod']=$fila->NOMBRE;
	            $listar[$a]['preprod']=$fila->PRESENTACION;
	            $a++;
	        }
	    }
	    return $listar;
	}
	
function listardocumento(){
	    $consulta = $this->db->query('select  * from TBTIPODOCUMENTOS');
	    if($consulta->num_rows()>0){
	        $a=0;
	        foreach ($consulta->result() as $fila){
	            $listar[$a]['id']=$fila->ID;
	            $listar[$a]['nomdoc']=$fila->TBTIPODOCUMENTOSNOMBRE;
	            $a++;
	        }
	    }
	    return $listar;
	}
	
function listarescolaridad(){
	    $consulta = $this->db->query('select  ID, NOMBRE from TBESCOLARIDADES');
	    if($consulta->num_rows()>0){
	        $a=0;
	        foreach ($consulta->result() as $fila){
	            $listar[$a]['id']=$fila->ID;
	            $listar[$a]['nomesc']=$fila->NOMBRE;
	            $a++;
	        }
	    }
	    return $listar;
	}
	
function listarfundacion(){
	    $consulta = $this->db->query('select  * from TBSESION_FUNDACIONES');
	    if($consulta->num_rows()>0){
	        $a=0;
	        foreach ($consulta->result() as $fila){
	            $listar[$a]['id']=$fila->ID;
	            $listar[$a]['nomfund']=$fila->TBSESION_FUNDACIONESNOMBRE;
	            $a++;
	        }
	    }
	    return $listar;
	}
	
function listartipoactividad(){
	    $consulta = $this->db->query('select  * from TBTIPOACTIVIDADES');
	    if($consulta->num_rows()>0){
	        $a=0;
	        foreach ($consulta->result() as $fila){
	            $listar[$a]['id']=$fila->ID;
	            $listar[$a]['nomtipoact']=$fila->NOMBRE;
	            $a++;
	        }
	    }
	    return $listar;
	}
	
function listarcargos(){
	    $consulta = $this->db->query('select  * from TBCARGOS');
	    if($consulta->num_rows()>0){
	        $a=0;
	        foreach ($consulta->result() as $fila){
	            $listar[$a]['id']=$fila->ID;
	            $listar[$a]['nomcargo']=$fila->NOMBRE;
	            $a++;
	        }
	    }
	    return $listar;
	}
	
function listarmun(){
	    $consulta = $this->db->query('select * from TBMUNICIPIOS');
	    if($consulta->num_rows()>0){
	        $a=0;
	        foreach ($consulta->result() as $fila){
	            $listarM[$a]['id']=$fila->ID;
	            $listarM[$a]['munind']=$fila->INDICATIVO;
	            $listarM[$a]['depid']=$fila->TBDEPARTAMENTO_ID;
	            $listarM[$a]['nombremun']=$fila->TBDEPARTAMENTOSNOMBRE;
	            $a++;
	        }
	    }
	    return $listarM;
	}
	
function listardep(){
	    $consulta = $this->db->query('select * from TBDEPARTAMENTOS');
	    if($consulta->num_rows()>0){
	        $a=0;
	        foreach ($consulta->result() as $fila){
	            $listarD[$a]['id']=$fila->ID;
	            $listarD[$a]['indicativo']=$fila->INDICATIVO;
	            $listarD[$a]['depid']=$fila->TBDEPARTAMENTO_ID;
	            $listarD[$a]['nombredep']=$fila->TBMUNICIPIOSNOMBRE;
	            $a++;
	        }
	    }
	    return $listarD;
	}
	
	function listarhab(){
    	$consulta = $this->db->query('select * from TBHABITACIONES');
    	if($consulta->num_rows()>0){
        	$a=0;
        	foreach ($consulta->result() as $fila){
            	$listar[$a]['cod']=$fila->CODIGO;
            	$listar[$a]['Capacidad']=$fila->CAPACIDAD;
            	$listar[$a]['Descripcion']=$fila->DESCRIPCION;
            	$a++;
        	}
    	}
    	return $listar;
	}
	
	function listarval(){
    	$consulta = $this->db->query('select * from TBVALORACIONES');
    	if($consulta->num_rows()>0){
        	$a=0;
        	foreach ($consulta->result() as $fila){
            	$listar[$a]['id']=$fila->ID;
            	$listar[$a]['subtipoval']=$fila->TBSUBTIPOVALORACION_ID;
            	$listar[$a]['nombreval']=$fila->NOMBRE;
            	$a++;
        	}
    	}
    	return $listar;
	}
	
	function listarvalsubval(){
		$consulta = $this->db->join('TBSUBTIPOVALORACIONES', 'TBVALORACIONES.id = TBSUBTIPOVALORACIONES.id');
 		$consulta = $this->db->get('TBVALORACIONES');
    	if($consulta->num_rows()>0){
        	$a=0;
        	foreach ($consulta->result() as $fila){
            	$listar[$a]['id']=$fila->ID;
            	$listar[$a]['tipoval']=$fila->VALNOMBRE;
            	$listar[$a]['nombreval']=$fila->SUBTIPNOMBRE;
            	$a++;
        	}
    	}
    	return $listar;
	}
	
	function listarpersonasing()
	{
		$consulta = $this->db->query('select per.ID ID,concat(PNOMBRE," ",SNOMBRE," ",PAPELLIDO," ",SAPELLIDO) as "NOMBRE",NUMERODOC, TBSUBCARGOSNOMBRE from TBPERSONAS per
									join TBSUBCARGOS scar on per.SUBCARGO_ID = scar.ID');
		if($consulta->num_rows()>0){
			$a = 0;
    		foreach ($consulta->result() as $fila){
    			$listar[$a]['id']=$fila->ID;
            	$listar[$a]['nombre']=$fila->NOMBRE;
            	$listar[$a]['cedula']=$fila->NUMERODOC;
            	$listar[$a]['cargo']=$fila->TBSUBCARGOSNOMBRE;
            	$a++;
    		}
    	}
    	return $listar;
	}
	
	function listarpersona($idsession){
		$consulta = $this->db->where('ID',$idsession);
		$consulta = $this->db->query('select * from TBPERSONAS join TBMUNICIPIOS on TBPERSONAS.MUNICIPIO_ID = TBMUNICIPIOS.ID ' .
				'join TBSEXOS on TBPERSONAS.SEXO = TBSEXOS.ID '.
				'join TBESTADOSCIVILES on TBPERSONAS.ESTCIVIL_ID = TBESTADOSCIVILES.ID '.
				'join TBRELIGIONES on TBPERSONAS.RELIGION_ID = TBRELIGIONES.ID '.
				'join TBSESION_FUNDACIONES on TBPERSONAS.TBSESION_ID = TBSESION_FUNDACIONES.ID '.
				'join TBEPS on TBPERSONAS.EPS_ID = TBEPS.ID '.
				'join TBDEPARTAMENTOS on TBMUNICIPIOS.TBDEPARTAMENTO_ID = TBDEPARTAMENTOS.ID '.
				'join TBPAISES on TBDEPARTAMENTOS.TBPAIS_ID = TBPAISES.ID '.
				'join TBSUBCARGOS on TBPERSONAS.SUBCARGO_ID = TBSUBCARGOS.ID '.
				'where TBPERSONAS.ID = 1');
    	
    	if($consulta->num_rows()>0){
    		$a = 0;
    		foreach ($consulta->result() as $fila){
            	$listar[$a]['id']=$fila->ID;
            	$listar[$a]['sesionid']=$fila->TBSESION_FUNDACIONESNOMBRE;
            	$listar[$a]['tipodocid']=$fila->TIPODOC_ID;
            	$listar[$a]['mun']=$fila->TBMUNICIPIOSNOMBRE;
            	$listar[$a]['dep']=$fila->TBDEPARTAMENTOSNOMBRE;
            	$listar[$a]['pais']=$fila->TBPAISESNOMBRE;
            	$listar[$a]['estcivilid']=$fila->TBESTADOSCIVILESNOMBRE;
            	$listar[$a]['subcargoid']=$fila->TBSUBCARGOSNOMBRE;
            	$listar[$a]['sexo']=$fila->TBSEXONOMBRE;
            	$listar[$a]['epsid']=$fila->TBEPSNOMBRE;
            	$listar[$a]['religionid']=$fila->TBRELIGIONESNOMBRE;
            	$listar[$a]['respid']=$fila->RESPONSABLE_ID;
            	$listar[$a]['habid']=$fila->HAB_CODIGO;
            	$listar[$a]['numdoc']=$fila->NUMERODOC;
            	$listar[$a]['pnombre']=$fila->PNOMBRE;
            	$listar[$a]['snombre']=$fila->SNOMBRE;
            	$listar[$a]['papellido']=$fila->PAPELLIDO;
            	$listar[$a]['sapellido']=$fila->SAPELLIDO;
            	$listar[$a]['fechaing']=$fila->FECHAINGRESO;
            	$listar[$a]['fechanac']=$fila->FECHANAC;
            	$listar[$a]['numhijos']=$fila->NUMHIJOS;
            	$listar[$a]['numherm']=$fila->NUMHERMANOS;
            	$listar[$a]['parentescores']=$fila->PARENTESCORES;
            	$listar[$a]['dirres']=$fila->DIRECCIONRES;
            	$listar[$a]['telres']=$fila->TELEFONORES;
            	$listar[$a]['observacion']=$fila->OBSERVACION;
            	$listar[$a]['rh']=$fila->RH;
            	$listar[$a]['procedencia']=$fila->PROCEDENCIA;
            	$listar[$a]['foto']=$fila->FOTO;
            	$listar[$a]['celular']=$fila->CELULAR;
            	$listar[$a]['contrato']=$fila->NUMEROCONTRA;
            	$listar[$a]['usuario']=$fila->USUARIO;
            	$listar[$a]['contrasena']=$fila->CONTRASENA;
            	$listar[$a]['estado']=$fila->ESTADO;
            	$listar[$a]['email']=$fila->EMAIL;
            	$a++;
    		}
    	}
    	return $listar;	
	}
        //Listar empleado
        //   *-------------------------------------------------------------------------------- ------------------- nuevo
        function listarperso(){
		$consulta= $this->db->query('select ID, NUMERODOC, PNOMBRE, SNOMBRE, PAPELLIDO, SAPELLIDO, FECHAINGRESO, FOTO, USUARIO, ESTADO from TBPERSONAS WHERE SUBCARGO_ID IN(1,2,3,4,5,6,7)');//join tbsubcargos on tbsubcargos.id = TBPERSONAS.IDPERSONA
         //       $this->db->join('tbsubcargos','tbsubcargos.ID = TBPERSONAS.IDPERSONA'); //where SUBCARGO_ID NOT IN (8, 9, 10)
                  //  $this->db->select('*');
              //  $this->db->from('tbperonas');
                //$this->db->join('tbsubcargos','tbsubcargos.idsubcargo = TBPERSONAS.idpersona'); //where SUBCARGO_ID NOT IN (8, 9, 10)
            //  $consulta=  $this->db->get();
    	if($consulta->num_rows()>0){
    		$a = 0;
    		foreach ($consulta->result() as $fila){
            	$listar[$fila->ID]['id']=$fila->ID;
            	//$listar[$fila->ID]['habid']=$fila->HAB_CODIGO;
            	$listar[$fila->ID]['numdoc']=$fila->NUMERODOC;
            	$listar[$fila->ID]['pnombre']=$fila->PNOMBRE;
            	$listar[$fila->ID]['snombre']=$fila->SNOMBRE;
            	$listar[$fila->ID]['papellido']=$fila->PAPELLIDO;
            	$listar[$fila->ID]['sapellido']=$fila->SAPELLIDO;
            	$listar[$fila->ID]['fechaing']=$fila->FECHAINGRESO;
            	$listar[$fila->ID]['foto']=$fila->FOTO;
            	$listar[$fila->ID]['usuario']=$fila->USUARIO;
            	$listar[$fila->ID]['estado']=$fila->ESTADO;
            	$a++;
    		}
    	}
    	return $listar;	
	}
        
    //   *-------------------------------------------------------------------------------- ------------------- nuevo
        function listargeronte(){
		$consulta= $this->db->query('select ID, NUMERODOC, PNOMBRE, SNOMBRE, PAPELLIDO, SAPELLIDO, FECHAINGRESO, ESTADO from TBPERSONAS WHERE SUBCARGO_ID IN(8,9,10)');//join tbsubcargos on tbsubcargos.id = TBPERSONAS.IDPERSONA
         //       $this->db->join('tbsubcargos','tbsubcargos.ID = TBPERSONAS.IDPERSONA'); //where SUBCARGO_ID NOT IN (8, 9, 10)
                  //  $this->db->select('*');
              //  $this->db->from('tbperonas');
                //$this->db->join('tbsubcargos','tbsubcargos.idsubcargo = TBPERSONAS.idpersona'); //where SUBCARGO_ID NOT IN (8, 9, 10)
            //  $consulta=  $this->db->get();
    	if($consulta->num_rows()>0){
    		$a = 0;
    		foreach ($consulta->result() as $fila){
            	$listar[$fila->ID]['id']=$fila->ID;
            	//$listar[$fila->ID]['habid']=$fila->HAB_CODIGO;
            	$listar[$fila->ID]['numdoc']=$fila->NUMERODOC;
            	$listar[$fila->ID]['pnombre']=$fila->PNOMBRE;
            	$listar[$fila->ID]['snombre']=$fila->SNOMBRE;
            	$listar[$fila->ID]['papellido']=$fila->PAPELLIDO;
            	$listar[$fila->ID]['sapellido']=$fila->SAPELLIDO;
            	$listar[$fila->ID]['fechaing']=$fila->FECHAINGRESO;
            	$listar[$fila->ID]['estado']=$fila->ESTADO;
            	$a++;
    		}
    	}
    	return $listar;	
	}
	
function listarfactura(){
    	$consulta = $this->db->query('select NUMERO,TBPERSONARECIBE_ID,TBPERSONAELABORA_ID,FECHAELABORACION,CONSECUTIVOTOTFAC from TBFACTURAS order by FECHAELABORACION desc');
    	if($consulta->num_rows()>0){
        	$a=0;
        	foreach ($consulta->result() as $fila){
            	$listar[$a]['numero']=$fila->NUMERO;
            	$listar[$a]['personarecibe']=$fila->TBPERSONARECIBE_ID ;
            	$listar[$a]['personaelaboro']=$fila->TBPERSONAELABORA_ID ;
            	$listar[$a]['fechaelaboracion']=$fila->FECHAELABORACION;
            	$listar[$a]['consecutivo']=$fila->CONSECUTIVOTOTFAC;
            	$a++;
        	}
    	}
    	return $listar;
	}
        function listarfacturas(){
    	$consulta = $this->db->query('select fac.NUMERO, perela.NUMERODOC docela,perela.PNOMBRE nomela,perela.PAPELLIDO apeela,perrec.NUMERODOC docrec,perrec.PNOMBRE nomrec,perrec.PAPELLIDO aperec,fac.FECHAELABORACION, fac.FECHAPAGOMENSUALIDAD, cfac.DESCRIPCION  
									from TBPERSONAS perela inner join TBFACTURAS fac on perela.ID = fac.TBPERSONAELABORA_ID
									inner join TBCONCEPTOFACTURAS cfac on fac.CONSECUTIVOTOTFAC = cfac.ID inner join TBPERSONAS perrec on perrec.ID = fac.TBPERSONARECIBE_ID');
    	if($consulta->num_rows()>0){
        	$a=0;
        	foreach ($consulta->result() as $fila){
            	$listar[$a]['numero']=$fila->NUMERO;
            	$listar[$a]['docela']=$fila->docela;
            	$listar[$a]['nomela']=$fila->nomela;
            	$listar[$a]['apeela']=$fila->apeela;
            	$listar[$a]['docrec']=$fila->docrec;
            	$listar[$a]['nomrec']=$fila->nomrec;
            	$listar[$a]['aperec']=$fila->aperec;
            	$listar[$a]['fecharea']=$fila->FECHAELABORACION;
            	$listar[$a]['fechamen']=$fila->FECHAPAGOMENSUALIDAD;
            	$listar[$a]['concepto']=$fila->DESCRIPCION;
            	$a++;
        	}
    	}
    	return $listar;
	}
        function habitacion(){
    	$consulta = $this->db->query('select DESCRIPCION, CODIGO  from TBHABITACIONES');
    	if($consulta->num_rows()>0){
        	$a=0;
        	foreach ($consulta->result() as $fila){
            	$listarhabi[$a]['descripcion']=$fila->DESCRIPCION;
            	$listarhabi[$a]['codigo']=$fila->CODIGO ;
            	$a++;
        	}
    	}
    	return $listarhabi;
	}
        
         function listarconceptos(){
	    $consulta = $this->db->query('select  ID, DESCRIPCION from TBCONCEPTOFACTURAS');
	    if($consulta->num_rows()>0){
	        $a=0;
	        foreach ($consulta->result() as $fila){
	            $listarconcepto[$a]['id']=$fila->ID;
	            $listarconcepto[$a]['descripcion']=$fila->DESCRIPCION;
	            $a++;
	        }
	    }
	    return $listarconcepto;
	}
	
	function listarDropDownestcivil($Tabla){
    	$consulta = $this->db->query('select  ID, TBESTADOSCIVILESNOMBRE from'." ". $Tabla);
    		if($consulta->num_rows()>0){
        		$a=0;
        		foreach ($consulta->result() as $fila){
			$listarD[$a]['id']=$fila->ID;
            	$listarD[$a]['Nombre']=$fila->TBESTADOSCIVILESNOMBRE;
            	$a++;
        	}
    	}
    	return $listarD;
	}
	
	function listarDropDowntipodoc($Tabla){
    	$consulta = $this->db->query('select  ID, TBTIPODOCUMENTOSNOMBRE from'." ". $Tabla);
    		if($consulta->num_rows()>0){
        		$a=0;
        		foreach ($consulta->result() as $fila){
			$listarD[$a]['id']=$fila->ID;
            	$listarD[$a]['Nombre']=$fila->TBTIPODOCUMENTOSNOMBRE;
            	$a++;
        	}
    	}
    	return $listarD;
	}
	
	function listarDropDownsexo($Tabla){
    	$consulta = $this->db->query('select  ID, TBSEXONOMBRE from'." ". $Tabla);
    		if($consulta->num_rows()>0){
        		$a=0;
        		foreach ($consulta->result() as $fila){
			$listarD[$a]['id']=$fila->ID;
            	$listarD[$a]['Nombre']=$fila->TBSEXONOMBRE;
            	$a++;
        	}
    	}
    	return $listarD;
	}
	
	function listardropdownsubcargo($Tabla){
    	$consulta = $this->db->query('select  ID, TBSUBCARGOSNOMBRE from'." ". $Tabla);
    		if($consulta->num_rows()>0){
        		$a=0;
        		foreach ($consulta->result() as $fila){
			$listarD[$a]['id']=$fila->ID;
            	$listarD[$a]['Nombre']=$fila->TBSUBCARGOSNOMBRE;
            	$a++;
        	}
    	}
    	return $listarD;
	}
	
	function listarDropDownpais($Tabla){
    	$consulta = $this->db->query('select  ID, TBPAISESNOMBRE from'." ". $Tabla);
    		if($consulta->num_rows()>0){
        		$a=0;
        		foreach ($consulta->result() as $fila){
			$listarD[$a]['id']=$fila->ID;
            	$listarD[$a]['Nombre']=$fila->TBPAISESNOMBRE;
            	$a++;
        	}
    	}
    	return $listarD;
	}
	
	function listarDropDowndep($Tabla){
    	$consulta = $this->db->query('select  ID, TBDEPARTAMENTOSNOMBRE from'." ". $Tabla);
    		if($consulta->num_rows()>0){
        		$a=0;
        		foreach ($consulta->result() as $fila){
			$listarD[$a]['id']=$fila->ID;
            	$listarD[$a]['Nombre']=$fila->TBDEPARTAMENTOSNOMBRE;
            	$a++;
        	}
    	}
    	return $listarD;
	}
	
	function listarDropDownmun($Tabla){
    	$consulta = $this->db->query('select  ID, TBMUNICIPIOSNOMBRE from'." ". $Tabla);
    		if($consulta->num_rows()>0){
        		$a=0;
        		foreach ($consulta->result() as $fila){
			$listarD[$a]['id']=$fila->ID;
            	$listarD[$a]['Nombre']=$fila->TBMUNICIPIOSNOMBRE;
            	$a++;
        	}
    	}
    	return $listarD;
	}
	
	function listarDropDownrel($Tabla){
    	$consulta = $this->db->query('select  ID, TBRELIGIONESNOMBRE from'." ". $Tabla);
    		if($consulta->num_rows()>0){
        		$a=0;
        		foreach ($consulta->result() as $fila){
			$listarD[$a]['id']=$fila->ID;
            	$listarD[$a]['Nombre']=$fila->TBRELIGIONESNOMBRE;
            	$a++;
        	}
    	}
    	return $listarD;
	}
// -----------------------

//Listar Pais
function listarDropDown($Tabla){
    $consulta = $this->db->query('select  ID, TBPAISESNOMBRE from'." ". $Tabla);
   // $query = $this->db->get('tbeps');
    if($consulta->num_rows()>0){
        $a=0;
        foreach ($consulta->result() as $fila){
            $listarD[$a]['id']=$fila->ID;
            $listarD[$a]['Nombre']=$fila->TBPAISESNOMBRE;
            $a++;
        }
    }
    return $listarD;
}
//Listar Tipo documento
function listarDropDowndoc($Tabla){
    $consulta = $this->db->query('select  ID, TBTIPODOCUMENTOSNOMBRE from'." ". $Tabla);
   // $query = $this->db->get('tbeps');
    if($consulta->num_rows()>0){
        $a=0;
        foreach ($consulta->result() as $fila){
            $listarD[$a]['id']=$fila->ID;
            $listarD[$a]['Nombre']=$fila->TBTIPODOCUMENTOSNOMBRE;
            $a++;
        }
    }
    return $listarD;
}
//Listar sexo
function listarDropDownsex($Tabla){
    $consulta = $this->db->query('select  ID, TBSEXONOMBRE from'." ". $Tabla);
   // $query = $this->db->get('tbeps');
    if($consulta->num_rows()>0){
        $a=0;
        foreach ($consulta->result() as $fila){
            $listarD[$a]['id']=$fila->ID;
            $listarD[$a]['Nombre']=$fila->TBSEXONOMBRE;
            $a++;
        }
    }
    return $listarD;
}
//Listar estado civil
function listarDropDownestadociv($Tabla){
    $consulta = $this->db->query('select  ID, TBESTADOSCIVILESNOMBRE from'." ". $Tabla);
   // $query = $this->db->get('tbeps');
    if($consulta->num_rows()>0){
        $a=0;
        foreach ($consulta->result() as $fila){
            $listarD[$a]['id']=$fila->ID;
            $listarD[$a]['Nombre']=$fila->TBESTADOSCIVILESNOMBRE;
            $a++;
        }
    }
    return $listarD;
}
//Listar departamento
function listarDropDowndeparta($Tabla){
    $consulta = $this->db->query('select  ID, TBDEPARTAMENTOSNOMBRE from'." ". $Tabla);
   // $query = $this->db->get('tbeps');
    if($consulta->num_rows()>0){
        $a=0;
        foreach ($consulta->result() as $fila){
            $listarD[$a]['id']=$fila->ID;
            $listarD[$a]['Nombre']=$fila->TBDEPARTAMENTOSNOMBRE;
            $a++;
        }
    }
    return $listarD;
}
//Listar municipio 
function listarDropDownmunicipio($Tabla){
    $consulta = $this->db->query('select  ID, TBMUNICIPIOSNOMBRE from'." ". $Tabla);
   // $query = $this->db->get('tbeps');
    if($consulta->num_rows()>0){
        $a=0;
        foreach ($consulta->result() as $fila){
            $listarD[$a]['id']=$fila->ID;
            $listarD[$a]['Nombre']=$fila->TBMUNICIPIOSNOMBRE;
            $a++;
        }
    }
    return $listarD;
}
//Listar municipio 
function listarDropDownreligion($Tabla){
    $consulta = $this->db->query('select  ID, TBRELIGIONESNOMBRE from'." ". $Tabla);
   // $query = $this->db->get('tbeps');
    if($consulta->num_rows()>0){
        $a=0;
        foreach ($consulta->result() as $fila){
            $listarD[$a]['id']=$fila->ID;
            $listarD[$a]['Nombre']=$fila->TBRELIGIONESNOMBRE;
            $a++;
        }
    }
    return $listarD;
}
function listarDropDownMedica($Tabla){
  //  $this->db->where();
    $consulta = $this->db->query('select  ID, NOMBRE from'." ". $Tabla);
   // $query = $this->db->get('tbeps');
    if($consulta->num_rows()>0){
        $a=0;
        foreach ($consulta->result() as $fila){
            $listar[$a]['id']=$fila->ID;
            $listarD[$a]['Nombre']=$fila->NOMBRE;
            $a++;
        }
    }
    return $listarM;
}

function listarDropDowntmov($Tabla){
  //  $this->db->where();
    $consulta = $this->db->query('select  ID, NOMBRE from'." ". $Tabla);
   // $query = $this->db->get('tbeps');
    if($consulta->num_rows()>0){
        $a=0;
        foreach ($consulta->result() as $fila){
            $listartmov[$a]['id']=$fila->ID;
            $listartmov[$a]['Nombre']=$fila->NOMBRE;
            $a++;
        }
    }
    return $listartmov;
}

function listarDropDownProd($Tabla){
    $consulta = $this->db->query('select  ID,concat(NOMBRE," ",PRESENTACION) as PROD from TBPRODUCTOS'." ". $Tabla);
    if($consulta->num_rows()>0){
        $a=0;
        foreach ($consulta->result() as $fila){
            $listarprod[$a]['ID']=$fila->ID;
            $listarprod[$a]['PROD']=$fila->PROD;
            $a++;
        }
    }
    return $listarprod;
}


//function listarperso(){
  //$consulta = $this->db->query('select * from TBPERSONAS ');
     //if($consulta->num_rows()>0){
      //$a = 0;
      /*foreach ($consulta->result() as $fila){
             $listar[$fila->ID]['id']=$fila->ID;
             $listar[$fila->ID]['habid']=$fila->HAB_CODIGO;
             $listar[$fila->ID]['numdoc']=$fila->NUMERODOC;
             $listar[$fila->ID]['pnombre']=$fila->PNOMBRE;
             $listar[$fila->ID]['snombre']=$fila->SNOMBRE;
             $listar[$fila->ID]['papellido']=$fila->PAPELLIDO;
             $listar[$fila->ID]['sapellido']=$fila->SAPELLIDO;
             $listar[$fila->ID]['fechaing']=$fila->FECHAINGRESO;
             $listar[$fila->ID]['foto']=$fila->FOTO;
             $listar[$fila->ID]['usuario']=$fila->USUARIO;
             $listar[$fila->ID]['estado']=$fila->ESTADO;
            // $a++;
      }
     }
     return $listar; 
 }*/
}
?>
