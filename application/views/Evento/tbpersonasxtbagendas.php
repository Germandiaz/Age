<div>
    <?php
        $atributos = array('id' => 'nueasis_form', 'class' => 'form_nueasis');
        echo form_open('asistentes/insertarasistente', $atributos);
    ?>
    <div>
        <input type="button" id="idboton" value="Agregar asistente" />
        <input type="button" value="Finalizar">
        <div id="iddiv">
            <p><?php echo form_submit('submit', 'Confirmar'); ?></p>
            <table width="400" border="0">
                <tbody>
                    <?php
                        foreach ($Listar as $Valor) {$var = $Valor['EVENTO'];}
                        $perid = array('value' => $var);
                        $perageid = array('name' => 'hdperid','id' => 'hdperid','value' => $var);
                    ?>
                    <tr>
                        <th>Personas:</th>
                        <td><label for="txtnuevaeps"></label>
                            <select name="selectper" id="selectper">
                                <?php foreach ($Listarper as $per) { ?>
                                <option value=<?php echo $per['id'] ?>> <?php echo $per['Nombre']; ?></option>
                                <?php } ?>
                            </select>
                        </td>
                        <td><?php echo form_input($perageid); ?></td>
                    </tr>
                </tbody>
                <? echo form_close(); ?>
            </table>
        </div>
    </div>
    <div>
        <input type="hidden" id="swpag" value="nuevaeps" >
        <table id="tabpag">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Cedula</td>
                    <td>Nombre</td>
                    <td>Apellido</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($Listar as $Valor) {$rutaeli= "asistentes/actualizarevento/".$Valor['EVENTO']."/".$Valor['IDPER'];
                ?>
                <tr>
                    <td> <?php echo $Valor['EVENTO'] ?> </td>
                    <td> <?php echo $Valor['CEDULA'] ?> </td>
                    <td> <?php echo $Valor['NOMBRE'] ?> </td>
                    <td> <?php echo $Valor['APELLIDO'] ?> </td>
                    <td> <?php echo anchor($rutaeli,'Quitar asistente','')?></td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
    </div>
</div>