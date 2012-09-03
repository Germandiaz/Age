<div>
    <?php $atributos = array('id' => 'fim_form', 'class' => 'form_fim');
        echo form_open('ingresargeronte/capdatosgeronasppsi', $atributos);
        echo form_submit('submit', 'Siguiente'); 
    ?>
    <div><?php echo form_hidden('txtidadmisiongerontepsicologico',$idadmision)?></div>
    <p><b>Aspectos Psicológicos </b></p>
    <table>
        <tbody>
            <tr>
                <td>
                    <table>
                        <?php 
                            $ObservacionAutovaloracionAspPsci = array('name' => 'txtobservacionautovaloracionasppsc','id' => 'txtobservacionautovaloracionasppsc','rows' =>'3','cols' =>'22','value' => set_value('txtobservacionautovaloracionasppsc'));
                            $ObservacionRazonamientoAspPsci = array('name' => 'txtobservacionrazonamientoasppsc','id' => 'txtobservacionrazonamientoasppsc','rows' =>'3','cols' =>'22','value' => set_value('txtobservacionrazonamientoasppsc'));
                            $OtrasEstadoAnimoAspPsci = array('name' => 'txtotrasestadoanimoasppsc','id' => 'txtotrasestadoanimoasppsc','value' => set_value('txtotrasestadoanimoasppsc'));
                            $ObservacionGeneralAspFam = array('name' => 'txtobservaciongeneralasppsc','id' => 'txtobservaciongeneralasppsc','rows' =>'5','cols' =>'22','value' => set_value('txtobservaciongeneralasppsc'));
                        ?>
                        <tbody>
                            <tr>
                                <th>Autovaloración: </th>
                                <td>
                                    <select name="selectautovaloracion" id="selectautovaloracion">
                                        <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                        <option value="151" <?php echo set_select('myselect', '151'); ?> >Se quiere así mismo</option>
                                        <option value="152" <?php echo set_select('myselect', '152'); ?> >Se acepta parcial mente</option>    
                                        <option value="153" <?php echo set_select('myselect', '153'); ?> >No se valora así mismo</option>  
                                    </select>
                                </td>
                                <th>Observación:</th>
                                <td>
                                    <label for="select"><? echo form_Textarea($ObservacionAutovaloracionAspPsci);?></label>
                                </td>
                            </tr>
                            <tr>
                                <th>Razonamiento:</th>
                                <td>                         
                                    <select name="selectrazonamiento" id="selectrazonamiento">
                                        <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                        <option value="Coherente" <?php echo set_select('myselect', '154'); ?> >Coherente</option>                                      
                                        <option value="Incoherente" <?php echo set_select('myselect', '155'); ?> >Incoherente</option>  
                                    </select>
                                </td>
                                <th>Observación:</th>
                                <td><? echo form_Textarea($ObservacionRazonamientoAspPsci);?></td>
                            </tr>
                            <tr>
                                <th>Orientación temporal:</th>
                                <td><?php echo form_checkbox('chknociontiempoorientaciontemporal', '156', FALSE); ?>¿ Tiene noción del tiempo? </td>
                            </tr>
                            <tr>
                                <th>&nbsp;</th>
                                <td><?php echo form_checkbox('chknocionmananaorientaciontemporal', '157', FALSE); ?>¿ Tiene noción de mañana, tarde y noche?</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <th>&nbsp;</th>
                                <td colspan="2"><?php echo form_checkbox('chksabediaorientaciontemporal', '158', FALSE); ?>¿ Sabe que día es hoy ?</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <th>Memoria:</th>
                                <td><?php echo form_radio('radiomemoria', '159', FALSE); ?>iconica </td>
                                <td><?php echo form_radio('radiomemoria', '160', FALSE); ?>Memoria ecoica</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <th>Personalidad:</th>
                                <td><?php echo form_checkbox('chkautoagresivopersonalidad', '161', FALSE); ?>Auto agresivo</td>
                                <td><?php echo form_checkbox('chkmaduropersonalidad', '162', FALSE); ?>Maduro</td>
                                <td><?php echo form_checkbox('chkpasivopersonalidad', '163', FALSE); ?>Pasivo</td>
                            </tr>
                            <tr>
                                <th>&nbsp;</th>
                                <td><?php echo form_checkbox('chkcolericopersonalidad', '164', FALSE); ?>Colérico</td>
                                <td><?php echo form_checkbox('chkdefensivopersonalidad', '165', FALSE); ?>Defensivo</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <th>Estado de animo: </th>
                                <td><?php echo form_checkbox('chkalegriaestadoanimo', '166', FALSE); ?>Alegría</td>
                                <td><?php echo form_checkbox('chkapatiaestadoanimo', '167', FALSE); ?>Apatía</td>
                                <td><?php echo form_checkbox('chkhiperactividadestadoanimo', '168', FALSE); ?>Hiperactividad</td>
                            </tr>
                            <tr>
                                <th>&nbsp;</th>
                                <td><?php echo form_checkbox('chkllantoestadoanimo', '169', FALSE); ?>Llanto</td>
                                <td><?php echo form_checkbox('chkculpaestadoanimo', '170', FALSE); ?>Culpa</td>
                                <td><?php echo form_checkbox('chktristezaestadoanimo', '171', FALSE); ?>Tristeza</td>
                            </tr>
                            <tr>
                                <th>&nbsp;</th>
                                <td><?php echo form_checkbox('chkotrasestadoanimo', '172', FALSE); ?> Otras</td>
                                <td colspan="2"><? echo form_input($OtrasEstadoAnimoAspPsci);?></td>
                            </tr>
                            <tr>
                                <th>Inteligencia:</th>
                                <td><?php echo form_radio('radiointeligencia', '173', FALSE); ?>Cristalizada</td>
                                <td><?php echo form_radio('radiointeligencia', '174', FALSE); ?>Fluida</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <th>Identidad</th>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <th>&nbsp;</th>
                                <td>Auto percepción de salud:</td>
                                <td>
                                    <select name="selectpercepcionsalud" id="selectpercepcionsalud">
                                        <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                        <option value="175" <?php echo set_select('myselect', '175'); ?> >Muy saludable</option> 
                                        <option value="176" <?php echo set_select('myselect', '176'); ?> >Saludable</option>                                      
                                        <option value="177" <?php echo set_select('myselect', '177'); ?> >Regular/saludable</option>  
                                        <option value="178" <?php echo set_select('myselect', '178'); ?> >Mala</option>  
                                    </select>
                                </td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <th>¿Que aptitud toma la persona frente a la perdida de un ser querido?</th>
                                <td>
                                    <select name="selectaptitudesserquerido" id="selectaptitudesserquerido">
                                        <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                        <option value="179" <?php echo set_select('myselect', '179'); ?> >Aceptación</option> 
                                        <option value="180" <?php echo set_select('myselect', '180'); ?> >Negación</option>  
                                        <option value="181" <?php echo set_select('myselect', '181'); ?> >Resignación</option> 
                                        <option value="182" <?php echo set_select('myselect', '182'); ?> >Mala</option>  
                                        <option value="183" <?php echo set_select('myselect', '183'); ?> >Otra</option>  
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>&nbsp;</th>
                                <th>Observación General:</th>
                                <td colspan="2" rowspan="3"><? echo form_Textarea($ObservacionGeneralAspFam);?></td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</div>
