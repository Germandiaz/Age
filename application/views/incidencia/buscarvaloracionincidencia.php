
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

                <div class="art-postcontent">
                    <p>&nbsp;<span class="art-button-wrapper"><span class="art-button-l"> </span><span class="art-button-r"> </span><a href="consultarincidencia.html" class="art-button">Aceptar</a></span>&nbsp;<br /></p>
                    <p><br /></p>
                    <table width="700" border="0">
                        <?php
                            $atributos = array('id' => 'loguin_form', 'class' => 'form_loguin');
                            echo form_open('usuarios/confirmar_Contrasena', $atributos);
                            $data = array(
                                'name' => 'txtBuscar',
                                'id' => 'txtBuscar',
                                'value' => set_value('txtBuscar')
                                 );
                            $data2 = array(
                                'name' => 'txtResultadoCantidad',
                                'id' => 'txtResultadoCantidad',
                                'value' => set_value('txtResultadoCantidad')
                                 );
                            $data3 = array(
                                'name' => 'txtObservacion',
                                'id' => 'txtObservacion',
                                'value' => set_value('txtObservacion')
                                 );
                            ?>
                           <tbody>
                            <tr>
                                <th colspan="9" scope="row" style="border-width: 0px; ">Ingresar Valoración y/o Medicamento</th>
                            </tr>
                            <tr>
                                <th scope="row" align="left" style="border-width: 0px; ">&nbsp;</th>
                                <th scope="row" align="left" style="border-width: 0px; ">Buscar:</th>
                                <td width="182" align="left" style="border-width: 0px; ">
                                    <label for="textfield"></label>
                                    <? echo form_input($data); ?>
                                </td>
                                <td width="131" align="left" style="border-width: 0px; "><a href=""></a></td>
                                <td colspan="2" style="border-width: 0px; "><a href=""></a></td>
                                <td width="19" style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th scope="row" align="left" style="border-width: 0px; ">&nbsp;</th>
                                <th scope="row" align="left" style="border-width: 0px; ">&nbsp;</th>
                                <td align="left" style="border-width: 0px; ">&nbsp;</td>
                                <td align="left" style="border-width: 0px; ">&nbsp;</td>
                                <td width="38" style="border-width: 0px; ">&nbsp;</td>
                                <td width="52" align="left" style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th scope="row" align="left" style="border-width: 0px; ">&nbsp;</th>
                                <th scope="row" align="left" style="border-width: 0px; ">Descripción</th>
                                <th align="left" style="border-width: 0px; ">Resultado/Cantidad</th>
                                <th align="left" style="border-width: 0px; ">Observación</th>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <td scope="row" style="border-width: 0px; ">&nbsp;</td>
                                <td scope="row" style="border-width: 0px; "><?echo form_label('Acetaminofen');?></td>
                                <td scope="row" style="border-width: 0px; ">
                                    <label for="textfield2"></label>
                                    <? echo form_input($data2); ?>
                                </td>
                                <td colspan="4" rowspan="2" scope="row" style="border-width: 0px; ">
                                    <p>
                                        <label for="textfield2"></label>
                                        <? echo form_input($data3); ?>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <th width="23" scope="row" style="border-width: 0px; ">&nbsp;</th>
                                <th width="225" scope="row" style="border-width: 0px; ">&nbsp;</th>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                <td align="center" style="border-width: 0px; ">&nbsp;</td>
                                <td align="center" style="border-width: 0px; ">&nbsp;</td>
                                <td colspan="3" align="center" style="border-width: 0px; "><a href=""><font color="#0000FF">Agregar</font></a></td>
                            </tr>
                            <tr>
                                <td align="center" scope="row" style="border-width: 0px; ">&nbsp;</td>
                                <td align="center" scope="row" style="border-width: 0px; "><a href=""><font color="#0000FF">Eliminar</font></a></td>
                                <td align="center" style="border-width: 0px; ">&nbsp;</td>
                                <td align="center" style="border-width: 0px; ">&nbsp;</td>
                                <td colspan="3" align="center" style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                <th scope="row" style="border-width: 0px; ">Descripción</th>
                                <th align="center" style="border-width: 0px; ">Resultado/Cantidad</th>
                                <th align="center" style="border-width: 0px; ">Observación</th>
                                <td colspan="3" align="center" style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <td scope="row" style="border-width: 0px; ">
                                    <label for="select"></label>
                                    <input type="checkbox" name="checkboxeliminarbuscarincidencia[]" value="1" <?php echo set_checkbox('checkboxeliminarbuscarincidencia[]', '1'); ?> />
                                    <label for="checkbox"></label>
                                </td>
                                <td scope="row" style="border-width: 0px; "><?echo form_label('Temperatura Corporal');?></td>
                                <td align="center" style="border-width: 0px; "><?echo form_label('30');?></td>
                                <td colspan="4" align="center" style="border-width: 0px; "><?echo form_label('Temperatura normal');?></td>
                            </tr>
                            <tr>
                                <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                <td align="center" style="border-width: 0px; ">&nbsp;</td>
                                <td colspan="4" align="center" style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                <td align="center" style="border-width: 0px; ">&nbsp;</td>
                                <td colspan="4" align="center" style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>
                    <p><br /></p>
                    <p>&nbsp;</p>
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
