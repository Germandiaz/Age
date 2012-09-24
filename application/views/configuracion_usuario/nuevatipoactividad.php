<div>
    <?php $atributos = array('id' => 'nuetipoact_form', 'class' => 'form_nuetipoact');
        echo form_open('nuevatipoactividad/insertartipoact', $atributos);
    ?>
    <div>
        <input type="button" id="idboton" value="Ocultar" />
        <div id="iddiv">
            <table>
                <tbody>
                    <?php
                        $nomtipoact = array('name' => 'txtnomtipoact','id' => 'txtnomtipoact','value' => set_value('txtnomtipoact'));
                    ?>
                    <tr>
                        <th>Descripcion:</th>
                        <td><label for="txtnuevaindpais"></label>
                            <?php echo form_input($nomtipoact); ?>
                        </td>
						<td><?php echo form_submit('submit', 'Agregar'); ?></td>
                    </tr>
                </tbody>
                <? echo form_close(); ?>
            </table>
        </div>
        <div>
            <input type="hidden" id="swpag" value="nuevatipoactividad" >
            <table id="tabpag">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Descripcion actividad</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($Listar as $Valor) {
                    ?>
                  	<tr>
                        <td> <?php echo $Valor['id'] ?> </td>
                        <td> <?php echo $Valor['nomtipoact'] ?> </td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
</div>