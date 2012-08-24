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
                    <p align="left">
                        <?php $atributos = array('id' => 'informebiolo_form', 'class' => 'form_informebiolo');
                            echo form_open('ingresargeronte/capDatosGeronInforBiolog', $atributos);
                            echo form_submit('submit', 'Siguiente'); ?>
                    <div align="right"><?php echo form_hidden('txtidadmisioninformebiolo',$idadmision)?></div>
                    <p><br /></p>
                    <b> Informe Biológico</b><br />
                    <table border="0">
                        <tbody>
                            <tr>
                                <th style="border-width: 0px; ">Medidas Antropomédicas:  
                        <table width="700" border="0">
                            <tbody>
                                <?php
                                $estatura = array(
                                'name' => 'txtestatura',
                                'id' => 'txtestatura',
                                'value' => set_value('txtestatura')
                                );
                                $peso = array(
                                'name' => 'txtpeso',
                                'id' => 'txtpeso',
                                'value' => set_value('txtpeso')
                                );
                                $pulso = array(
                                'name' => 'txtpulsoporminuto',
                                'id' => 'txtpulsoporminuto',
                                'value' => set_value('txtpulsoporminuto')
                                );
                                $frecuenciares = array(
                                'name' => 'txtfrecuenciarespiratoria',
                                'id' => 'txtfrecuenciarespiratoria',
                                'value' => set_value('txtfrecuenciarespiratoria')
                                );
                                
                                $temperatura = array(
                                'name' => 'txttemperatura',
                                'id' => 'txttemperatura',
                                'value' => set_value('txttemperatura')
                                );
                                $presion = array(
                                'name' => 'txtpresionsanguinea',
                                'id' => 'txtpresionsanguinea',
                                'value' => set_value('txtpresionsanguinea')
                                );
                                $EstaSenso = array(
                                'name' => 'txtestadosensorial',
                                'id' => 'txtestadosensorial',
                                'value' => set_value('txtestadosensorial')
                                );
                                $SisRenal = array(
                                'name' => 'txtsistemarenal',
                                'id' => 'txtsistemarenal',
                                'value' => set_value('txtsistemarenal')
                                );
                                $Siscardiovascular = array(
                                'name' => 'txtsistemacardiovascular',
                                'id' => 'txtsistemacardiovascular',
                                'value' => set_value('txtsistemacardiovascular')
                                    );
                                $Sisendocrino = array(
                                'name' => 'txtsistemaendocrino',
                                'id' => 'txtsistemaendocrino',
                                'value' => set_value('txtsistemaendocrino')
                                    );
                                $Sisrespiratorio = array(
                                'name' => 'txtsistemarespiratorio',
                                'id' => 'txtsistemarespiratorio',
                                'value' => set_value('txtsistemarespiratorio')
                                    );
                                $Sisintegumentario = array(
                                'name' => 'txtsistemaintegumentario',
                                'id' => 'txtsistemaintegumentario',
                                'value' => set_value('txtsistemaintegumentario')
                                    );
                                $Sisosteomuscular  = array(
                                'name' => 'txtsistemaosteomuscular',
                                'id' => 'txtsistemaosteomuscular',
                                'value' => set_value('txtsistemaosteomuscular')
                                    );
                                $Sisdigestivo = array(
                                'name' => 'txtsistemadigestivo',
                                'id' => 'txtsistemadigestivo',
                                'value' => set_value('txtsistemadigestivo')
                                    );
                                $Sisnervioso = array(
                                'name' => 'txtsistemanervioso',
                                'id' => 'txtsistemanervioso',
                                'value' => set_value('txtsistemanervioso')
                                    );
                                $alcoholcantidad = array( 
                                'name' => 'txtcantidadalcohol',
                                'id' => 'txtcantidadalcohol',
                                'value' => set_value('txtcantidadalcohol')
                                    );
                                $cigarropaquetes = array( 
                                'name' => 'txtcigarrocantidad',
                                'id' => 'txtcigarrocantidad',
                                'value' => set_value('txtcigarrocantidad')
                                    );
                                $cafecantidad = array( 
                                'name' => 'txtcafecantidad',
                                'id' => 'txtcafecantidad',
                                'value' => set_value('txtcafecantidad')
                                    );
                                $drogascantidad= array(
                                'name' => 'txtdrogascantidad',
                                'id' => 'txtdrogascantidad',
                                'value' => set_value('txtdrogascantidad')
                                    );
                                $Otrosantecedentes = array(
                                'name' => 'txtotrosantecedentestoxicos',
                                'id' => 'txtotrosantecedentestoxicos',
                                'value' => set_value('txtotrosantecedentestoxicos')
                                    );
                                ?>
                                <tr>
                                    <td width="170" align="left" scope="row" style="border-width: 0px; ">Talla:</td>
                                    <td width="110" align="left" style="border-width: 0px; ">
                                        <select name="selectTalla" id="selecttalla">
                                        <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                        <option value="37" <?php echo set_select('myselect', '37'); ?> >Glasil</option>
                                        <option value="38" <?php echo set_select('myselect', '38'); ?> >Mediano</option>    
                                        <option value="39" <?php echo set_select('myselect', '39'); ?> >Gruesa</option>  
                                    </select> 
                                    </td>
                                    <td width="40" style="border-width: 0px; ">&nbsp;</td>
                                    <td width="63" align="left" style="border-width: 0px; ">Estatura:</td>
                                    <td width="144" align="left" style="border-width: 0px; "><?php echo form_input($estatura) ?></td>
                                    <td width="145" align="left" style="border-width: 0px; ">Centímetros</td>
                                </tr>
                                <tr>
                                    <th align="left" scope="row" style="border-width: 0px; ">Apariencia general :</th>
                                    <td align="left" style="border-width: 0px; ">
                                        <select name="selectaparienciageneral" id="selectaparienciageneral">
                                        <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                        <option value="41" <?php echo set_select('myselect', '41'); ?> >Buena</option>
                                        <option value="42" <?php echo set_select('myselect', '42'); ?> >Regular</option>    
                                        <option value="43" <?php echo set_select('myselect', '43'); ?> >Mala</option>  
                                    </select> 
                                    </td>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                    <td align="left" style="border-width: 0px; ">Peso:</td>
                                    <td align="left" style="border-width: 0px; "><?php echo form_input($peso) ?></input></td>
                                    <td align="left" style="border-width: 0px; ">Kilogramos</td>
                                </tr>
                                <tr>
                                    <th colspan="6" scope="row" style="border-width: 0px; ">&nbsp;</th>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="6" style="border-width: 0px; ">Chequeo Signos vitales </th>
                                </tr>
                                <tr>
                                    <td align="left" scope="row" style="border-width: 0px; ">Pulso por minuto (ppm)</td>
                                    <th colspan="2" align="left" scope="row" style="border-width: 0px; "><?php echo form_input($pulso) ?></th>
                                    <th colspan="2" scope="row" align="left" style="border-width: 0px; ">Frecuencia respiratoria  (Rpm)</th>
                                    <td style="border-width: 0px; "><?php echo form_input($frecuenciares) ?></td>
                                </tr>
                                <tr>
                                    <th align="left" scope="row" style="border-width: 0px; ">Temperatura (celcius) </th>
                                    <th colspan="2" align="left" scope="row" style="border-width: 0px; "><?php echo form_input($temperatura) ?></th>
                                    <th colspan="2" scope="row" align="left" style="border-width: 0px; ">Presión sanguínea:  (Kpa) </th>
                                    <td style="border-width: 0px; "><?php echo form_input($presion) ?></td>
                                </tr>
                                <tr>
                                    <th colspan="6" align="left" scope="row" style="border-width: 0px; ">&nbsp;</th>
                                </tr>
                            </tbody>
                        </table>
                        </th>
                        </tr>
                        <tr>
                            <th style="border-width: 0px; ">Revisión por sistemas:<br />
                        <table width="700" border="0" align="left">
                            <tbody>
                                <tr>
                                    <th width="174" scope="row" align="left" style="border-width: 0px; ">Estado sensorial </th>
                                    <td width="154" style="border-width: 0px; "><?php echo form_input($EstaSenso) ?></td>
                                    <td width="20" style="border-width: 0px; ">&nbsp;</td>
                                    <td width="172" align="left" style="border-width: 0px; ">Sistema renal </td>
                                    <td width="144" style="border-width: 0px; "><?php echo form_input($SisRenal) ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" align="left" style="border-width: 0px; ">Sistema cardiovascular </th>
                                    <td style="border-width: 0px; ">
                                <?php echo form_input($Siscardiovascular) ?></td>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                    <td align="left" style="border-width: 0px; ">Sistema endocrino </td>
                                    <td style="border-width: 0px; "><?php echo form_input($Sisendocrino) ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" align="left" style="border-width: 0px; ">Sistema respiratorio </th>
                                    <td style="border-width: 0px; "><?php echo form_input($Sisrespiratorio) ?></td>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                    <td align="left" style="border-width: 0px; ">Sistema integumentario</td>
                                    <td style="border-width: 0px; "><?php echo form_input($Sisintegumentario) ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" align="left" style="border-width: 0px; ">Sistema osteomuscular </th>
                                    <td style="border-width: 0px; "><?php echo form_input($Sisosteomuscular) ?></td>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                    <td align="left" style="border-width: 0px; ">Sistema digestivo</td>
                                    <td style="border-width: 0px; "><?php echo form_input($Sisdigestivo) ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" align="left" style="border-width: 0px; ">Sistema nervioso </th>
                                    <td style="border-width: 0px; "><?php echo form_input($Sisnervioso) ?></td>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                </tr>
                                <tr>
                                    <th colspan="5" align="left" scope="row" style="border-width: 0px; ">&nbsp;</th>
                                </tr>
                            </tbody>
                        </table>
                        </th>
                        </tr>
                        <tr>
                            <th style="border-width: 0px; ">Antecedentes tóxicos:  
                        <table width="700" border="0">
                            <tbody>
                                <tr>
                                    <th width="110" scope="row" align="left" style="border-width: 0px; ">Descripción</th>
                                    <td width="150" align="left" style="border-width: 0px; "> (si/no)</td>
                                    <td width="150" align="left" style="border-width: 0px; ">Frecuencia</td>
                                    <td width="150" align="left" style="border-width: 0px; ">Cantidad</td>
                                    <td width="118" style="border-width: 0px; ">&nbsp;</td>
                                </tr>
                                <tr>
                                    <th scope="row" align="left" style="border-width: 0px; ">Alcohol</th>
                                    <td align="left" style="border-width: 0px; ">
                                        <select name="selectalcoholsino" id="selectalcoholsino">
                                        <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                        <option value="Si" <?php echo set_select('myselect', 'Si'); ?> >Si</option>
                                        <option value="No" <?php echo set_select('myselect', 'No'); ?> >No</option>    
                                         </select> 
                                     </td>
                                    <td align="left" style="border-width: 0px; ">
                                        <select name="selectalcoholfrecuencia" id="selectalcoholfrecuencia">
                                        <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                        <option value="No aplica" <?php echo set_select('myselect', 'No aplica'); ?> >No aplica</option>
                                        <option value="Diaria" <?php echo set_select('myselect', 'Diaria'); ?> >Diaria</option> 
                                        <option value="Semanal" <?php echo set_select('myselect', 'Semanal'); ?> >Semanal</option>  
                                         </select> 
                                         </td>
                                    <td align="left" style="border-width: 0px; "><?php echo form_input($alcoholcantidad) ?></td>
                                    <td align="left" style="border-width: 0px; "> Botellas </td>
                                </tr>
                                <tr>
                                    <th scope="row" align="left" style="border-width: 0px; ">Cigarrillos</th>
                                    <td align="left" style="border-width: 0px; ">
                                         <select name="selectcigarrillossino" id="selectcigarrillossino">
                                        <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                        <option value="Si" <?php echo set_select('myselect', 'Si'); ?> >Si</option>
                                        <option value="No" <?php echo set_select('myselect', 'No'); ?> >No</option>    
                                         </select> 
                                         </td>
                                    <td align="left" style="border-width: 0px; ">
                                        <select name="selectcigarrillosfrecuencia" id="selectcigarrillosfrecuencia">
                                        <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                        <option value="No aplica" <?php echo set_select('myselect', 'No aplica'); ?> >No aplica</option>
                                        <option value="Diaria" <?php echo set_select('myselect', 'Diaria'); ?> >Diaria</option> 
                                        <option value="Semanal" <?php echo set_select('myselect', 'Semanal'); ?> >Semanal</option>  
                                         </select>
                                         </td>
                                    <td align="left" style="border-width: 0px; "><?php echo form_input($cigarropaquetes) ?></td>
                                    <td align="left" style="border-width: 0px; "> paquetes</td>
                                </tr>
                                <tr>
                                    <th scope="row" align="left" style="border-width: 0px; ">Café</th>
                                    <td align="left" style="border-width: 0px; ">
                                        <select name="selectcafesino" id="selectcafesino">
                                        <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                        <option value="Si" <?php echo set_select('myselect', 'Si'); ?> >Si</option>
                                        <option value="No" <?php echo set_select('myselect', 'No'); ?> >No</option>    
                                         </select> 
                                    </td>
                                    <td align="left" style="border-width: 0px; ">
                                        <select name="selectcafefrecuencia" id="selectcafefrecuencia">
                                        <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                        <option value="No aplica" <?php echo set_select('myselect', 'No aplica'); ?> >No aplica</option>
                                        <option value="Diaria" <?php echo set_select('myselect', 'Diaria'); ?> >Diaria</option> 
                                        <option value="Semanal" <?php echo set_select('myselect', 'Semanal'); ?> >Semanal</option>  
                                         </select>
                                    </td>
                                    <td align="left" style="border-width: 0px; "><?php echo form_input($cafecantidad) ?></td>
                                    <td align="left" style="border-width: 0px; "> tazas</td>
                                </tr>
                                <tr>
                                    <th scope="row" align="left" style="border-width: 0px; ">Drogas</th>
                                    <td align="left" style="border-width: 0px; ">
                                        <select name="selectdrogassino" id="selectdrogassino">
                                        <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                        <option value="Si" <?php echo set_select('myselect', 'Si'); ?> >Si</option>
                                        <option value="No" <?php echo set_select('myselect', 'No'); ?> >No</option>    
                                         </select> 
                                     </td>
                                    <td align="left" style="border-width: 0px; ">
                                        <select name="selectdrogasfrecuencia" id="selectdrogasfrecuencia">
                                        <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                        <option value="No aplica" <?php echo set_select('myselect', 'No aplica'); ?> >No aplica</option>
                                        <option value="Diaria" <?php echo set_select('myselect', 'Diaria'); ?> >Diaria</option> 
                                        <option value="Semanal" <?php echo set_select('myselect', 'Semanal'); ?> >Semanal</option>  
                                         </select>
                                    </td>
                                    <td align="left" style="border-width: 0px; "><?php echo form_input($drogascantidad) ?></td>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                </tr>
                                <tr>
                                    <th scope="row" align="left" style="border-width: 0px; ">Otros</th>
                                    <td colspan="4" align="left" style="border-width: 0px; "><?php echo form_input($Otrosantecedentes) ?></td>
                                </tr>
                                <?php echo form_close(); ?>
                            </tbody>
                        </table>
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
