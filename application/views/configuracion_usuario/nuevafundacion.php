<div>
    <?php $atributos = array('id' => 'nuefund_form', 'class' => 'form_nuefund');
        echo form_open('nuevafundacion/insertarfund', $atributos);
    ?>
    <div>
        <input type="button" id="idboton" value="Ocultar" />
        <div id="iddiv">
            <table>
                <tbody>
                    <?php
                        $nomtfund = array('name' => 'txtnomfund','id' => 'txtnomfund','value' => set_value('txtnomfund'));
                    ?>
                    <tr>
                        <th>Nombre:</th>
                        <td><label for="txtnuevaindpais"></label>
                            <?php echo form_input($nomtfund); ?>
                        </td>
						<td><?php echo form_submit('submit', 'Agregar'); ?></td>
                    </tr>
                </tbody>
                <? echo form_close(); ?>
            </table>
        </div>
    </div>
    <input type="hidden" id="swpag" value="nuevafundacion" >
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Fundacion</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($Listar as $Valor) { ?>
            <tr>
                <td> <?php echo $Valor['id'] ?> </td>
                <td> <?php echo $Valor['nomfund'] ?> </td>
            </tr>
        </tbody>
        <?php } ?>
    </table>
</div>