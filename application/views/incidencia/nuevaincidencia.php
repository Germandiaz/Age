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
                   <?php $atributos = array('id' => 'loguin_form', 'class' => 'form_loguin');
                        echo form_open('nuevaIncidencia/mos', $atributos); ?>
                    <p><?php echo form_submit('submit', 'Guardar'); ?></p>
                    <p><br /></p>
                    <table width="700" border="0">
                        <?php
                        
                        $nompaciente = array(
                            'name' => 'txtNombrePaciente',
                            'id' => 'txtNombrePaciente',
                            'value' => set_value('txtNombrePaciente')
                        );
                        $diagnostico = array(
                            'name' => 'txtDiagnostico',
                            'id' => 'txtDiagnostico',
                            'value' => set_value('txtDiagnostico')
                        );
                        $fechaelab = array(
                            'name' => 'lblFechaElab',
                            'id' => 'lblFechaElab',
                            'value' => set_value('lblFechaElab')
                        );
                        $nombreres = array(
                            'name' => 'lblNombreRes',
                            'id' => 'lblNombreRes',
                            'value' => set_value('lblNombreRes')
                        );
                        $numincidencia = array(
                            'name' => 'lblNumIncidencia',
                            'id' => 'lblNumIncidencia',
                            'value' => set_value('lblNumIncidencia')
                        );
                        $ddlmedinc = array(
                   			'si'  => 'Si',
                   			'no'    => 'No',
                   			'seleccionar'   => 'Seleccionar',
                 );
 
                        ?>
                        <tbody>
                            <tr>
                                <th colspan="10" scope="row" style="border-width: 0px; ">Ingresar Incidencias </th>
                            </tr>
                            <tr>
                                <th scope="row" align="left" style="border-width: 0px; ">Nombre Paciente:</th>
                                <td align="left" style="border-width: 0px; "><?php echo $this->session->userdata('nombre');  ?><? echo form_input($nomPaciente); ?></td>
                                <th colspan="2" align="left" style="border-width: 0px; ">Fecha Elaboración:</th>
                                <td colspan="2" style="border-width: 0px; ">&nbsp;</td>
                                <td align="left" style="border-width: 0px; "><? echo form_label('02/04/2011'); ?></td>
                                <td style="border-width: 0px; "><? echo form_label('08:00'); ?></td>
                            </tr>
                            <tr>
                                <th scope="row" align="left" style="border-width: 0px; ">Nombre Responsable:</th>
                                <td align="left" style="border-width: 0px; "><? echo form_label('Jesse Javier Cogollo'); ?></td>
                                <th colspan="2" align="left" style="border-width: 0px; ">Numero Incidencia:</th>
                                <td colspan="2" style="border-width: 0px; ">&nbsp;</td>
                                <td align="left" style="border-width: 0px; ">124</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th align="left" scope="row" style="border-width: 0px; ">Medicamentos:</th>
                                <td style="border-width: 0px; ">
                                    <label for="select"></label>
                                    <select name="selectmedicamentos" id="selectmedicamentos">
                                        <option value="1" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                        <option value="2" <?php echo set_select('myselect', 'Si'); ?> >Si</option>
                                        <option value="3" <?php echo set_select('myselect', 'No'); ?> >No</option>
                                    </select>
                                </td>
                                <td colspan="2" style="border-width: 0px; ">&nbsp;</td>
                                <td colspan="2" style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th colspan="10" scope="row" style="border-width: 0px; ">Incidencia</th>
                            </tr>
                            <tr>
                                <th width="150" scope="row" style="border-width: 0px; "><a href="buscarvaloracionincidencia.html"><font color="#0000FF">Agregar</font></a></th>
                                <th style="border-width: 0px; "><a href=""><font color="#0000FF">Eliminar</font></a></th>
                                <td colspan="2" style="border-width: 0px; ">&nbsp;</td>
                                <td colspan="2" style="border-width: 0px; ">
                                    <p>&nbsp;</p>
                                </td>
                                <td width="118" style="border-width: 0px; ">&nbsp;</td>
                                <td width="63" style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                <th align="center" style="border-width: 0px; ">Descripción</th>
                                <th colspan="2" align="center" style="border-width: 0px; ">Resultado</th>
                                <th colspan="4" align="center" style="border-width: 0px; ">Observación</th>
                            </tr>
                            <tr>
                                <th scope="row" style="border-width: 0px; "><input type="checkbox" name="checkboxeliminarnuevaincidencia" id="checkbox"></input>
                                    <label for="checkbox"></label>
                                </th>
                                <td align="left" style="border-width: 0px; ">Pulsaciones:</td>
                                <td colspan="2" align="left" style="border-width: 0px; ">120/90</td>
                                <td colspan="4" style="border-width: 0px; ">muy bien</td>
                            </tr>
                            <tr>
                                <th scope="row" style="border-width: 0px; "><input type="checkbox" name="checkboxeliminarnuevaincidencia" id="checkbox2"></input></th>
                                <td align="left" style="border-width: 0px; ">Temperatura:</td>
                                <td colspan="2" align="left" style="border-width: 0px; ">28 °C</td>
                                <td colspan="4" style="border-width: 0px; ">Un poco de fiebre</td>
                            </tr>
                            <tr>
                                <th scope="row" style="border-width: 0px; "><input type="checkbox" name="checkboxeliminarnuevaincidencia" id="checkbox3"></input></th>
                                <td style="border-width: 0px; ">Exonera:</td>
                                <td colspan="2" align="left" style="border-width: 0px; ">si</td>
                                <td colspan="4" style="border-width: 0px; ">normalmente</td>
                            </tr>
                            <tr>
                                <th scope="row" style="border-width: 0px; "><input type="checkbox" name="checkboxeliminarnuevaincidencia" id="checkbox4"></input></th>
                                <td style="border-width: 0px; ">Como pasa el día:</td>
                                <td colspan="2" style="border-width: 0px; ">Regular</td>
                                <td colspan="4" style="border-width: 0px; ">Un poco de fiebre</td>
                            </tr>
                            <tr>
                                <th scope="row" style="border-width: 0px; "><input type="checkbox" name="checkboxeliminarnuevaincidencia" id="checkbox5"></input></th>
                                <td style="border-width: 0px; ">alimentación</td>
                                <td colspan="2" style="border-width: 0px; ">Desayuno</td>
                                <td colspan="4" style="border-width: 0px; ">Desayuno normalmente</td>
                            </tr>
                            <tr>
                                <th scope="row" style="border-width: 0px; "><input type="checkbox" name="checkboxeliminarnuevaincidencia" id="checkbox6"></input></th>
                                <td style="border-width: 0px; ">Acetaminofen</td>
                                <td colspan="2" style="border-width: 0px; ">1</td>
                                <td colspan="4" style="border-width: 0px; ">se tomo una tableta</td>
                            </tr>
                            <tr>
                                <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                <td style="border-width: 0px; ">_</td>
                                <td colspan="2" style="border-width: 0px; ">_</td>
                                <td colspan="4" style="border-width: 0px; ">_</td>
                            </tr>
                            <tr>
                                <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td colspan="2" style="border-width: 0px; ">&nbsp;</td>
                                <td colspan="4" style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th scope="row" style="border-width: 0px; ">Diagnostico:</th>
                                <td colspan="9" style="border-width: 0px; "><? echo form_input($diagnostico); ?></td>
                            </tr>
                            <tr>
                                <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td colspan="2" style="border-width: 0px; ">&nbsp;</td>
                                <td colspan="4" style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th colspan="10" scope="row" style="border-width: 0px; ">&nbsp;</th>
                            </tr>
                        </tbody>
                    </table>
                    <p><br /></p>
                    <p>&nbsp;</p>
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