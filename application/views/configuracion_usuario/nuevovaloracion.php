<div>
    <?php $atributos = array('id' => 'nueValo_form', 'class' => 'form_nueValo');
        echo form_open('nuevovaloracion/insertarval', $atributos);
    ?>
    <div>
        <p><?php echo form_submit('submit', 'Agregar'); ?> </p>
        <table>
            <tbody>
                <?php
                    $atributos = array('id' => 'nuev_valora', 'class' => 'valora_nuev');
                    echo form_open('nuevovaloracion/insertarval', $atributos);
                    $TiValora = array('name' => 'txtTipoValoracion','id' => 'txtTipoValoracion','value' => set_value('txtTipoValoracion'));
                    $SubValora = array('name' => 'txtSubtipoValoracion','id' => 'txtSubtipoValoracion','value' => set_value('txtSubtipoValoracion'));
                    $NomValora = array('name' => 'txtNombreValoracion','id' => 'txtNombreValoracion','value' => set_value('txtNombreValoracion'));
                ?>
                <tr>
                    <th colspan="9">Nueva Valoración </th>
                </tr>
                <tr>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <td>
                        <label for="textfield"></label>
                    </td>
                    <td><a href=""></a></td>
                    <td colspan="2"><a href=""></a></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <th>&nbsp;</th>
                    <th>Tipo Valoración:</th>
                    <th><?php echo form_input($TiValora); ?></th>
                    <th>&nbsp;</th>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <th>Subtipo Valoración:</th>
                    <th><?php echo form_input($SubValora); ?></th>
                    <td colspan="4">
                        <p><label for="textfield2"></label></p>
                    </td>
                </tr>
                <tr>
                    <th>&nbsp;</th>
                    <th>Nombre Valoración:</th>
                    <th><?php echo form_input($NomValora); ?></th>
                    <td colspan="4">&nbsp;</td>
                </tr>
            </tbody>
            <?php echo form_close(); ?>
        </table>
        <input type="hidden" id="swpag" value="nuevovaloracion" >
        <table>
            <tr>
                <td>Id</td>
                <td>Valoraci&#243;n</td>
                <td>Tipo de Valoraci&#243;n</td>
            </tr>
            <?php foreach ($Listar as $Valor) { ?>
            <tr>
                <td> <?php echo $Valor['id'] ?> </td>
                <td> <?php echo $Valor['tipoval'] ?> </td>
                <td> <?php echo $Valor['nombreval'] ?> </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</div>