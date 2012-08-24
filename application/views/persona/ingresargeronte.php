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
                    $.post('ingresargeronte/nroultimocontrato', null , function(respuesta){
                       $('#num_contrato').text(respuesta);
                    });
                    $.post('ingresargeronte/nroultimoidinventario', null , function(respuesta){
                       $('#num_inventario').text(respuesta);
                    });
                    $("#txtfechaingresoGeronte").datepicker();
                    $( "#txtfechaingresoGeronte" ).datepicker( "option", {dateFormat: "yy-mm-dd"} );
                    $("#txtfechanacimientoGeronte").datepicker();
                    $( "#txtfechanacimientoGeronte" ).datepicker( "option", {dateFormat: "yy-mm-dd"} );          
 });
 </script>
   <script type="text/javascript">
     $(document).ready(function(){
    $("#geronte_form").validate({
        rules:{
        txtprimernombreGeronte: { 
            maxlength: 30,required: true
        },
        txtsegundonombreGeronte: { 
            maxlength: 30
        },
        txtprimerapellidoGeronte: { 
            maxlength: 30,required: true
        },
        txtsegundoapellidoGeronte: { 
            maxlength: 30
        },
        txtfechanacimientoGeronte: { 
            date: true,required: true
        },
        txtnumerohijosGeronte: { 
         required: true, digits: true, maxlength: 2
        },
        txtfechaingresoGeronte: { 
            date: true,required: true
        },
        txtnumerodocumentoGeronte: { 
          required: true, digits: true, minlength: 5
        },
        txtnumerohermanosGeronte: { 
         required: true, digits: true, maxlength: 2
        },
        txtobservacionGeronte: { 
            required: true, maxlength: 50
        }
        },
        messages: {  
        txtprimernombreGeronte:{    
            required: "Campo obligatorio" ,maxlength: "Máximo se permiten 30 caracteres"
        },
        txtsegundonombreGeronte:{    
            maxlength: "Máximo se permiten 30 caracteres"
        },
        txtprimerapellidoGeronte:{    
            required: "Campo obligatorio" , maxlength: "Máximo se permiten 30 caracteres"
        }, 
        txtsegundoapellidoGeronte:{    
            maxlength: "Máximo se permiten 30 caracteres"
        },
        txtfechanacimientoGeronte: { 
            date: "fecha no permitida" ,required: "Campo obligatorio"
        },
        txtnumerohijosGeronte: { 
         required: "Campo obligatorio",digits: "Digite solo números", maxlength: "Máximo se permiten 2 números"
        },
        txtfechaingresoGeronte: { 
            date: "fecha no permitida" ,required: "Campo obligatorio"
        },
        txtnumerodocumentoGeronte: { 
            minlength: "Minimo se permiten 5 números", digits: "Digite solo números", required: "Campo obligatorio"
           /* remote: {source: "ingresargeronte/veri_documento",
                async: false
            }*/
               
                
                
        },
        txtnumerohermanosGeronte: { 
            required: "Campo obligatorio", digits: "Digite solo números", maxlength: "Máximo se permiten 2 números"
        },
        txtobservacionGeronte: { 
            required: "Campo obligatorio", maxlength: "Máximo se permiten 50 caracteres"
        }
        }
  });
  });
  </script>
                <div class="art-postcontent">
                    <p align="left"><?php
                    $atributos = array('id' => 'geronte_form', 'class' => 'form_geronte');
                    echo form_open('ingresargeronte/capDatosGeronte', $atributos);
                    echo form_submit('submit', 'Siguiente'); ?>
                    
                             <?php          
                        $prinombreger = array(
                            'name' => 'txtprimernombreGeronte',
                            'id' => 'txtprimernombreGeronte',
                         //   'class' => 'required',
                            'value' => set_value('txtprimernombreGeronte')
                            );
                            $segnombreger = array(
                            'name' => 'txtsegundonombreGeronte',
                          //  'class' => 'rules',
                            'id' => 'txtsegundonombreGeronte',

                            'value' => set_value('txtsegundonombreGeronte')
                        );
                            $PriApellidoGer = array(
                            'name' => 'txtprimerapellidoGeronte',
                        //    'class' => 'required',
                            'id' => 'txtprimerapellidoGeronte',
   
                            'value' => set_value('txtprimerapellidoGeronte')
                        );
                            $SegApellidoGer = array(
                            'name' => 'txtsegundoapellidoGeronte',
                            'id' => 'txtsegundoapellidoGeronte',
                        //    'class' => 'rules',
                            'value' => set_value('txtsegundoapellidoGeronte')
                        );                                                                                                                             
                            $NroDocumentoGer = array(
                            'name' => 'txtnumerodocumentoGeronte',
                            'id' => 'txtnumerodocumentoGeronte',
                            'value' => set_value('txtnumerodocumentoGeronte')
                        );
                            $FecNacimientoGer = array(
                            'name' => 'txtfechanacimientoGeronte',
                            'id' => 'txtfechanacimientoGeronte',
                            'value' => set_value('txtfechanacimientoGeronte') 
                        ); 
                            $Habitacion = array(
                            'name' => 'txthabitacionGeronte',
                            'id' => 'txthabitacionGeronte',
                            'value' => set_value('txthabitacionGeronte') 
                        );
                            $NumHijos = array(
                            'name' => 'txtnumerohijosGeronte',
                            'id' => 'txtnumerohijosGeronte',
                            'value' => set_value('txtnumerohijosGeronte') 
                        );
                            $NumHermanos = array(
                            'name' => 'txtnumerohermanosGeronte',
                            'id' => 'txtnumerohermanosGeronte',
                            'value' => set_value('txtnumerohermanosGeronte') 
                        );
                            $Observacion = array(
                            'name' => 'txtobservacionGeronte',
                            'id' => 'txtobservacionGeronte',
                      //      'class' => 'required',
                            'value' => set_value('txtobservacionGeronte'),
                            'cols'=>'22',
                            'rows'=>'4'
                        );
                            $FotoGer
                            = array(
                            'name' => 'txtfotoGeronte',
                            'id' => 'txtfotoGeronte',
                            'value' => set_value('txtfotoGeronte')
                        );
                            $fechaingreso = array(
                            'name' => 'txtfechaingresoGeronte',
                            'id' => 'txtfechaingresoGeronte',
                            'value' => set_value('txtfechaingresoGeronte') 
                        );
                        ?>
                    <p><br /></p>
                     <b>Nuevo Geronte</b><br />
                    <div class="alinear_texto">
                    <table width="700" border="0">
                        <tbody>
                            <tr>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <th width="130" style="border-width: 0px; "><label for="num_contrato">Nro Contrato</label></th>
                                <td aling="left" style="border-width: 0px;"><div id="num_contrato"></div></td>                      
                            </tr>
                            <tr>
                                <td width="278" style="border-width: 0px; ">&nbsp;</td>
                                <td width="51" style="border-width: 0px; ">&nbsp;</td>
                                <th width="247" style="border-width: 0px; "><label for="num_documento">ID Inventario</label></th>
                                <td width="106" style="border-width: 0px; "><div id="num_inventario"></div></td>
                            </tr>
                        </tbody>
                    </table>
                    <br />
                    <table width="700" border="0">
                        <tbody>
                         
                            <tr>
                                <th width="130" style="border-width: 0px;"><label for="primer_nombre">Primer Nombre</label></th>
                                <td width="146" style="border-width: 0px;"><?php echo form_input($prinombreger);?></td>
                                <td width="26" style="border-width: 0px; ">&nbsp;</td>
                                <th width="130" style="border-width: 0px;"><label for="fecha_ingreso">Fecha Ingreso</label></th>
                                <td width="172" style="border-width: 0px; "><?php echo form_input($fechaingreso); ?> <div>AAAA-DD-MM</div></td>
                            </tr>
                            
                            <tr>
                                <th style="border-width: 0px; "><label for="segundo_nombre">Segundo Nombre</label></th>
                                <td style="border-width: 0px; "><?php echo form_input($segnombreger);?></td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <th style="border-width: 0px; "><label for="pais_nacimiento">Pais de Nacimiento</label></th>
                                <td style="border-width: 0px; ">
                                    <select name="selectpaises" id="selectpaises">
                                            <?php foreach ($ListarPaises as $pais) { ?> 
                                                <option value=<?php echo $pais['id'] ?>> <?php echo $pais['Nombre']; ?></option> 
                                               
                                            <?php } ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th style="border-width: 0px; "><label for="primer_apellido">Primer Apellido</label></th>
                                <td style="border-width: 0px; "><?php echo form_input($PriApellidoGer);?></td>
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
                                <th style="border-width: 0px; "><label for="segundo_apellido">Segundo Apellido</label></th>
                                <td style="border-width: 0px; "><?php echo form_input($SegApellidoGer);?></td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <th style="border-width: 0px; "><label for="municipio_nacimiento">Municipio de Nacimiento</label></th>
                                <td style="border-width: 0px; ">
                                    <select name="selectmunicipios" id="selectmunicipios">
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
                                <th style="border-width: 0px; "><label for="procedencia">Procedencia</label></th>
                                <td style="border-width: 0px; ">                                  
                                    <select name="selectparticipa" id="selectparticipa">
                                        <option value="Urbano" <?php echo set_select('myselect', 'Urbano', TRUE); ?> >Urbano</option>
                                        <option value="Rural" <?php echo set_select('myselect', 'Rural'); ?> >Rural</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th style="border-width: 0px; "><label for="tipo_documento">Tipo documento</label></th>
                                <td style="border-width: 0px; ">
                                    <select name="selecttipoDocumento" id="selecttipoDocumento">
                                            <?php foreach ($ListarTipoDoc as $tipoDoc ) { ?>
                                                <option value=<?php echo $tipoDoc['id'] ?>> <?php echo $tipoDoc['Nombre']; ?></option> 
                                            <?php } ?>
                                    </select>
                                </td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <th style="border-width: 0px; "><label for="num_documento">Nro. documento</label></th>
                                <td style="border-width: 0px; "><?php echo form_input($NroDocumentoGer);?></td>
                            </tr>
                            <tr>
                                <th style="border-width: 0px; "><label for="fecha_nacimiento">Fecha Nacimiento</label></th>
                                <td style="border-width: 0px; "><?php echo form_input($FecNacimientoGer);?> <div>AAAA-DD-MM</div></td>
                                <td style="border-width: 0px; "></td>
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
                                <th style="border-width: 0px; "><label for="habitacion">Habitación</label></th>
                                <td style="border-width: 0px; "><?php echo form_input($Habitacion);?></td>
                                <td style="border-width: 0px; "></td>
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
                            </tr>
                            <tr>
                                <th style="border-width: 0px; "><label for="numero_hijos">Numero Hijos</label></th>
                                <td style="border-width: 0px; "><?php echo form_input($NumHijos);?></td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <th style="border-width: 0px; "><label for="numero_hermanos">Numero Hermanos</label></th>
                                <td style="border-width: 0px; "><?php echo form_input($NumHermanos);?></td>
                            </tr>
                            <tr>
                                <th style="border-width: 0px; "><label for="sexo">Sexo</label></th>
                                <td style="border-width: 0px; ">
                                    <select name="selectsexo" id="selectsexo">
                                            <?php foreach ($ListarSexo as $sexo) { ?> 
                                                <option value=<?php echo $sexo['id'] ?>> <?php echo $sexo['Nombre']; ?></option> 
                                            <?php } ?>
                                    </select>
                                </td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <th style="border-width: 0px; "><label for="observacion">Observación</label></th>
                                <td rowspan="2" style="border-width: 0px; "><?php echo form_textarea($Observacion);?></td>
                            </tr>
                            <tr>
                                <th style="border-width: 0px; "><label for="foto">foto</label></th>
                                <td style="border-width: 0px; "><?php echo form_input($FotoGer);?></td>
                                <td width="51" style="border-width: 0px; ">&nbsp;</td>
                                <th style="border-width: 0px; "></th>
                                <td width="51" style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td colspan="4" style="border-width: 0px; ">&nbsp;</td>
                                <td width="51" style="border-width: 0px; ">&nbsp;</td>
                                <th style="border-width: 0px; "></th>
                                <td width="51" style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <td style="border-width: 0px; "><?php  echo validation_errors();?></td>
                            </tr>  
                        </tbody>
                        <?php echo form_close(); ?>
                    </table>
                    </div>
                    <p>
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
