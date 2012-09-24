<div>
    <?php $atributos = array('id' => 'nueReli_form', 'class' => 'form_nueReli');
        echo form_open('nuevareligion/insertarel', $atributos);
    ?>
    <p><?php echo form_submit('submit', 'Agregar'); ?></p>
    <table>
        <?php
            $nomReli = array('name' => 'txtnombreReligion','id' => 'txtnombreReligion','value' => set_value('txtnombreReligion'));
        ?>
        <tbody>
            <tr>
                <th>Ingresar Religion</th>
                <td><label for="txtnuevaeps"></label>
                    <?php echo form_input($nomReli); ?>
                </td>
            </tr>
        </tbody>
        <? echo form_close(); ?>
    </table>
    <input type="hidden" id="swpag" value="nuevareligion" >
    <table>
        <tr>
            <td>Id</td>
            <td>Nombre</td>
        </tr>
        <?php foreach ($Listar as $Valor) { ?>
        <tr>
            <td style="border-width: 0px; "> <?php echo $Valor['id'] ?> </td>
            <td style="border-width: 0px; "> <?php echo $Valor['Nombre'] ?> </td>
        </tr>
        <?php } ?>
    </table>
</div>