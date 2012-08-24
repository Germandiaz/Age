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
                   <?php $atributos = array('id' => 'datosocupacion_form', 'class' => 'form_datosocupacion');
                            echo form_open('ingresargeronte/capdatosgeronocupacion', $atributos);
                            echo form_submit('submit', 'Siguiente'); ?>
                        <div align="right"><?php echo form_hidden('txtidadmisionocupaciongeronte',$idadmision)?></div>
                    <table border="0">
                        <tbody>
                            <tr>
                                <th scope="row" style="border-width: 0px; ">Ocupación y Tiempo Libre </th>
                            </tr>
                            <tr>
                                <th height="419" scope="row" style="border-width: 0px; ">
                        <table width="700" border="0">
                            <tbody>
                             <?php   $otrosactividades = array (
                                 'id'=>'txtotrosactividadesocupacion',
                                 'name'=>'txtotrosactividadesocupacion',
                                 'value' =>  set_value('txtotrosactividadesocupacion'),
                                 'rows' =>'3',
                                 'cols' =>'20'
                                );
                             ?>
                                <tr>
                                    <th colspan="4" scope="row" align="left" style="border-width: 0px; ">Actividades que realiza:</th>
                                </tr>
                                <tr>
                                    <td scope="row" align="left" style="border-width: 0px; "><?php echo form_checkbox('oraractividadesrealiza', '252', FALSE); ?> Orar</td>
                                    <td align="left" style="border-width: 0px; "><?php echo form_checkbox('juegosactividadesrealiza', '253', FALSE); ?>Juegos de mesa </td>
                                    <td align="left" style="border-width: 0px; "><?php echo form_checkbox('fiestasactividadesrealiza', '254', FALSE); ?>Fiestas sociales </td>
                                    <td align="left" style="border-width: 0px; "><?php echo form_checkbox('lecturaactividadesrealiza', '255', FALSE); ?>Lectura</td>
                                </tr>
                                <tr>
                                    <td width="166" scope="row" align="left" style="border-width: 0px; "><?php echo form_checkbox('escrituraactividadesrealiza', '256', FALSE); ?>Escritura</td>
                                    <td width="161" align="left" style="border-width: 0px; "><?php echo form_checkbox('manualidadesactividadesrealiza', '257', FALSE); ?>Manualidades</td>
                                    <td width="161" align="left" style="border-width: 0px; "><?php echo form_checkbox('jardineriaactividadesrealiza', '258', FALSE); ?>Jardinería</td>
                                    <td width="161" align="left" style="border-width: 0px; "><?php echo form_checkbox('pinturaactividadesrealiza', '259', FALSE); ?>Pintura</td>
                                </tr>
                                <tr>
                                    <td scope="row" align="left" style="border-width: 0px; "><?php echo form_checkbox('musicaactividadesrealiza', '260', FALSE); ?>Música</td>
                                    <td align="left" style="border-width: 0px; "><?php echo form_checkbox('gimnasiaactividadesrealiza', '261', FALSE); ?>Gimnasia</td>
                                    <td align="left" style="border-width: 0px; "><?php echo form_checkbox('talleresactividadesrealiza', '262', FALSE); ?>Talleres dirigidos</td>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td scope="row" style="border-width: 0px; ">&nbsp;</td>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                </tr>
                                <tr>
                                    <th colspan="4" scope="row" align="left" style="border-width: 0px; ">Si el hogar le ofreciera otras actividades reeducativas en cuales participaría:</th>
                                </tr>
                                <tr>
                                    <td width="166" scope="row" align="left" style="border-width: 0px; "><?php echo form_checkbox('juegosotrasactividades', '263', FALSE); ?>Juegos de mesa</td>
                                    <td width="161" align="left" style="border-width: 0px; "><?php echo form_checkbox('fiestasotrasactividades', '264', FALSE); ?>Fiestas sociales</td>
                                    <td width="161" align="left" style="border-width: 0px; "><?php echo form_checkbox('lecturaotrasactividades', '265', FALSE); ?>Lectura</td>
                                    <td width="161" align="left" style="border-width: 0px; "><?php echo form_checkbox('escrituraotrasactividades', '266', FALSE); ?>Escritura</td>
                                </tr>
                                <tr>
                                    <td scope="row" align="left" style="border-width: 0px; "><?php echo form_checkbox('manualidadesotrasactividades', '267', FALSE); ?>Manualidades</td>
                                    <td align="left" style="border-width: 0px; "><?php echo form_checkbox('jardineriaotrasactividades', '268', FALSE); ?>Jardinería</td>
                                    <td align="left" style="border-width: 0px; "><?php echo form_checkbox('pinturaotrasactividades', '269', FALSE); ?>Pintura</td>
                                    <td align="left" style="border-width: 0px; "><?php echo form_checkbox('musicaotrasactividades', '270', FALSE); ?>Música</td>
                                </tr>
                                <tr>
                                    <td scope="row" align="left" style="border-width: 0px; "><?php echo form_checkbox('gimnasiaotrasactividades', '271', FALSE); ?>Gimnasia</td>
                                    <td align="left" style="border-width: 0px; "><?php echo form_checkbox('talleresotrasactividades', '272', FALSE); ?>Talleres dirigidos</td>
                                    <td align="left" style="border-width: 0px; "><?php echo form_checkbox('cultivosotrasactividades', '273', FALSE); ?>Cultivos hidrópicos</td>
                                    <td align="left" style="border-width: 0px; "><?php echo form_checkbox('orarotrasactividades', '274', FALSE); ?>Orar</td>
                                </tr>
                                <tr>
                                    <td scope="row" align="left" style="border-width: 0px; "><?php echo form_checkbox('caminarotrasactividades', '275', FALSE); ?>Caminar</td>
                                    <td align="left" style="border-width: 0px; "><?php echo form_checkbox('pasearotrasactividades', '276', FALSE); ?>Pasear</td>
                                    <td align="left" style="border-width: 0px; "><?php echo form_checkbox('otrasactividades', '277', FALSE); ?>Otras</td>
                                    <td rowspan="2" align="left" style="border-width: 0px; "><?php echo form_textarea($otrosactividades) ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                </tr>
                                <tr>
                                    <th colspan="4" scope="row" align="left" style="border-width: 0px; ">De las actividades ofrecidas por la institución a cuales asiste: </th>
                                </tr>
                                <tr>
                                    <td scope="row" align="left" style="border-width: 0px; "><?php echo form_checkbox('socioculturalesactividadesofrecidas', '278', FALSE); ?>Socio culturales</td>
                                    <td align="left" style="border-width: 0px; "><?php echo form_checkbox('ocupacionesactividadesofrecidas', '279', FALSE); ?>Ocupaciones</td>
                                    <td align="left" style="border-width: 0px; "><?php echo form_checkbox('recreativasactividadesofrecidas', '280', FALSE); ?>Recreativas</td>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                </tr>
                                <tr>
                                    <th colspan="4" scope="row" style="border-width: 0px; ">&nbsp;</th>
                                </tr>
                            </tbody>
                        </table>
                        <?php echo form_close(); ?>
                        </th>
                        </tr>
                        </tbody>
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