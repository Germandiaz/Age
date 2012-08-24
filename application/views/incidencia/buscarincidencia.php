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
                    <span class="art-button-wrapper"><span class="art-button-l"> </span><span class="art-button-r"> </span><a href="consultarfactura.html" class="art-button">Aceptar</a></span>&nbsp;<span class="art-button-wrapper"><span class="art-button-l"> </span><span class="art-button-r"> </span><a href="facturaingresado.html" class="art-button">Todas las Incidencias</a></span>														
                    <p><br /></p>
                    <table width="700" border="0">
                        <?php
                            $atributos = array('id' => 'loguin_form', 'class' => 'form_loguin');
                            echo form_open('usuarios/confirmar_Contrasena', $atributos);
                            $data = array(
                                'name' => 'BusquedaPersona',
                                'id' => 'BusquedaPersona',
                                'value' => set_value('BusquedaPersona')
                                 );
                            $data2 = array(
                                'name' => 'BusquedaCodigo',
                                'id' => 'BusquedaCodigo',
                                'value' => set_value('BusquedaCodigo')
                                 );
                            $data3 = array(
                                'name' => 'BusquedaFechaDesde',
                                'id' => 'BusquedaFechaDesde',
                                'value' => set_value('BusquedaFechaDesde')
                                 );
                            $data4 = array(
                                'name' => 'BusquedaFechaHasta',
                                'id' => 'BusquedaFechaHasta',
                                'value' => set_value('BusquedaFechaHasta')
                                 );
                            ?>
                        <tbody>
                            <tr>
                                <td colspan="12" style="border-width: 0px; ">Búsqueda Incidencias</td>
                            </tr>
                            <tr>
                                <td width="19" colspan="3" style="border-width: 0px; ">&nbsp;Buscar persona por:</td>
                                <td width="185" style="border-width: 0px; "><? echo form_input($data); ?></input></td>
                                <td width="38" colspan="6" style="border-width: 0px; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            </tr>
                            <tr>
                                <td colspan="10" style="border-width: 0px; ">&nbsp;&nbsp;
                                    <label for="Busqueda persona avanzada"></label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" style="border-width: 0px; ">&nbsp;Búsqueda Código:</td>
                                <td style="border-width: 0px; "><? echo form_input($data2); ?></input></td>
                                <td colspan="5" style="border-width: 0px; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            </tr>
                            <tr>
                                <td colspan="10" style="border-width: 0px; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            </tr>
                            <tr>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td colspan="2" style="border-width: 0px; ">Búsqueda por fecha:</td>
                                <td style="border-width: 0px; ">Desde</td>
                                <td colspan="4" style="border-width: 0px; ">Hasta</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; "><? echo form_input($data3); ?></td>
                                <td colspan="4" style="border-width: 0px; "><? echo form_input($data4); ?></td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
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
