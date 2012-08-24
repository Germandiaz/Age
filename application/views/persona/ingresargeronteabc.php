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
                        echo form_open('ingresargeronte/capdatosgeronabc', $atributos);
                        echo form_submit('submit', 'Siguiente');
                        ?>
                         <div align="right"><?php echo form_hidden('txtidadmisiongeronteabc',$idadmision)?></div>
                    <p><br /></p>
                    <p><b>Actividades Basicas Cotidianas </b></p>
                    <table width="700" border="0">
                        <?php
                        $otrasayudasabc = array(
                            'name' => 'txtotrosayudas',
                            'id' => 'txtotrosayudas',
                            'value' => set_value('txtotrosayudas')
                        );
                        ?>
                        <tbody>
                            <tr>
                                <th colspan="8" scope="row" style="border-width: 0px; ">Actividades Básicas Cotidianas (ABC) Instrumental</th>
                            </tr>
                            <tr>
                                <td colspan="2" align="left" scope="row" style="border-width: 0px; ">Uso del telefono:</td>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_checkbox('chktelefonoactividadesbasicas', '109', FALSE); ?></td>
                                <td colspan="2" align="left" style="border-width: 0px; ">Abrir paquetes</td>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_checkbox('chkabrirpaquetesactividadesbasicas', '110', FALSE); ?></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="left" scope="row" style="border-width: 0px; ">Cortarse las uñas:</td>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_checkbox('chkcortarunasactividadesbasicas', '111', FALSE); ?></td>
                                <td colspan="2" align="left" style="border-width: 0px; ">Usar radio y televisión</td>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_checkbox('chkusarradioteleactividadesbasicas', '112', FALSE); ?></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="left" scope="row" style="border-width: 0px; ">Preparar alimentos:</td>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_checkbox('chkprepararalimentosactividadesbasicas', '113', FALSE); ?></td>
                                <td colspan="2" align="left" style="border-width: 0px; ">Tomar su propio medicamento </td>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_checkbox('chktomarmedicamentoactividadesbasicas', '114', FALSE); ?></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="left" scope="row" style="border-width: 0px; ">Hacer trabajo pesado en el hogar: </td>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_checkbox('chktrabajopesadoactividadesbasicas', '115', FALSE); ?></td>
                                <td colspan="2" align="left" style="border-width: 0px; ">Manejo de interruptores</td>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_checkbox('chkmanejointerruptoresactividadesbasicas', '116', FALSE); ?></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="left" scope="row" style="border-width: 0px; ">Hacer trabajo liviano en el hogar:</td>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_checkbox('chktrabajolivianoactividadesbasicas', '117', FALSE); ?></td>
                                <td colspan="2" align="left" style="border-width: 0px; ">Manejo de grifos</td>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_checkbox('chkmanejogrifosactividadesbasicas', '118', FALSE); ?></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="left" scope="row" style="border-width: 0px; ">Salir del hogar:</td>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_checkbox('chksaliractividadesbasicas', '119', FALSE); ?></td>
                                <td colspan="2" align="left" style="border-width: 0px; ">Encender cerillas</td>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_checkbox('chkencendercerillasactividadesbasicas', '120', FALSE); ?></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="left" scope="row" style="border-width: 0px; ">Manejo de llaves:</td>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_checkbox('chkmanejollavesactividadesbasicas', '121', FALSE); ?></td>
                                <td colspan="2" align="left" style="border-width: 0px; ">Lavarse los dientes</td>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_checkbox('chklavardientesactividadesbasicas', '122', FALSE); ?></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="left" scope="row" style="border-width: 0px; ">Manejo de picaportes:</td>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_checkbox('chkmanejopicaportesactividadesbasicas', '123', FALSE); ?></td>
                                <td colspan="2" align="left" style="border-width: 0px; ">Manejo del Dinero Propio</td>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_checkbox('chkmanejodineroactividadesbasicas', '124', FALSE); ?></td>
                            </tr>
                            <tr>
                                <th colspan="8" scope="row" style="border-width: 0px; ">&nbsp;</th>
                            </tr>
                            <tr>
                                <th colspan="8" scope="row" style="border-width: 0px; ">Actividades Básicas Cotidianas (ABC) Avanzadas</th>
                            </tr>
                            <tr>
                                <th colspan="2" scope="row" style="border-width: 0px; ">&nbsp;</th>
                                <td colspan="2" style="border-width: 0px; ">Sin asistencia</td>
                                <td colspan="2" style="border-width: 0px; ">Parcial</td>
                                <td colspan="2" style="border-width: 0px; ">Total</td>
                            </tr>
                            <tr>
                                <td colspan="2" align="left" scope="row" style="border-width: 0px; ">Utiliza Transporte Publico: </td>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_radio('radiotransporteactividadesavanzadas', '125', TRUE); ?>
                                    <label for="radio"></label>
                                </td>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_radio('radiotransporteactividadesavanzadas', '126', FALSE); ?></td>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_radio('radiotransporteactividadesavanzadas', '127', FALSE); ?></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="left" scope="row" style="border-width: 0px; ">Va a servicios religiosos: </td>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_radio('radioreligiososactividadesavanzadas', '128', TRUE); ?></td>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_radio('radioreligiososactividadesavanzadas', '129', FALSE); ?></td>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_radio('radioreligiososactividadesavanzadas', '130', FALSE); ?></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="left" scope="row" style="border-width: 0px; ">Hace visitas: </td>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_radio('radiohacevisitasactividadesavanzadas', '131', TRUE); ?></td>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_radio('radiohacevisitasactividadesavanzadas', '132', FALSE); ?></td>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_radio('radiohacevisitasactividadesavanzadas', '133', FALSE); ?></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="left" scope="row" style="border-width: 0px; ">Recibe visitas: </td>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_radio('radiorecibevisitasactividadesavanzadas', '134', TRUE); ?></td>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_radio('radiorecibevisitasactividadesavanzadas', '135', FALSE); ?></td>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_radio('radiorecibevisitasactividadesavanzadas', '136', FALSE); ?></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="left" scope="row" style="border-width: 0px; ">Va a fiestas familiares:</td>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_radio('radiofiestasactividadesavanzadas', '137', TRUE); ?></td>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_radio('radiofiestasactividadesavanzadas', '138', FALSE); ?></td>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_radio('radiofiestasactividadesavanzadas', '139', FALSE); ?></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="left" scope="row" style="border-width: 0px; ">Participa en organizaciones sociales:</td>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_radio('radioorganizacionessocialesactividadesavanzadas', '140', TRUE); ?></td>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_radio('radioorganizacionessocialesactividadesavanzadas', '141', FALSE); ?></td>
                                <td colspan="2" style="border-width: 0px; "><?php echo form_radio('radioorganizacionessocialesactividadesavanzadas', '142', FALSE); ?></td>
                            </tr>
                            <tr>
                                <th colspan="8" scope="row" style="border-width: 0px; ">Ayudas Ortopédicas: </th>
                            </tr>
                            <tr>
                                <th colspan="8" scope="row" style="border-width: 0px; ">&nbsp;</th>
                            </tr>
                            <tr>
                                <td width="118" scope="row" style="border-width: 0px; ">Ninguno:</td>
                                <th width="101" scope="row" style="border-width: 0px; "><?php echo form_checkbox('chkningunoayudasortopedicas', '143', FALSE); ?></th>
                                <td width="85" style="border-width: 0px; ">Muletas</td>
                                <td width="20" style="border-width: 0px; "><?php echo form_checkbox('chkmuletasayudasortopedicas', '144', FALSE); ?></td>
                                <td width="136" style="border-width: 0px; ">Gafas</td>
                                <td width="65" style="border-width: 0px; "><?php echo form_checkbox('chkgafasayudasortopedicas', '145', FALSE); ?></td>
                                <td width="84" style="border-width: 0px; ">Protesis</td>
                                <td width="57" style="border-width: 0px; "><?php echo form_checkbox('chkprotesisayudasortopedicas', '146', FALSE); ?></td>
                            </tr>
                            <tr>
                                <td scope="row" style="border-width: 0px; ">Silla de ruedas: </td>
                                <th scope="row" style="border-width: 0px; "><?php echo form_checkbox('chksillaruedasayudasortopedicas', '147', FALSE); ?></th>
                                <td style="border-width: 0px; ">Bastón</td>
                                <td style="border-width: 0px; "><?php echo form_checkbox('chkbastonayudasortopedicas', '148', FALSE); ?></td>
                                <td style="border-width: 0px; ">Audifonos</td>
                                <td style="border-width: 0px; "><?php echo form_checkbox('chkaudifonosayudasortopedicas', '149', FALSE); ?></td>
                                <td style="border-width: 0px; ">Caminador</td>
                                <td style="border-width: 0px; "><?php echo form_checkbox('chkcaminadorayudasortopedicas', '150', FALSE); ?></td>
                            </tr>
                            <tr>
                                <td colspan="2" scope="row" style="border-width: 0px; ">Otros:</td>
                                <td colspan="6" style="border-width: 0px; "><? echo form_input($otrasayudasabc);?></td>
                            </tr>
                            <tr>
                                <th colspan="2" scope="row" style="border-width: 0px; ">&nbsp;</th>
                                <td colspan="2" style="border-width: 0px; ">&nbsp;</td>
                                <td colspan="2" style="border-width: 0px; ">&nbsp;</td>
                                <td colspan="2" style="border-width: 0px; ">&nbsp;</td>
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
