<div>
    <p>
        <?php 
            $atributos = array('id' => 'informebiolo_form', 'class' => 'form_informebiolo');
            echo form_open('ingresargeronte/capDatosGeronInforBiolog', $atributos);
             echo form_submit('submit', 'Siguiente'); 
        ?>
        <div>
            <?php echo form_hidden('txtidadmisioninformebiolo',$idadmision)?>
        </div>
            <table>
                <tbody>
                     <tr>
                        <th>Medidas Antropomédicas:  
                            <table>
                                <tbody>
                                    <?php
                                        $estatura = array('name' => 'txtestatura','id' => 'txtestatura','value' => set_value('txtestatura'));
                                        $peso = array('name' => 'txtpeso','id' => 'txtpeso','value' => set_value('txtpeso'));
                                        $pulso = array('name' => 'txtpulsoporminuto','id' => 'txtpulsoporminuto','value' => set_value('txtpulsoporminuto'));
                                        $frecuenciares = array('name' => 'txtfrecuenciarespiratoria','id' => 'txtfrecuenciarespiratoria','value' => set_value('txtfrecuenciarespiratoria'));
                                        $temperatura = array('name' => 'txttemperatura','id' => 'txttemperatura','value' => set_value('txttemperatura'));
                                        $presion = array('name' => 'txtpresionsanguinea','id' => 'txtpresionsanguinea','value' => set_value('txtpresionsanguinea'));
                                        $EstaSenso = array('name' => 'txtestadosensorial','id' => 'txtestadosensorial','value' => set_value('txtestadosensorial'));
                                        $SisRenal = array('name' => 'txtsistemarenal','id' => 'txtsistemarenal','value' => set_value('txtsistemarenal'));
                                        $Siscardiovascular = array('name' => 'txtsistemacardiovascular','id' => 'txtsistemacardiovascular','value' => set_value('txtsistemacardiovascular'));
                                        $Sisendocrino = array('name' => 'txtsistemaendocrino','id' => 'txtsistemaendocrino','value' => set_value('txtsistemaendocrino'));
                                        $Sisrespiratorio = array('name' => 'txtsistemarespiratorio','id' => 'txtsistemarespiratorio','value' => set_value('txtsistemarespiratorio'));
                                        $Sisintegumentario = array('name' => 'txtsistemaintegumentario','id' => 'txtsistemaintegumentario','value' => set_value('txtsistemaintegumentario'));
                                        $Sisosteomuscular  = array('name' => 'txtsistemaosteomuscular','id' => 'txtsistemaosteomuscular','value' => set_value('txtsistemaosteomuscular'));
                                        $Sisdigestivo = array('name' => 'txtsistemadigestivo','id' => 'txtsistemadigestivo','value' => set_value('txtsistemadigestivo'));
                                        $Sisnervioso = array('name' => 'txtsistemanervioso','id' => 'txtsistemanervioso','value' => set_value('txtsistemanervioso'));
                                        $alcoholcantidad = array('name' => 'txtcantidadalcohol','id' => 'txtcantidadalcohol','value' => set_value('txtcantidadalcohol'));
                                        $cigarropaquetes = array('name' => 'txtcigarrocantidad','id' => 'txtcigarrocantidad','value' => set_value('txtcigarrocantidad'));
                                        $cafecantidad = array('name' => 'txtcafecantidad','id' => 'txtcafecantidad','value' => set_value('txtcafecantidad'));
                                        $drogascantidad= array('name' => 'txtdrogascantidad','id' => 'txtdrogascantidad','value' => set_value('txtdrogascantidad'));
                                        $Otrosantecedentes = array('name' => 'txtotrosantecedentestoxicos','id' => 'txtotrosantecedentestoxicos','value' => set_value('txtotrosantecedentestoxicos'));
                                    ?>
                                    <tr>
                                        <td>Talla:</td>
                                        <td>
                                            <select name="selectTalla" id="selecttalla">
                                                <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                                <option value="37" <?php echo set_select('myselect', '37'); ?> >Glasil</option>
                                                <option value="38" <?php echo set_select('myselect', '38'); ?> >Mediano</option>    
                                                <option value="39" <?php echo set_select('myselect', '39'); ?> >Gruesa</option>  
                                            </select> 
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>Estatura:</td>
                                        <td><?php echo form_input($estatura) ?></td>
                                        <td>Centímetros</td>
                                    </tr>
                                    <tr>
                                        <th>Apariencia general :</th>
                                        <td>
                                            <select name="selectaparienciageneral" id="selectaparienciageneral">
                                                <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                                <option value="41" <?php echo set_select('myselect', '41'); ?> >Buena</option>
                                                <option value="42" <?php echo set_select('myselect', '42'); ?> >Regular</option>    
                                                <option value="43" <?php echo set_select('myselect', '43'); ?> >Mala</option>  
                                            </select> 
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>Peso:</td>
                                        <td><?php echo form_input($peso) ?></input></td>
                                        <td>Kilogramos</td>
                                    </tr>
                                    <tr>
                                        <th>&nbsp;</th>
                                    </tr>
                                    <tr>
                                        <th>Chequeo Signos vitales </th>
                                    </tr>
                                    <tr>
                                        <td>Pulso por minuto (ppm)</td>
                                        <th><?php echo form_input($pulso) ?></th>
                                        <th>Frecuencia respiratoria  (Rpm)</th>
                                        <td><?php echo form_input($frecuenciares) ?></td>
                                    </tr>
                                    <tr>
                                        <th>Temperatura (celcius) </th>
                                        <th><?php echo form_input($temperatura) ?></th>
                                        <th>Presión sanguínea:  (Kpa) </th>
                                        <td><?php echo form_input($presion) ?></td>
                                    </tr>
                                    <tr>
                                        <th>&nbsp;</th>
                                    </tr>
                                </tbody>
                            </table>
                        </th>
                    </tr>
                    <tr>
                        <th>Revisión por sistemas:<br />
                            <table>
                                <tbody>
                                    <tr>
                                        <th>Estado sensorial </th>
                                        <td><?php echo form_input($EstaSenso) ?></td>
                                        <td>&nbsp;</td>
                                        <td>Sistema renal </td>
                                        <td><?php echo form_input($SisRenal) ?></td>
                                    </tr>
                                    <tr>
                                        <th>Sistema cardiovascular </th>
                                        <td><?php echo form_input($Siscardiovascular) ?></td>
                                        <td>&nbsp;</td>
                                        <td>Sistema endocrino </td>
                                        <td><?php echo form_input($Sisendocrino) ?></td>
                                    </tr>
                                    <tr>
                                        <th>Sistema respiratorio </th>
                                        <td><?php echo form_input($Sisrespiratorio) ?></td>
                                        <td>&nbsp;</td>
                                        <td>Sistema integumentario</td>
                                        <td><?php echo form_input($Sisintegumentario) ?></td>
                                    </tr>
                                    <tr>
                                        <th>Sistema osteomuscular </th>
                                        <td><?php echo form_input($Sisosteomuscular) ?></td>
                                        <td>&nbsp;</td>
                                        <td>Sistema digestivo</td>
                                        <td><?php echo form_input($Sisdigestivo) ?></td>
                                    </tr>
                                    <tr>
                                        <th>Sistema nervioso </th>
                                        <td><?php echo form_input($Sisnervioso) ?></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <th>&nbsp;</th>
                                    </tr>
                                </tbody>
                            </table>
                        </th>
                    </tr>
                    <tr>
                        <th>Antecedentes tóxicos:  
                            <table>
                                <tbody>
                                    <tr>
                                        <th>Descripción</th>
                                        <td> (si/no)</td>
                                        <td>Frecuencia</td>
                                        <td>Cantidad</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <th>Alcohol</th>
                                        <td>
                                            <select name="selectalcoholsino" id="selectalcoholsino">
                                                <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                                <option value="Si" <?php echo set_select('myselect', 'Si'); ?> >Si</option>
                                                <option value="No" <?php echo set_select('myselect', 'No'); ?> >No</option>    
                                             </select> 
                                        </td>
                                        <td>
                                            <select name="selectalcoholfrecuencia" id="selectalcoholfrecuencia">
                                                <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                                <option value="No aplica" <?php echo set_select('myselect', 'No aplica'); ?> >No aplica</option>
                                                <option value="Diaria" <?php echo set_select('myselect', 'Diaria'); ?> >Diaria</option> 
                                                <option value="Semanal" <?php echo set_select('myselect', 'Semanal'); ?> >Semanal</option>  
                                            </select> 
                                        </td>
                                        <td><?php echo form_input($alcoholcantidad) ?></td>
                                        <td> Botellas </td>
                                    </tr>
                                    <tr>
                                    <th>Cigarrillos</th>
                                    <td>
                                        <select name="selectcigarrillossino" id="selectcigarrillossino">
                                            <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                            <option value="Si" <?php echo set_select('myselect', 'Si'); ?> >Si</option>
                                            <option value="No" <?php echo set_select('myselect', 'No'); ?> >No</option>    
                                         </select> 
                                    </td>
                                    <td>
                                        <select name="selectcigarrillosfrecuencia" id="selectcigarrillosfrecuencia">
                                            <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                            <option value="No aplica" <?php echo set_select('myselect', 'No aplica'); ?> >No aplica</option>
                                            <option value="Diaria" <?php echo set_select('myselect', 'Diaria'); ?> >Diaria</option> 
                                            <option value="Semanal" <?php echo set_select('myselect', 'Semanal'); ?> >Semanal</option>  
                                        </select>
                                    </td>
                                    <td><?php echo form_input($cigarropaquetes) ?></td>
                                    <td> paquetes</td>
                                </tr>
                                <tr>
                                    <th>Café</th>
                                    <td>
                                        <select name="selectcafesino" id="selectcafesino">
                                            <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                            <option value="Si" <?php echo set_select('myselect', 'Si'); ?> >Si</option>
                                            <option value="No" <?php echo set_select('myselect', 'No'); ?> >No</option>    
                                         </select> 
                                    </td>
                                    <td>
                                        <select name="selectcafefrecuencia" id="selectcafefrecuencia">
                                            <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                            <option value="No aplica" <?php echo set_select('myselect', 'No aplica'); ?> >No aplica</option>
                                            <option value="Diaria" <?php echo set_select('myselect', 'Diaria'); ?> >Diaria</option> 
                                            <option value="Semanal" <?php echo set_select('myselect', 'Semanal'); ?> >Semanal</option>  
                                        </select>
                                    </td>
                                    <td><?php echo form_input($cafecantidad) ?></td>
                                    <td> tazas</td>
                                </tr>
                                <tr>
                                    <th>Drogas</th>
                                    <td>
                                        <select name="selectdrogassino" id="selectdrogassino">
                                            <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                            <option value="Si" <?php echo set_select('myselect', 'Si'); ?> >Si</option>
                                            <option value="No" <?php echo set_select('myselect', 'No'); ?> >No</option>    
                                        </select> 
                                    </td>
                                    <td>
                                        <select name="selectdrogasfrecuencia" id="selectdrogasfrecuencia">
                                            <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                            <option value="No aplica" <?php echo set_select('myselect', 'No aplica'); ?> >No aplica</option>
                                            <option value="Diaria" <?php echo set_select('myselect', 'Diaria'); ?> >Diaria</option> 
                                            <option value="Semanal" <?php echo set_select('myselect', 'Semanal'); ?> >Semanal</option>  
                                        </select>
                                    </td>
                                    <td><?php echo form_input($drogascantidad) ?></td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <th>Otros</th>
                                    <td><?php echo form_input($Otrosantecedentes) ?></td>
                                </tr>
                                <?php echo form_close(); ?>
                            </tbody>
                        </table>
                    </th>
                </tr>
            </tbody>
        </table>
    </p>
</div>
