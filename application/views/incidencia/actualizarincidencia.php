<div>
    <p><a href="consultarincidencia.html">Aceptar</a></p>
    <table width="700" border="0">
        <?php
            $atributos = array('id' => 'loguin_form', 'class' => 'form_loguin');
            echo form_open('usuarios/confirmar_Contrasena', $atributos);
            $data = array('name' => 'txtPulsaciones','id' => 'txtPulsaciones','value' => set_value('txtPulsaciones'));
            $data2 = array('name' => 'txtTemperatura','id' => 'txtTemperatura','value' => set_value('txtTemperatura'));
            $data3 = array('name' => 'txtExonera','id' => 'txtExonera','value' => set_value('txtExonera'));
            $data4 = array('name' => 'txtComoPasaDia','id' => 'txtComoPasaDia','value' => set_value('txtComoPasaDia'));
            $data5 = array('name' => 'txtAlimentacion','id' => 'txtAlimentacion','value' => set_value('txtAlimentacion'));
            $data6 = array('name' => 'txtAcetaminofen','id' => 'txtAcetaminofen','value' => set_value('txtAcetaminofen'));
        ?>
        <tbody>
            <tr>
                <th colspan="15">Fundación Hogar Canitas Doradas NIT. 900.095.599-1</th>
            </tr>
            <tr>
                <th>Nombre:</th>
                <td><? echo form_label('Jose Cogollo'); ?></td>
                <td>&nbsp;</td>
                <th>Incidencia:</th>
                <td><? echo form_label('124'); ?></td>
                <td>&nbsp;</td>
                <th>Fecha:</th>
                <td><? echo form_label('02/04/2011'); ?></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <th>Cedula:</th>
                <td><? echo form_label('132798'); ?></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <th>Descripción</th>
                <th colspan="2">Resultado</th>
                <th colspan="4">Observación</th>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>Pulsaciones:</td>
                <td colspan="2">
                    <label for="textfield"></label>
                    <? echo form_input($data); ?>
                </td>
                <td colspan="4"><? echo form_label('muy bien'); ?></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>Temperatura:</td>
                <td colspan="2">
                    <label for="textfield2"></label>
                    <? echo form_input($data2); ?>
                </td>
                <td colspan="4"><? echo form_label('Un poco de fiebre'); ?></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>Exonera:</td>
                <td colspan="2"><? echo form_input($data3); ?></td>
                <td colspan="4"><? echo form_label('normalmente'); ?></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>Como pasa el día:</td>
                <td colspan="2"><? echo form_input($data4); ?></input></td>
                <td colspan="4"><? echo form_label('Un poco de fiebre'); ?></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>alimentación</td>
                <td colspan="2"><? echo form_input($data5); ?></td>
                <td colspan="4"><? echo form_label('Desayuno normalmente'); ?></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>Acetaminofen</td>
                <td colspan="2"><? echo form_input($data6); ?></td>
                <td colspan="4"><? echo form_label('se tomo una tableta'); ?></td>
            </tr>
            <tr>
                <th>Actualizado:</th>
                <td colspan="4"><? echo form_label('Jesse Javier Cogollo'); ?></td>
                <th align="left" colspan="2">Fecha:</th>
                <td><? echo form_label('02/04/2011 08:30'); ?></td>
            </tr>
            <tr>
                <th>Responsable:</th>
                <td colspan="7"><? echo form_label('Jesse Javier Cogollo'); ?></td>
            </tr>
        </tbody>
    </table>
</div>