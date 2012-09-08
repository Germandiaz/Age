<div>
    <div>
        <?php
            $atributos = array('id' => 'geronte_form', 'class' => 'form_geronte');
            echo form_open('ingresargeronte/capDatosGeronte', $atributos);
            echo form_submit('submit', 'Siguiente'); 
        ?>
        <?php          
            $prinombreger = array('name' => 'txtprimernombreGeronte','id' => 'txtprimernombreGeronte',/*   'class' => 'required',*/'value' => set_value('txtprimernombreGeronte'));
            $segnombreger = array('name' => 'txtsegundonombreGeronte',/*  'class' => 'rules',*/'id' => 'txtsegundonombreGeronte','value' => set_value('txtsegundonombreGeronte'));
            $PriApellidoGer = array('name' => 'txtprimerapellidoGeronte',/*    'class' => 'required',*/'id' => 'txtprimerapellidoGeronte','value' => set_value('txtprimerapellidoGeronte'));
            $SegApellidoGer = array('name' => 'txtsegundoapellidoGeronte','id' => 'txtsegundoapellidoGeronte',/*    'class' => 'rules',*/'value' => set_value('txtsegundoapellidoGeronte'));                                                                                                                             
            $NroDocumentoGer = array('name' => 'txtnumerodocumentoGeronte','id' => 'txtnumerodocumentoGeronte','value' => set_value('txtnumerodocumentoGeronte'));
            $FecNacimientoGer = array('name' => 'txtfechanacimientoGeronte','id' => 'txtfechanacimientoGeronte','value' => set_value('txtfechanacimientoGeronte')); 
            $Habitacion = array('name' => 'txthabitacionGeronte','id' => 'txthabitacionGeronte','value' => set_value('txthabitacionGeronte'));
            $NumHijos = array('name' => 'txtnumerohijosGeronte','id' => 'txtnumerohijosGeronte','value' => set_value('txtnumerohijosGeronte'));
            $NumHermanos = array('name' => 'txtnumerohermanosGeronte','id' => 'txtnumerohermanosGeronte','value' => set_value('txtnumerohermanosGeronte'));
             $Observacion = array('name' => 'txtobservacionGeronte','id' => 'txtobservacionGeronte',/*      'class' => 'required',*/'value' => set_value('txtobservacionGeronte'),'cols'=>'22','rows'=>'4');
            $FotoGer= array('name' => 'txtfotoGeronte','id' => 'txtfotoGeronte','value' => set_value('txtfotoGeronte'));
            $fechaingreso = array('name' => 'txtfechaingresoGeronte','id' => 'txtfechaingresoGeronte','value' => set_value('txtfechaingresoGeronte'));
        ?>
        <b>Nuevo Geronte</b><br />
        <div>
            <table>
                <tbody>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <th><label for="num_contrato">Nro Contrato</label></th>
                        <td><div id="num_contrato"></div></td>                      
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <th><label for="num_documento">ID Inventario</label></th>
                        <td><div id="num_inventario"></div></td>
                    </tr>
                </tbody>
            </table>
            <br />
            <table width="700" border="0">
                <tbody>
                    <tr>
                        <th><label for="primer_nombre">Primer Nombre</label></th>
                        <td><?php echo form_input($prinombreger);?></td>
                        <td>&nbsp;</td>
                        <th><label for="fecha_ingreso">Fecha Ingreso</label></th>
                        <td><?php echo form_input($fechaingreso); ?> <div>AAAA-DD-MM</div></td>
                    </tr>
                    <tr>
                        <th><label for="segundo_nombre">Segundo Nombre</label></th>
                        <td><?php echo form_input($segnombreger);?></td>
                        <td>&nbsp;</td>
                        <th><label for="pais_nacimiento">Pais de Nacimiento</label></th>
                        <td>
                            <select name="selectpaises" id="selectpaises">
                                <?php foreach ($ListarPaises as $pais) { ?> 
                                <option value=<?php echo $pais['id'] ?>> <?php echo $pais['Nombre']; ?></option> 
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th><label for="primer_apellido">Primer Apellido</label></th>
                        <td><?php echo form_input($PriApellidoGer);?></td>
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
                        <th><label for="segundo_apellido">Segundo Apellido</label></th>
                        <td><?php echo form_input($SegApellidoGer);?></td>
                        <td>&nbsp;</td>
                        <th><label for="municipio_nacimiento">Municipio de Nacimiento</label></th>
                        <td>
                            <select name="selectmunicipios" id="selectmunicipios">
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
                        <th><label for="procedencia">Procedencia</label></th>
                        <td>                                  
                            <select name="selectparticipa" id="selectparticipa">
                                <option value="Urbano" <?php echo set_select('myselect', 'Urbano', TRUE); ?> >Urbano</option>
                                <option value="Rural" <?php echo set_select('myselect', 'Rural'); ?> >Rural</option>
                            </select>
                        </td>
                    </tr>
                        <tr>
                        <th><label for="tipo_documento">Tipo documento</label></th>
                        <td>
                            <select name="selecttipoDocumento" id="selecttipoDocumento">
                                <?php foreach ($ListarTipoDoc as $tipoDoc ) { ?>
                                        <option value=<?php echo $tipoDoc['id'] ?>> <?php echo $tipoDoc['Nombre']; ?></option> 
                                <?php } ?>
                            </select>
                        </td>
                        <td>&nbsp;</td>
                        <th><label for="num_documento">Nro. documento</label></th>
                        <td><?php echo form_input($NroDocumentoGer);?></td>
                    </tr>
                    <tr>
                        <th><label for="fecha_nacimiento">Fecha Nacimiento</label></th>
                        <td><?php echo form_input($FecNacimientoGer);?> <div>AAAA-DD-MM</div></td>
                        <td></td>
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
                        <th><label for="habitacion">Habitación</label></th>
                        <td><?php echo form_input($Habitacion);?></td>
                        <td></td>
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
                    </tr>
                    <tr>
                        <th><label for="numero_hijos">Numero Hijos</label></th>
                        <td><?php echo form_input($NumHijos);?></td>
                        <td>&nbsp;</td>
                        <th><label for="numero_hermanos">Numero Hermanos</label></th>
                        <td><?php echo form_input($NumHermanos);?></td>
                    </tr>
                    <tr>
                        <th><label for="sexo">Sexo</label></th>
                        <td>
                            <select name="selectsexo" id="selectsexo">
                                <?php foreach ($ListarSexo as $sexo) { ?> 
                                    <option value=<?php echo $sexo['id'] ?>> <?php echo $sexo['Nombre']; ?></option> 
                                <?php } ?>
                            </select>
                        </td>
                        <td>&nbsp;</td>
                        <th><label for="observacion">Observación</label></th>
                        <td rowspan="2"><?php echo form_textarea($Observacion);?></td>
                    </tr>
                    <tr>
                        <th><label for="foto">foto</label></th>
                        <td><?php echo form_input($FotoGer);?></td>
                        <td>&nbsp;</td>
                        <th></th>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><?php  echo validation_errors();?></td>
                    </tr>  
                </tbody>
                <?php echo form_close(); ?>
            </table>
        </div>
    </div>
</div>ssss