<div class="cleared"></div>
</div>
<div class="art-layout-cell art-content">
    <div class="art-post">
        <div class="art-post-tl"></div>
        <div class="art-post-tr"></div>
        <div class="art-post-bl"></div>
        <div class="art-post-br"></div>
        <div class="art-post-tc"></div>
        <div class="art-post-bc"></div>
        <div class="art-post-cl"></div>
        <div class="art-post-cr"></div>
        <div class="art-post-cc"></div>
        <div class="art-post-body">
            <div class="art-post-inner art-article">

                <div class="art-postcontent">
                   <?php $atributos = array('id' => 'nueHabitacion_form', 'class' => 'form_Habitacion');
                    echo form_open('nuevahabitacion/inserthab', $atributos); ?>
                    <p align="left"><?php echo form_submit('submit', 'Agregar'); ?>

                    </p>
                    <p><br /></p>
                    <table width="662" border="0">
                    <?php
                        $codHabitacion = array(
                            'name' => 'txtcodigoHabitacion',
                            'id' => 'txtcodigoHabitacion',
                            'value' => set_value('txtcodigoHabitacion')
                        );
                        $capHabitacion = array(
                            'name' => 'txtcapacidadHabitacion',
                            'id' => 'txtcapacidadHabitacion',
                            'value' => set_value('txtcapacidadHabitacion')
                        );
                        $descHabitacion = array(
                            'name' => 'txtdescripciontxtcapacidadHabitacion',
                            "cols" => "22",
                            "rows" => "5",
                            'id' => 'txtdescripciontxtcapacidadHabitacion',
                            'value' => set_value('txtdescripciontxtcapacidadHabitacion')
                        );
                        ?>
                        <tbody>
                            <tr>
                                <th width="195" align="left" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; "></th>
                                <td width="163" style="border-width: 0px; "></td>

                                <th width="81" align="left" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; "></th>

                            </tr>
                            <tr>
                                <th align="left" valign="middle" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Codigo Habitacion:</th>
                                <td style="border-width: 0px; "><label for="txtnuevaeps"></label>
                                    <?php echo form_input($codHabitacion); ?></td>
                            </tr>
                            <tr>
                                <th align="left" valign="middle" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Capacidad:</th>
                                <td style="border-width: 0px; "><label for="txtnuevaeps"></label>
                                    <?php echo form_input($capHabitacion); ?></td>
                            </tr>
                            <tr>
                                <th align="left" valign="middle" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Descripción:</th>
                                <td style="border-width: 0px; "><label for="txtnuevaeps"></label>
                                    <?php echo form_textarea($descHabitacion); ?></td>
                            </tr>
                            <tr>

                            </tr>
                        </tbody>
                        <? echo form_close(); ?>
                    </table>
                     <p><br /></p> 
                     <input type="hidden" id="swpag" value="nuevahabitacion" >
                     <table width="662" border="0">
                            <tr>
                                <td style="border-width: 0px; ">Codigo Habitacion</td>
                                <td style="border-width: 0px; ">Capacidad</td>
                                <td style="border-width: 0px; ">Descripcion</td>
                            </tr>
                            <?php
                                foreach ($Listar as $Valor) {
                            ?>
                                     <tr>
                                     <td style="border-width: 0px; "> <?php echo $Valor['cod'] ?> </td>
                                     <td style="border-width: 0px; "> <?php echo $Valor['Capacidad'] ?> </td>
                                     <td style="border-width: 0px; "> <?php echo $Valor['Descripcion'] ?> </td>
                                     </tr>
                               <?php }
                            ?>
                    </table>
                    <p><br /></p>

                </div>
                <div class="cleared"></div>
            </div>
            <div class="cleared"></div>
        </div>
    </div>
    <div class="cleared"></div>
</div>
</div>
</div>
