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
                    <p align="left"><?php $atributos = array('id' => 'fim_form', 'class' => 'form_fim');
                            echo form_open('ingresargeronte/capdatosgeronasppsi', $atributos);
                            echo form_submit('submit', 'Siguiente'); 
                           ?>
                        <div align="right"><?php echo form_hidden('txtidadmisiongerontepsicologico',$idadmision)?></div>
                    <p><br /></p>
                    <p><b>Aspectos Psicológicos </b></p>
                    <table border="0">
                        <tbody>
                            <tr>
                                <td style="border-width: 0px; ">
                                    <table width="688" border="0">
                                        <?php 
                        $ObservacionAutovaloracionAspPsci = array(
                            'name' => 'txtobservacionautovaloracionasppsc',
                            'id' => 'txtobservacionautovaloracionasppsc',
                            'rows' =>'3',
                            'cols' =>'22',
                            'value' => set_value('txtobservacionautovaloracionasppsc')
                        );
                        $ObservacionRazonamientoAspPsci = array(
                            'name' => 'txtobservacionrazonamientoasppsc',
                            'id' => 'txtobservacionrazonamientoasppsc',
                            'rows' =>'3',
                            'cols' =>'22',
                            'value' => set_value('txtobservacionrazonamientoasppsc')
                        );
                        $OtrasEstadoAnimoAspPsci = array(
                            'name' => 'txtotrasestadoanimoasppsc',
                            'id' => 'txtotrasestadoanimoasppsc',
                            'value' => set_value('txtotrasestadoanimoasppsc')
                        );
                        $ObservacionGeneralAspFam = array(
                            'name' => 'txtobservaciongeneralasppsc',
                            'id' => 'txtobservaciongeneralasppsc',
                            'rows' =>'5',
                            'cols' =>'22',
                            'value' => set_value('txtobservaciongeneralasppsc')
                                               
                        );
                        ?>
                                        <tbody>
                                            <tr>
                                                <th colspan="4" scope="row" style="border-width: 0px; ">&nbsp;</th>
                                            </tr>
                                            <tr>
                                                <th width="167" scope="row" align="left" style="border-width: 0px; ">Autovaloración: </th>
                                                <td width="189" align="left" style="border-width: 0px; ">
                                                    <select name="selectautovaloracion" id="selectautovaloracion">
                                        <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                        <option value="151" <?php echo set_select('myselect', '151'); ?> >Se quiere así mismo</option>
                                        <option value="152" <?php echo set_select('myselect', '152'); ?> >Se acepta parcial mente</option>    
                                        <option value="153" <?php echo set_select('myselect', '153'); ?> >No se valora así mismo</option>  
                                    </select>
                                                </td>
                                                <th width="144" align="left" style="border-width: 0px; ">Observación:</th>
                                                <td width="170" align="left" style="border-width: 0px; ">
                                                    <label for="select"><? echo form_Textarea($ObservacionAutovaloracionAspPsci);?></label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" align="left" style="border-width: 0px; ">Razonamiento:</th>
                                                <td align="left" style="border-width: 0px; ">                         
                                                    <select name="selectrazonamiento" id="selectrazonamiento">
                                        <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                        <option value="Coherente" <?php echo set_select('myselect', '154'); ?> >Coherente</option>                                      
                                        <option value="Incoherente" <?php echo set_select('myselect', '155'); ?> >Incoherente</option>  
                                    </select>
                                                </td>
                                                <th align="left" style="border-width: 0px; ">Observación:</th>
                                                <td align="left" style="border-width: 0px; "><? echo form_Textarea($ObservacionRazonamientoAspPsci);?></td>
                                            </tr>
                                            <tr>
                                                <th colspan="4" scope="row" style="border-width: 0px; ">&nbsp;</th>
                                            </tr>
                                            <tr>
                                                <th scope="row" align="left" style="border-width: 0px; ">Orientación temporal:</th>
                                                <td colspan="3" align="left" style="border-width: 0px; "><?php echo form_checkbox('chknociontiempoorientaciontemporal', '156', FALSE); ?>¿ Tiene noción del tiempo? </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                                <td colspan="2" align="left" style="border-width: 0px; "><?php echo form_checkbox('chknocionmananaorientaciontemporal', '157', FALSE); ?>¿ Tiene noción de mañana, tarde y noche?</td>
                                                <td style="border-width: 0px; ">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                                <td colspan="2" align="left" style="border-width: 0px; "><?php echo form_checkbox('chksabediaorientaciontemporal', '158', FALSE); ?>¿ Sabe que día es hoy ?</td>
                                                <td style="border-width: 0px; ">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <th colspan="4" scope="row" style="border-width: 0px; ">&nbsp;</th>
                                            </tr>
                                            <tr>
                                                <th scope="row" align="left" style="border-width: 0px; ">Memoria:</th>
                                                <td align="left" style="border-width: 0px; "><?php echo form_radio('radiomemoria', '159', FALSE); ?>iconica </td>
                                                <td align="left" style="border-width: 0px; "><?php echo form_radio('radiomemoria', '160', FALSE); ?>Memoria ecoica</td>
                                                <td style="border-width: 0px; ">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <th colspan="4" scope="row" style="border-width: 0px; ">&nbsp;</th>
                                            </tr>
                                            <tr>
                                                <th scope="row" align="left" style="border-width: 0px; ">Personalidad:</th>
                                                <td align="left" style="border-width: 0px; "><?php echo form_checkbox('chkautoagresivopersonalidad', '161', FALSE); ?>Auto agresivo</td>
                                                <td align="left" style="border-width: 0px; "><?php echo form_checkbox('chkmaduropersonalidad', '162', FALSE); ?>Maduro</td>
                                                <td style="border-width: 0px; "><?php echo form_checkbox('chkpasivopersonalidad', '163', FALSE); ?>Pasivo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                                <td align="left" style="border-width: 0px; "><?php echo form_checkbox('chkcolericopersonalidad', '164', FALSE); ?>Colérico</td>
                                                <td align="left" style="border-width: 0px; "><?php echo form_checkbox('chkdefensivopersonalidad', '165', FALSE); ?>Defensivo</td>
                                                <td style="border-width: 0px; ">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <th colspan="4" scope="row" style="border-width: 0px; ">&nbsp;</th>
                                            </tr>
                                            <tr>
                                                <th scope="row" align="left" style="border-width: 0px; ">Estado de animo: </th>
                                                <td align="left" style="border-width: 0px; "><?php echo form_checkbox('chkalegriaestadoanimo', '166', FALSE); ?>Alegría</td>
                                                <td align="left" style="border-width: 0px; "><?php echo form_checkbox('chkapatiaestadoanimo', '167', FALSE); ?>Apatía</td>
                                                <td style="border-width: 0px; "><?php echo form_checkbox('chkhiperactividadestadoanimo', '168', FALSE); ?>Hiperactividad</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                                <td align="left" style="border-width: 0px; "><?php echo form_checkbox('chkllantoestadoanimo', '169', FALSE); ?>Llanto</td>
                                                <td align="left" style="border-width: 0px; "><?php echo form_checkbox('chkculpaestadoanimo', '170', FALSE); ?>Culpa</td>
                                                <td style="border-width: 0px; "><?php echo form_checkbox('chktristezaestadoanimo', '171', FALSE); ?>Tristeza</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                                <td align="left" style="border-width: 0px; "><?php echo form_checkbox('chkotrasestadoanimo', '172', FALSE); ?> Otras</td>
                                                <td colspan="2" align="left" style="border-width: 0px; "><? echo form_input($OtrasEstadoAnimoAspPsci);?></td>
                                            </tr>
                                            <tr>
                                                <th colspan="4" scope="row" style="border-width: 0px; ">&nbsp;</th>
                                            </tr>
                                            <tr>
                                                <th scope="row" align="left" style="border-width: 0px; ">Inteligencia:</th>
                                                <td align="left" style="border-width: 0px; "><?php echo form_radio('radiointeligencia', '173', FALSE); ?>Cristalizada</td>
                                                <td align="left" style="border-width: 0px; "><?php echo form_radio('radiointeligencia', '174', FALSE); ?>Fluida</td>
                                                <td style="border-width: 0px; ">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <th colspan="4" scope="row" style="border-width: 0px; ">&nbsp;</th>
                                            </tr>
                                            <tr>
                                                <th scope="row" align="left" style="border-width: 0px; ">Identidad</th>
                                                <td style="border-width: 0px; ">&nbsp;</td>
                                                <td style="border-width: 0px; ">&nbsp;</td>
                                                <td style="border-width: 0px; ">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                                <td align="left" style="border-width: 0px; ">Auto percepción de salud:</td>
                                                <td align="left" style="border-width: 0px; ">
                                                    <select name="selectpercepcionsalud" id="selectpercepcionsalud">
                                        <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                        <option value="175" <?php echo set_select('myselect', '175'); ?> >Muy saludable</option> 
                                        <option value="176" <?php echo set_select('myselect', '176'); ?> >Saludable</option>                                      
                                        <option value="177" <?php echo set_select('myselect', '177'); ?> >Regular/saludable</option>  
                                        <option value="178" <?php echo set_select('myselect', '178'); ?> >Mala</option>  
                                    </select>
                                                </td>
                                                <td style="border-width: 0px; ">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <th colspan="4" scope="row" style="border-width: 0px; ">&nbsp;</th>
                                            </tr>
                                            <tr>
                                                <th colspan="3" scope="row" align="left" style="border-width: 0px; ">¿Que aptitud toma la persona frente a la perdida de un ser querido?</th>
                                                <td style="border-width: 0px; ">
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
                                                <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                                <th align="left" style="border-width: 0px; ">Observación General:</th>
                                                <td colspan="2" rowspan="3" align="left" style="border-width: 0px; "><? echo form_Textarea($ObservacionGeneralAspFam);?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                                <td style="border-width: 0px; ">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                                <td style="border-width: 0px; ">&nbsp;</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <h3>&nbsp;</h3>
                                </td>
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
