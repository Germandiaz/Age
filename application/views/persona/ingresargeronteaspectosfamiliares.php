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
                    <p align="left"><?php $atributos = array('id' => 'aspfamili_form', 'class' => 'form_aspfamili');
                            echo form_open('ingresargeronte/capdatosgeronaspfami', $atributos);
                            echo form_submit('submit', 'Siguiente'); ?>
                    <div align="right"><?php echo form_hidden('txtidadmisionaspectosfamiliares',$idadmision)?></div>
                    <p><br /></p>
                    <p><b>Aspectos Familiares </b></p>
                    <table width="700" border="0">
                        <?php 
                        $InstitucionalizacionAspFam = array(
                            'name' => 'txtotrasmotivoinstitucionalizacionaspfam',
                            'id' => 'txtotrasmotivoinstitucionalizacionaspfam',
                            'value' => set_value('txtotrasmotivoinstitucionalizacionaspfam')
                        );
                        $ConQuienConvivioAspFam = array(
                            'name' => 'txtotrosconquienconcicioaspfam',
                            'id' => 'txtotrosconquienconcicioaspfam',
                            'value' => set_value('txtotrosconquienconcicioaspfam')
                        );
                        $ObservacionAspFam = array(
                            'name' => 'txtobservacionaspectosfamiliares',
                            'id' => 'txtobservacionaspectosfamiliares',
                            'value' => set_value('txtobservacionaspectosfamiliares')
                        );
                        $DepresionAspFam = array(
                            'name' => 'txtotrasdepresionaspectosfamiliares',
                            'id' => 'txtotrasdepresionaspectosfamiliares',
                            'value' => set_value('txtotrasdepresionaspectosfamiliares')
                        );
                        $ExpresionAnsiedadAspFam = array(
                            'name' => 'txtotrasexpresionansiedadaspectosfamiliares',
                            'id' => 'txtotrasexpresionansiedadaspectosfamiliares',
                            'value' => set_value('txtotrasexpresionansiedadaspectosfamiliares')
                        );
                        ?>
                        <tbody>
                            <tr>
                                <th colspan="7" scope="row" style="border-width: 0px; ">&nbsp;</th>
                            </tr>
                            <tr>
                                <th colspan="5" scope="row" align="left" style="border-width: 0px; ">¿Cuál es el motivo de su institucionalización?</th>
                                <td width="193" style="border-width: 0px; ">&nbsp;</td>
                                <td width="3" style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <td colspan="3" scope="row" align="left" style="border-width: 0px; "><?php echo form_checkbox('chkconflictosmotivoinstitucionalizacion', '184', FALSE); ?>Conflictos Familiares </td>
                                <td colspan="2" align="left" style="border-width: 0px; "><?php echo form_checkbox('chkbajosrecursosmotivoinstitucionalizacion', '185', FALSE); ?>Bajos Recursos Económicos</td>
                                <td align="left" style="border-width: 0px; "><?php echo form_checkbox('chksoledadmotivoinstitucionalizacion', '186', FALSE); ?>Soledad</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <td colspan="3" scope="row" align="left" style="border-width: 0px; "><?php echo form_checkbox('chksaludmotivoinstitucionalizacion', '187', FALSE); ?>Salud (Deficiencia-Alteraciones)</td>
                                <td colspan="2" align="left" style="border-width: 0px; "><?php echo form_checkbox('chkedadmotivoinstitucionalizacion', '188', FALSE); ?>Edad Avanzada </td>
                                <td align="left" style="border-width: 0px; "><?php echo form_checkbox('chkotrasmotivoinstitucionalizacion', '189', FALSE); ?>Otras</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th width="97" scope="row" style="border-width: 0px; ">&nbsp;</th>
                                <td colspan="2" style="border-width: 0px; ">&nbsp;</td>
                                <td colspan="2" style="border-width: 0px; ">&nbsp;</td>
                                <td colspan="2" rowspan="2" align="left" style="border-width: 0px; "><? echo form_input($InstitucionalizacionAspFam);?></td>
                            </tr>
                            <tr>
                                <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                <td colspan="2" style="border-width: 0px; ">&nbsp;</td>
                                <td colspan="2" style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th colspan="7" scope="row" style="border-width: 0px; ">&nbsp;</th>
                            </tr>
                            <tr>
                                <th colspan="5" scope="row" align="left" style="border-width: 0px; ">¿Con quién convivió durante su vida?</th>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <td scope="row" style="border-width: 0px; "><?php echo form_checkbox('chkpadresconvivencia', '190', FALSE); ?>Padres</td>
                                <td width="100" style="border-width: 0px; "><?php echo form_checkbox('chkhermanosconvivencia', '191', FALSE); ?>Hermanos</td>
                                <td width="68" style="border-width: 0px; "><?php echo form_checkbox('chksoloconvivencia', '192', FALSE); ?>Solo</td>
                                <td width="108" style="border-width: 0px; "><?php echo form_checkbox('chkconyugeconvivencia', '193', FALSE); ?>Cónyuge </td>
                                <td width="101" style="border-width: 0px; "><?php echo form_checkbox('chkhijosconvivencia', '194', FALSE); ?>Hijos</td>
                                <td width="101" style="border-width: 0px;" ><?php echo form_checkbox('chkotrosconvivencia', '195', FALSE); ?>Otros <? echo form_input($ConQuienConvivioAspFam);?></td>
                              
                                <td width="101" style="border-width: 0px;"></td>
                            </tr>
                            <tr>
                                <th colspan="3" scope="row" style="border-width: 0px; ">Relaciones Con sus familiares son:</th>
                                <td colspan="2" style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <td scope="row" align="left" style="border-width: 0px; "><?php echo form_checkbox('chkbuenasrelacionesfamilia', '196', FALSE); ?>Buenas </td>
                                <td colspan="2" align="left" scope="row" style="border-width: 0px; "><?php echo form_checkbox('chkmalasrelacionesfamilia', '197', FALSE); ?>Malas  </td>
                                <td style="border-width: 0px; "><?php echo form_checkbox('chkregularrelacionesfamilia', '198', FALSE); ?>Regular </td>
                                <td style="border-width: 0px; "><?php echo form_checkbox('chknosedanrelacionesfamilia', '199', FALSE); ?>no se dan </td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                <td colspan="2" style="border-width: 0px; ">&nbsp;</td>
                                <td colspan="2" style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th colspan="3" scope="row" align="left" style="border-width: 0px; ">Apoyo familiar:</th>
                                <td colspan="2" style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <td scope="row" style="border-width: 0px; "><?php echo form_checkbox('chkafectivoapoyofamiliar', '200', FALSE); ?>Afectivo</td>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_checkbox('chkeconomicoapoyofamiliar', '201', FALSE); ?>Económico</td>
                                <td style="border-width: 0px; "><?php echo form_checkbox('chkrecreativoapoyofamiliar', '202', FALSE); ?>Recreativo</td>
                                <td style="border-width: 0px; "><?php echo form_checkbox('chkespiritualapoyofamiliar', '203', FALSE); ?>Espiritual</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                <td colspan="2" style="border-width: 0px; ">&nbsp;</td>
                                <td colspan="2" style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th colspan="5" scope="row" align="left" style="border-width: 0px; ">En la toma de decisiones influye:</th>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <td scope="row" style="border-width: 0px; "><?php echo form_checkbox('chkfamiliainfluenciadesicion', '204', FALSE); ?>Familia</td>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_checkbox('chkinstitucioninfluenciadesicion', '205', FALSE); ?>Institución</td>
                                <td style="border-width: 0px; "><?php echo form_checkbox('chkconyugeinfluenciadesicion', '206', FALSE); ?>Conyuge</td>
                                <td style="border-width: 0px; "><?php echo form_checkbox('chksoloinfluenciadesicion', '207', FALSE); ?>Solo</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th colspan="5" scope="row" style="border-width: 0px; ">Observaciones Generales Aspectos Familiares</th>
                                <td rowspan="2" style="border-width: 0px; "><? echo form_input($ObservacionAspFam);?></td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th colspan="5" scope="row" align="left" style="border-width: 0px; ">&nbsp;</th>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                <td colspan="2" style="border-width: 0px; ">&nbsp;</td>
                                <td colspan="2" style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th colspan="5" scope="row" align="left" style="border-width: 0px; ">Depresión</th>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_checkbox('chkmolestiasdepresion', '209', FALSE); ?>Molestias Somática</td>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_checkbox('chkreaccionesdepresion', '210', FALSE); ?>Reacciones de aniversario</td>
                                <td style="border-width: 0px; "><?php echo form_checkbox('chksoledaddepresion', '211', FALSE); ?>Soledad</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_checkbox('chktrastornodepresion', '212', FALSE); ?>Trastorno Físico</td>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_checkbox('chkdepresion', '213', FALSE); ?>Pérdida Sensible</td>
                                <td style="border-width: 0px; "><?php echo form_checkbox('chkotrasdepresion', '214', FALSE); ?>Otras</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                <td colspan="2" style="border-width: 0px; ">&nbsp;</td>
                                <td colspan="2" style="border-width: 0px; ">&nbsp;</td>
                                <td colspan="2" rowspan="2" style="border-width: 0px; "><? echo form_input($DepresionAspFam);?></td>
                            </tr>
                            <tr>
                                <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                <td colspan="2" style="border-width: 0px; ">&nbsp;</td>
                                <td colspan="2" style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th colspan="6" scope="row" align="left" style="border-width: 0px; ">Expresión de Ansiedad</th>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_checkbox('chkaturdimientoansiedad', '215', FALSE); ?>Aturdimiento</td>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_checkbox('chksensacionmuerteansiedad', '216', FALSE); ?>Sensación de Muerte </td>
                                <td style="border-width: 0px; "><?php echo form_checkbox('chkpreocupacionesansiedad', '217', FALSE); ?>Preocupaciones</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_checkbox('chksomatizacionesansiedad', '218', FALSE); ?>Somatizaciones</td>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_checkbox('chksensacionmiedoansiedad', '219', FALSE); ?>Sensación de Miedo</td>
                                <td style="border-width: 0px; "><?php echo form_checkbox('chkfobiasansiedad', '220', FALSE); ?>Fobias</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_checkbox('chkotrasansiedad', '221', FALSE); ?>Otras</td>
                                <td colspan="4" style="border-width: 0px; "><? echo form_input($ExpresionAnsiedadAspFam);?></td>
                            </tr>
                        </tbody>
                        <?php echo form_close(); ?>
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
