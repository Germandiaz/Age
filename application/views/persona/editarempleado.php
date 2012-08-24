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
				<?php $atributos = array('id' => 'editarpersona_form', 'class' => 'form_editarpersona'); 
				echo form_open('buscarempleado/actualizarempleado', $atributos); ?> 
                <div class="art-postcontent">               	
                   	<p align="left"><?php echo form_submit('submit', 'Actualizar'); ?>
                    <table width="700" border="0">
                        <tbody>
                        <?php
                            foreach($resultadoconsul as $listar){ 

                            $perdirres = array(
                                'name' => 'txtdirres',
                                'id' => 'txtdirres',
                                'value' => $listar['dirres']
                            );
                            $pertelres = array(
                                'name' => 'txttelres',
                                'id' => 'txttelres',
                                'value' =>$listar['telres']
                            );
                            $percelular = array(
                                'name' => 'txtcelular',
                                'id' => 'txtcelular',
                                'value' => $listar['celular']
                            );
                            $perfoto = array(
                                'name' => 'txtfoto',
                                'id' => 'txtfoto',
                                'value' => $listar['foto']
                            );
                           /* $pernumhij = array(
                                'name' => 'txtnumhij',
                                'id' => 'txtnumhij',
                                'value' => $listar['numhijos']
                            );*/
                            $idpersona = array(
                                'name' => 'txtidpersona',
                               // 'id' => 'txtidpersona',
                                'value' => $listar['id'],
                                'readonly' => 'readonly'
                            );
                            }
                            ?>
                            
                            <tr>
                                <th width="195" align="left" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Nombre Completo:</th>
                                <td width="229" style="border-width: 0px; "><?php foreach($resultadoconsul as $listarconsultaper){ ?> <?php echo $listarconsultaper['primernom'] ?> <?php echo $listarconsultaper['snombre'] ?> <?php echo $listarconsultaper['papellido'] ?> <?php echo $listarconsultaper['sapellido'] ?> </td>
                                <th colspan="2" align="left" style="border-width: 0px; ">Número Contrato: </th>
                                <td width="8" style="border-width: 0px; "></td>
                                <td width="70" style="border-width: 0px; "><?php echo $listarconsultaper['contrato']; ?></td>
                                <td width="34" style="border-width: 0px; ">&nbsp;</td>
                                <th colspan="2" align="left" style="border-width: 0px; "> </th>
                                <td width="98" style="border-width: 0px; "></td>
                            </tr>
                            <tr>
                               
                            </tr>
                            <tr>
                                <th width="195" align="left" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">ID:</th>
                                <td width="229" style="border-width: 0px; "><?php echo form_input($idpersona)?></td>
                                <th colspan="2" align="left" style="border-width: 0px; "> </th>
                                <td width="8" style="border-width: 0px; "></td>
                                <td width="70" style="border-width: 0px; "></td>
                                <td width="34" style="border-width: 0px; ">&nbsp;</td>
                                <th colspan="2" align="left" style="border-width: 0px; "> </th>
                                <td width="98" style="border-width: 0px; "></td>
                            </tr>
                            <tr>
                                <th align="left" style="border-width: 0px; text-align: left ">DNI:</th>
                                <td style="border-width: 0px; "><?php echo $listarconsultaper['numdoc']; ?></td>
                                <th colspan="2" align="left" style="border-width: 0px; ">Usuario:</th>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td colspan="3" style="border-width: 0px; "><?php echo $listarconsultaper['usuario']; ?></td>
                                
                            </tr>
                            <?php } ?>
                            <tr>
                                <th align="left" style="border-width: 0px; text-align: left ">Pais de Residencia:</th>
                                <td style="border-width: 0px; "> <select name="selectpaises" id="selectpaises">
                                            <?php foreach ($listarpaises as $pais) { ?> 
                                                <option value=<?php echo $pais['id'] ?>> <?php echo $pais['Nombre']; ?></option> 
                                               
                                            <?php } ?>
                                    </select>       
                                <th width="44" style="border-width: 0px; ">//</th>
                                <td width="26" style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; "></td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th align="left" style="border-width: 0px; text-align: left">Departamento:</th>
                                <td style="border-width: 0px; "><select name="selectdeoartamento" id="selectdepartamento">
                                            <?php foreach ($listardeparta as $departa) { ?> 
                                                <option value=<?php echo $departa['id'] ?>> <?php echo $departa['Nombre']; ?></option> 
                                               
                                            <?php } ?>
                                    </select></td>
                            </tr>
                            <tr>
                                <th align="left" style="border-width: 0px; text-align: left">Ciudad de Residencia:</th>
                                <td style="border-width: 0px; "><select name="selectciudad" id="selectciudad">
                                            <?php foreach ($listarmunic as $munici) { ?> 
                                                <option value=<?php echo $munici['id'] ?>> <?php echo $munici['Nombre']; ?></option> 
                                               
                                            <?php } ?>
                                    </select></td>
                                <th colspan="4" align="left" style="border-width: 0px; text-align: left"><span class="art-button-wrapper"><span class="art-button-l"> </span><span class="art-button-r"> </span><a class="art-button" href="usuarioingresadocuenta.html">Cambiar Contrasena</a></span></th>
                            </tr>
                            <tr>
                                <th align="left" style="border-width: 0px; text-align: left">Estado Civil:</th>
                                <td style="border-width: 0px; "><select name="selectestadocivil" id="selectestadocivil">
                                            <?php foreach ($listarestciv as $estadocivil) { ?> 
                                                <option value=<?php echo $estadocivil['id'] ?>> <?php echo $estadocivil['Nombre']; ?></option> 
                                            <?php } ?>
                                    </select></td>
                            </tr>
                            <tr>
                                <th align="left" style="border-width: 0px; text-align: left">Sexo:</th>
                                <td style="border-width: 0px; "><?php foreach($resultadoconsul as $listarconsultaper){ ?></td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th align="left" style="border-width: 0px; text-align: left">Fecha de nacimiento:</th>
                                <td style="border-width: 0px; "><?php echo $listarconsultaper['fechanac']; ?></td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th align="left" style="border-width: 0px; text-align: left">RH:</th>
                                <td style="border-width: 0px; "><?php echo $listarconsultaper['rh']; ?></td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <?php } ?>
                            <tr>
                                <th align="left" style="border-width: 0px; text-align: left">Dirección Residencia:</th>
                                <td style="border-width: 0px; "><?php echo form_input($perdirres); ?></td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th align="left" style="border-width: 0px; text-align: left">Teléfono Residencia:</th>
                                <td style="border-width: 0px; "><?php echo form_input($pertelres); ?></td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th align="left" style="border-width: 0px; text-align: left">Celular:</th>
                                <td style="border-width: 0px; "><?php echo form_input($percelular); ?></td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th align="left" style="border-width: 0px; text-align: left">Cambiar foto:</th>
                                <td style="border-width: 0px; "><?php echo form_upload($perfoto); ?></td>
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
