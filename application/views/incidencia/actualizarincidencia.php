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
                                'name' => 'txtPulsaciones',
                                'id' => 'txtPulsaciones',
                                'value' => set_value('txtPulsaciones')
                                 );
                            $data2 = array(
                                'name' => 'txtTemperatura',
                                'id' => 'txtTemperatura',
                                'value' => set_value('txtTemperatura')
                                 );
                            $data3 = array(
                                'name' => 'txtExonera',
                                'id' => 'txtExonera',
                                'value' => set_value('txtExonera')
                                 );
                            $data4 = array(
                                'name' => 'txtComoPasaDia',
                                'id' => 'txtComoPasaDia',
                                'value' => set_value('txtComoPasaDia')
                                 );
                            $data5 = array(
                                'name' => 'txtAlimentacion',
                                'id' => 'txtAlimentacion',
                                'value' => set_value('txtAlimentacion')
                                 );
                            $data6 = array(
                                'name' => 'txtAcetaminofen',
                                'id' => 'txtAcetaminofen',
                                'value' => set_value('txtAcetaminofen')
                                 );
                            ?>
                        <tbody>
                            <tr>
                                <th colspan="15" style="border-width: 0px; ">Fundación Hogar Canitas Doradas NIT. 900.095.599-1</th>
                            </tr>
                            <tr>
                                <th align="left" width="96" style="border-width: 0px; ">Nombre:</th>
                                <td width="126" style="border-width: 0px; "><? echo form_label('Jose Cogollo'); ?></td>
                                <td width="37" style="border-width: 0px; ">&nbsp;</td>
                                <th align="left" width="103" style="border-width: 0px; ">Incidencia:</th>
                                <td width="26" style="border-width: 0px; "><? echo form_label('124'); ?></td>
                                <td width="25" style="border-width: 0px; ">&nbsp;</td>
                                <th align="left" width="48" style="border-width: 0px; ">Fecha:</th>
                                <td width="185" style="border-width: 0px; "><? echo form_label('02/04/2011'); ?></td>
                                <td width="16" colspan="7" rowspan="15" style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th align="left" style="border-width: 0px; ">Cedula:</th>
                                <td style="border-width: 0px; "><? echo form_label('132798'); ?></td>
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
                                <th align="center" style="border-width: 0px; ">Descripción</th>
                                <th colspan="2" align="center" style="border-width: 0px; ">Resultado</th>
                                <th colspan="4" align="center" style="border-width: 0px; ">Observación</th>
                            </tr>
                            <tr>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td align="left" style="border-width: 0px; ">Pulsaciones:</td>
                                <td colspan="2" align="left" style="border-width: 0px; ">
                                    <label for="textfield"></label>
                                    <? echo form_input($data); ?>
                                </td>
                                <td colspan="4" style="border-width: 0px; "><? echo form_label('muy bien'); ?></td>
                            </tr>
                            <tr>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td align="left" style="border-width: 0px; ">Temperatura:</td>
                                <td colspan="2" align="left" style="border-width: 0px; ">
                                    <label for="textfield2"></label>
                                    <? echo form_input($data2); ?>
                                </td>
                                <td colspan="4" style="border-width: 0px; "><? echo form_label('Un poco de fiebre'); ?></td>
                            </tr>
                            <tr>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">Exonera:</td>
                                <td colspan="2" align="left" style="border-width: 0px; "><? echo form_input($data3); ?></td>
                                <td colspan="4" style="border-width: 0px; "><? echo form_label('normalmente'); ?></td>
                            </tr>
                            <tr>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">Como pasa el día:</td>
                                <td colspan="2" style="border-width: 0px; "><? echo form_input($data4); ?></input></td>
                                <td colspan="4" style="border-width: 0px; "><? echo form_label('Un poco de fiebre'); ?></td>
                            </tr>
                            <tr>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">alimentación</td>
                                <td colspan="2" style="border-width: 0px; "><? echo form_input($data5); ?></td>
                                <td colspan="4" style="border-width: 0px; "><? echo form_label('Desayuno normalmente'); ?></td>
                            </tr>
                            <tr>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">Acetaminofen</td>
                                <td colspan="2" style="border-width: 0px; "><? echo form_input($data6); ?></td>
                                <td colspan="4" style="border-width: 0px; "><? echo form_label('se tomo una tableta'); ?></td>
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
                                <th align="left" style="border-width: 0px; ">Actualizado:</th>
                                <td colspan="4" style="border-width: 0px; "><? echo form_label('Jesse Javier Cogollo'); ?></td>
                                <th align="left" colspan="2" style="border-width: 0px; ">Fecha:</th>
                                <td style="border-width: 0px; "><? echo form_label('02/04/2011 08:30'); ?></td>
                            </tr>
                            <tr>
                                <th align="left" style="border-width: 0px; ">Responsable:</th>
                                <td colspan="7" style="border-width: 0px; "><? echo form_label('Jesse Javier Cogollo'); ?></td>
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
