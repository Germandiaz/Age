<div>
    <?php $atributos = array('id' => 'nueeve_form', 'class' => 'form_nueeve');
        echo form_open('agendaingresado/insertarevento', $atributos);
    ?>
    <div>
        <input type="button" id="idboton" value="Agregar Evento" />
        <div id="iddiv">
            <p><?php echo form_submit('submit', 'Agregar'); ?></p>
            <table>
                <tbody>
                    <?php
                        $idevento = array('name' => 'txtidevento','id' => 'txtidevento','value' => set_value('txtidevento'));
                        $tactevento = array('name' => 'txttactevento','id' => 'txttactevento','value' => set_value('txttactevento'));
                        $idperreaevento = array('name' => 'txtidperreaevento','id' => 'txtidperreaevento','value' => set_value('txtidperreaevento'));
                        $fecini = array('name' => 'txtfecini','id' => 'txtfecini','value' => set_value('txtfecini'));
                        $fecfin = array('name' => 'txtfecfin','id' => 'txtfecfin','value' => set_value('txtfecfin'));
                        $actdes = array('name' => 'txtactdes','id' => 'txtactdes','value' => set_value('txtactdes'));
                        $estact = array('name' => 'txtestact','id' => 'txtestact','value' => set_value('txtestact'));
                        $nomact = array('name' => 'txtnomact','id' => 'txtnomact','value' => set_value('txtnomact'));
                    ?>
                    <tr>
                        <th>Id Evento:</th>
                        <td><label for="txtnuevaeps"></label>
                            <?php echo form_input($idevento); ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Tipo de evento:</th>
                        <td><label for="txtnuevaeps"></label>
                            <?php echo form_input($tactevento); ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Nombre actividad:</th>
                        <td><label for="txtnuevaeps"></label>
                            <?php echo form_input($nomact); ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Descripción:</th>
                        <td><label for="txtnuevaeps"></label>
                            <?php echo form_input($actdes); ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Encargado del evento:</th>
                        <td><label for="txtnuevaeps"></label>
                            <?php echo form_input($idperreaevento); ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Fecha Inicial:</th>
                        <td><label for="txtnuevaeps"></label>
                            <?php echo form_input($fecini); ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Fecha Final:</th>
                        <td><label for="txtnuevaeps"></label>
                            <?php echo form_input($fecfin); ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Estado:</th>
                        <td><label for="txtnuevaeps"></label>
                            <?php echo form_input($estact); ?>
                        </td>
                    </tr>
                </tbody>
                <? echo form_close(); ?>
            </table>
        </div>
        <input type="hidden" id="swpag" value="agendaingresado" >
        <table id="tabpag">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Actividad</td>
                    <td>Tipo de actividad</td>
                    <td>Responsable</td>
                    <td>Fecha incio</td>
                    <td>Fecha final</td>
                    <td>Descripcion</td>
                    <td>Estado</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($Listar as $Valor) {$rutains= "asistentes/index/".$Valor['id'];
                ?>
                <tr>
                    <td> <?php echo $Valor['id'] ?> </td>
                    <td> <?php echo $Valor['actividad'] ?> </td>
                    <td > <?php echo $Valor['tactividad'] ?> </td>
                    <td> <?php echo $Valor['responsable'] ?> </td>
					<td> <?php echo $Valor['finicio'] ?> </td>
					<td> <?php echo $Valor['ffinal'] ?> </td>
					<td> <?php echo $Valor['descripcion'] ?> </td>
					<td> <?php echo $Valor['estado'] ?> </td>
					<td><?php echo anchor_popup($rutains,'Agregar asistentes','')?></td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
    </div>
</div>