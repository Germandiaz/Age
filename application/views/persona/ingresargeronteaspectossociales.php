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
                    <p align="left"><?php $atributos = array('id' => 'aspsocia_form', 'class' => 'form_aspsocia');
                            echo form_open('ingresargeronte/capdatosgerondxs', $atributos);
                            echo form_submit('submit', 'Finalizar'); ?>
                        <div align="right"><?php echo form_hidden('txtidadmisiongerontedxs',$idadmision)?></div>
                    <p><br /></p>
                    <p><b> Aspectos Sociales</b></p>
                    <table border="0">
                        <tbody>
                            <tr>
                                <th valign="top" scope="row" style="border-width: 0px; ">
                        <table width="700" border="0"><?php
                            $porquegustaactividades = array(
                            'name' => 'txtporqueactividades',
                            'id' => 'txtporqueactividades',
                            'rows'=>'2',
                            'cols'=>'20',
                            'value' => set_value('txtporqueactividades')
                        ); 
                            $otrosgruposociales = array(
                            'name' => 'txtotrospertenecegrupsociales',
                            'id' => 'txtotrospertenecegrupsociales',
                            'rows'=>'2',
                            'cols'=>'20',
                            'value' => set_value('txtotrospertenecegrupsociales')
                        ); 
                            ?>
                            <tbody>
                                <tr>
                                    <td colspan="6" style="border-width: 0px; ">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td width="114" style="border-width: 0px; ">&nbsp;</td>
                                    <td width="134" style="border-width: 0px; ">&nbsp;</td>
                                    <td width="121" style="border-width: 0px; ">&nbsp;</td>
                                    <td colspan="2" style="border-width: 0px; ">&nbsp;</td>
                                    <td width="171" style="border-width: 0px; ">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td colspan="5" align="left" style="border-width: 0px; ">Relaciones interpersonales Con los compañeros del hogar:</td>
                                    <td style="border-width: 0px; ">
                                        <label for="select" align="left"></label>
                                        <select name="selectcompanerohogar" id="selectautovaloracion">
                                        <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                        <option value="222" <?php echo set_select('myselect', '222'); ?> >Aceptación</option>
                                        <option value="223" <?php echo set_select('myselect', '223'); ?> >Rechazado</option>
                                        <option value="224" <?php echo set_select('myselect', '224'); ?> >Indiferencia</option>    
                                        <option value="225" <?php echo set_select('myselect', '225'); ?> >No se dan</option>  
                                    </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="5" align="left" style="border-width: 0px; ">Relaciones Interpersonales fuera de la institución:</td>
                                    <td align="left" style="border-width: 0px; ">
                                        <select name="selectfuerainstitu" id="selectfuerainstitu">
                                        <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                        <option value="226" <?php echo set_select('myselect', '226'); ?> >Aceptación</option>
                                        <option value="227" <?php echo set_select('myselect', '227'); ?> >Rechazado</option>
                                        <option value="228" <?php echo set_select('myselect', '228'); ?> >Indiferencia</option>    
                                        <option value="229" <?php echo set_select('myselect', '229'); ?> >No se dan</option>  
                                    </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" align="left" style="border-width: 0px; ">Le gustaría Participar en actividades de grupo:</td>
                                    <td width="56" align="left" style="border-width: 0px; ">                                            
                                        <select name="selectparticipa" id="selectparticipa">
                                        <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                        <option value="230" <?php echo set_select('myselect', '230'); ?> >Si</option>
                                        <option value="231" <?php echo set_select('myselect', '231'); ?> >No</option>
                                    </select>
                                    </td>
                                    <td width="78" align="right" style="border-width: 0px; ">Por Que:</td>
                                    <td rowspan="2" align="left" style="border-width: 0px; "><?php echo form_Textarea($porquegustaactividades); ?></td>
                                </tr>
                                <tr>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                    <td colspan="2" style="border-width: 0px; ">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="left" style="border-width: 0px; ">Valoración Grupal:</td>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                    <td colspan="2" style="border-width: 0px; ">&nbsp;</td>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                    <td align="left" style="border-width: 0px; "><?php echo form_checkbox('chkafectividadvaloracion', '232', FALSE); ?>Afectividad</td>
                                    <td align="left" style="border-width: 0px; "><?php echo form_checkbox('chkculturavaloracion', '233', FALSE); ?>Cultura</td>
                                    <td colspan="2" align="left" style="border-width: 0px; "><?php echo form_checkbox('chksocializacionvaloracion', '234', FALSE); ?>Socialización</td>
                                    <td align="left" style="border-width: 0px; "><?php echo form_checkbox('chkcrecimientopersonalvaloracion', '235', FALSE); ?>Crecimiento Personal </td>
                                </tr>
                                <tr>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                    <td colspan="2" style="border-width: 0px; ">&nbsp;</td>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td colspan="3" align="left" style="border-width: 0px; ">Pertenece a Grupos Sociales:</td>
                                    <td colspan="2" style="border-width: 0px; ">&nbsp;</td>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td align="left" style="border-width: 0px; "><?php echo form_checkbox('chkdanzassociales', '236', FALSE); ?>Danzas </td>
                                    <td align="left" style="border-width: 0px; "><?php echo form_checkbox('chkgerontologicosociales', '237', FALSE); ?>Gerontológicos</td>
                                    <td align="left" style="border-width: 0px; "><?php echo form_checkbox('chkreligiososociales', '238', FALSE); ?>Religiosos</td>
                                    <td colspan="2" align="left" style="border-width: 0px; "><?php echo form_checkbox('chkpoliticossociales', '239', FALSE); ?>Políticos</td>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td align="left" style="border-width: 0px; "><?php echo form_checkbox('chkcantosociales', '240', FALSE); ?>Canto</td>
                                    <td align="left" style="border-width: 0px; "><?php echo form_checkbox('chkteatrosociales', '241', FALSE); ?>Teatro</td>
                                    <td colspan="3" align="left" style="border-width: 0px; "><?php echo form_checkbox('chkexprecorporalsociales', '242', FALSE); ?>Expresión Corporal </td>
                                    <td align="left" style="border-width: 0px; "><?php echo form_checkbox('chkotrossociales', '243', FALSE); ?>Otros</td>
                                </tr>
                                <tr>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                    <td colspan="2" style="border-width: 0px; ">&nbsp;</td>
                                    <td rowspan="2" align="left" style="border-width: 0px; "><?php echo form_Textarea($otrosgruposociales); ?></td>
                                </tr>
                                <tr>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                    <td colspan="2" style="border-width: 0px; ">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                    <td colspan="2" style="border-width: 0px; ">&nbsp;</td>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td colspan="6" align="left" style="border-width: 0px; ">Que tipos de actividades reeducativas le gustaría realizar:</td>
                                </tr>
                                <tr>
                                    <td align="left" style="border-width: 0px; "><?php echo form_checkbox('chkrecreativasactividades', '244', FALSE); ?>Recreativas</td>
                                    <td align="left" style="border-width: 0px; "><?php echo form_checkbox('chkmantenimientoactividades', '245', FALSE); ?>Mantenimiento</td>
                                    <td style="border-width: 0px; "><?php echo form_checkbox('chkeducacionalesactividades', '246', FALSE); ?>Educacionales</td>
                                    <td colspan="2" align="left" style="border-width: 0px; "><?php echo form_checkbox('chkergoterapeuticasactividades', '247', FALSE); ?>Ergoterapeúticas</td>
                                    <td align="left" style="border-width: 0px; "><?php echo form_checkbox('chkprevocacionalesactividades', '248', FALSE); ?>Prevocacionales</td>
                                </tr>
                                <tr>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                    <td colspan="2" style="border-width: 0px; ">&nbsp;</td>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td colspan="5" align="left" style="border-width: 0px; ">Con el ingreso a la institución su vida:</td>
                                    <td align="left" style="border-width: 0px; ">
                                          <select name="selectfuerainstitu" id="selectfuerainstitu">
                                        <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                        <option value="Mejora" <?php echo set_select('myselect', '249'); ?> >Mejora</option>
                                        <option value="Empeora" <?php echo set_select('myselect', '250'); ?> >Empeora</option>
                                        <option value="No Cambia" <?php echo set_select('myselect', '251'); ?> >No Cambia</option>
                                    </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                    <td style="border-width: 0px; ">
                                        <label for="select4"></label>
                                    </td>
                                    <td colspan="2" style="border-width: 0px; ">&nbsp;</td>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                    <td colspan="2" style="border-width: 0px; ">&nbsp;</td>
                                    <td style="border-width: 0px; ">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                        <p align="center" class="Estilo1">&nbsp;</p>
                        <p align="center" class="Estilo1">&nbsp;</p>
                        </th>
                        </tr>
                        <tr>
                            <th valign="top" scope="row" style="border-width: 0px; "></th>
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