<div>
    <?php $atributos = array('id' => 'nuetipoval_form', 'class' => 'form_nuetipoval');
        echo form_open('nuevavaloracion/insertartipoval', $atributos);
    ?>
    <div id="iddiv">
        <table>
            <tbody>
                <?php
                    $nomtipoval = array('name' => 'txtnomtipoval','id' => 'txtnomtipoval','value' => set_value('txtnomtipoval'));
                ?>
                <tr>
                    <th>Descripcion:</th>
                    <td><label for="txtnuevaindpais"></label>
                        <?php echo form_input($nomtipoval); ?>
                    </td>
					<td><?php echo form_submit('submit', 'Agregar'); ?></td>
                </tr>
            </tbody>
            <? echo form_close(); ?>
        </table>
    </div>
    <input type="hidden" id="swpag" value="nuevavaloracion" >
    <table id="tabpag">
        <thead>
            <tr>
                <td>ID</td>
                <td>Descripcion tipo valoracion</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($Listar as $Valor) { ?>
            <tr>
                <td> <?php echo $Valor['id'] ?> </td>
                <td> <?php echo $Valor['nomtipoact'] ?> </td>
            </tr>
        </tbody>
        <?php } ?>
    </table>
</div>