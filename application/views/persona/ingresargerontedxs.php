<div>
    <?php 
        $atributos = array('id' => 'gerontedxs_form', 'class' => 'form_gerontedxs');
        echo form_open('ingresargeronte/capdatosgerondxs', $atributos);
        echo form_submit('submit', 'Siguiente'); 
        echo $idadmision
    ?>
    <div><?php echo form_hidden('txtidadmisiongerontedxs',$idadmision)?></div>
    <table>
    <?php
        $atributos = array('id' => 'dxs_form', 'class' => 'form_dxs');
        echo form_open('ingresargeronte/capdatosgerondxs', $atributos);
        $observacionmedico = array('name' => 'txtobservacionmedico','id' => 'txtobservacionmedico','value' => set_value('txtobservacionmedico'),'rows'=>'5','cols'=>'50');
        $observaciongerontologicos = array('name' => 'txtobservaciongerontologicos','id' => 'txtobservaciongerontologicos','value' => set_value('txtobservaciongerontologicos'),'rows'=>'5','cols'=>'50');
        $observacionintervenciogerontologico= array('name' => 'txtobservacionintervenciongerontologico','id' => 'txtobservacionintervenciongerontologico','value' => set_value('txtobservacionintervenciongerontologico'),'rows'=>'5','cols'=>'50');
        $observacionfisica= array('name' => 'txtobservacionfisica','id' => 'txtobservacionfisica','value' => set_value('txtobservacionfisica'),'rows'=>'5','cols'=>'50');
        $observacionpsicologicas= array('name' => 'txtobservacionpsicologica','id' => 'txtobservacionpsicologica','value' => set_value('txtobservacionpsicologica'),'rows'=>'5','cols'=>'50');
        $observacionfuncionales= array('name' => 'txtobservacionfuncionales','id' => 'txtobservacionfuncionales','value' => set_value('txtobservacionfuncionales'),'rows'=>'5','cols'=>'50');
        $observacionsociofamiliares= array('name' => 'txtobservacionsociofamiliares','id' => 'txtobservacionsociofamiliares','value' => set_value('txtobservacionsociofamiliares'),'rows'=>'5','cols'=>'50');
    ?>
    <tbody>
        <tr>
            <th>
                <table>
                    <tbody>
                        <tr>
                            <th>DXS Médico</th>
                        </tr>
                        <tr>
                            <th><?php echo form_textarea($observacionmedico); ?></th>
                        </tr>
                    </tbody>
                </table>
            </th>
        </tr>
        <tr>
            <th>
                <table>
                    <tbody>
                        <tr>
                            <th>DXS Gerontológicos</th>
                        </tr>
                        <tr>
                            <th><?php echo form_textarea($observaciongerontologicos); ?></th>
                        </tr>
                    </tbody>
                </table>
            </th>
        </tr>
        <tr>
            <th>
                <table>
                    <tbody>
                        <tr>
                            <th>Intervención Gerontológica</th>
                        </tr>
                        <tr>
                            <th colspan="2">
                                <label for="textarea"></label>
                                <?php echo form_textarea($observacionintervenciogerontologico); ?>
                            </th>
                        </tr>
                        <tr>
                            <th>Obsevaciones Fisicas:</th>
                            <th>Observaciones Psicologicas:</th>
                        </tr>
                        <tr>
                            <th><?php echo form_textarea($observacionfisica); ?></th>
                            <th><?php echo form_textarea($observacionpsicologicas); ?></th>
                        </tr>
                        <tr>
                            <th>Observaciones Funcionales:</th>
                            <th>Observaciones Socio Familiares:</th>
                        </tr>
                            <tr>
                                <th><?php echo form_textarea($observacionfuncionales); ?></th>
                                <th><?php echo form_textarea($observacionsociofamiliares); ?></th>
                            </tr>
                        </tbody>
                    </table>
                </th>
            </tr>
        </tbody>
    </table>
    <?php echo form_close(); ?>
</div>