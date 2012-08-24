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
                   <?php $atributos = array('id' => 'gerontedxs_form', 'class' => 'form_gerontedxs');
                            echo form_open('ingresargeronte/capdatosgerondxs', $atributos);
                            echo form_submit('submit', 'Siguiente'); echo $idadmision?>
                        <div align="right"><?php echo form_hidden('txtidadmisiongerontedxs',$idadmision)?></div>
                    <table width="700" border="0" align="center">
                        <?php
                        $atributos = array('id' => 'dxs_form', 'class' => 'form_dxs');
                        echo form_open('ingresargeronte/capdatosgerondxs', $atributos);
                        $observacionmedico = array(
                            'name' => 'txtobservacionmedico',
                            'id' => 'txtobservacionmedico',
                            'value' => set_value('txtobservacionmedico'),
                            'rows'=>'5',
                            'cols'=>'50'
                        );
                        $observaciongerontologicos = array(
                            'name' => 'txtobservaciongerontologicos',
                            'id' => 'txtobservaciongerontologicos',
                            'value' => set_value('txtobservaciongerontologicos'),
                            'rows'=>'5',
                            'cols'=>'50'
                        );
                        $observacionintervenciogerontologico= array(
                            'name' => 'txtobservacionintervenciongerontologico',
                            'id' => 'txtobservacionintervenciongerontologico',
                            'value' => set_value('txtobservacionintervenciongerontologico'),
                            'rows'=>'5',
                            'cols'=>'50'
                        );
                        $observacionfisica= array(
                            'name' => 'txtobservacionfisica',
                            'id' => 'txtobservacionfisica',
                            'value' => set_value('txtobservacionfisica'),
                            'rows'=>'5',
                            'cols'=>'50'
                        );
                        $observacionpsicologicas= array(
                            'name' => 'txtobservacionpsicologica',
                            'id' => 'txtobservacionpsicologica',
                            'value' => set_value('txtobservacionpsicologica'),
                            'rows'=>'5',
                            'cols'=>'50'
                        );
                         $observacionfuncionales= array(
                            'name' => 'txtobservacionfuncionales',
                            'id' => 'txtobservacionfuncionales',
                            'value' => set_value('txtobservacionfuncionales'),
                             'rows'=>'5',
                            'cols'=>'50'
                        );
                         $observacionsociofamiliares= array(
                            'name' => 'txtobservacionsociofamiliares',
                            'id' => 'txtobservacionsociofamiliares',
                            'value' => set_value('txtobservacionsociofamiliares'),
                             'rows'=>'5',
                            'cols'=>'50'
                        );
                        ?>
                        <tbody>
                            <tr>
                                <th scope="row" style="border-width: 0px; ">
                        <table width="695" border="0" align="left">
                            <tbody>
                                <tr>
                                    <th scope="row" style="border-width: 0px; ">DXS Médico</th>
                                </tr>
                                <tr>
                                    <th scope="row" style="border-width: 0px; "><?php echo form_textarea($observacionmedico); ?></th>
                                </tr>
                            </tbody>
                        </table>
                        </th>
                        </tr>
                        <tr>
                            <th scope="row" style="border-width: 0px; ">
                        <table width="695" border="0" align="left">
                            <tbody>
                                <tr>
                                    <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                </tr>
                                <tr>
                                    <th scope="row" style="border-width: 0px; ">DXS Gerontológicos</th>
                                </tr>
                                <tr>
                                    <th scope="row" style="border-width: 0px; "><?php echo form_textarea($observaciongerontologicos); ?></th>
                                </tr>
                            </tbody>
                        </table>
                        </th>
                        </tr>
                        <tr>
                            <th scope="row" style="border-width: 0px; ">
                        <table width="695" border="0" align="left">
                            <tbody>
                                <tr>
                                    <th colspan="2" scope="row" style="border-width: 0px; ">&nbsp;</th>
                                </tr>
                                <tr>
                                    <th colspan="2" scope="row" style="border-width: 0px; ">Intervención Gerontológica</th>
                                </tr>
                                <tr>
                                    <th colspan="2" scope="row" style="border-width: 0px; ">
                                        <label for="textarea"></label>
                                        <?php echo form_textarea($observacionintervenciogerontologico); ?>
                                    </th>
                                </tr>
                                <tr>
                                    <th width="350" scope="row" style="border-width: 0px; ">&nbsp;</th>
                                    <th width="335" scope="row" style="border-width: 0px; ">&nbsp;</th>
                                </tr>
                                <tr>
                                    <th scope="row" style="border-width: 0px; ">Obsevaciones Fisicas:</th>
                                    <th scope="row" style="border-width: 0px; ">Observaciones Psicologicas:</th>
                                </tr>
                                <tr>
                                    <th scope="row" style="border-width: 0px; "><?php echo form_textarea($observacionfisica); ?></th>
                                    <th scope="row" style="border-width: 0px; "><?php echo form_textarea($observacionpsicologicas); ?></th>
                                </tr>
                                <tr>
                                    <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                    <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                </tr>
                                <tr>
                                    <th scope="row" style="border-width: 0px; ">Observaciones Funcionales:</th>
                                    <th scope="row" style="border-width: 0px; ">Observaciones Socio Familiares:</th>
                                </tr>
                                <tr>
                                    <th scope="row" style="border-width: 0px; "><?php echo form_textarea($observacionfuncionales); ?></th>
                                    <th scope="row" style="border-width: 0px; "><?php echo form_textarea($observacionsociofamiliares); ?></th>
                                </tr>
                               <tr>
                                    <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                    <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                </tr>
                                <tr>
                                    <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                    <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                </tr>
                                <tr>
                                    <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                    <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                </tr>
                                <tr>
                                    <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                    <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                </tr> 
                            </tbody>
                        </table>
                        </th>
                        </tr>
                        </tbody>
                    </table>
                    <?php echo form_close(); ?>
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
