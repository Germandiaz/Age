<div>
	<?php 
        $atributos = array('id' => 'editarpersona_form', 'class' => 'form_editarpersona'); 
		echo form_open('buscargeronte/actualizargeronte', $atributos); 
    ?> 
    <div>               	
        <p><?php echo form_submit('submit', 'Actualizar'); ?> </p>  
        <table>
            <tbody>
                <?php
                    foreach($resultadoconsul as $listar){ 
                        $perdirres = array('name' => 'txtdirres','id' => 'txtdirres','value' => $listar['dirres']);
                        $pertelres = array('name' => 'txttelres','id' => 'txttelres','value' =>$listar['telres']);
                        $percelular = array('name' => 'txtcelular','id' => 'txtcelular','value' => $listar['celular']);
                        $perfoto = array('name' => 'txtfoto','id' => 'txtfoto','value' => $listar['foto']);
                        $perhabitacion = array('name' => 'txthabitacion','id' => 'txthabitacion','value' => $listar['habid']);
                        $pernumhij = array('name' => 'txtnumhij','id' => 'txtnumhij','value' => $listar['numhijos']);
                        $idpersona = array('name' => 'txtidpersona','id' => 'txtidpersona','value' => $listar['id'],'readonly' => 'readonly');
                        $fechaingreso = array('name' => 'txtfechaingreso','id' => 'txtfechaingreso','value' => $listar['id'],'readonly' => 'txtfechaingreso');
                        $numerodoco = array('name' => 'txtnumerodoc','id' => 'txtnumerodoc','value' => $listar['id'],'readonly' => 'txtnumerodoc');
                        $rh = array('name' => 'txtrh','id' => 'txtrh','value' => $listar['id'],'readonly' => 'txtrh');
                        $numeroherm = array('name' => 'txtnumeroherman','id' => 'txtnumeroherman','value' => $listar['numherm'],'readonly' => 'txtnumeroherman');
                    }
                ?>
                <tr>
                    <th>Nombre Completo:</th>
                    <td><?php foreach($resultadoconsul as $listarconsultaper){ ?> <?php echo $listarconsultaper['primernom'] ?> <?php echo $listarconsultaper['snombre'] ?> <?php echo $listarconsultaper['papellido'] ?> <?php echo $listarconsultaper['sapellido'] ?> </td>
                    <th colspan="2">Número Contrato: </th>
                    <td></td>
                    <td><?php echo $listarconsultaper['contrato']; ?></td>
                    <td>&nbsp;</td>
                    <th colspan="2"> </th>
                    <td></td>
                </tr>
                <tr>
                    <th>ID:</th>
                    <td><?php echo form_input($idpersona)?></td>
                    <th colspan="2"> </th>
                    <td></td>
                    <td></td>
                    <td>&nbsp;</td>
                    <th colspan="2"> </th>
                    <td></td>
                </tr>
                <tr>
                    <th>Número Documento:</th>
                    <td><?php echo $listarconsultaper['numdoc']; ?></td>
                    <th colspan="2">Fecha Ingreso:</th>
                    <td>&nbsp;</td>
                    <td colspan="3"><?php echo $listarconsultaper['fechaing']; ?></td>          
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
                    <th></th>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <th>Departamentos:</th>
                    <td>
                        <select name="selectdeoartamento" id="selectdepartamento">
                            <?php foreach ($listardeparta as $departa) { ?> 
                                <option value=<?php echo $departa['id'] ?>> <?php echo $departa['Nombre']; ?></option> 
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
                </tr>
                <tr>
                    <th >Estado Civil:</th>
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
                    <th>Número de Hijos:</th>
                    <td><?php echo form_input($pernumhij); ?></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>                                
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <th>Número de Hermanos:</th>
                    <td><?php echo form_input($numeroherm); ?></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <th>Número Habitación:</th>
                    <td><?php echo form_input($perhabitacion); ?></td>
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