<div>
    <p>
        <?php
            $atributos = array('id' => 'valoracionfisi_form', 'class' => 'form_valoracionfisi');
            echo form_open('ingresargeronte/capdatosvalofisica', $atributos);
            echo form_submit('submit', 'Siguiente'); 
        ?>
        <?php 
            $numerodocumento = array('name' => 'txtnumerodocumentovalfisica','id' => 'txtnumerodocumentovalfisica','value' => $numerodoc,'readonly'=>"readonly");
        ?>
        <div>
            <?php echo form_hidden('txtidpersona', $idpersona)?>Numero documento: 
            <?php echo form_input($numerodocumento)?>
        </div>
        <b> Valoración Física</b>
        <table>
            <?php                                                         
                //BOCA
                $ObsDientes = array('name' => 'txtObsDientes','id' => 'txtObsDientes','value' => set_value('txtObsDientes'),"cols" => "22","rows" => "5");
                $ObsLengua = array('name' => 'txtObsLengua','id' => 'txtObsLengua','value' => set_value('txtObsLengua'),"cols" => "22","rows" => "5");
                //OJOS
                $ObsOjos = array('name' => 'txtObsOjos','id' => 'txtObsOjos','value' => set_value('txtObsOjos'),"cols" => "22","rows" => "5"); 
                //UÑAS
                $ObsUnas = array('name' => 'txtObsUnas','id' => 'txtObsUnas','value' => set_value('txtObsUnas'),"cols" => "22","rows" => "5");
                //OIDOS
                $ObsOidos = array('name' => 'txtObsOidos','id' => 'txtObsOidos','value' => set_value('txtObsOidos'),"cols" => "22","rows" => "5");                        
                //DIETA
                $otrosDieta = array('name' => 'txtotrosdieta','id' => 'txtotrosdieta','value' => set_value('txtotrosdieta'),"cols" => "22","rows" => "5");
                $tratamientoCual = array('name' => 'txttratamientocual','id' => 'txttratamientocual','value' => set_value('txttratamientocual'),"cols" => "22","rows" => "5");
            ?>
            <tbody>
                <tr>
                    <th>Boca</th>
                    <th>Ojos</th>
                </tr>
                <tr>
                    <th>
                        <table>
                            <tbody>
                                <tr>
                                    <td>Dientes:</td>
                                    <td>
                                        <select name="selectDientes" id="selectDientes">
                                            <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                            <option value="1" <?php echo set_select('myselect', '1'); ?> >Edéntulo Total</option>
                                            <option value="2" <?php echo set_select('myselect', '2'); ?> >Prótesis Total</option>
                                            <option value="3" <?php echo set_select('myselect', '3'); ?> >Prótesis Parcial</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Observación Dientes:</th>
                                    <td><?php echo form_textarea($ObsDientes)?></td>
                                </tr>
                                <tr>
                                    <th>Lengua:</th>
                                    <td>
                                        <select name="selectLengua" id="selectLengua">
                                            <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                            <option value="4" <?php echo set_select('myselect', '4'); ?> >Limpia</option>
                                            <option value="5" <?php echo set_select('myselect', '5'); ?> >Con sorbes</option>                                     
                                        </select>   
                                    </td>
                                </tr>
                                <tr>
                                    <th>Mucosa de Lengua:</th>
                                    <td>
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
                                    <th>Observación lengua</th>
                                    <td><?php echo form_textarea($ObsLengua)?></td>
                                </tr>
                            </tbody>
                        </table>
                    </th>
                    <th>
                        <table>
                            <tbody>
                                <tr>
                                    <th>Lesiones:</th>
                                    <td>
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
                                    <th>Observaciones:</th>
                                    <td><?php echo form_textarea($ObsOjos)?></td>
                                </tr>
                                <tr>
                                    <th>Lentes:</th>
                                    <td>
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
                    <th>Uñas</th>
                    <th> Oídos</th>
                </tr>
                <tr>
                    <th>
                        <table>
                            <tbody>
                                <tr>
                                    <td>Estado:</td>
                                    <td>
                                        <select name="selectestadounas" id="selectestadounas">
                                            <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                            <option value="17" <?php echo set_select('myselect', '17'); ?> >Secas</option>
                                            <option value="18" <?php echo set_select('myselect', '18'); ?> >Hongos</option>
                                            <option value="19" <?php echo set_select('myselect', '19'); ?> >Otro</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Observación:</th>
                                    <td><?php echo form_textarea($ObsUnas) ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </th>
                    <th>
                        <table>
                            <tbody>
                                <tr>
                                    <th>Estado:</th>
                                    <td>
                                        <select name="selectestadooidos" id="selectestadooidos">
                                            <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                            <option value="20" <?php echo set_select('myselect', '20'); ?> >Queratosis</option>
                                            <option value="21" <?php echo set_select('myselect', '21'); ?> >Resequedad</option>
                                            <option value="22" <?php echo set_select('myselect', '22'); ?> >Otro</option>
                                        </select>   
                                    </td>
                                </tr>
                                <tr>
                                    <th>Observación:</th>
                                    <td><?php echo form_textarea($ObsOidos)?></td>
                                </tr>
                            </tbody>
                        </table>
                    </th>
                </tr>
                <tr>
                    <th>Su dieta consiste en:</th>
                    <th>Tratamiento que recibe actualmente:</th>
                </tr>
                <tr>
                    <th>
                        <table>
                            <tbody>
                                <tr>
                                    <th>Frutas</th>
                                    <td><?php echo form_checkbox('chkfrutas', '23', FALSE); ?></td>
                                    <td>Pescado</td>
                                    <td><?php echo form_checkbox('chkpescado', '24', FALSE); ?></td>
                                </tr>
                                <tr>
                                    <th>Grasas</th>
                                    <td><?php echo form_checkbox('chkgrasas', '25', FALSE); ?></td>
                                    <td>Sólidos</td>
                                    <td><?php echo form_checkbox('chksolidos', '26', FALSE); ?></td>
                                </tr>
                                <tr>
                                    <th>Harinas</th>
                                    <td><?php echo form_checkbox('chkharinas', '27', FALSE); ?></td>
                                    <td>Vegetales</td>
                                    <td><?php echo form_checkbox('chkvegetales', '28', FALSE); ?></td>
                                </tr>
                                <tr>
                                    <th>Líquidos</th>
                                    <td><?php echo form_checkbox('chkliquidos', '29', FALSE); ?></td>
                                    <td>Carnes</td>
                                    <td><?php echo form_checkbox('chkcarnes', '30', FALSE); ?></td>
                                </tr>
                                <tr>
                                    <th>Otros <?php echo form_checkbox('chkotrosdieta', '31', FALSE); ?></th>
                                    <td><?php echo form_textarea($otrosDieta) ?></td>
                                </tr>
                                <tr>
                                    <th></th>
                                </tr>
                            </tbody>
                        </table>
                    </th>
                        <th>
                            <table>
                            <tbody>
                                <tr>
                                    <th>Médico</th>
                                    <td><?php echo form_checkbox('chkmedico', '32', FALSE); ?></td>
                                </tr>
                                <tr>
                                    <th>Bioenergico</th>
                                    <td><?php echo form_checkbox('chkbioenergico', '33', FALSE); ?></td>
                                </tr>
                                <tr>
                                    <th>Ninguno</th>
                                    <td><?php echo form_checkbox('chkningunoMedico', '34', FALSE); ?></td>
                                </tr>
                                <tr>
                                    <th>Intolera medicamentos</th>
                                    <td>
                                        <select name="selectintoleramedicamentos" id="selectintoleramedicamentos">
                                            <option value="seleccione" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                            <option value="35" <?php echo set_select('myselect', '35'); ?> >si</option>
                                            <option value="36" <?php echo set_select('myselect', '36'); ?> >no</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>¿Cual?</th>
                                    <td><?php echo form_textarea($tratamientoCual) ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </th>
                </tr>
                <tr>
                    <td>
                        <table>
                            <tbody>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
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
</div>
