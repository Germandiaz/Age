<div>
    <?php $atributos = array('id' => 'nuecargo_form', 'class' => 'form_nuecargo');
        echo form_open('nuevacargo/insertarcargo', $atributos);
    ?>
    <div>
        <input type="button" id="idboton" value="Ocultar" />
        <div id="iddiv">
            <table>
                <tbody>
                    <?php
                        $nomcargo = array('name' => 'txtnomcargo','id' => 'txtnomcargo','value' => set_value('txtnomcargo'));
                    ?>
                    <tr>
                        <th>Descripcion:</th>
                        <td><label for="txtnuevaindpais"></label>
                            <?php echo form_input($nomcargo); ?>
                        </td>
						<td><?php echo form_submit('submit', 'Agregar'); ?></td>
                    </tr>
                </tbody>
                <? echo form_close(); ?>
            </table>
        </div>
        <div>
            <input type="hidden" id="swpag" value="nuevacargo" >
            <table id="tabpag">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Descripcion cargo</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($Listar as $Valor) { ?>
                    <tr>
                        <td> <?php echo $Valor['id'] ?> </td>
                        <td> <?php echo $Valor['nomcargo'] ?> </td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
</div>