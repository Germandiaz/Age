
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
                    <p><br /></p>
                    <table width="700" border="0">
                         <?php
                            $atributos = array('id' => 'loguin_form', 'class' => 'form_loguin');
                            echo form_open('buscarConceptoFactura/index', $atributos);
                            $Concepto = array(
                                'name' => 'txtConcepto',
                                'id' => 'txtConcepto',
                                'value' => set_value('txtConcepto')
                                 );
                            $Cantidad = array(
                                'name' => 'txtCantidad',
                                'id' => 'txtCantidad',
                                'value' => set_value('txtCantidad')
                                 );
                            $Descripcion = array(
                                'name' => 'txtDescripcion',
                                'id' => 'txtDescripcion',
                                'value' => set_value('txtDescripcion')
                                 );
                            $Valor = array(
                                'name' => 'txtValor',
                                'id' => 'txtValor',   
                                'value' => set_value('txtValor')
                                 );
                            ?>
                        <tbody>
                            <p><?= form_submit('submit', 'Aceptar'); ?></p>
                            <tr>
                                <th colspan="7" scope="row" style="border-width: 0px; ">Ingresar Concepto Factura</th>
                            </tr>
                            <tr>
                                <th width="119" align="left" style="border-width: 0px; " scope="row">&nbsp;</th>
                                <td width="179" align="left" style="border-width: 0px; ">
                                    <label for="textfield"></label>
                                </td>
                                <td colspan="2" align="left" style="border-width: 0px; ">&nbsp;</td>
                                <td width="172" style="border-width: 0px; "><a href=""></a></td>
                            </tr>
                            <tr>
                                <th scope="row" align="left" style="border-width: 0px; ">Concepto</th>
                                <th align="left" style="border-width: 0px; ">Cantidad</th>
                                <th colspan="2" align="left" style="border-width: 0px; ">Descripción</th>
                                <th align="left" style="border-width: 0px; ">Valor</th>
                            </tr>
                            <tr>
                                <th scope="row" align="left" style="border-width: 0px; ">
                                    <label for="select">
                                        <? echo form_input($Concepto); ?>
                                      </label>
                                </th>
                                <th align="left" style="border-width: 0px; "><? echo form_input($Cantidad); ?></th>
                                <th colspan="2" rowspan="2" align="left" style="border-width: 0px; ">
                        <p>
                            <label for="textfield2"></label>
                            <textarea name="textareaobservaciongeneral2" id="textareaobservaciongeneral2"></textarea>
                        </p>
                        </th>
                        <td style="border-width: 0px; "><? echo form_input($Valor); ?></td>
                        </tr>
                        <tr>
                            <td scope="row" style="border-width: 0px; ">&nbsp;</td>
                            <td scope="row" style="border-width: 0px; ">
                                <label for="textfield2"></label>
                            </td>
                            <?php echo form_close(); ?>
                            <?echo form_open('buscarConceptoFactura/insertConcFac', $atributos);?>
                            <td scope="row" style="border-width: 0px; "><a href=""><font color="#0000FF"><?= form_submit('submit', 'Agregar'); ?></font></a><a href=""></a></td>
                        </tr>
                        <tr>
                            <th colspan="5" style="border-width: 0px; " scope="row"><a href=""></a></th>
                        </tr>
                        <tr>
                            <td scope="row" align="center" style="border-width: 0px; "><a href=""><font color="#0000FF">Eliminar</font></a></td>
                            <td align="center" style="border-width: 0px; "><a href=""></a></td>
                            <td width="211" align="center" style="border-width: 0px; ">&nbsp;</td>
                            <td colspan="2" align="center" style="border-width: 0px; ">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row" style="border-width: 0px; ">Concepto</th>
                            <th align="center" style="border-width: 0px; ">Cantidad</th>
                            <th align="center" style="border-width: 0px; ">Descripción</th>
                            <th colspan="2" align="center" style="border-width: 0px; ">Valor Unitario</th>
                        </tr>
                        <tr>
                            <td scope="row" style="border-width: 0px; "><input type="checkbox" name="checkboxbuscarconceptofactura[]" value="1" <?php echo set_checkbox('checkboxbuscarconceptofactura[]', '1'); ?> />
                                <label for="checkbox"></label>
				  <?echo form_label('Mensualidad');?>
                            </td>
                            <td align="center" style="border-width: 0px; "><?echo form_label('2');?></td>
                            <td align="center" style="border-width: 0px; "><?echo form_label('Meses de febrero y marzo');?></td>
                            <td colspan="2" align="center" style="border-width: 0px; "><?echo form_label('500000');?></td>
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
