<div>
    <?php $atributos = array('id' => 'nuev_valora', 'class' => 'valora_nuev');
        echo form_open('nuevomedicamento/ingresarmed', $atributos);
    ?>
    <div>
        <p><?php echo form_submit('submit', 'Agregar'); ?></p>
        <table>
            <tbody>
                <?php
                    $NomMedi = array('name' => 'txtNombreMedicamento','id' => 'txtNombreMedicamento','value' => set_value('txtNombreMedicamento'));
                    $PreseMe = array('name' => 'txtPresentacionMedicamento','id' => 'txtPresentacionMedicamento','value' => set_value('txtPresentacionMedicamento'));
                ?>
                <tr>
                    <th>¿?</th>
                    <td><label for="txtnuevaeps"></label>
                        <?php form_input($nomMed); ?>
                    </td>
                </tr>
                <tr>
                    <th>¿?</th>
                    <td><label for="txtnuevaeps"></label>
                        <?php form_input($TelefonoEsp); ?>
                    </td>
                </tr>
            </tbody>
            <?php echo form_close(); ?>
        </table>
    </div>
</div>