<div>
    <?php $atributos = array('id' => 'nuemov_form', 'class' => 'form_nuemov');
        echo form_open('nuevamovimiento/insertarprod', $atributos);
    ?>
    <input type="button" id="idboton" value="Realizar Movimiento" />
    <input type="button" value="Finalizar">
    <div id="iddiv">
        <p><?php echo form_submit('submit', 'Confirmar'); ?></p>
        <table>
            <tbody>
                <?php foreach ($Listar as $Valor) { $var = $Valor['inv']; }
                    $perid = array('value' => $var);
                    $hdper = array('name' => 'hdperid','id' => 'hdperid','value' => $var);
                    $prodid = array('name' => 'txtprodid','id' => 'txtprodid','value' => set_value('txtprodid'));
                    $fecmov = array('name' => 'txtfecmov','id' => 'txtfecmov','value' => set_value('txtfecmov'));
                    $cant = array('name' => 'txtcant','id' => 'txtcant','value' => set_value('txtcant'));
                    $medida = array('name' => 'txtmedida','id' => 'txtmedida','value' => set_value('txtmedida'));
                ?>
                <tr>
                    <th>persona:</th>
                    <td><label for="txtnuevaeps"></label>
                        <?php echo form_label($var,'Lblpersona',$perid); ?>
                    </td>
                    <td><?php echo form_input($hdper);?></td>
                </tr>
                <tr>
                    <th>Producto:</th>
                    <td><label for="txtnuevaeps"></label>
                        <?php echo form_input($prodid); ?>
                    </td>
                </tr>
                <tr>
                    <th>Movimiento:</th>
                    <td><label for="txtnuevaeps"></label>
                        <select name="selecttmov" id="selecttmov">
                            <?php foreach ($Listartmov as $tmov) { ?>
                                <option value=<?php echo $tmov['id'] ?>> <?php echo $tmov['Nombre']; ?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Fecha movimiento:</th>
                    <td><label for="txtnuevaeps"></label>
                        <?php echo form_input($fecmov); ?>
                    </td>
                </tr>
                <tr>
                    <th align="left" valign="middle" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Cantidad:</th>
                    <td style="border-width: 0px; "><label for="txtnuevaeps"></label>
                        <?php echo form_input($cant); ?>
                    </td>
                </tr>
                <tr>
                    <th align="left" valign="middle" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Medida:</th>
                    <td style="border-width: 0px; "><label for="txtnuevaeps"></label>
                        <?php echo form_input($medida); ?>
                    </td>
                </tr>
            </tbody>
            <? echo form_close(); ?>
        </table>
    </div>
</div>