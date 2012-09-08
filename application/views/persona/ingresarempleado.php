<div>
    <?php $atributos = array('id' => 'nueEmp_form', 'class' => 'form_nueEmp');
        echo form_open('ingresarempleado/ingresaemple', $atributos); 
    ?>
    <p><?php echo form_submit('submit', 'Agregar'); ?> </p>
    <?php
        $PrimerNombreEmp = array('name' => 'txtprimernombreEmpleado','id' => 'txtprimernombreEmpleado','value' => set_value('txtprimernombreEmpleado'));
        $SegNombreEmp = array('name' => 'textsegundonombreEmpleado','id' => 'textsegundonombreEmpleado','value' => set_value('textsegundonombreEmpleado'));
        $PriApellidoEmp = array('name' => 'textprimerapellidoEmpleado','id' => 'textprimerapellidoEmpleado','value' => set_value('textprimerapellidoEmpleado'));
        $SegApellidoEmp = array('name' => 'textsegundoapellidoEmpleado','id' => 'textsegundoapellidoEmpleado','value' => set_value('textsegundoapellidoEmpleado'));
        $TelefonoEmp = array('name' => 'txttelefonoEmpleado','id' => 'txttelefonoEmpleado','value' => set_value('txttelefonoEmpleado'));
        $CorElectronicoEmp = array('name' => 'txtcorreoelectronicoEmpleado','id' => 'txtcorreoelectronicoEmpleado','value' => set_value('txtcorreoelectronicoEmpleado'));
        $FecNacimientoEmp = array('name' => 'txtfechanacimientoEmpleado','id' => 'txtfechanacimientoEmpleado','value' => set_value('txtfechanacimientoEmpleado'),'class'=>'datepicker');
        $NroDocumentoEmp = array('name' => 'txtnumerodocumentoEmpleado','id' => 'txtnumerodocumentoEmpleado','value' => set_value('txtnumerodocumentoEmpleado'));     
        $FotoEmp = array('name' => 'txtfotoEmpleado','id' => 'txtfotoEmpleado','value' => set_value('txtfotoEmpleado'));
        $DirResidenciaEmp = array('name' => 'txtdireccionresidenciaEmpleado','id' => 'txtdireccionresidenciaEmpleado','value' => set_value('txtdireccionresidenciaEmpleado'));
        $CelularEmp = array('name' => 'txtcelularEmpleado','id' => 'txtcelularEmpleado','value' => set_value('txtcelularEmpleado'));
        $fechaingreso = array('name' => 'txtfechaingresoempleado','id' => 'txtfechaingresoempleado','class'=>'datepicker','value' => set_value('txtfechaingresoempleado'));      
        $botonaddfila = array('name' => 'addfila','id' =>'addfila','content' =>'Añadir');
    ?>
    <div>
        <table>
            <tbody>
                <tr>
                    <th><label for="nuevo_empleado">Nuevo Empleado</label></th>
                    <td>&nbsp;</td>
                    <th><label for="num_contrato">Nro. Contrato</label></th>
                    <td><label for="contrato"><? echo form_label('0015'); ?></label></td>
                </tr>
            </tbody>
        </table>
        <br />
        <table>
            <tbody>
                <tr>
                    <th><label for="primer_nombre">Primer Nombre</label></th>
                    <td><? echo form_input($PrimerNombreEmp);?></td>
                    <td>&nbsp;</td>
                    <th><label for="fecha_ingreso">Fecha Ingreso </label></th>
                    <td><? echo form_input($fechaingreso);?> <div>AAAA-DD-MM</div></td>
                </tr>
                <tr>
                    <th><label for="segundo_nombre">Segundo Nombre</label></th>
                    <td><? echo form_input($SegNombreEmp);?></td>
                    <td>&nbsp;</td>
                    <th><label for="pais_nacimiento">Pais de Nacimiento</label></th>
                    <td>
                        <select name="selectpais" id="selectpais">
                            <?php foreach ($ListarPaise as $pais) { ?> 
                                <option value=<?php echo $pais['id'] ?>> <?php echo $pais['Nombre']; ?></option> 
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><label for="primer_pellido">Primer Apellido</label></th>
                    <td><? echo form_input($PriApellidoEmp);?></td>
                    <td>&nbsp;</td>
                    <th><label for="departamento_nacimiento">Departamento de Nacimiento</label></th>
                    <td>
                        <select name="selectdepartamentos" id="selectdepartamentos">
                            <?php foreach ($Listardeparta as $depart) { ?> 
                                <option value=<?php echo $depart['id'] ?>> <?php echo $depart['Nombre']; ?></option> 
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><label for="segundo_pellido">Segundo Apellido</label></th>
                    <td><? echo form_input($SegApellidoEmp);?></td>
                    <td>&nbsp;</td>
                    <th><label for="municipio_nacimiento">Municipio de Nacimiento</label></th>
                    <td>
                        <select name="selectmunici" id="selectmunici">
                            <?php foreach ($Listarmunic as $munici) { ?> 
                                <option value=<?php echo $munici['id'] ?>> <?php echo $munici['Nombre']; ?></option> 
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><label for="estado_civil">Estado Civil</label></th>
                    <td>
                        <select name="selectestadoCivi" id="selectestadoCivi">
                            <?php foreach ($ListarEstCiv as $estadoC) { ?> 
                                <option value=<?php echo $estadoC['id'] ?>> <?php echo $estadoC['Nombre']; ?></option> 
                            <?php } ?>
                        </select>
                    </td>
                    <td>&nbsp;</td>
                    <th><label for="fecha_nacimiento">Fecha Nacimiento</label></th>
                    <td><? echo form_input($FecNacimientoEmp);?> <div>AAAA-DD-MM</div></td>
                </tr>
                <tr>
                    <th><label for="tipo_documento">Tipo Documento</label></th>
                    <td>
                        <select name="selecttipoDocumento" id="selecttipoDocumento">
                            <?php foreach ($ListarTipoDoc as $tipoDoc ) { ?>
                                <option value=<?php echo $tipoDoc['id'] ?>> <?php echo $tipoDoc['Nombre']; ?></option> 
                            <?php } ?>
                        </select>
                    </td>
                    <td>&nbsp;</td>
                    <th><label for="num_documento">Nro. Documento</label></th>
                    <td><? echo form_input($NroDocumentoEmp);?></td>
                </tr>
                <tr>
                    <th><label for="sexo">Sexo</label></th>
                    <td>
                        <select name="selectsexos" id="selectsexos">
                            <?php foreach ($ListarSexo as $sexo) { ?> 
                                <option value=<?php echo $sexo['id'] ?>> <?php echo $sexo['Nombre']; ?></option> 
                            <?php } ?>
                        </select>
                    </td>
                    <td>&nbsp;</td>
                    <th><label for="religion">Religión</label></th>
                    <td>
                        <select name="selectreligiones" id="selectreligiones">
                            <?php foreach ($Listarreligio as $religion) { ?> 
                                <option value=<?php echo $religion['id'] ?>> <?php echo $religion['Nombre']; ?></option> 
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><label for="rh">RH</label></th>
                    <td>
                        <select name="selectRh" id="selectRh">
                            <option value="O+" <?php echo set_select('myselect', 'O+', TRUE); ?> >O+</option>
                            <option value="O-" <?php echo set_select('myselect', 'O-'); ?> >O-</option>
                            <option value="AB" <?php echo set_select('myselect', 'AB'); ?> >AB</option>
                            <option value="A+" <?php echo set_select('myselect', 'A+'); ?> >A+</option>
                            <option value="A-" <?php echo set_select('myselect', 'A-'); ?> >A-</option>
                        </select>
                    </td>
                    <td>&nbsp;</td>
                    <th><label for="foto">Foto</label></th>
                    <td><? echo form_input($FotoEmp);?>&nbsp;</td>
                </tr>
                <tr>
                    <th><label for="cargo">Cargo</label></th>
                    <td>
                        <select name="selectcargo" id="selectcargo">
                            <?php foreach ($ListarCarg as $cargo) { ?> 
                                <option value=<?php echo $cargo['id'] ?>> <?php echo $cargo['Nombre']; ?></option> 
                            <?php } ?>
                        </select>
                    </td>
                    <td>&nbsp;</td>
                    <th><label for="direccion_residencia">Dirección Residencia</label></th>
                    <td><? echo form_input($DirResidenciaEmp);?></td>
                </tr>
                <tr>
                    <th><label for="telefono">Tel�fono</label></th>
                    <td><? echo form_input($TelefonoEmp);?></td>
                    <td>&nbsp;</td>
                    <th><label for="celular">Celular</label></th>
                    <td><? echo form_input($CelularEmp);?></td>
                </tr>
                <tr>
                    <th><label for="correo_electronico">Correo Electronico</label></th>
                    <td><? echo form_input($CorElectronicoEmp);?></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            </table>     
            <table>
                <tr>
                    <td><?php echo validation_errors();?></td>
                    <td colspan="4">&nbsp;</td>
                </tr>
            </tbody>
            <?php echo form_close(); ?>
        </table>
    </div>
</div>