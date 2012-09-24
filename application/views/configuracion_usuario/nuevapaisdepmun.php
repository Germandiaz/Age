<div>
    <?php $atributos = array('id' => 'nueEps_form', 'class' => 'form_nuepaisdepmun');
        echo form_open('nuevapaisdepmun/insertarpaisdepmun', $atributos);
    ?>
    <div>
        <input type="button" id="idboton" value="Ocultar" />
        <div id="iddiv">
            <table>
                <tbody>
                    <?php
                        $idpais = array('name' => 'txtidpais','id' => 'txtidpais','value' => set_value('txtidpais'));
                        $nombrepais = array('name' => 'txtnombrepais','id' => 'txtnombrepais','value' => set_value('txtnombrepais'));
                        $indicativopais = array('name' => 'txtindicativopais','id' => 'txtindicativopais','value' => set_value('txtindicativopais'));
                    ?>
                    <tr>
                        <th>Indicativo:</th>
                        <td><label for="txtnuevaindpais"></label>
                            <?php echo form_input($indicativopais); ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Nombre:</th>
                        <td><label for="txtnuevaeps"></label>
                            <?php echo form_input($nombrepais); ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><?php echo form_submit('submit', 'Agregar'); ?></td>
                    </tr>
                </tbody>
                <? echo form_close(); ?>
            </table>
        </div>
        <div>
            <input type="hidden" id="swpag" value="nuevapaisdepmun" >
            <table>
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Indicativo</td>
                        <td>Nombre</td>
                    </tr>
                </thead>
            <tbody>
                <?php foreach ($Listar as $Valor) { ?>
                <tr>
                    <td> <?php echo $Valor['id'] ?> </td>
                    <td> <?php echo $Valor['indicativo'] ?> </td>
                    <td> <?php echo $Valor['nombrepais'] ?> </td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
    </div>
</div>