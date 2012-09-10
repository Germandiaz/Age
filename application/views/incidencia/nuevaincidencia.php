<div>
    <?php $atributos = array('id' => 'loguin_form', 'class' => 'form_loguin');
        echo form_open('nuevaIncidencia/mos', $atributos);
    ?>
    <p><?php echo form_submit('submit', 'Guardar'); ?></p>
    <table>
        <?php
            $nompaciente = array('name' => 'txtNombrePaciente','id' => 'txtNombrePaciente','value' => set_value('txtNombrePaciente'));
            $diagnostico = array('name' => 'txtDiagnostico','id' => 'txtDiagnostico','value' => set_value('txtDiagnostico'));
            $fechaelab = array('name' => 'lblFechaElab','id' => 'lblFechaElab','value' => set_value('lblFechaElab'));
            $nombreres = array('name' => 'lblNombreRes','id' => 'lblNombreRes','value' => set_value('lblNombreRes'));
            $numincidencia = array('name' => 'lblNumIncidencia','id' => 'lblNumIncidencia','value' => set_value('lblNumIncidencia'));
            $ddlmedinc = array('si'  => 'Si','no' => 'No','seleccionar'   => 'Seleccionar',);
        ?>
        <tbody>
            <tr>
                <th colspan="10" scope="row" style="border-width: 0px; ">Ingresar Incidencias </th>
            </tr>
            <tr>
                <th>Nombre Paciente:</th>
                <td><?php echo $this->session->userdata('nombre');  ?><? echo form_input($nomPaciente); ?></td>
                <th colspan="2">Fecha Elaboración:</th>
                <td colspan="2">&nbsp;</td>
                <td><? echo form_label('02/04/2011'); ?></td>
                <td><? echo form_label('08:00'); ?></td>
            </tr>
            <tr>
                <th>Nombre Responsable:</th>
                <td><? echo form_label('Jesse Javier Cogollo'); ?></td>
                <th colspan="2">Numero Incidencia:</th>
                <td colspan="2">&nbsp;</td>
                <td>124</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <th>Medicamentos:</th>
                <td>
                    <label for="select"></label>
                    <select name="selectmedicamentos" id="selectmedicamentos">
                        <option value="1" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                        <option value="2" <?php echo set_select('myselect', 'Si'); ?> >Si</option>
                        <option value="3" <?php echo set_select('myselect', 'No'); ?> >No</option>
                    </select>
                </td>
                <td colspan="2">&nbsp;</td>
                <td colspan="2">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <th colspan="10">Incidencia</th>
            </tr>
            <tr>
                <th><a href="buscarvaloracionincidencia.html">Agregar</a></th>
                <th><a href="">Eliminar</a></th>
                <td colspan="2">&nbsp;</td>
                <td colspan="2"></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <th>&nbsp;</th>
                <th>Descripción</th>
                <th colspan="2">Resultado</th>
                <th colspan="4">Observación</th>
            </tr>
            <tr>
                <th><input type="checkbox" name="checkboxeliminarnuevaincidencia" id="checkbox"></input>
                    <label for="checkbox"></label>
                </th>
                <td>Pulsaciones:</td>
                <td colspan="2">120/90</td>
                <td colspan="4">muy bien</td>
            </tr>
            <tr>
                <th><input type="checkbox" name="checkboxeliminarnuevaincidencia" id="checkbox2"></input></th>
                <td>Temperatura:</td>
                <td colspan="2">28 °C</td>
                <td colspan="4">Un poco de fiebre</td>
            </tr>
            <tr>
                <th><input type="checkbox" name="checkboxeliminarnuevaincidencia" id="checkbox3"></input></th>
                <td>Exonera:</td>
                <td colspan="2">si</td>
                <td colspan="4">normalmente</td>
            </tr>
            <tr>
                <th><input type="checkbox" name="checkboxeliminarnuevaincidencia" id="checkbox4"></input></th>
                <td>Como pasa el día:</td>
                <td colspan="2">Regular</td>
                <td colspan="4">Un poco de fiebre</td>
            </tr>
            <tr>
                <th><input type="checkbox" name="checkboxeliminarnuevaincidencia" id="checkbox5"></input></th>
                <td>alimentación</td>
                <td colspan="2">Desayuno</td>
                <td colspan="4">Desayuno normalmente</td>
            </tr>
            <tr>
                <th><input type="checkbox" name="checkboxeliminarnuevaincidencia" id="checkbox6"></input></th>
                <td>Acetaminofen</td>
                <td colspan="2">1</td>
                <td colspan="4">se tomo una tableta</td>
            </tr>
            <tr>
                <th>Diagnostico:</th>
                <td colspan="9"><? echo form_input($diagnostico); ?></td>
            </tr>
        </tbody>
    </table>
</div>