<div>
    <table>
        <?php
            $atributos = array('id' => 'loguin_form', 'class' => 'form_loguin');
            echo form_open('buscarConceptoFactura/index', $atributos);
            $Concepto = array('name' => 'txtConcepto','id' => 'txtConcepto','value' => set_value('txtConcepto'));
            $Cantidad = array('name' => 'txtCantidad','id' => 'txtCantidad','value' => set_value('txtCantidad'));
            $Descripcion = array('name' => 'txtDescripcion','id' => 'txtDescripcion','value' => set_value('txtDescripcion'));
            $Valor = array('name' => 'txtValor','id' => 'txtValor','value' => set_value('txtValor'));
        ?>
        <tbody>
            <p><?= form_submit('submit', 'Aceptar'); ?></p>
            <tr>
                <th colspan="7">Ingresar Concepto Factura</th>
            </tr>
            <tr>
                <th>Concepto</th>
                <th>Cantidad</th>
                <th colspan="2">Descripción</th>
                <th>Valor</th>
            </tr>
            <tr>
                <th>
                    <label for="select">
                        <? echo form_input($Concepto); ?>
                    </label>
                </th>
                <th><? echo form_input($Cantidad); ?></th>
                <th colspan="2" rowspan="2">
                    <p>
                        <label for="textfield2"></label>
                        <textarea name="textareaobservaciongeneral2" id="textareaobservaciongeneral2"></textarea>
                    </p>
                </th>
                <td><? echo form_input($Valor); ?></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <label for="textfield2"></label>
                    </td>
                <?php echo form_close(); ?>
                <?echo form_open('buscarConceptoFactura/insertConcFac', $atributos);?>
                <td><a href=""><?= form_submit('submit', 'Agregar'); ?></a></td>
            </tr>
            <tr>
                <td><a href="">Eliminar</a></td>
                <td><a href=""></a></td>
                <td>&nbsp;</td>
                <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
                <th>Concepto</th>
                <th>Cantidad</th>
                <th>Descripción</th>
                <th colspan="2">Valor Unitario</th>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="checkboxbuscarconceptofactura[]" value="1" <?php echo set_checkbox('checkboxbuscarconceptofactura[]', '1'); ?> />
                    <label for="checkbox"></label>
				    <?echo form_label('Mensualidad');?>
                </td>
                <td><?echo form_label('2');?></td>
                <td><?echo form_label('Meses de febrero y marzo');?></td>
                <td colspan="2"><?echo form_label('500000');?></td>
            </tr>
        </tbody>
        <?php echo form_close(); ?>
    </table>
</div>