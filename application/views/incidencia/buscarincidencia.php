<div>
    <a href="facturaingresado.html" class="art-button">Todas las Incidencias</a>
    <table>
        <?php
            $atributos = array('id' => 'loguin_form', 'class' => 'form_loguin');
            echo form_open('usuarios/confirmar_Contrasena', $atributos);
            $data = array('name' => 'BusquedaPersona','id' => 'BusquedaPersona','value' => set_value('BusquedaPersona'));
            $data2 = array('name' => 'BusquedaCodigo','id' => 'BusquedaCodigo','value' => set_value('BusquedaCodigo'));
            $data3 = array('name' => 'BusquedaFechaDesde','id' => 'BusquedaFechaDesde','value' => set_value('BusquedaFechaDesde'));
            $data4 = array('name' => 'BusquedaFechaHasta','id' => 'BusquedaFechaHasta','value' => set_value('BusquedaFechaHasta'));
        ?>
        <tbody>
            <tr>
                <td colspan="12">Búsqueda Incidencias</td>
            </tr>
            <tr>
                <td colspan="3">Buscar persona por:</td>
                <td><? echo form_input($data); ?></input></td>
                <td colspan="6"></td>
            </tr>
            <tr>
                <td colspan="10">
                    <label for="Busqueda persona avanzada"></label>
                </td>
            </tr>
            <tr>
                <td colspan="3">Búsqueda Código:</td>
                <td><? echo form_input($data2); ?></input></td>
                <td colspan="5"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td colspan="2">Búsqueda por fecha:</td>
                <td>Desde</td>
                <td colspan="4">Hasta</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><? echo form_input($data3); ?></td>
                <td colspan="4"><? echo form_input($data4); ?></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
        </tbody>
    </table>
</div>