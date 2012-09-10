<div>
    <a href="consultarincidencia.html">Aceptar</a>
    <table>
        <?php
            $atributos = array('id' => 'loguin_form', 'class' => 'form_loguin');
            echo form_open('usuarios/confirmar_Contrasena', $atributos);
            $data = array('name' => 'txtBuscar','id' => 'txtBuscar','value' => set_value('txtBuscar'));
            $data2 = array('name' => 'txtResultadoCantidad','id' => 'txtResultadoCantidad','value' => set_value('txtResultadoCantidad'));
            $data3 = array('name' => 'txtObservacion','id' => 'txtObservacion','value' => set_value('txtObservacion'));
        ?>
        <tbody>
            <tr>
                <th colspan="9">Ingresar Valoración y/o Medicamento</th>
            </tr>
            <tr>
                <th>&nbsp;</th>
                <th>Buscar:</th>
                <td>
                    <label for="textfield"></label>
                    <? echo form_input($data); ?>
                </td>
                <td><a href=""></a></td>
                <td colspan="2"><a href=""></a></td>
                <td width="19">&nbsp;</td>
            </tr>
            <tr>
                <th>&nbsp;</th>
                <th>Descripción</th>
                <th>Resultado/Cantidad</th>
                <th>Observación</th>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><?echo form_label('Acetaminofen');?></td>
                <td>
                    <label for="textfield2"></label>
                    <? echo form_input($data2); ?>
                </td>
                <td colspan="4" rowspan="2">
                    <p>
                        <label for="textfield2"></label>
                        <? echo form_input($data3); ?>
                    </p>
                </td>
            </tr>
            <tr>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="3"><a href=""><font color="#0000FF">Agregar</font></a></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><a href=""><font color="#0000FF">Eliminar</font></a></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="3">&nbsp;</td>
            </tr>
            <tr>
                <th>&nbsp;</th>
                <th>Descripción</th>
                <th>Resultado/Cantidad</th>
                <th>Observación</th>
                <td colspan="3">&nbsp;</td>
            </tr>
            <tr>
                <td>
                    <label for="select"></label>
                    <input type="checkbox" name="checkboxeliminarbuscarincidencia[]" value="1" <?php echo set_checkbox('checkboxeliminarbuscarincidencia[]', '1'); ?> />
                    <label for="checkbox"></label>
                </td>
                <td><?echo form_label('Temperatura Corporal');?></td>
                <td><?echo form_label('30');?></td>
                <td colspan="4"><?echo form_label('Temperatura normal');?></td>
            </tr>
        </tbody>
    </table>
</div>