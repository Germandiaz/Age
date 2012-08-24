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
                    <?php
                    $atributos = array('id' => 'valoracionfisi_form', 'class' => 'form_valoracionfisi');
                    echo form_open('ingresargeronte/capdatosvalofisica', $atributos);
                    echo form_submit('submit', 'Siguiente'); ?>
                       <?php $numerodocumento = array(
                            'name' => 'txtnumerodocumentovalfisica',
                            'id' => 'txtnumerodocumentovalfisica',
                            'value' => $numerodoc,
                            'readonly'=>"readonly"
                            
                        );
                       ?>
                    <div align="right"><?php echo form_hidden('txtidpersona', $idpersona)?>Numero documento: <?php echo form_input($numerodocumento)?></div>
                    <p><br /></p>
                    <b> Valoración Física</b><br /><br />
                    <table width="700" height="675" border="0" bordercolor="#CCCCCC">
                         <?php                                                         
                        
                             //BOCA
                        $ObsDientes = array(
                            'name' => 'txtObsDientes',
                            'id' => 'txtObsDientes',
                            'value' => set_value('txtObsDientes'),
                            "cols" => "22",
                            "rows" => "5"
                        );
                        $ObsLengua = array(
                            'name' => 'txtObsLengua',
                            'id' => 'txtObsLengua',
                            'value' => set_value('txtObsLengua'),
                           "cols" => "22",
                            "rows" => "5"
                        );
                        //OJOS
                        $ObsOjos = array(
                            'name' => 'txtObsOjos',
                            'id' => 'txtObsOjos',
                            'value' => set_value('txtObsOjos'),
                            "cols" => "22",
                            "rows" => "5"
                        ); 
                    //UÑAS
                        $ObsUnas = array(
                            'name' => 'txtObsUnas',
                            'id' => 'txtObsUnas',
                            'value' => set_value('txtObsUnas'),
                            "cols" => "22",
                            "rows" => "5"
                        );
                        //OIDOS
                        $ObsOidos = array(
                            'name' => 'txtObsOidos',
                            'id' => 'txtObsOidos',
                            'value' => set_value('txtObsOidos'),
                            "cols" => "22",
                            "rows" => "5"
                        );                        
                          //DIETA
                          $otrosDieta = array(
                              'name' => 'txtotrosdieta',
                              'id' => 'txtotrosdieta',
                              'value' => set_value('txtotrosdieta'),
                              "cols" => "22",
                              "rows" => "5"
                        );
                        $tratamientoCual = array(
                            'name' => 'txttratamientocual',
                            'id' => 'txttratamientocual',
                            'value' => set_value('txttratamientocual'),
                            "cols" => "22",
                            "rows" => "5"
                        );
                        ?>
                        <tbody>
                            <tr>
                                <th width="345" scope="row" style="border-width: 0px; ">Boca</th>
                                <th width="345" style="border-width: 0px; ">Ojos</th>
                            </tr>
                            <tr>
                                <th scope="row" style="border-width: 0px; ">
                        <table width="340" border="0" align="left">
                            <tbody>
                                <tr>
                                    <td width="150" scope="row" align="left" style="border-width: 0px; ">Dientes:</td>
                                    <td width="178" align="left" style="border-width: 0px; ">
                                        <select name="selectDientes" id="selectDientes">
                                        <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                        <option value="1" <?php echo set_select('myselect', '1'); ?> >Edéntulo Total</option>
                                        <option value="2" <?php echo set_select('myselect', '2'); ?> >Prótesis Total</option>
                                        <option value="3" <?php echo set_select('myselect', '3'); ?> >Prótesis Parcial</option>
                                    </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" align="left" style="border-width: 0px; ">Observación Dientes:</th>
                                    <td align="left" style="border-width: 0px; "><?php echo form_textarea($ObsDientes)?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" align="left" style="border-width: 0px; ">Lengua:</th>
                                    <td align="left" style="border-width: 0px; ">
                                        <select name="selectLengua" id="selectLengua">
                                        <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                        <option value="4" <?php echo set_select('myselect', '4'); ?> >Limpia</option>
                                        <option value="5" <?php echo set_select('myselect', '5'); ?> >Con sorbes</option>                                     
                                    </select>   
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" align="left" style="border-width: 0px; ">Mucosa de Lengua:</th>
                                    <td align="left" style="border-width: 0px; ">
                                        <select name="selectMucosaLengua" id="selectMucosaLengua">
                                        <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                        <option value="6" <?php echo set_select('myselect', '6'); ?> >Sana</option>
                                        <option value="7" <?php echo set_select('myselect', '7'); ?> >Con lesiones</option>
                                        <option value="8" <?php echo set_select('myselect', '8'); ?> >Hidratada</option>
                                        <option value="9" <?php echo set_select('myselect', '9'); ?> >Deshidratada</option>                                     
                                    </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" align="left" style="border-width: 0px; ">Observación lengua</th>
                                    <td align="left" style="border-width: 0px; "><?php echo form_textarea($ObsLengua)?></td>
                                </tr>
                            </tbody>
                        </table>
                        </th>
                        <th width="345" style="border-width: 0px; ">
                        <table width="340" border="0" align="left">
                            <tbody>
                                <tr>
                                    <th width="160" scope="row" align="left" style="border-width: 0px; ">Lesiones:</th>
                                    <td width="180" align="left" style="border-width: 0px; ">
                                        <select name="selectlesionesojos" id="selectlesionesojos">
                                        <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                        <option value="10" <?php echo set_select('myselect', '10'); ?> >Cataratas</option>
                                        <option value="11" <?php echo set_select('myselect', '11'); ?> >Pterigios</option>
                                        <option value="12" <?php echo set_select('myselect', '12'); ?> >Arco senil</option>
                                        <option value="13" <?php echo set_select('myselect', '13'); ?> >Edema Conjuntival</option>     
                                        <option value="14" <?php echo set_select('myselect', '14'); ?> >Otro</option> 
                                    </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" align="left" style="border-width: 0px; ">Observaciones:</th>
                                    <td align="left" style="border-width: 0px; "><?php echo form_textarea($ObsOjos)?></td>
                                </tr>
                                <tr>
                                    <th scope="row" align="left" style="border-width: 0px; ">Lentes:</th>
                                    <td align="left" style="border-width: 0px; ">
                                        <select name="selectlentesojos" id="selectlentesojos">
                                        <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                        <option value="15" <?php echo set_select('myselect', '15'); ?> >Si</option>
                                        <option value="16" <?php echo set_select('myselect', '16'); ?> >No</option>
                                    </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </th>
                        </tr>
                        <tr>
                            <th scope="row" style="border-width: 0px; ">Uñas</th>
                            <th style="border-width: 0px; "> Oídos</th>
                        </tr>
                        <tr>
                            <th scope="row" style="border-width: 0px; ">
                        <table width="340" border="0" align="left">
                            <tbody>
                                <tr>
                                    <td width="150" scope="row" align="left" style="border-width: 0px; ">Estado:</td>
                                    <td width="175" style="border-width: 0px; ">
                                        <select name="selectestadounas" id="selectestadounas">
                                        <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                        <option value="17" <?php echo set_select('myselect', '17'); ?> >Secas</option>
                                        <option value="18" <?php echo set_select('myselect', '18'); ?> >Hongos</option>
                                        <option value="19" <?php echo set_select('myselect', '19'); ?> >Otro</option>
                                    </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" align="left" style="border-width: 0px; ">Observación:</th>
                                    <td align="left" style="border-width: 0px; "><?php echo form_textarea($ObsUnas) ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <p>&nbsp;</p>
                        </th>
                        <th style="border-width: 0px; ">
                        <table width="340" border="0" align="left">
                            <tbody>
                                <tr>
                                    <th width="160" scope="row" align="left" style="border-width: 0px; ">Estado:</th>
                                    <td width="180" align="left" style="border-width: 0px; ">
                                        <select name="selectestadooidos" id="selectestadooidos">
                                        <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                        <option value="20" <?php echo set_select('myselect', '20'); ?> >Queratosis</option>
                                        <option value="21" <?php echo set_select('myselect', '21'); ?> >Resequedad</option>
                                        <option value="22" <?php echo set_select('myselect', '22'); ?> >Otro</option>
                                    </select>   
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" align="left" style="border-width: 0px; ">Observación:</th>
                                    <td align="left" style="border-width: 0px; "><?php echo form_textarea($ObsOidos)?></td>
                                </tr>
                            </tbody>
                        </table>
                        </th>
                        </tr>
                        <tr>
                            <th scope="row" style="border-width: 0px; ">Su dieta consiste en:</th>
                            <th style="border-width: 0px; ">Tratamiento que recibe actualmente:</th>
                        </tr>
                        <tr>
                            <th scope="row" style="border-width: 0px; ">
                        <table width="340">
                            <tbody>
                                <tr>
                                    <th width="65" scope="row" align="left" style="border-width: 0px; ">Frutas</th>
                                    <td width="29" style="border-width: 0px; "><?php echo form_checkbox('chkfrutas', '23', FALSE); ?></td>
                                    <td width="86" align="left" style="border-width: 0px; ">Pescado</td>
                                    <td width="61" style="border-width: 0px; "><?php echo form_checkbox('chkpescado', '24', FALSE); ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" align="left" style="border-width: 0px; ">Grasas</th>
                                    <td style="border-width: 0px; "><?php echo form_checkbox('chkgrasas', '25', FALSE); ?></td>
                                    <td align="left" style="border-width: 0px; ">Sólidos</td>
                                    <td style="border-width: 0px; "><?php echo form_checkbox('chksolidos', '26', FALSE); ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" align="left" style="border-width: 0px; ">Harinas</th>
                                    <td style="border-width: 0px; "><?php echo form_checkbox('chkharinas', '27', FALSE); ?></td>
                                    <td align="left" style="border-width: 0px; ">Vegetales</td>
                                    <td style="border-width: 0px; "><?php echo form_checkbox('chkvegetales', '28', FALSE); ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" align="left" style="border-width: 0px; ">Líquidos</th>
                                    <td style="border-width: 0px; "><?php echo form_checkbox('chkliquidos', '29', FALSE); ?></td>
                                    <td align="left" style="border-width: 0px; ">Carnes</td>
                                    <td style="border-width: 0px; "><?php echo form_checkbox('chkcarnes', '30', FALSE); ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" align="left" style="border-width: 0px; ">Otros <?php echo form_checkbox('chkotrosdieta', '31', FALSE); ?></th>
                                    <td colspan="3" rowspan="2" style="border-width: 0px; "><?php echo form_textarea($otrosDieta) ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" style="border-width: 0px; "></th>
                                </tr>
                            </tbody>
                        </table>
                        </th>
                        <th style="border-width: 0px; ">
                        <table width="340" border="0" align="left">
                            <tbody>
                                <tr>
                                    <th width="160" scope="row" align="left" style="border-width: 0px; ">Médico</th>
                                    <td width="180" align="left" style="border-width: 0px; "><?php echo form_checkbox('chkmedico', '32', FALSE); ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" align="left" style="border-width: 0px; ">Bioenergico</th>
                                    <td align="left" style="border-width: 0px; "><?php echo form_checkbox('chkbioenergico', '33', FALSE); ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" align="left" style="border-width: 0px; ">Ninguno</th>
                                    <td align="left" style="border-width: 0px; "><?php echo form_checkbox('chkningunoMedico', '34', FALSE); ?></td>
                                </tr>
                                <tr>
                                    <th scope="row" align="left" style="border-width: 0px; ">Intolera medicamentos</th>
                                    <td align="left" style="border-width: 0px; ">
                                        <select name="selectintoleramedicamentos" id="selectintoleramedicamentos">
                                        <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                        <option value="35" <?php echo set_select('myselect', '35'); ?> >si</option>
                                        <option value="36" <?php echo set_select('myselect', '36'); ?> >no</option>
                                    </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" align="left" style="border-width: 0px; ">¿Cual?</th>
                                    <td align="left" style="border-width: 0px; "><?php echo form_textarea($tratamientoCual) ?></td>
                                </tr>
                            </tbody>
                        </table>
                        </th>
                        </tr>
                                <tr>
                                    <td align="center" colspan="4" scope="row" style="border-width: 0px; ">
                                        <table width="550" border="0">
                                            <tbody>
                                                <tr>
                                                    <td style="border-width: 0px; ">&nbsp;</td>
                                                    <td style="border-width: 0px; ">&nbsp;</td>
                                                    <td style="border-width: 0px; ">&nbsp;</td>
                                                    <td style="border-width: 0px; ">&nbsp;</td>
                                                </tr>
                                            </tbody>
                                             <?php echo form_close(); ?>
                                        </table>
                                    </td>
                                </tr>
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
