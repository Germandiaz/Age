<div>
    <?php $atributos = array('id' => 'nueinc_form', 'class' => 'form_nueinc');
        echo form_open('incidenciaingresado/insertarincidencia', $atributos);
    ?>
    <div id="iddiv">
        <p><?php echo form_submit('submit', 'Agregar'); ?></p>
        <table>
            <tbody>
                <?php
                    $perid = array('name' => 'txtperid','id' => 'txtperid','value' => set_value('txtperid'));
                    $fecinc = array('name' => 'txtfecinc','id' => 'txtfecinc','value' => set_value('txtfecinc'));
                    $medinc = array('name' => 'txtmed','id' => 'txtmed','value' => set_value('txtmed'));
                    $diainc = array('name' => 'txtdiainc','id' => 'txtdiainc','value' => set_value('txtdiainc'));
                    $resinc = array('name' => 'txtresid','id' => 'txtresid','value' => set_value('txtresid'));
                ?>
                <tr>
                    <th>Ingresar cedula persona:</th>
                    <td><label for="txtnuevaeps"></label>
                        <?php echo form_input($perid); ?>
                    </td>
                </tr>
                <tr>
                    <th>Fecha incidencia:</th>
                    <td><label for="txtnuevaeps"></label>
                        <?php echo form_input($fecinc); ?>
                    </td>
                </tr>
                <tr>
                    <th>Medicina (SI/NO):</th>
                    <td><label for="txtnuevaeps"></label>
                        <?php echo form_input($medinc); ?>
                    </td>
                </tr>
                <tr>
                    <th>Observacion:</th>
                    <td><label for="txtnuevaeps"></label>
                        <?php echo form_input($diainc); ?>
                    </td>
                </tr>
                <tr>
                    <th>Responsable:</th>
                    <td><label for="txtnuevaeps"></label>
                        <?php echo form_input($resinc); ?>
                    </td>
                </tr>
            </tbody>
            <? echo form_close(); ?>
        </table>
    </div>
    <input type="hidden" id="swpag" value="nuevaeps" >
    <table>
        <thead>
            <tr>
                <td>Id</td>
                <td>Cedula</td>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Fecha realizacion</td>
                <td>Medicamentos</td>
                <td>Observacion</td>
                <td>Responsable</td>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($Listar as $Valor) {
                $rutaincmed= "nuevaincidenciamed/index/".$Valor['id']."/".$Valor['medicamento'];
            ?>
            <tr>
                <td style="border-width: 0px; "> <?php echo $Valor['id'] ?> </td>
                <td style="border-width: 0px; "> <?php echo $Valor['documento'] ?> </td>
                <td style="border-width: 0px; "> <?php echo $Valor['pnombre'] ?> </td>
                <td style="border-width: 0px; "> <?php echo $Valor['papellido'] ?> </td>
                <td style="border-width: 0px; "> <?php echo $Valor['fecharea'] ?> </td>
                <td style="border-width: 0px; "> <?php echo $Valor['medicamento'] ?> </td>
                <td style="border-width: 0px; "> <?php echo $Valor['observacion'] ?> </td>
                <td style="border-width: 0px; "> <?php echo $Valor['responsable'] ?> </td>
                <td><?php echo anchor_popup($rutaincmed,'A&ntilde;adir Medicamentos','')?></td>
            </tr>
        </tbody>
        <?php }?>
    </table>
</div>