<div>
    <div>
        <?php 
            $atributos = array('id' => 'fim_form', 'class' => 'form_fim');
            echo form_open('ingresargeronte/capdatosgeronfim', $atributos);
            echo form_submit('submit', 'Siguiente'); 
        ?>
        <div><?php echo form_hidden('txtidadmisiongerontefim',$idadmision)?></div>
        <b>Medición de la Independencia Funcional</b>
        <table>
            <tbody>
                <tr>
                    <th>&nbsp;</th>
                    <th>Independiente</th>
                    <th>Parcialmente Independiente</th>
                    <th>Dependencia Absoluta</th>
                </tr>
                <tr>
                    <th>Autocuidado:</th>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Alimentación:</td>
                    <td><?php echo form_radio('radioautocuidadoalimentacion', '58', TRUE); ?>
                        <label for="radio"></label>
                    </td>
                    <td><?php echo form_radio('radioautocuidadoalimentacion', '59', FALSE); ?></td>
                    <td><?php echo form_radio('radioautocuidadoalimentacion', '60', FALSE); ?></td>
                </tr>
                <tr>
                    <td>Apariencia personal:</td>
                    <td><?php echo form_radio('radioautocuidadoapariencia', '61', TRUE); ?></td>
                    <td><?php echo form_radio('radioautocuidadoapariencia', '62', FALSE); ?></td>
                    <td><?php echo form_radio('radioautocuidadoapariencia', '63', FALSE); ?></td>
                </tr>
                <tr>
                    <td>Baño:</td>
                    <td><?php echo form_radio('radioautocuidadobano', '64', TRUE); ?></td>
                    <td><?php echo form_radio('radioautocuidadobano', '65', FALSE); ?></td>
                    <td><?php echo form_radio('radioautocuidadobano', '66', FALSE); ?></td>
                </tr>
                <tr>
                    <td>Vestido parte superior del cuerpo:</td>
                    <td><?php echo form_radio('radioautocuidadovestidosuperior', '67', TRUE); ?></td>
                    <td><?php echo form_radio('radioautocuidadovestidosuperior', '68', FALSE); ?></td>
                    <td><?php echo form_radio('radioautocuidadovestidosuperior', '69', FALSE); ?></td>
                </tr>
                <tr>
                    <td>Vestido parte inferior del cuerpo:</td>
                    <td><?php echo form_radio('radioautocuidadovestidoinferior', '70', TRUE); ?></td>
                    <td><?php echo form_radio('radioautocuidadovestidoinferior', '71', FALSE); ?></td>
                    <td><?php echo form_radio('radioautocuidadovestidoinferior', '72', FALSE); ?></td>
                </tr>
                <tr>
                    <td>Aseo general:</td>
                    <td><?php echo form_radio('radioautocuidadoaseo', '73', TRUE); ?></td>
                    <td><?php echo form_radio('radioautocuidadoaseo', '74', FALSE); ?></td>
                    <td><?php echo form_radio('radioautocuidadoaseo', '75', FALSE); ?></td>
                </tr>
                <tr>
                    <th><strong>Control de esfinteres: </strong></th>
                    <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Manejo de la vejiga:</td>
                    <td><?php echo form_radio('radioesfinteresvejiga', '76', TRUE); ?></td>
                    <td><?php echo form_radio('radioesfinteresvejiga', '77', FALSE); ?></td>
                    <td><?php echo form_radio('radioesfinteresvejiga', '78', FALSE); ?></td>
                </tr>
                <tr>
                    <td>Manejo del intestino:</td>
                    <td><?php echo form_radio('radioesfinteresintestino', '79', TRUE); ?></td>
                    <td><?php echo form_radio('radioesfinteresintestino', '80', FALSE); ?></td>
                    <td><?php echo form_radio('radioesfinteresintestino', '81', FALSE); ?></td>
                </tr>
                <tr>
                    <th>Movilidad - Desplazamiento:</th>
                    <td>&nbsp;</td>
                </tr>
                 <tr>
                    <td>Cama, silla, silla - ruedas:</td>
                    <td><?php echo form_radio('radiomovilidadcama', '82', TRUE); ?></td>
                    <td><?php echo form_radio('radiomovilidadcama', '83', FALSE); ?></td>
                    <td><?php echo form_radio('radiomovilidadcama', '84', FALSE); ?></td>
                </tr>
                <tr>
                    <td>Sanitario:</td>
                    <td><?php echo form_radio('radiomovilidadsanitario', '85', TRUE); ?></td>
                    <td><?php echo form_radio('radiomovilidadsanitario', '86', FALSE); ?></td>
                    <td><?php echo form_radio('radiomovilidadsanitario', '87', FALSE); ?></td>
                </tr>
                <tr>
                    <td>Tina - Ducha:</td>
                    <td><?php echo form_radio('radiomovilidadtina', '88', TRUE); ?></td>
                    <td><?php echo form_radio('radiomovilidadtina', '89', FALSE); ?></td>
                    <td><?php echo form_radio('radiomovilidadtina', '90', FALSE); ?></td>
                </tr>
                <tr>
                    <th><strong>Locomoción:</strong></th>
                    <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Camina - Silla de ruedas:</td>
                    <td><?php echo form_radio('radiolocomocioncamina', '91', TRUE); ?></td>
                    <td><?php echo form_radio('radiolocomocioncamina', '92', FALSE); ?></td>
                    <td><?php echo form_radio('radiolocomocioncamina', '93', FALSE); ?></td>
                </tr>
                 <tr>
                    <td>Escaleras (rampas):</td>
                    <td><?php echo form_radio('radiolocomocionescaleras', '94', TRUE); ?></td>
                    <td><?php echo form_radio('radiolocomocionescaleras', '95', FALSE); ?></td>
                    <td><?php echo form_radio('radiolocomocionescaleras', '96', FALSE); ?></td>
                </tr>
                <tr>
                    <th scope="row" style="border-width: 0px; "><strong>Comunicación:</strong></th>
                    <td colspan="3" style="border-width: 0px; ">&nbsp;</td>
                </tr>
                <tr>
                    <td>Comprensión:</td>
                    <td><?php echo form_radio('radiocomunicacioncompresion', '97', TRUE); ?></td>
                    <td><?php echo form_radio('radiocomunicacioncompresion', '98', FALSE); ?></td>
                    <td><?php echo form_radio('radiocomunicacioncompresion', '99', FALSE); ?></td>
                </tr>
                <tr>
                    <td>Expresión:</td>
                    <td><?php echo form_radio('radiocomunicacionexpresion', '100', TRUE); ?></td>
                    <td><?php echo form_radio('radiocomunicacionexpresion', '101', FALSE); ?></td>
                    <td><?php echo form_radio('radiocomunicacionexpresion', '102', FALSE); ?></td>
                </tr>
                <tr>
                    <th><strong>Condición social:</strong></th>
                    <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>Interacción social:</td>
                    <td><?php echo form_radio('radiocondicionsocial', '103', TRUE); ?></td>
                    <td><?php echo form_radio('radiocondicionsocial', '104', FALSE); ?></td>
                    <td><?php echo form_radio('radiocondicionsocial', '105', FALSE); ?></td>
                </tr>
                <tr>
                    <td>Memoria:</td>
                    <td><?php echo form_radio('radiocondicionmemoria', '106', TRUE); ?></td>
                    <td><?php echo form_radio('radiocondicionmemoria', '107', FALSE); ?></td>
                    <td><?php echo form_radio('radiocondicionmemoria', '108', FALSE); ?></td>
                </tr>
            </tbody>
            <?php echo form_close(); ?>
        </table>
    </div>
</div>
