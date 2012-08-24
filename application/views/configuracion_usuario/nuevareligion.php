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
                    <?php $atributos = array('id' => 'nueReli_form', 'class' => 'form_nueReli');
                    echo form_open('nuevareligion/insertarel', $atributos); ?>
                    <p align="left"><?php echo form_submit('submit', 'Agregar'); ?>

                    </p>
                    <p><br /></p>
                    <table width="662" border="0">
                        <?php
                        $nomReli = array(
                            'name' => 'txtnombreReligion',
                            'id' => 'txtnombreReligion',
                            'value' => set_value('txtnombreReligion')
                        );
                        ?>
                        <tbody>
                            <tr>
                                <th width="195" align="left" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; "></th>
                                <td width="163" style="border-width: 0px; "></td>

                                <th width="81" align="left" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; "></th>

                            </tr>
                            <tr>
                                <th align="left" valign="middle" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Ingresar Religion</th>
                                <td style="border-width: 0px; "><label for="txtnuevaeps"></label>
                                 <?php echo form_input($nomReli); ?></td>


                            </tr>
                            <tr>

                            </tr>
                        </tbody>
                         <? echo form_close(); ?>
                    </table>
                    <p><br /></p> 
                    <input type="hidden" id="swpag" value="nuevareligion" >
                     <table width="662" border="0">
                            <tr>
                                <td style="border-width: 0px; ">Id</td>
                                <td style="border-width: 0px; ">Nombre</td>
                            </tr>
                            <?php
                                foreach ($Listar as $Valor) {
                            ?>
                                     <tr>
                                     <td style="border-width: 0px; "> <?php echo $Valor['id'] ?> </td>
                                     <td style="border-width: 0px; "> <?php echo $Valor['Nombre'] ?> </td>
                                     </tr>
                               <?php }
                            ?>
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
