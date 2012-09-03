<div>
	<?php 
        $atributos = array('id' => 'editarpersona_form', 'class' => 'form_editarpersona'); 
	    echo form_open('buscarpersona/actualizarpersona', $atributos); 
    ?> 
    <div>               	
    <p><?php echo form_submit('submit', 'Actualizar'); ?></p>  
    <table>
        <tbody>
            <?php
                foreach($resultadoconsul as $listar){ 
                    $perpaisres = array('name' => 'txtpaisres','id' => 'txtpaisres','value' => ''/*$listar['pais']*/);
                    $perdepres = array('name' => 'txtdepres','id' => 'txtdepres','value' => ''/*$listar['dep']*/);
                    $permunres = array('name' => 'txtmunres','id' => 'txtmunres','value' => ''/*$Listar[0]['mun']*/);
                    $perestcivil = array('name' => 'txtestcivil','id' => 'txtestcivil','value' => ''/*$Listar[0]['estcivilid']*/);
                    $perdirres = array('name' => 'txtdirres','id' => 'txtdirres','value' => $listar['dirres']);
                    $pertelres = array('name' => 'txttelres','id' => 'txttelres','value' =>$listar['telres']);
                    $percelular = array('name' => 'txtcelular','id' => 'txtcelular','value' => $listar['celular']);
                    $perfoto = array('name' => 'txtfoto','id' => 'txtfoto','value' => $listar['foto']);
                    $pernumhij = array('name' => 'txtnumhij','id' => 'txtnumhij','value' => $listar['numhijos']);
                    $idpersona = array('name' => 'txtidpersona',/*'id' => 'txtidpersona',*/'value' => $listar['id'],'readonly' => 'readonly');
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
                <th>DNI:</th>
                <td><?php echo $listarconsultaper['numdoc']; ?></td>
                <th colspan="2">Usuario:</th>
                <td>&nbsp;</td>
                <td colspan="3"><?php echo $listarconsultaper['usuario']; ?></td>
            </tr>
            <?php } ?>
            <tr>
                <th>Pais de Residencia:</th>
                <td>        
                <th># de hijos: </th>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><?php echo form_input($pernumhij); ?></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <th>Departamento:</th>
                <td><?php echo form_input($perdepres); ?></td>
            </tr>
            <tr>
                <th>Ciudad de Residencia:</th>
                <td><?php echo form_input($permunres); ?></td>
                <th colspan="4"><a class="art-button" href="usuarioingresadocuenta.html">Cambiar Contrasena</a></th>
            </tr>
            <tr>
                <th>Estado Civil:</th>
                <td><select name="selectestadocivil" id="selectestadocivil">
                    <?php foreach ($istardeparta as $estadocivil) { ?> 
                        <option value=<?php echo $listarestciv['id'] ?>> <?php echo $estadocivil['Nombre']; ?></option> 
                    <?php } ?>
                    </select> <?php echo form_input($perestcivil); ?>
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