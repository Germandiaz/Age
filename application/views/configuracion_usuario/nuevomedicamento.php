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
            	<?php $atributos = array('id' => 'nuev_valora', 'class' => 'valora_nuev');
            	echo form_open('nuevomedicamento/ingresarmed', $atributos); ?>
                <div class="art-postcontent">
                    <p align="left"><?php echo form_submit('submit', 'Agregar'); ?>
                    </p>
                    <p><br /></p>
                    <table width="700" border="0">
                    <tbody>
                      <?php  
                        $NomMedi = array(
                            'name' => 'txtNombreMedicamento',
                            'id' => 'txtNombreMedicamento',
                            'value' => set_value('txtNombreMedicamento')
                        );
                        $PreseMe = array(
                            'name' => 'txtPresentacionMedicamento',
                            'id' => 'txtPresentacionMedicamento',
                            'value' => set_value('txtPresentacionMedicamento')
                        );                           
                        ?>
                            <tr>
                                <th width="195" align="left" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; "></th>
                                <td width="163" style="border-width: 0px; "></td>

                                <th width="81" align="left" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; "></th>

                            </tr>
                            <tr>
                                <th align="left" valign="middle" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">jjjj:</th>
                                <td style="border-width: 0px; "><label for="txtnuevaeps"></label>
                                    <?php form_input($nomMed); ?></td>


                            </tr>
                            <tr>
                                <th align="left" valign="middle" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">jjjj:</th>
                                <td style="border-width: 0px; "><label for="txtnuevaeps"></label>
                                    <?php form_input($TelefonoEsp); ?></td>
                            </tr>
                        </tbody>
                     <?php echo form_close(); ?>
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
