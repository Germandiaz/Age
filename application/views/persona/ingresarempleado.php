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
<script type="text/javascript">
     $(document).ready(function(){
    $("#nueEmp_form").validate({
        rules:{
        txtprimernombreEmpleado: { 
            maxlength: 30,required: true
        },
        textsegundonombreEmpleado: { 
            maxlength: 30
        },
        textprimerapellidoEmpleado: { 
            maxlength: 30,required: true
        },
        textsegundoapellidoEmpleado: { 
            maxlength: 30
        },
        txttelefonoEmpleado: { 
            digits: true, maxlength: 15
        },
        txtcorreoelectronicoEmpleado: { 
            email: true
        },
        txtfechanacimientoEmpleado: { 
            required: true //date :  true,
        },
        txtfechaingresoempleado: { 
            required: true //date: true,
        },
        txtnumerodocumentoEmpleado: { 
          required: true, digits: true, minlength: 5
        },
        txtdireccionresidenciaEmpleado: { 
          required: true
        },
        txtcelularEmpleado: { 
          digits: true, maxlength: 15
        }
        },
        messages: {  
        txtprimernombreEmpleado:{    
            required: "Campo obligatorio" ,maxlength: "Máximo se permiten 30 caracteres"
        },
        textsegundonombreEmpleado:{    
            maxlength: "Máximo se permiten 30 caracteres"
        },
        textprimerapellidoEmpleado:{    
            required: "Campo obligatorio" , maxlength: "Máximo se permiten 30 caracteres"
        }, 
        textsegundoapellidoEmpleado:{    
            maxlength: "Máximo se permiten 30 caracteres"
        },
        txttelefonoEmpleado: { 
            digits: "Digite solo números", maxlength: "Máximo se permiten 15 números"
        },
        txtcorreoelectronicoEmpleado: { 
            email: "Dirección de correo invalido"
        },
        txtfechanacimientoEmpleado: { 
            required: "Campo obligatorio" //date: "fecha no permitida" ,
        },
        txtfechaingresoempleado: { 
            required: "Campo obligatorio" //date: "fecha no permitida" ,
        },
        txtnumerodocumentoEmpleado: { 
            minlength: "Minimo se permiten 5 números", digits: "Digite solo números", required: "Campo obligatorio"
        },
        txtdireccionresidenciaEmpleado: { 
            required: "Campo obligatorio"
        },
        txtcelularEmpleado:{    
            maxlength: "Máximo se permiten 15 caracteres", digits:"Digite solo números"
        }
        }
     });
  });
  </script>
                <div class="art-postcontent">
                    <?php $atributos = array('id' => 'nueEmp_form', 'class' => 'form_nueEmp');
                    echo form_open('ingresarempleado/ingresaemple', $atributos); ?>
                    <p align="left"><?php echo form_submit('submit', 'Agregar'); ?> </p>
                    <?php
                        $PrimerNombreEmp = array(
                            'name' => 'txtprimernombreEmpleado',
                            'id' => 'txtprimernombreEmpleado',
                            'value' => set_value('txtprimernombreEmpleado'),
                            );
                            $SegNombreEmp = array(
                            'name' => 'textsegundonombreEmpleado',
                            'id' => 'textsegundonombreEmpleado',
                            'value' => set_value('textsegundonombreEmpleado')
                        );
                            $PriApellidoEmp = array(
                            'name' => 'textprimerapellidoEmpleado',
                            'id' => 'textprimerapellidoEmpleado',
                            'value' => set_value('textprimerapellidoEmpleado')
                        );
                            $SegApellidoEmp = array(
                            'name' => 'textsegundoapellidoEmpleado',
                            'id' => 'textsegundoapellidoEmpleado',
                            'value' => set_value('textsegundoapellidoEmpleado')
                        );
                            $TelefonoEmp = array(
                            'name' => 'txttelefonoEmpleado',
                            'id' => 'txttelefonoEmpleado',
                            'value' => set_value('txttelefonoEmpleado')
                        );
                            $CorElectronicoEmp = array(
                            'name' => 'txtcorreoelectronicoEmpleado',
                            'id' => 'txtcorreoelectronicoEmpleado',
                            'value' => set_value('txtcorreoelectronicoEmpleado')
                        );
                            $FecNacimientoEmp = array(
                            'name' => 'txtfechanacimientoEmpleado',
                            'id' => 'txtfechanacimientoEmpleado',
                            'value' => set_value('txtfechanacimientoEmpleado'),
                            'class'=>'datepicker'
                        );
                            $NroDocumentoEmp = array(
                            'name' => 'txtnumerodocumentoEmpleado',
                            'id' => 'txtnumerodocumentoEmpleado',
                            'value' => set_value('txtnumerodocumentoEmpleado')
                        );     
                            $FotoEmp
                            = array(
                            'name' => 'txtfotoEmpleado',
                            'id' => 'txtfotoEmpleado',
                            'value' => set_value('txtfotoEmpleado')
                        );
                            $DirResidenciaEmp = array(
                            'name' => 'txtdireccionresidenciaEmpleado',
                            'id' => 'txtdireccionresidenciaEmpleado',
                            'value' => set_value('txtdireccionresidenciaEmpleado')
                        );
                            $CelularEmp = array(
                            'name' => 'txtcelularEmpleado',
                            'id' => 'txtcelularEmpleado',
                            'value' => set_value('txtcelularEmpleado')
                        );
                            $fechaingreso = array(
                            'name' => 'txtfechaingresoempleado',
                            'id' => 'txtfechaingresoempleado',
                            'class'=>'datepicker',
                            'value' => set_value('txtfechaingresoempleado')
                        );      
                         $botonaddfila = array(
                        'name' => 'addfila',
                        'id' =>'addfila',
                        'content' =>'Añadir'
                    );
                        ?>
                    <div class="error_color">
                    <div class="alinear_texto">
                    <table width="700" border="0">
                        <tbody>
                            <tr>
                                <th width="278" style="border-width: 0px; "><label for="nuevo_empleado">Nuevo Empleado</label></th>
                                <td width="51" style="border-width: 0px; ">&nbsp;</td>
                                <th width="247" style="border-width: 0px; "><label for="num_contrato">Nro. Contrato</label></th>
                                <td width="106" style="border-width: 0px; "><label for="contrato"><? echo form_label('0015'); ?></label></td>
                            </tr>
                        </tbody>
                    </table>
                    <br />
                    <table width="700" border="0">
                        <tbody>
                            <tr>
                                <th width="137" style="border-width: 0px; "><label for="primer_nombre">Primer Nombre</label></th>
                                <td width="146" style="border-width: 0px; "><? echo form_input($PrimerNombreEmp);?></td>
                                <td width="35" style="border-width: 0px; ">&nbsp;</td>
                                <th width="205" style="border-width: 0px; "><label for="fecha_ingreso">Fecha Ingreso </label></th>
                                <td width="155" style="border-width: 0px; "><? echo form_input($fechaingreso);?> <div>AAAA-DD-MM</div></td>
                            </tr>
                            <tr>
                                <th style="border-width: 0px; "><label for="segundo_nombre">Segundo Nombre</label></th>
                                <td style="border-width: 0px; "><? echo form_input($SegNombreEmp);?></td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <th style="border-width: 0px; "><label for="pais_nacimiento">Pais de Nacimiento</label></th>
                                <td style="border-width: 0px; ">
                                    <select name="selectpais" id="selectpais">
                                            <?php foreach ($ListarPaise as $pais) { ?> 
                                                <option value=<?php echo $pais['id'] ?>> <?php echo $pais['Nombre']; ?></option> 
                                            <?php } ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th style="border-width: 0px; "><label for="primer_pellido">Primer Apellido</label></th>
                                <td style="border-width: 0px; "><? echo form_input($PriApellidoEmp);?></td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <th style="border-width: 0px; "><label for="departamento_nacimiento">Departamento de Nacimiento</label></th>
                                <td style="border-width: 0px; ">
                                    <select name="selectdepartamentos" id="selectdepartamentos">
                                            <?php foreach ($Listardeparta as $depart) { ?> 
                                                <option value=<?php echo $depart['id'] ?>> <?php echo $depart['Nombre']; ?></option> 
                                            <?php } ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th style="border-width: 0px; "><label for="segundo_pellido">Segundo Apellido</label></th>
                                <td style="border-width: 0px; "><? echo form_input($SegApellidoEmp);?></td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <th style="border-width: 0px; "><label for="municipio_nacimiento">Municipio de Nacimiento</label></th>
                                <td style="border-width: 0px; ">
                                    <select name="selectmunici" id="selectmunici">
                                            <?php foreach ($Listarmunic as $munici) { ?> 
                                                <option value=<?php echo $munici['id'] ?>> <?php echo $munici['Nombre']; ?></option> 
                                            <?php } ?>
                                    </select>
                                 </td>
                            </tr>
                            <tr>
                                <th style="border-width: 0px; "><label for="estado_civil">Estado Civil</label></th>
                                <td style="border-width: 0px; ">
                                    <select name="selectestadoCivi" id="selectestadoCivi">
                                            <?php foreach ($ListarEstCiv as $estadoC) { ?> 
                                                <option value=<?php echo $estadoC['id'] ?>> <?php echo $estadoC['Nombre']; ?></option> 
                                            <?php } ?>
                                    </select>
                                </td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <th style="border-width: 0px; "><label for="fecha_nacimiento">Fecha Nacimiento</label></th>
                                <td style="border-width: 0px; "><? echo form_input($FecNacimientoEmp);?> <div>AAAA-DD-MM</div></td>
                            </tr>
                            <tr>
                                <th style="border-width: 0px; "><label for="tipo_documento">Tipo Documento</label></th>
                                <td style="border-width: 0px; ">
                                    <select name="selecttipoDocumento" id="selecttipoDocumento">
                                            <?php foreach ($ListarTipoDoc as $tipoDoc ) { ?>
                                                <option value=<?php echo $tipoDoc['id'] ?>> <?php echo $tipoDoc['Nombre']; ?></option> 
                                            <?php } ?>
                                    </select>
                                </td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <th style="border-width: 0px; "><label for="num_documento">Nro. Documento</label></th>
                                <td style="border-width: 0px; "><? echo form_input($NroDocumentoEmp);?></td>
                            </tr>
                            <tr>
                                <th style="border-width: 0px; "><label for="sexo">Sexo</label></th>
                                <td style="border-width: 0px; ">
                                    <select name="selectsexos" id="selectsexos">
                                            <?php foreach ($ListarSexo as $sexo) { ?> 
                                                <option value=<?php echo $sexo['id'] ?>> <?php echo $sexo['Nombre']; ?></option> 
                                            <?php } ?>
                                    </select>
                                </td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <th style="border-width: 0px; "><label for="religion">Religión</label></th>
                                <td style="border-width: 0px; ">
                                    <select name="selectreligiones" id="selectreligiones">
                                            <?php foreach ($Listarreligio as $religion) { ?> 
                                                <option value=<?php echo $religion['id'] ?>> <?php echo $religion['Nombre']; ?></option> 
                                            <?php } ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th style="border-width: 0px; "><label for="rh">RH</label></th>
                                <td style="border-width: 0px; ">
                                    <select name="selectRh" id="selectRh">
                                        <option value="O+" <?php echo set_select('myselect', 'O+', TRUE); ?> >O+</option>
                                        <option value="O-" <?php echo set_select('myselect', 'O-'); ?> >O-</option>
                                        <option value="AB" <?php echo set_select('myselect', 'AB'); ?> >AB</option>
                                        <option value="A+" <?php echo set_select('myselect', 'A+'); ?> >A+</option>
                                        <option value="A-" <?php echo set_select('myselect', 'A-'); ?> >A-</option>
                                    </select>
                                  </td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <th style="border-width: 0px; "><label for="foto">Foto</label></th>
                                <td style="border-width: 0px; "><? echo form_input($FotoEmp);?>&nbsp;</td>
                            </tr>
                            <tr>
                                <th style="border-width: 0px; "><label for="cargo">Cargo</label></th>
                                <td style="border-width: 0px; ">
                                    <select name="selectcargo" id="selectcargo">
                                            <?php foreach ($ListarCarg as $cargo) { ?> 
                                                <option value=<?php echo $cargo['id'] ?>> <?php echo $cargo['Nombre']; ?></option> 
                                            <?php } ?>
                                    </select>
                                </td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <th style="border-width: 0px; "><label for="direccion_residencia">Dirección Residencia</label></th>
                                <td style="border-width: 0px; "><? echo form_input($DirResidenciaEmp);?></td>
                            </tr>
                            <tr>
                                <th style="border-width: 0px; "><label for="telefono">Tel�fono</label></th>
                                <td style="border-width: 0px; "><? echo form_input($TelefonoEmp);?></td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <th style="border-width: 0px; "><label for="celular">Celular</label></th>
                                <td style="border-width: 0px; "><? echo form_input($CelularEmp);?></td>
                            </tr>
                            <tr>
                                <th style="border-width: 0px; "><label for="correo_electronico">Correo Electronico</label></th>
                                <td style="border-width: 0px; "><? echo form_input($CorElectronicoEmp);?></td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                    </table>     
                    <table>
                            <tr>
                                <td style="border-width: 0px; "><?php echo validation_errors();?></td>
                                <td colspan="4" style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                        </tbody>
                        <?php echo form_close(); ?>
                    </table>
                    </div>
                </div>
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
