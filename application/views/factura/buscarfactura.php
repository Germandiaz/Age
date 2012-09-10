
<div>
    <p>
        <a href="consultarfactura.html">Aceptar</a>
        <a href="facturasingresado.html">Todas las Facturas</a>
    </p>
    <table>
    <?php
            $atributos = array('id' => 'loguin_form', 'class' => 'form_loguin');
            echo form_open('usuarios/confirmar_Contrasena', $atributos);
            $data = array('name' => 'BuscarPersona','id' => 'BuscarPersona','value' => set_value('BuscarPersona'));
            $data2 = array('name' => 'BuscarCodigo','id' => 'BuscarCodigo','value' => set_value('BuscarCodigo'));
            $data3 = array('name' => 'BuscarFechaDesde','id' => 'BuscarFechaDesde','value' => set_value('BuscarFechaDesde'));
            $data4 = array('name' => 'BuscarFechaHasta','id' => 'BuscarFechaHasta','value' => set_value('BuscarFechaHasta'));
        ?>
        <tbody>
            <tr>
                <td colspan="12">Búsqueda Incidencias</td>
            </tr>
            <tr>
                <td colspan="3">Buscar persona por:</td>
                <td><? echo form_input($data); ?></td>
                <td colspan="6"></td>
            </tr>
            <tr>
                <td colspan="3">Búsqueda Código:</td>
                <td><? echo form_input($data2); ?></td>
                <td colspan="5"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2">Búsqueda por fecha:</td>
                <td>Desde</td>
                <td colspan="4">Hasta</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><? echo form_input($data3); ?></td>
                <td colspan="4"><? echo form_input($data2); ?></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
        <?php echo form_close(); ?>
    </table>
</div>