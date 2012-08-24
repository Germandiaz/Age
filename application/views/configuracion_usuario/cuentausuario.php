<div class="cleared"></div>
</div>
<div class="art-layout-cell art-content">
    <div class="art-post">
        <div class="art-post-tl"></div>
        <div class="art-post-tr"></div>
        <div class="art-post-bl"></div>
        <div class="art-post-br"></div>
        <div class="art-post-tc"></div>
        <div class="art-post-bc"></div>
        <div class="art-post-cl"></div>
        <div class="art-post-cr"></div>
        <div class="art-post-cc"></div>
        <div class="art-post-body">
            <div class="art-post-inner art-article">
                <div class="art-postcontent">
                	<input type="button" id="idboton" value="Registros"  class="botones" title="Maestras necesarias para el funcionamiento del sistema" />  
                	<div id="iddiv" align="justify" style="display:none;">
                    <p align="left">&nbsp;<span class="art-button-wrapper">
                    <span class="art-button-l"> </span><span class="art-button-r"> </span><a class="art-button" href="editarcuenta.html">Actualizar datos personales</a></span>
                    	<span class="art-button-wrapper"><span class="art-button-l"> </span><span class="art-button-r"> </span><a class="art-button" href="nuevapaisdepmun.html">Pais - Departamento - Municipio</a></span>
                    	<span class="art-button-wrapper"><span class="art-button-l"> </span><span class="art-button-r"> </span><a class="art-button" href="nuevaconpfactura.html">Conceptos facturas</a></span>
                    	<span class="art-button-wrapper"><span class="art-button-l"> </span><span class="art-button-r"> </span><a class="art-button" href="nuevatipoactividad.html">Tipo actividades</a></span>
                    	<span class="art-button-wrapper"><span class="art-button-l"> </span><span class="art-button-r"> </span><a class="art-button" href="nuevaeps.html">EPS</a></span>
                    	<span class="art-button-wrapper"><span class="art-button-l"> </span><span class="art-button-r"> </span><a class="art-button" href="nuevahabitacion.html">Habitacion</a></span>
						<span class="art-button-wrapper"><span class="art-button-l"> </span><span class="art-button-r"> </span><a class="art-button" href="nuevacargo.html">Cargos</a></span>                                                      
						<span class="art-button-wrapper"><span class="art-button-l"> </span><span class="art-button-r"> </span><a class="art-button" href="nuevavaloracion.html">Valoraci&#243;n</a></span>
						<span class="art-button-wrapper"><span class="art-button-l"> </span><span class="art-button-r"> </span><a class="art-button" href="nuevareligion.html">Religion</a></span>
						<span class="art-button-wrapper"><span class="art-button-l"> </span><span class="art-button-r"> </span><a class="art-button" href="nuevafundacion.html">Fundaci&#243;n</a></span>
						<span class="art-button-wrapper"><span class="art-button-l"> </span><span class="art-button-r"> </span><a class="art-button" href="nuevaescolaridad.html">Escolaridades</a></span>
						<span class="art-button-wrapper"><span class="art-button-l"> </span><span class="art-button-r"> </span><a class="art-button" href="nuevaproducto.html">Productos</a></span>
						<span class="art-button-wrapper"><span class="art-button-l"> </span><span class="art-button-r"> </span><a class="art-button" href="nuevadocumento.html">Documentos</a></span>
					</p>
					</div>             
                    <p><br /></p>
                    <table width="662" border="0">
	<tbody>
		<tr>
			<th width="195" align="left" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Nombre Completo:</th>
			<td width="163" style="border-width: 0px; "><?php echo $Listar[0]['pnombre']," ",$Listar[0]['papellido']; ?></td>
			<td rowspan="15" style="border-width: 0px; ">&nbsp;</td>
			<th width="81" align="left" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Perfil: </th>
			<td width="9" rowspan="15" style="border-width: 0px; ">&nbsp;</td>
			<td width="42" style="border-width: 0px; "><?php echo $Listar[0]['subcargoid']; ?></td>
			<td width="39" style="border-width: 0px; ">&nbsp;</td>
			<td width="47" style="border-width: 0px; ">&nbsp;</td>
		</tr>
		<tr>
			<th align="left" valign="middle" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">DNI:</th>
			<td style="border-width: 0px; "><?php echo $Listar[0]['numdoc']; ?></td>
			<th align="left" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Usuario:</th>
			<td colspan="3" style="border-width: 0px; "><?php echo $Listar[0]['usuario']; ?></td>
		</tr>
		<tr>
			<th align="left" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Ciudad de Residencia:</th>
			<td style="border-width: 0px; "><?php echo $Listar[0]['mun']; ?></td>
			<th align="left" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">RH:</th>
			<td colspan="3" style="border-width: 0px; "><?php echo $Listar[0]['rh']; ?></td>
			</tr>
		<tr>
			<th align="left" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Departamento de Residencia:</th>
			<td style="border-width: 0px; "><?php echo $Listar[0]['dep']; ?></td>
			<th style="border-width: 0px; text-align: left">Nro Habitacion</th>
			<td colspan="3" style="border-width: 0px; "><?php echo $Listar[0]['habid']; ?></td>
			</tr>
		<tr>
			<th align="left" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Pais de Residencia:</th>
			<td style="border-width: 0px; "><?php echo $Listar[0]['pais']; ?></td>
			<th style="border-width: 0px; text-align: left">EPS</th>
			<td colspan="3" style="border-width: 0px; "><?php echo $Listar[0]['epsid']; ?></td>
			</tr>
		<tr>
			<th align="left" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Estado Civil:</th>
			<td style="border-width: 0px; "><?php echo $Listar[0]['estcivilid']; ?></td>
			<th style="border-width: 0px; text-align: left ">Regilion: </th>
			<td colspan="3" style="border-width: 0px; "><?php echo $Listar[0]['religionid']; ?></td>
			</tr>
		<tr>
			<th align="left" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Sexo:</th>
			<td style="border-width: 0px; "><?php echo $Listar[0]['sexo']; ?></td>
			<th style="border-width: 0px; text-align: left ">Fundaci&#243;n: </th>
			<td colspan="3" style="border-width: 0px; "><?php echo $Listar[0]['sesionid']; ?></td>
			</tr>
		<tr>
			<th align="left" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Habitaci&#243;n:</th>
			<td style="border-width: 0px; "><?php echo $Listar[0]['habid']; ?></td>
			<th style="border-width: 0px; text-align: left"><span class="art-button-wrapper"><span class="art-button-l"> </span><span class="art-button-r"> </span><a class="art-button" href="nuevadocumento.html">Medicamentos</a></span></th>
			<td colspan="3" style="border-width: 0px; ">&nbsp;</td>
			</tr>
		<tr>
			<th align="left" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Fecha de nacimiento:</th>
			<td style="border-width: 0px; "><?php echo $Listar[0]['fechanac']; ?></td>
			<td style="border-width: 0px; ">&nbsp;</td>
			<td style="border-width: 0px; ">&nbsp;</td>
			<td style="border-width: 0px; ">&nbsp;</td>
			<td style="border-width: 0px; ">&nbsp;</td>
		</tr>
		<tr>
			<th align="left" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Numero de hijos:</th>
			<td style="border-width: 0px; "><?php echo $Listar[0]['numhijos']; ?></td>
			<td style="border-width: 0px; ">&nbsp;</td>
			<td style="border-width: 0px; ">&nbsp;</td>
			<td style="border-width: 0px; ">&nbsp;</td>
			<td style="border-width: 0px; ">&nbsp;</td>
		</tr>
		<tr>
			<th align="left" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Direcci&#243;n Residencia:</th>
			<td style="border-width: 0px; "><?php echo $Listar[0]['dirres']; ?></td>
			<td style="border-width: 0px; ">&nbsp;</td>
			<td style="border-width: 0px; ">&nbsp;</td>
			<td style="border-width: 0px; ">&nbsp;</td>
			<td style="border-width: 0px; ">&nbsp;</td>
		</tr>
		<tr>
			<th align="left" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Telefono Residencia:</th>
			<td style="border-width: 0px; "><?php echo $Listar[0]['telres']; ?></td>
			<td style="border-width: 0px; ">&nbsp;</td>
			<td style="border-width: 0px; ">&nbsp;</td>
			<td style="border-width: 0px; ">&nbsp;</td>
			<td style="border-width: 0px; ">&nbsp;</td>
		</tr>
		<tr>
			<th align="left" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Celular:</th>
			<td style="border-width: 0px; "><?php echo $Listar[0]['celular']; ?></td>
			<td style="border-width: 0px; ">&nbsp;</td>
			<td style="border-width: 0px; ">&nbsp;</td>
			<td style="border-width: 0px; ">&nbsp;</td>
			<td style="border-width: 0px; ">&nbsp;</td>
		</tr>
		<tr>
			<td style="border-width: 0px; ">&nbsp;</td>
			<td style="border-width: 0px; ">&nbsp;</td>
			<td style="border-width: 0px; ">&nbsp;</td>
			<td style="border-width: 0px; ">&nbsp;</td>
			<td style="border-width: 0px; ">&nbsp;</td>
			<td style="border-width: 0px; ">&nbsp;</td>
		</tr>
		<tr>
			<td style="border-width: 0px; ">&nbsp;</td>
			<td style="border-width: 0px; ">&nbsp;</td>
			<td style="border-width: 0px; ">&nbsp;</td>
			<td style="border-width: 0px; ">&nbsp;</td>
			<td style="border-width: 0px; ">&nbsp;</td>
			<td style="border-width: 0px; ">&nbsp;</td>
		</tr>
	</tbody>
</table>
                    <p><br /></p>
                    
                </div>
                <div class="cleared"></div>
            </div>
            <div class="cleared"></div>
        </div>
    </div>
    <div class="cleared"></div>
</div>
</div>
</div>
