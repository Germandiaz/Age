<div>
	<?php $atributos = array('id' => 'editarpersona_form', 'class' => 'form_editarpersona'); 
	echo form_open('buscarempleado/actualizarempleado', $atributos); ?> 
    <div>               	
        <p align="left"><?php echo form_submit('submit', 'Actualizar'); ?>
        <table>
            <tbody>
                <?php
                    foreach($resultadoconsul as $listar){ 
                        $perdirres = array('name' => 'txtdirres','id' => 'txtdirres','value' => $listar['dirres']);
                        $pertelres = array('name' => 'txttelres','id' => 'txttelres','value' =>$listar['telres']);
                        $percelular = array('name' => 'txtcelular','id' => 'txtcelular','value' => $listar['celular']);
                        $perfoto = array('name' => 'txtfoto','id' => 'txtfoto','value' => $listar['foto']);
                        /* $pernumhij = array('name' => 'txtnumhij','id' => 'txtnumhij','value' => $listar['numhijos']);*/
                        $idpersona = array('name' => 'txtidpersona',/* 'id' => 'txtidpersona',*/'value' => $listar['id'],'readonly' => 'readonly');
                    }
                ?>
                <tr>
                    <th>Nombre Completo:</th>
                    <td><?php foreach($resultadoconsul as $listarconsultaper){ ?> 
                        <?php echo $listarconsultaper['primernom'] ?> 
                        <?php echo $listarconsultaper['snombre'] ?> 
                        <?php echo $listarconsultaper['papellido'] ?> 
                        <?php echo $listarconsultaper['sapellido'] ?> 
                    </td>
                    <th>Número Contrato: </th>
                    <td></td>
                    <td><?php echo $listarconsultaper['contrato']; ?></td>
                    <td>&nbsp;</td>
                    <th></th>
                    <td></td>
                </tr>
                <tr>
                    <th>ID:</th>
                    <td><?php echo form_input($idpersona)?></td>
                    <th></th>
                    <td></td>
                    <td></td>
                    <td>&nbsp;</td>
                    <th> </th>
                    <td></td>
                </tr>
                <tr>
                    <th>DNI:</th>
                    <td><?php echo $listarconsultaper['numdoc']; ?></td>
                    <th>Usuario:</th>
                    <td>&nbsp;</td>
                    <td><?php echo $listarconsultaper['usuario']; ?></td>
                </tr>
                <?php } ?>
                <tr>
                    <th>Pais de Residencia:</th>
                    <td> 
                        <select name="selectpaises" id="selectpaises">
                            <?php foreach ($listarpaises as $pais) { ?> 
                                <option value=<?php echo $pais['id'] ?>> <?php echo $pais['Nombre']; ?></option> 
                            <?php } ?>
                        </select> 
                    </td>      
                    <th>//</th>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <th>Departamento:</th>
                    <td>
                        <select name="selectdeoartamento" id="selectdepartamento">
                            <?php foreach ($listardeparta as $departa) { ?> 
                                <option value=<?php echo $departa['id'] ?>> 
                            <?php echo $departa['Nombre']; ?></option> 
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Ciudad de Residencia:</th>
                    <td>
                        <select name="selectciudad" id="selectciudad">
                            <?php foreach ($listarmunic as $munici) { ?> 
                                <option value=<?php echo $munici['id'] ?>> <?php echo $munici['Nombre']; ?></option> 
                            <?php } ?>
                        </select>
                    </td>
                    <th>
                        <ahref="usuarioingresadocuenta.html">Cambiar Contrasena</a>
                    </th>
                </tr>
                <tr>
                    <th>Estado Civil:</th>
                    <td>
                        <select name="selectestadocivil" id="selectestadocivil">
                            <?php foreach ($listarestciv as $estadocivil) { ?> 
                                <option value=<?php echo $estadocivil['id'] ?>> <?php echo $estadocivil['Nombre']; ?></option> 
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Sexo:</th>
                    <td><?php foreach($resultadoconsul as $listarconsultaper){ ?></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <th>Fecha de nacimiento:</th>
                    <td><?php echo $listarconsultaper['fechanac']; ?></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <th>RH:</th>
                    <td><?php echo $listarconsultaper['rh']; ?></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <?php } ?>
                <tr>
                    <th>Dirección Residencia:</th>
                    <td><?php echo form_input($perdirres); ?></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <th>Teléfono Residencia:</th>
                    <td><?php echo form_input($pertelres); ?></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <th>Celular:</th>
                    <td><?php echo form_input($percelular); ?></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <th>Cambiar foto:</th>
                    <td><?php echo form_upload($perfoto); ?></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
