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
				<?php $atributos = array('id' => 'actper_form', 'class' => 'form_actper'); 
				echo form_open('editarcuenta/actper', $atributos); ?> 
                <div class="art-postcontent">               	
                   	<p align="left"><?php echo form_submit('submit', 'Actualizar'); ?>
                    </p>  
                    <table width="700" border="0">
                        <tbody>
                        <?php
                        	$pernumdoc = array('name' => 'txtnumdoc','id' => 'txtnumdoc','value' => $Listar[0]['numdoc']);
                        	$perprinom = array('name' => 'txtprinom','id' => 'txtprinom','value' => $Listar[0]['pnombre']);
                        	$persegnom = array('name' => 'txtsegnom','id' => 'txtsegnom','value' => $Listar[0]['snombre']);
                        	$perpriape = array('name' => 'txtpriape','id' => 'txtpriape','value' => $Listar[0]['papellido']);
                        	$persegape = array('name' => 'txtsegape','id' => 'txtsegape','value' => $Listar[0]['sapellido']);
                        	$perfecing = array('name' => 'txtfecing','id' => 'txtfecing','value' => $Listar[0]['fechaing']);
                        	$perfecnac = array('name' => 'txtfecnac','id' => 'txtfecnac','value' => $Listar[0]['fechanac']);
                        	$pernumhij = array('name' => 'txtnumhij','id' => 'txtnumhij','value' => $Listar[0]['numhijos']);
                        	$pernumher = array('name' => 'txtnumher','id' => 'txtnumher','value' => $Listar[0]['numherm']);
                        	$perparres = array('name' => 'txtparres','id' => 'txtparres','value' => $Listar[0]['parentescores']);
                        	$perdirres = array('name' => 'txtdirres','id' => 'txtdirres','value' => $Listar[0]['dirres']);
                        	$pertelres = array('name' => 'txttelres','id' => 'txttelres','value' => $Listar[0]['telres']);
                        	$perobsper = array('name' => 'txtobsper','id' => 'txtobsper','value' => $Listar[0]['observacion']);
                        	$perrh = array('name' => 'txtrh','id' => 'txtrh','value' => $Listar[0]['rh']);
                        	$perproc = array('name' => 'txtproc','id' => 'txtproc','value' => $Listar[0]['procedencia']);
                        	$perfoto = array('name' => 'txtfoto','id' => 'txtfoto','value' => $Listar[0]['foto']);
                        	$percelular = array('name' => 'txtcelular','id' => 'txtcelular','value' => $Listar[0]['celular']);
                        	$pernumcon = array('name' => 'txtnumcon','id' => 'txtnumcon','value' => $Listar[0]['contrato']);
                        	$perusuario = array('name' => 'txtusuario','id' => 'txtusuario','value' => $Listar[0]['usuario']);
                        	$peremail = array('name' => 'txtemail','id' => 'txtemail','value' => $Listar[0]['email']);
                        	
			               	$pernumhab = array('name' => 'txtnumhab','id' => 'txtnumhab','value' => $Listar[0]['habid']);
			               	$perrespid = array('name' => 'txtrespid','id' => 'txtrespid','value' => $Listar[0]['respid']);
			               	$perrelid = array('name' => 'txtrelid','id' => 'txtrelid','value' => $Listar[0]['religionid']);
			               	$perepsid = array('name' => 'txtepsid','id' => 'txtepsid','value' => $Listar[0]['epsid']);
			               	$persexo = array('name' => 'txtsexo','id' => 'txtsexo','value' => $Listar[0]['sexo']);
			               	$persubcar = array('name' => 'txtsubcar','id' => 'txtsubcar','value' => $Listar[0]['subcargoid']);
			               	$perestcivil = array('name' => 'txtestcivil','id' => 'txtestcivil','value' => $Listar[0]['estcivilid']);
			               	$permunres = array('name' => 'txtmunres','id' => 'txtmunres','value' => $Listar[0]['dep']);
                            $pertipodoc = array('name' => 'txttipodoc','id' => 'txttipodoc','value' => $Listar[0]['tipodocid']);
                            $persesion = array('name' => 'txtsesion','id' => 'txtsesion','value' => $Listar[0]['sesionid']);
                            ?>
                            <tr>
                                <th width="195" align="left" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Nombre:</th>
                                <td width="229" style="border-width: 0px; "><?php echo form_input($perprinom); ?></td>
                                <th colspan="2" align="left" style="border-width: 0px; ">Id AGE: </th>
                                <td width="8" style="border-width: 0px; ">&nbsp;</td>
                                <td width="70" style="border-width: 0px; "><?php echo $Listar[0]['contrato']; ?></td>
                                <td width="34" style="border-width: 0px; ">&nbsp;</td>
                                <td width="98" style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th align="left" style="border-width: 0px; text-align: left ">DNI:</th>
                                <td style="border-width: 0px; "><?php echo $Listar[0]['numdoc']; ?></td>
                                <th colspan="2" align="left" style="border-width: 0px; ">Usuario:</th>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td colspan="3" style="border-width: 0px; "><?php echo $Listar[0]['usuario']; ?></td>
                            </tr>
                            <tr>
                                <th align="left" style="border-width: 0px; text-align: left ">Pais de Residencia:</th>
                                <td style="border-width: 0px; "><?php //echo form_input($perpaisres); ?></td>
                                <th width="44" style="border-width: 0px; "># de hijos: </th>
                                <td width="26" style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; "><?php echo form_input($pernumhij); ?></td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th align="left" style="border-width: 0px; text-align: left">Departamento:</th>
                                <td style="border-width: 0px; "><?php //echo form_input($perdepres); ?></td>
                            </tr>
                            <tr>
                                <th align="left" style="border-width: 0px; text-align: left">Ciudad de Residencia:</th>
                                <td style="border-width: 0px; "><?php echo form_input($permunres); ?></td>
                                <th colspan="4" align="left" style="border-width: 0px; text-align: left"><span class="art-button-wrapper"><span class="art-button-l"> </span><span class="art-button-r"> </span><a class="art-button" href="usuarioingresadocuenta.html">Cambiar Contrasena</a></span></th>
                            </tr>
                            <tr>
                                <th align="left" style="border-width: 0px; text-align: left">Estado Civil:</th>
                                <td style="border-width: 0px; "><?php echo form_input($perestcivil); ?></td>
                            </tr>
                            <tr>
                                <th align="left" style="border-width: 0px; text-align: left">Sexo:</th>
                                <td style="border-width: 0px; "><?php echo $Listar[0]['sexo']; ?></td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th align="left" style="border-width: 0px; text-align: left">Fecha de nacimiento:</th>
                                <td style="border-width: 0px; "><?php echo $Listar[0]['fechanac']; ?></td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th align="left" style="border-width: 0px; text-align: left">RH:</th>
                                <td style="border-width: 0px; "><?php echo $Listar[0]['rh']; ?></td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
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
