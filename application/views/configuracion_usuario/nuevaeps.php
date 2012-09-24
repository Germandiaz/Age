<div>
    <?php $atributos = array('id' => 'nueEps_form', 'class' => 'form_nueEps');
        echo form_open('nuevaeps/insertareps', $atributos);
    ?>
    <div>
        <input type="button" id="idboton" value="Ocultar" />
        <div id="iddiv">
            <p><?php echo form_submit('submit', 'Agregar'); ?></p>
            <table>
                <tbody>
                    <?php
                        $nomEps = array('name' => 'txtnombreEps','id' => 'txtnombreEps','value' => set_value('txtnombreEps'));
                        $TelefonoEsp = array('name' => 'txttelefonoEps','id' => 'txttelefonoEps','value' => set_value('txttelefonoEps'));
                        $DireccionEps = array('name' => 'txtdireccionEps','id' => 'txtdireccionEps','value' => set_value('txtdireccionEps'));
                        $Tiposegu = array('name' => 'txttiposeguridadEps','id' => 'txttiposeguridadEps','value' => set_value('txttiposeguridadEps'));
                    ?>
                    <tr>
                        <th>Ingresar EPS:</th>
                        <td><label for="txtnuevaeps"></label>
                            <?php echo form_input($nomEps); ?>
                        </td>
						<td><?php echo form_error('txtnombreEps'); ?></td>
                    </tr>
                    <tr>
                        <th>Telefono:</th>
                        <td><label for="txtnuevaeps"></label>
                            <?php echo form_input($TelefonoEsp); ?>
                        </td>
						<td><?php echo form_error('txttelefonoEps'); ?></td>
                    </tr>
                    <tr>
                        <th>Direcci&#243;n:</th>
                        <td><label for="txtnuevaeps"></label>
                            <?php echo form_input($DireccionEps);?>
                        </td>
                        <td><?php echo form_error('txtdireccionEps'); ?></td>
                    </tr>
                    <tr>
                        <th>Tipo Seguridad:</th>
                        <td><label for="txtnuevaeps"></label>
                            <?php echo form_input($Tiposegu); ?>
                        </td>
						<td><?php echo form_error('txttiposeguridadEps'); ?></td>
                    </tr>
                </tbody>
                <? echo form_close(); ?>
            </table>
        </div>
        <div>
            <input type="hidden" id="swpag" value="nuevaeps" >
            <table id="tabpag">
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>Nombre</td>
                        <td>Telefono</td>
                        <td>Direcci&#243;n</td>
                        <td>Tipo Seguridad</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($Listar as $Valor) { ?>
                    <tr>
                        <td id="0"> <?php echo $Valor['id'] ?> </td>
                        <td id="1"> <?php echo $Valor['Nombre'] ?> </td>
                        <td id="2"> <?php echo $Valor['Telefono'] ?> </td>
                        <td id="3"> <?php echo $Valor['Direccion'] ?> </td>
                        <td id="4"> <?php echo $Valor['TipoSeguridad'] ?> </td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
        </div>
	</div>
<div>