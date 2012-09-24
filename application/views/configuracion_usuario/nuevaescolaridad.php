<div>
    <?php $atributos = array('id' => 'nueesc_form', 'class' => 'form_nueesc');
        echo form_open('nuevaescolaridad/insertarescolaridad', $atributos);
    ?>
    <div>
        <input type="button" id="idboton" value="Ocultar" />
        <div id="iddiv">
            <table>
                <tbody>
                    <?php
                        $nomesc= array('name' => 'txtnomesc','id' => 'txtnomesc','value' => set_value('txtnomesc'));
                    ?>
                    <tr>
                        <th>Nombre:</th>
                        <td><label for="txtnuevaindpais"></label><?php echo form_input($nomesc); ?></td>
                        <td><?php echo form_submit('submit', 'Agregar'); ?></td>
                    </tr>
                </tbody>
                <? echo form_close(); ?>
            </table>
        </div>
        <div>
        <input type="hidden" id="swpag" value="nuevaescolaridad" >
        <table id="tabpag">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Escolaridad</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($Listar as $Valor) { ?>
                <tr>
                    <td> <?php echo $Valor['id'] ?> </td>
                    <td> <?php echo $Valor['nomesc'] ?> </td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
    </div>
</div>