<div>
    <p><a href="nuevofactura.html">Aceptar</a></p>
    <table>
        <?php
            $atributos = array('id' => 'loguin_form', 'class' => 'form_loguin');
            echo form_open('usuarios/confirmar_Contrasena', $atributos);
            $data = array('name' => 'BusPerPor','id' => 'BusPerPor','value' => set_value('BusPerPor'));
        ?>
        <tbody>
            <tr>
                <th colspan="11">Búsqueda Persona Factura</th>
            </tr>
            <tr>
                <td colspan="2">Buscar persona por:</td>
                <td colspan="7"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <label for="Busqueda persona avanzada"></label>
                    <select name="selectbusqueda" id="selectbusqueda">
                        <option value="one" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                        <option value="two" <?php echo set_select('myselect', 'Nombre'); ?> >Nombre</option>
                        <option value="three" <?php echo set_select('myselect', 'Apellido'); ?> >Apellido</option>
                        <option value="three" <?php echo set_select('myselect', 'Cedula'); ?> >Cedula</option>
                        <option value="three" <?php echo set_select('myselect', 'Teléfono'); ?> >Teléfono</option>
                    </select>
                </td>
                <td><? echo form_input($data); ?></td>
                <td colspan="6"><a href="">Agregar</a></td>
            </tr>
        </tbody>
        <?php echo form_close(); ?>
    </table>
</div>