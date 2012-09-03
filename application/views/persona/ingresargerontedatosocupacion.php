<div>
    <?php 
        $atributos = array('id' => 'datosocupacion_form', 'class' => 'form_datosocupacion');
        echo form_open('ingresargeronte/capdatosgeronocupacion', $atributos);
        echo form_submit('submit', 'Siguiente'); 
    ?>
    <div>
        <?php echo form_hidden('txtidadmisionocupaciongeronte',$idadmision)?>
    </div>
    <table>
        <tbody>
            <tr>
                <th>Ocupación y Tiempo Libre </th>
            </tr>
            <tr>
                <th>
                    <table width="700" border="0">
                        <tbody>
                            <?php   
                                $otrosactividades = array ('id'=>'txtotrosactividadesocupacion','name'=>'txtotrosactividadesocupacion','value' =>  set_value('txtotrosactividadesocupacion'),'rows' =>'3','cols' =>'20');
                            ?>
                            <tr>
                                <th>Actividades que realiza:</th>
                            </tr>
                            <tr>
                                <td><?php echo form_checkbox('oraractividadesrealiza', '252', FALSE); ?> Orar</td>
                                <td><?php echo form_checkbox('juegosactividadesrealiza', '253', FALSE); ?>Juegos de mesa </td>
                                <td><?php echo form_checkbox('fiestasactividadesrealiza', '254', FALSE); ?>Fiestas sociales </td>
                                <td><?php echo form_checkbox('lecturaactividadesrealiza', '255', FALSE); ?>Lectura</td>
                            </tr>
                            <tr>
                                <td><?php echo form_checkbox('escrituraactividadesrealiza', '256', FALSE); ?>Escritura</td>
                                <td><?php echo form_checkbox('manualidadesactividadesrealiza', '257', FALSE); ?>Manualidades</td>
                                <td><?php echo form_checkbox('jardineriaactividadesrealiza', '258', FALSE); ?>Jardinería</td>
                                <td><?php echo form_checkbox('pinturaactividadesrealiza', '259', FALSE); ?>Pintura</td>
                            </tr>
                            <tr>
                                <td><?php echo form_checkbox('musicaactividadesrealiza', '260', FALSE); ?>Música</td>
                                <td><?php echo form_checkbox('gimnasiaactividadesrealiza', '261', FALSE); ?>Gimnasia</td>
                                <td><?php echo form_checkbox('talleresactividadesrealiza', '262', FALSE); ?>Talleres dirigidos</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td><?php echo form_checkbox('juegosotrasactividades', '263', FALSE); ?>Juegos de mesa</td>
                                <td><?php echo form_checkbox('fiestasotrasactividades', '264', FALSE); ?>Fiestas sociales</td>
                                <td><?php echo form_checkbox('lecturaotrasactividades', '265', FALSE); ?>Lectura</td>
                                <td><?php echo form_checkbox('escrituraotrasactividades', '266', FALSE); ?>Escritura</td>
                            </tr>
                            <tr>
                                <td><?php echo form_checkbox('manualidadesotrasactividades', '267', FALSE); ?>Manualidades</td>
                                <td><?php echo form_checkbox('jardineriaotrasactividades', '268', FALSE); ?>Jardinería</td>
                                <td><?php echo form_checkbox('pinturaotrasactividades', '269', FALSE); ?>Pintura</td>
                                <td><?php echo form_checkbox('musicaotrasactividades', '270', FALSE); ?>Música</td>
                            </tr>
                            <tr>
                                <td><?php echo form_checkbox('gimnasiaotrasactividades', '271', FALSE); ?>Gimnasia</td>
                                <td><?php echo form_checkbox('talleresotrasactividades', '272', FALSE); ?>Talleres dirigidos</td>
                                <td><?php echo form_checkbox('cultivosotrasactividades', '273', FALSE); ?>Cultivos hidrópicos</td>
                                <td><?php echo form_checkbox('orarotrasactividades', '274', FALSE); ?>Orar</td>
                            </tr>
                            <tr>
                                <td><?php echo form_checkbox('caminarotrasactividades', '275', FALSE); ?>Caminar</td>
                                <td><?php echo form_checkbox('pasearotrasactividades', '276', FALSE); ?>Pasear</td>
                                <td><?php echo form_checkbox('otrasactividades', '277', FALSE); ?>Otras</td>
                                <td><?php echo form_textarea($otrosactividades) ?></td>
                            </tr>
                            <tr>
                                <td><?php echo form_checkbox('socioculturalesactividadesofrecidas', '278', FALSE); ?>Socio culturales</td>
                                <td><?php echo form_checkbox('ocupacionesactividadesofrecidas', '279', FALSE); ?>Ocupaciones</td>
                                <td><?php echo form_checkbox('recreativasactividadesofrecidas', '280', FALSE); ?>Recreativas</td>
                                <td>&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>
                    <?php echo form_close(); ?>
                </th>
            </tr>
        </tbody>
    </table>
</div>