
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
                    <p>&nbsp;<span class="art-button-wrapper"><span class="art-button-l"> </span><span class="art-button-r"> </span><a href="nuevofactura.html" class="art-button">Aceptar</a></span>&nbsp;<br /></p>
                    <p><br /></p>
                    <table width="700" border="0">
                         <?php
                            $atributos = array('id' => 'loguin_form', 'class' => 'form_loguin');
                            echo form_open('usuarios/confirmar_Contrasena', $atributos);
                            $data = array(
                                'name' => 'BusPerPor',
                                'id' => 'BusPerPor',
                                'value' => set_value('BusPerPor')
                                 );
                            ?>
                        <tbody>
                            <tr>
                                <th colspan="11" style="border-width: 0px; ">Búsqueda Persona Factura</th>
                            </tr>
                            <tr>
                                <td colspan="2" style="border-width: 0px; "><strong>Buscar persona por:</strong></td>
                                <td colspan="7" style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td width="126" style="border-width: 0px; ">
                                    <label for="Busqueda persona avanzada"></label>
                                    <select name="selectbusqueda" id="selectbusqueda">
                                     <option value="one" <?php echo set_select('myselect', 'seleccione', TRUE); ?> >seleccione</option>
                                     <option value="two" <?php echo set_select('myselect', 'Nombre'); ?> >Nombre</option>
                                     <option value="three" <?php echo set_select('myselect', 'Apellido'); ?> >Apellido</option>
                                     <option value="three" <?php echo set_select('myselect', 'Cedula'); ?> >Cedula</option>
                                     <option value="three" <?php echo set_select('myselect', 'Teléfono'); ?> >Teléfono</option>
                                     </select>
                                                           </td>
                                <td width="185" style="border-width: 0px; "><? echo form_input($data); ?></td>
                                <td colspan="6" style="border-width: 0px; "><a href="">Agregar</a></td>
                            </tr>
                            <tr>
                                <td colspan="2" style="border-width: 0px; ">&nbsp;</td>
                                <td colspan="6" style="border-width: 0px; "><input type="text" value="Elvira Cogollo"></input></td>
                            </tr>
                            <tr>
                                <td colspan="2" style="border-width: 0px; ">&nbsp;</td>
                                <td colspan="7" style="border-width: 0px; "><input type="text" value="Elvia Marmol"></input></td>
                            </tr>
                            <tr>
                                <td colspan="2" style="border-width: 0px; ">&nbsp;</td>
                                <td colspan="7" style="border-width: 0px; "><input type="text" value="Elvia Zapata"></input></td>
                            </tr>
                        </tbody>
                        <?php echo form_close(); ?>
                    </table>
                    <p><br /></p>
                    <p>datoss</p>
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
