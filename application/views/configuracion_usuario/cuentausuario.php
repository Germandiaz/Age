<div>
    <input type="button" id="idboton" value="Registros" title="Maestras necesarias para el funcionamiento del sistema" />
    <div id="iddiv" align="justify">
        <p>
            <a href="editarcuenta.html">Actualizar datos personales</a></span>
            <a href="nuevapaisdepmun.html">Pais - Departamento - Municipio</a></span>
            <a href="nuevaconpfactura.html">Conceptos facturas</a></span>
            <a href="nuevatipoactividad.html">Tipo actividades</a></span>
            <a href="nuevaeps.html">EPS</a></span>
            <a href="nuevahabitacion.html">Habitacion</a></span>
			<a href="nuevacargo.html">Cargos</a></span>
			<a href="nuevavaloracion.html">Valoraci&#243;n</a></span>
			<a href="nuevareligion.html">Religion</a></span>
			<a href="nuevafundacion.html">Fundaci&#243;n</a></span>
			<a href="nuevaescolaridad.html">Escolaridades</a></span>
			<a href="nuevaproducto.html">Productos</a></span>
			<a href="nuevadocumento.html">Documentos</a></span>
		</p>
	</div>
    <table>
		<tbody>
			<tr>
				<th>Nombre Completo:</th>
				<td><?php echo $Listar[0]['pnombre']," ",$Listar[0]['papellido']; ?></td>
				<td rowspan="15">&nbsp;</td>
				<th>Perfil: </th>
				<td rowspan="15">&nbsp;</td>
				<td><?php echo $Listar[0]['subcargoid']; ?></td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<th>DNI:</th>
				<td><?php echo $Listar[0]['numdoc']; ?></td>
				<th>Usuario:</th>
				<td colspan="3"><?php echo $Listar[0]['usuario']; ?></td>
			</tr>
			<tr>
				<th>Ciudad de Residencia:</th>
				<td><?php echo $Listar[0]['mun']; ?></td>
				<th>RH:</th>
				<td colspan="3"><?php echo $Listar[0]['rh']; ?></td>
			</tr>
			<tr>
				<th>Departamento de Residencia:</th>
				<td><?php echo $Listar[0]['dep']; ?></td>
				<th>Nro Habitacion</th>
				<td colspan="3"><?php echo $Listar[0]['habid']; ?></td>
			</tr>
			<tr>
				<th>Pais de Residencia:</th>
				<td><?php echo $Listar[0]['pais']; ?></td>
				<th>EPS</th>
				<td colspan="3"><?php echo $Listar[0]['epsid']; ?></td>
				</tr>
			<tr>
				<th>Estado Civil:</th>
				<td><?php echo $Listar[0]['estcivilid']; ?></td>
				<th>Regilion: </th>
				<td colspan="3"><?php echo $Listar[0]['religionid']; ?></td>
				</tr>
			<tr>
				<th>Sexo:</th>
				<td><?php echo $Listar[0]['sexo']; ?></td>
				<th>Fundaci&#243;n: </th>
				<td colspan="3"><?php echo $Listar[0]['sesionid']; ?></td>
			</tr>
			<tr>
				<th>Habitaci&#243;n:</th>
				<td><?php echo $Listar[0]['habid']; ?></td>
				<th><a href="nuevadocumento.html">Medicamentos</a></th>
				<td colspan="3">&nbsp;</td>
			</tr>
			<tr>
				<th>Fecha de nacimiento:</th>
				<td><?php echo $Listar[0]['fechanac']; ?></td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<th>Numero de hijos:</th>
				<td><?php echo $Listar[0]['numhijos']; ?></td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<th>Direcci&#243;n Residencia:</th>
				<td><?php echo $Listar[0]['dirres']; ?></td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<th>Telefono Residencia:</th>
				<td><?php echo $Listar[0]['telres']; ?></td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<th>Celular:</th>
				<td><?php echo $Listar[0]['celular']; ?></td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
		</tbody>
	</table>
</div>