<div>
	<?php $atributos = array('id' => 'actper_form', 'class' => 'form_actper');
		echo form_open('editarcuenta/actper', $atributos);
    ?>
    <div>
        <p><?php echo form_submit('submit', 'Actualizar'); ?></p>
        <table>
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
                    <th>Nombre:</th>
                    <td><?php echo form_input($perprinom); ?></td>
                    <th colspan="2">Id AGE: </th>
                    <td>&nbsp;</td>
                    <td><?php echo $Listar[0]['contrato']; ?></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <th>DNI:</th>
                    <td><?php echo $Listar[0]['numdoc']; ?></td>
                    <th colspan="2">Usuario:</th>
                    <td>&nbsp;</td>
                    <td colspan="3"><?php echo $Listar[0]['usuario']; ?></td>
                </tr>
                <tr>
                    <th>Pais de Residencia:</th>
                    <td><?php //echo form_input($perpaisres); ?></td>
                    <th># de hijos: </th>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><?php echo form_input($pernumhij); ?></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <th>Departamento:</th>
                    <td><?php //echo form_input($perdepres); ?></td>
                </tr>
                <tr>
                    <th>Ciudad de Residencia:</th>
                    <td><?php echo form_input($permunres); ?></td>
                    <th colspan="4"><a href="usuarioingresadocuenta.html">Cambiar Contrasena</a></th>
                </tr>
                <tr>
                    <th>Estado Civil:</th>
                    <td><?php echo form_input($perestcivil); ?></td>
                </tr>
                <tr>
                    <th>Sexo:</th>
                    <td><?php echo $Listar[0]['sexo']; ?></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <th>Fecha de nacimiento:</th>
                    <td><?php echo $Listar[0]['fechanac']; ?></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <th>RH:</th>
                    <td><?php echo $Listar[0]['rh']; ?></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
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