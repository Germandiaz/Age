<div>
    <?php 
        $atributos = array('id' => 'fim_form', 'class' => 'form_fim');
        echo form_open('ingresargeronte/capdatosgeronabc', $atributos);
        echo form_submit('submit', 'Siguiente');
    ?>
    <div><?php echo form_hidden('txtidadmisiongeronteabc',$idadmision)?></div>
    <p><b>Actividades Basicas Cotidianas </b></p>
    <table>
        <?php
            $otrasayudasabc = array('name' => 'txtotrosayudas','id' => 'txtotrosayudas','value' => set_value('txtotrosayudas'));                       
        ?>
        <tbody>
            <tr>
                <th colspan="8">Actividades Básicas Cotidianas (ABC) Instrumental</th>
            </tr>
            <tr>
                <td colspan="2">Uso del telefono:</td>
                <td colspan="2"><?php echo form_checkbox('chktelefonoactividadesbasicas', '109', FALSE); ?></td>
                <td colspan="2">Abrir paquetes</td>
                <td colspan="2"><?php echo form_checkbox('chkabrirpaquetesactividadesbasicas', '110', FALSE); ?></td>
            </tr>
            <tr>
                <td colspan="2">Cortarse las uñas:</td>
                <td colspan="2"><?php echo form_checkbox('chkcortarunasactividadesbasicas', '111', FALSE); ?></td>
                <td colspan="2">Usar radio y televisión</td>
                <td colspan="2"><?php echo form_checkbox('chkusarradioteleactividadesbasicas', '112', FALSE); ?></td>
            </tr>
            <tr>
                <td colspan="2">Preparar alimentos:</td>
                <td colspan="2"><?php echo form_checkbox('chkprepararalimentosactividadesbasicas', '113', FALSE); ?></td>
                <td colspan="2">Tomar su propio medicamento </td>
                <td colspan="2"><?php echo form_checkbox('chktomarmedicamentoactividadesbasicas', '114', FALSE); ?></td>
            </tr>
            <tr>
                <td colspan="2">Hacer trabajo pesado en el hogar: </td>
                <td colspan="2"><?php echo form_checkbox('chktrabajopesadoactividadesbasicas', '115', FALSE); ?></td>
                <td colspan="2">Manejo de interruptores</td>
                <td colspan="2"><?php echo form_checkbox('chkmanejointerruptoresactividadesbasicas', '116', FALSE); ?></td>
            </tr>
            <tr>
                <td colspan="2">Hacer trabajo liviano en el hogar:</td>
                <td colspan="2"><?php echo form_checkbox('chktrabajolivianoactividadesbasicas', '117', FALSE); ?></td>
                <td colspan="2">Manejo de grifos</td>
                <td colspan="2"><?php echo form_checkbox('chkmanejogrifosactividadesbasicas', '118', FALSE); ?></td>
            </tr>
            <tr>
                <td colspan="2" align="left" scope="row" style="border-width: 0px; ">Salir del hogar:</td>
                <td colspan="2" style="border-width: 0px; "><?php echo form_checkbox('chksaliractividadesbasicas', '119', FALSE); ?></td>
                <td colspan="2" align="left" style="border-width: 0px; ">Encender cerillas</td>
                <td colspan="2" style="border-width: 0px; "><?php echo form_checkbox('chkencendercerillasactividadesbasicas', '120', FALSE); ?></td>
            </tr>
            <tr>
                <td colspan="2">Manejo de llaves:</td>
                <td colspan="2"><?php echo form_checkbox('chkmanejollavesactividadesbasicas', '121', FALSE); ?></td>
                <td colspan="2">Lavarse los dientes</td>
                <td colspan="2"><?php echo form_checkbox('chklavardientesactividadesbasicas', '122', FALSE); ?></td>
            </tr>
            <tr>
                <td colspan="2">Manejo de picaportes:</td>
                <td colspan="2"><?php echo form_checkbox('chkmanejopicaportesactividadesbasicas', '123', FALSE); ?></td>
                <td colspan="2">Manejo del Dinero Propio</td>
                <td colspan="2"><?php echo form_checkbox('chkmanejodineroactividadesbasicas', '124', FALSE); ?></td>
            </tr>
            <tr>
                <th colspan="8">Actividades Básicas Cotidianas (ABC) Avanzadas</th>
            </tr>
            <tr>
                <th colspan="2">&nbsp;</th>
                <td colspan="2">Sin asistencia</td>
                <td colspan="2">Parcial</td>
                <td colspan="2">Total</td>
            </tr>
            <tr>
                <td colspan="2">Utiliza Transporte Publico: </td>
                <td colspan="2"><?php echo form_radio('radiotransporteactividadesavanzadas', '125', TRUE); ?>
                    <label for="radio"></label>
                </td>
                <td colspan="2"><?php echo form_radio('radiotransporteactividadesavanzadas', '126', FALSE); ?></td>
                <td colspan="2"><?php echo form_radio('radiotransporteactividadesavanzadas', '127', FALSE); ?></td>
            </tr>
            <tr>
                <td colspan="2">Va a servicios religiosos: </td>
                <td colspan="2"><?php echo form_radio('radioreligiososactividadesavanzadas', '128', TRUE); ?></td>
                <td colspan="2"><?php echo form_radio('radioreligiososactividadesavanzadas', '129', FALSE); ?></td>
                <td colspan="2"><?php echo form_radio('radioreligiososactividadesavanzadas', '130', FALSE); ?></td>
            </tr>
            <tr>
                <td colspan="2">Hace visitas: </td>
                <td colspan="2"><?php echo form_radio('radiohacevisitasactividadesavanzadas', '131', TRUE); ?></td>
                <td colspan="2"><?php echo form_radio('radiohacevisitasactividadesavanzadas', '132', FALSE); ?></td>
                <td colspan="2"><?php echo form_radio('radiohacevisitasactividadesavanzadas', '133', FALSE); ?></td>
            </tr>
            <tr>
                <td colspan="2" align="left" scope="row" style="border-width: 0px; ">Recibe visitas: </td>
                <td colspan="2" style="border-width: 0px; "><?php echo form_radio('radiorecibevisitasactividadesavanzadas', '134', TRUE); ?></td>
                <td colspan="2" style="border-width: 0px; "><?php echo form_radio('radiorecibevisitasactividadesavanzadas', '135', FALSE); ?></td>
                <td colspan="2" style="border-width: 0px; "><?php echo form_radio('radiorecibevisitasactividadesavanzadas', '136', FALSE); ?></td>
            </tr>
            <tr>
                <td colspan="2">Va a fiestas familiares:</td>
                <td colspan="2"><?php echo form_radio('radiofiestasactividadesavanzadas', '137', TRUE); ?></td>
                <td colspan="2"><?php echo form_radio('radiofiestasactividadesavanzadas', '138', FALSE); ?></td>
                <td colspan="2"><?php echo form_radio('radiofiestasactividadesavanzadas', '139', FALSE); ?></td>
            </tr>
            <tr>
                <td colspan="2">Participa en organizaciones sociales:</td>
                <td colspan="2"><?php echo form_radio('radioorganizacionessocialesactividadesavanzadas', '140', TRUE); ?></td>
                <td colspan="2"><?php echo form_radio('radioorganizacionessocialesactividadesavanzadas', '141', FALSE); ?></td>
                <td colspan="2"><?php echo form_radio('radioorganizacionessocialesactividadesavanzadas', '142', FALSE); ?></td>
            </tr>
            <tr>
                <th colspan="8">Ayudas Ortopédicas: </th>
            </tr>
            <tr>
                <td>Ninguno:</td>
                <th><?php echo form_checkbox('chkningunoayudasortopedicas', '143', FALSE); ?></th>
                <td>Muletas</td>
                <td><?php echo form_checkbox('chkmuletasayudasortopedicas', '144', FALSE); ?></td>
                <td>Gafas</td>
                <td><?php echo form_checkbox('chkgafasayudasortopedicas', '145', FALSE); ?></td>
                <td>Protesis</td>
                <td><?php echo form_checkbox('chkprotesisayudasortopedicas', '146', FALSE); ?></td>
            </tr>
            <tr>
                <td>Silla de ruedas: </td>
                <th><?php echo form_checkbox('chksillaruedasayudasortopedicas', '147', FALSE); ?></th>
                <td>Bastón</td>
                <td><?php echo form_checkbox('chkbastonayudasortopedicas', '148', FALSE); ?></td>
                <td>Audifonos</td>
                <td><?php echo form_checkbox('chkaudifonosayudasortopedicas', '149', FALSE); ?></td>
                <td>Caminador</td>
                <td><?php echo form_checkbox('chkcaminadorayudasortopedicas', '150', FALSE); ?></td>
            </tr>
            <tr>
                <td colspan="2">Otros:</td>
                <td colspan="6"><? echo form_input($otrasayudasabc);?></td>
            </tr>
        </tbody>
        <?php echo form_close(); ?>
    </table>
</div>