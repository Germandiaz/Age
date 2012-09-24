<div>
    <?php $atributos = array('id' => 'nueprod_form', 'class' => 'form_nueprod');
        echo form_open('nuevadocumento/insertardocumento', $atributos);
    ?>
    <div>
        <input type="button" id="idboton" value="Ocultar" />
        <div id="iddiv">
            <table>
                <tbody>
                    <?php
                        $nomdoc= array('name' => 'txtnomdoc','id' => 'txtnomdoc','value' => set_value('txtnomdoc'));
                    ?>
                    <tr>
                        <th>Descripcion:</th>
                        <td><label for="txtnuevaindpais"></label>
                            <?php echo form_input($nomdoc); ?>
                        </td>
                        <td><?php echo form_submit('submit', 'Agregar'); ?></td>
                    </tr>
                </tbody>
                <? echo form_close(); ?>
            </table>
        </div>
        <div>
            <input type="hidden" id="swpag" value="nuevadocumento" >
            <table>
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nombre</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($Listar as $Valor) { ?>
                    <tr>
                        <td> <?php echo $Valor['id'] ?> </td>
                        <td> <?php echo $Valor['nomdoc'] ?> </td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
        </div>
	</div>
</div>