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
            	<?php $atributos = array('id' => 'nueValo_form', 'class' => 'form_nueValo');
                echo form_open('nuevovaloracion/insertarval', $atributos); ?>
                <div class="art-postcontent"> 
                    <p align="left"><?php echo form_submit('submit', 'Agregar'); ?>                    
                    </p>
                    <table width="662" border="0">
                            <tbody>
                                <?php
                                $atributos = array('id' => 'nuev_valora', 'class' => 'valora_nuev');
                                echo form_open('nuevovaloracion/insertarval', $atributos);
                                $TiValora = array(
                                    'name' => 'txtTipoValoracion',
                                    'id' => 'txtTipoValoracion',
                                    'value' => set_value('txtTipoValoracion')
                                );
                                $SubValora = array(
                                    'name' => 'txtSubtipoValoracion',
                                    'id' => 'txtSubtipoValoracion',
                                    'value' => set_value('txtSubtipoValoracion')
                                );
                                $NomValora = array(
                                    'name' => 'txtNombreValoracion',
                                    'id' => 'txtNombreValoracion',
                                    'value' => set_value('txtNombreValoracion')
                                );
                                ?>
                            <tr>
                                <th colspan="9" scope="row" style="border-width: 0px; ">Nueva Valoración </th>
                            </tr>
                            <tr>
                                <th scope="row" align="left" style="border-width: 0px; ">&nbsp;</th>
                                <th scope="row" align="left" style="border-width: 0px; ">&nbsp;</th>
                                <td width="182" align="left" style="border-width: 0px; ">
                                    <label for="textfield"></label>
                                </td>
                                <td width="131" align="left" style="border-width: 0px; "><a href=""></a></td>
                                <td colspan="2" style="border-width: 0px; "><a href=""></a></td>
                                <td width="19" style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th scope="row" align="left" style="border-width: 0px; ">&nbsp;</th>
                                <th scope="row" align="left" style="border-width: 0px; ">&nbsp;</th>
                                <td align="left" style="border-width: 0px; ">&nbsp;</td>
                                <td align="left" style="border-width: 0px; ">&nbsp;</td>
                                <td width="38" style="border-width: 0px; ">&nbsp;</td>
                                <td width="52" align="left" style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th scope="row" align="left" style="border-width: 0px; ">&nbsp;</th>
                                <th scope="row" align="left" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Tipo Valoración:</th>
                                <th align="left" style="border-width: 0px; "><?php echo form_input($TiValora); ?></th>
                                <th align="left" style="border-width: 0px; ">&nbsp;</th>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <td scope="row" style="border-width: 0px; ">&nbsp;</td>
                                <th align="left" scope="row" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Subtipo Valoración:</th>
                                <th align="left" style="border-width: 0px; "><?php echo form_input($SubValora); ?></th>
                                <td colspan="4" scope="row" style="border-width: 0px; ">
                                    <p>
                                        <label for="textfield2"></label>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <th width="23" scope="row" style="border-width: 0px; ">&nbsp;</th>
                                <th align="left" width="225" scope="row" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Nombre Valoración:</th>
                                <th align="left" style="border-width: 0px; "><?php echo form_input($NomValora); ?></th>
                                <td colspan="4" scope="row" style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                        </tbody>
                    <?php echo form_close(); ?>
                    </table>
                    <p><br /></p>
                    <input type="hidden" id="swpag" value="nuevovaloracion" >
                    <table width="662" border="0">
                            <tr>
                                <td style="border-width: 0px; ">Id</td>
                                <td style="border-width: 0px; ">Valoraci&#243;n</td>
                                <td style="border-width: 0px; ">Tipo de Valoraci&#243;n</td>
                            </tr>
                            <?php
                                foreach ($Listar as $Valor) {
                            ?>
                                     <tr>
                                     <td style="border-width: 0px; "> <?php echo $Valor['id'] ?> </td>
                                     <td style="border-width: 0px; "> <?php echo $Valor['tipoval'] ?> </td>
                                     <td style="border-width: 0px; "> <?php echo $Valor['nombreval'] ?> </td>
                                     </tr>
                               <?php }
                            ?>
                    </table>
                    <p><br /></p> 
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
