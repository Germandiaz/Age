<div class="art-postcontent">
    <?php 
        $atributos = array('id' => 'aspfamili_form', 'class' => 'form_aspfamili');
        echo form_open('ingresargeronte/capdatosgeronaspfami', $atributos);
        echo form_submit('submit', 'Siguiente'); 
    ?>
    <div><?php echo form_hidden('txtidadmisionaspectosfamiliares',$idadmision)?></div>
    <p><b>Aspectos Familiares </b></p>
    <table>
        <?php 
            $InstitucionalizacionAspFam = array('name' => 'txtotrasmotivoinstitucionalizacionaspfam','id' => 'txtotrasmotivoinstitucionalizacionaspfam','value' => set_value('txtotrasmotivoinstitucionalizacionaspfam'));
            $ConQuienConvivioAspFam = array('name' => 'txtotrosconquienconcicioaspfam','id' => 'txtotrosconquienconcicioaspfam','value' => set_value('txtotrosconquienconcicioaspfam'));
            $ObservacionAspFam = array('name' => 'txtobservacionaspectosfamiliares','id' => 'txtobservacionaspectosfamiliares','value' => set_value('txtobservacionaspectosfamiliares'));
            $DepresionAspFam = array('name' => 'txtotrasdepresionaspectosfamiliares','id' => 'txtotrasdepresionaspectosfamiliares','value' => set_value('txtotrasdepresionaspectosfamiliares'));
            $ExpresionAnsiedadAspFam = array('name' => 'txtotrasexpresionansiedadaspectosfamiliares','id' => 'txtotrasexpresionansiedadaspectosfamiliares','value' => set_value('txtotrasexpresionansiedadaspectosfamiliares'));
        ?>
        <tbody>
            <tr>
                <th colspan="5">¿Cuál es el motivo de su institucionalización?</th>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td colspan="3"><?php echo form_checkbox('chkconflictosmotivoinstitucionalizacion', '184', FALSE); ?>Conflictos Familiares </td>
                <td colspan="2"><?php echo form_checkbox('chkbajosrecursosmotivoinstitucionalizacion', '185', FALSE); ?>Bajos Recursos Económicos</td>
                <td><?php echo form_checkbox('chksoledadmotivoinstitucionalizacion', '186', FALSE); ?>Soledad</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td colspan="3"><?php echo form_checkbox('chksaludmotivoinstitucionalizacion', '187', FALSE); ?>Salud (Deficiencia-Alteraciones)</td>
                <td colspan="2"><?php echo form_checkbox('chkedadmotivoinstitucionalizacion', '188', FALSE); ?>Edad Avanzada </td>
                <td><?php echo form_checkbox('chkotrasmotivoinstitucionalizacion', '189', FALSE); ?>Otras</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <th>&nbsp;</th>
                <td>&nbsp;</td>
                <td colspan="2">&nbsp;</td>
                <td colspan="2" rowspan="2"><? echo form_input($InstitucionalizacionAspFam);?></td>
            </tr>
            <tr>
                <th>&nbsp;</th>
                <td colspan="2">&nbsp;</td>
                <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
                <th colspan="5">¿Con quién convivió durante su vida?</th>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td><?php echo form_checkbox('chkpadresconvivencia', '190', FALSE); ?>Padres</td>
                <td><?php echo form_checkbox('chkhermanosconvivencia', '191', FALSE); ?>Hermanos</td>
                <td><?php echo form_checkbox('chksoloconvivencia', '192', FALSE); ?>Solo</td>
                <td><?php echo form_checkbox('chkconyugeconvivencia', '193', FALSE); ?>Cónyuge </td>
                <td><?php echo form_checkbox('chkhijosconvivencia', '194', FALSE); ?>Hijos</td>
                <td><?php echo form_checkbox('chkotrosconvivencia', '195', FALSE); ?>Otros <? echo form_input($ConQuienConvivioAspFam);?></td>
                <td></td>
            </tr>
            <tr>
                <th colspan="3">Relaciones Con sus familiares son:</th>
                <td colspan="2">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td><?php echo form_checkbox('chkbuenasrelacionesfamilia', '196', FALSE); ?>Buenas </td>
                <td colspan="2"><?php echo form_checkbox('chkmalasrelacionesfamilia', '197', FALSE); ?>Malas  </td>
                <td><?php echo form_checkbox('chkregularrelacionesfamilia', '198', FALSE); ?>Regular </td>
                <td><?php echo form_checkbox('chknosedanrelacionesfamilia', '199', FALSE); ?>no se dan </td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <th colspan="3">Apoyo familiar:</th>
                <td colspan="2">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td><?php echo form_checkbox('chkafectivoapoyofamiliar', '200', FALSE); ?>Afectivo</td>
                <td colspan="2"><?php echo form_checkbox('chkeconomicoapoyofamiliar', '201', FALSE); ?>Económico</td>
                <td><?php echo form_checkbox('chkrecreativoapoyofamiliar', '202', FALSE); ?>Recreativo</td>
                <td><?php echo form_checkbox('chkespiritualapoyofamiliar', '203', FALSE); ?>Espiritual</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <th colspan="5">En la toma de decisiones influye:</th>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td><?php echo form_checkbox('chkfamiliainfluenciadesicion', '204', FALSE); ?>Familia</td>
                <td colspan="2"><?php echo form_checkbox('chkinstitucioninfluenciadesicion', '205', FALSE); ?>Institución</td>
                <td><?php echo form_checkbox('chkconyugeinfluenciadesicion', '206', FALSE); ?>Conyuge</td>
                <td><?php echo form_checkbox('chksoloinfluenciadesicion', '207', FALSE); ?>Solo</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <th colspan="5">Observaciones Generales Aspectos Familiares</th>
                <td rowspan="2"><? echo form_input($ObservacionAspFam);?></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <th colspan="5">Depresión</th>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <th>&nbsp;</th>
                <td colspan="2"><?php echo form_checkbox('chkmolestiasdepresion', '209', FALSE); ?>Molestias Somática</td>
                <td colspan="2"><?php echo form_checkbox('chkreaccionesdepresion', '210', FALSE); ?>Reacciones de aniversario</td>
                <td><?php echo form_checkbox('chksoledaddepresion', '211', FALSE); ?>Soledad</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <th>&nbsp;</th>
                <td colspan="2"><?php echo form_checkbox('chktrastornodepresion', '212', FALSE); ?>Trastorno Físico</td>
                <td colspan="2"><?php echo form_checkbox('chkdepresion', '213', FALSE); ?>Pérdida Sensible</td>
                <td><?php echo form_checkbox('chkotrasdepresion', '214', FALSE); ?>Otras</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <th >&nbsp;</th>
                <td colspan="2">&nbsp;</td>
                <td colspan="2">&nbsp;</td>
                <td colspan="2"><? echo form_input($DepresionAspFam);?></td>
            </tr>
            <tr>
                <th colspan="6">Expresión de Ansiedad</th>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <th>&nbsp;</th>
                <td colspan="2"><?php echo form_checkbox('chkaturdimientoansiedad', '215', FALSE); ?>Aturdimiento</td>
                <td colspan="2"><?php echo form_checkbox('chksensacionmuerteansiedad', '216', FALSE); ?>Sensación de Muerte </td>
                <td><?php echo form_checkbox('chkpreocupacionesansiedad', '217', FALSE); ?>Preocupaciones</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <th>&nbsp;</th>
                <td colspan="2"><?php echo form_checkbox('chksomatizacionesansiedad', '218', FALSE); ?>Somatizaciones</td>
                <td colspan="2"><?php echo form_checkbox('chksensacionmiedoansiedad', '219', FALSE); ?>Sensación de Miedo</td>
                <td><?php echo form_checkbox('chkfobiasansiedad', '220', FALSE); ?>Fobias</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <th>&nbsp;</th>
                <td colspan="2"><?php echo form_checkbox('chkotrasansiedad', '221', FALSE); ?>Otras</td>
                <td colspan="4"><? echo form_input($ExpresionAnsiedadAspFam);?></td>
            </tr>
        </tbody>
        <?php echo form_close(); ?>
    </table>
</div>