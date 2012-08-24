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
                            echo form_open('ingresargeronte/capdatosgeronfim', $atributos);
                            echo form_submit('submit', 'Siguiente'); 
                          ?>
                        <div align="right"><?php echo form_hidden('txtidadmisiongerontefim',$idadmision)?></div>
                    <p><br /></p>
                    <b>Medición de la Independencia Funcional</b><br />
                    <table width="700" border="0" align="left">
                        <tbody>
                            <tr>
                                <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                <td colspan="3" style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                <th style="border-width: 0px; ">Independiente</th>
                                <th style="border-width: 0px; ">Parcialmente Independiente</th>
                                <th style="border-width: 0px; ">Dependencia Absoluta</th>
                            </tr>
                            <tr>
                                <th scope="row" style="border-width: 0px; ">Autocuidado:</th>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <td width="230" scope="row" align="left" style="border-width: 0px; ">Alimentación:</td>
                                <td width="92" align="center" style="border-width: 0px; "><?php echo form_radio('radioautocuidadoalimentacion', '58', TRUE); ?>
                                    <label for="radio"></label>
                                </td>
                                <td width="200" align="center" style="border-width: 0px; "><?php echo form_radio('radioautocuidadoalimentacion', '59', FALSE); ?></td>
                                <td width="160" align="center" style="border-width: 0px; "><?php echo form_radio('radioautocuidadoalimentacion', '60', FALSE); ?></td>
                            </tr>
                            <tr>
                                <td scope="row" align="left" style="border-width: 0px; ">Apariencia personal:</td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radioautocuidadoapariencia', '61', TRUE); ?></td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radioautocuidadoapariencia', '62', FALSE); ?></td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radioautocuidadoapariencia', '63', FALSE); ?></td>
                            </tr>
                            <tr>
                                <td scope="row" align="left" style="border-width: 0px; ">Baño:</td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radioautocuidadobano', '64', TRUE); ?></td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radioautocuidadobano', '65', FALSE); ?></td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radioautocuidadobano', '66', FALSE); ?></td>
                            </tr>
                            <tr>
                                <td scope="row" align="left" style="border-width: 0px; ">Vestido parte superior del cuerpo:</td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radioautocuidadovestidosuperior', '67', TRUE); ?></td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radioautocuidadovestidosuperior', '68', FALSE); ?></td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radioautocuidadovestidosuperior', '69', FALSE); ?></td>
                            </tr>
                            <tr>
                                <td scope="row" align="left" style="border-width: 0px; ">Vestido parte inferior del cuerpo:</td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radioautocuidadovestidoinferior', '70', TRUE); ?></td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radioautocuidadovestidoinferior', '71', FALSE); ?></td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radioautocuidadovestidoinferior', '72', FALSE); ?></td>
                            </tr>
                            <tr>
                                <td scope="row" align="left" style="border-width: 0px; ">Aseo general:</td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radioautocuidadoaseo', '73', TRUE); ?></td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radioautocuidadoaseo', '74', FALSE); ?></td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radioautocuidadoaseo', '75', FALSE); ?></td>
                            </tr>
                            <tr>
                                <th colspan="4" scope="row" style="border-width: 0px; ">&nbsp;</th>
                            </tr>
                            <tr>
                                <th scope="row" style="border-width: 0px; "><strong>Control de esfinteres: </strong></th>
                                <td colspan="3" style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <td scope="row" align="left" style="border-width: 0px; ">Manejo de la vejiga:</td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radioesfinteresvejiga', '76', TRUE); ?></td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radioesfinteresvejiga', '77', FALSE); ?></td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radioesfinteresvejiga', '78', FALSE); ?></td>
                            </tr>
                            <tr>
                                <td scope="row" align="left" style="border-width: 0px; ">Manejo del intestino:</td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radioesfinteresintestino', '79', TRUE); ?></td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radioesfinteresintestino', '80', FALSE); ?></td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radioesfinteresintestino', '81', FALSE); ?></td>
                            </tr>
                            <tr>
                                <th scope="row" style="border-width: 0px; ">&nbsp;</th>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th scope="row" style="border-width: 0px; ">Movilidad - Desplazamiento:</th>
                                <td colspan="3" style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <td scope="row" align="left" style="border-width: 0px; ">Cama, silla, silla - ruedas:</td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radiomovilidadcama', '82', TRUE); ?></td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radiomovilidadcama', '83', FALSE); ?></td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radiomovilidadcama', '84', FALSE); ?></td>
                            </tr>
                            <tr>
                                <td scope="row" align="left" style="border-width: 0px; ">Sanitario:</td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radiomovilidadsanitario', '85', TRUE); ?></td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radiomovilidadsanitario', '86', FALSE); ?></td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radiomovilidadsanitario', '87', FALSE); ?></td>
                            </tr>
                            <tr>
                                <td scope="row" align="left" style="border-width: 0px; ">Tina - Ducha:</td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radiomovilidadtina', '88', TRUE); ?></td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radiomovilidadtina', '89', FALSE); ?></td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radiomovilidadtina', '90', FALSE); ?></td>
                            </tr>
                            <tr>
                                <th colspan="4" scope="row" style="border-width: 0px; ">&nbsp;</th>
                            </tr>
                            <tr>
                                <th scope="row" style="border-width: 0px; "><strong>Locomoción:</strong></th>
                                <td colspan="3" style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <td scope="row" align="left" style="border-width: 0px; ">Camina - Silla de ruedas:</td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radiolocomocioncamina', '91', TRUE); ?></td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radiolocomocioncamina', '92', FALSE); ?></td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radiolocomocioncamina', '93', FALSE); ?></td>
                            </tr>
                            <tr>
                                <td scope="row" align="left" style="border-width: 0px; ">Escaleras (rampas):</td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radiolocomocionescaleras', '94', TRUE); ?></td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radiolocomocionescaleras', '95', FALSE); ?></td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radiolocomocionescaleras', '96', FALSE); ?></td>
                            </tr>
                            <tr>
                                <th colspan="4" scope="row" style="border-width: 0px; ">&nbsp;</th>
                            </tr>
                            <tr>
                                <th scope="row" style="border-width: 0px; "><strong>Comunicación:</strong></th>
                                <td colspan="3" style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <td scope="row" align="left" style="border-width: 0px; ">Comprensión:</td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radiocomunicacioncompresion', '97', TRUE); ?></td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radiocomunicacioncompresion', '98', FALSE); ?></td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radiocomunicacioncompresion', '99', FALSE); ?></td>
                            </tr>
                            <tr>
                                <td scope="row" align="left" style="border-width: 0px; ">Expresión:</td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radiocomunicacionexpresion', '100', TRUE); ?></td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radiocomunicacionexpresion', '101', FALSE); ?></td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radiocomunicacionexpresion', '102', FALSE); ?></td>
                            </tr>
                            <tr>
                                <th colspan="4" scope="row" style="border-width: 0px; ">&nbsp;</th>
                            </tr>
                            <tr>
                                <th scope="row" style="border-width: 0px; "><strong>Condición social:</strong></th>
                                <td colspan="3" style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <td scope="row" align="left" style="border-width: 0px; ">Interacción social:</td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radiocondicionsocial', '103', TRUE); ?></td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radiocondicionsocial', '104', FALSE); ?></td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radiocondicionsocial', '105', FALSE); ?></td>
                            </tr>
                            <tr>
                                <td scope="row" align="left" style="border-width: 0px; ">Memoria:</td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radiocondicionmemoria', '106', TRUE); ?></td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radiocondicionmemoria', '107', FALSE); ?></td>
                                <td align="center" style="border-width: 0px; "><?php echo form_radio('radiocondicionmemoria', '108', FALSE); ?></td>
                            </tr>
                        </tbody>
                        <?php echo form_close(); ?>
                    </table>
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
