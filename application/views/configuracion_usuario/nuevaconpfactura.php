<div>
    <?php $atributos = array('id' => 'nueconpfact_form', 'class' => 'form_nueconpfact');
        echo form_open('nuevaconpfactura/insertarconpfact', $atributos);
    ?>
    <div>
        <input type="button" id="idboton" value="Ocultar" />
        <div id="iddiv">
            <table>
                <tbody>
                    <?php $descconpfact = array('name' => 'txtdescconpfact','id' => 'txtdescconpfact','value' => set_value('txtdescconpfact'));?>
                    <tr>
                        <th>Nuevo concepto facturas:</th>
                        <td><label for="txtnuevaindpais"></label><?php echo form_input($descconpfact); ?></td>
                        <td><?php echo form_submit('submit', 'Agregar'); ?></td>
                    </tr>
                </tbody>
                <? echo form_close(); ?>
            </table>
        </div>
        <div>
            <input type="hidden" id="swpag" value="nuevaconpfactura" >
            <table>
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Indicativo</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($Listar as $Valor) { ?>
                    <tr>
                        <td> <?php echo $Valor['id'] ?> </td>
                        <td> <?php echo $Valor['conpfact'] ?> </td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
        </div>
	</div>
</div>