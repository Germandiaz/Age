<div>
    <?php $atributos = array('id' => 'nueHabitacion_form', 'class' => 'form_Habitacion');
        echo form_open('nuevahabitacion/inserthab', $atributos);
    ?>
    <p><?php echo form_submit('submit', 'Agregar'); ?></p>
    <table>
        <?php
            $codHabitacion = array('name' => 'txtcodigoHabitacion','id' => 'txtcodigoHabitacion','value' => set_value('txtcodigoHabitacion'));
            $capHabitacion = array('name' => 'txtcapacidadHabitacion','id' => 'txtcapacidadHabitacion','value' => set_value('txtcapacidadHabitacion'));
            $descHabitacion = array('name' => 'txtdescripciontxtcapacidadHabitacion',"cols" => "22","rows" => "5",'id' => 'txtdescripciontxtcapacidadHabitacion','value' => set_value('txtdescripciontxtcapacidadHabitacion'));
        ?>
        <tbody>
            <tr>
                <th>Codigo Habitacion:</th>
                <td><label for="txtnuevaeps"></label>
                    <?php echo form_input($codHabitacion); ?>
                </td>
            </tr>
            <tr>
                <th>Capacidad:</th>
                <td><label for="txtnuevaeps"></label>
                    <?php echo form_input($capHabitacion); ?>
                </td>
            </tr>
            <tr>
                <th>Descripción:</th>
                <td><label for="txtnuevaeps"></label>
                    <?php echo form_textarea($descHabitacion); ?>
                </td>
            </tr>
        </tbody>
        <? echo form_close(); ?>
    </table>
    <input type="hidden" id="swpag" value="nuevahabitacion" >
    <table>
        <tr>
            <td>Codigo Habitacion</td>
            <td>Capacidad</td>
            <td>Descripcion</td>
        </tr>
        <?php foreach ($Listar as $Valor) { ?>
        <tr>
            <td> <?php echo $Valor['cod'] ?> </td>
            <td> <?php echo $Valor['Capacidad'] ?> </td>
            <td> <?php echo $Valor['Descripcion'] ?> </td>
        </tr>
        <?php } ?>
    </table>
</div>