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
                <?php $atributos = array('id' => 'nueprod_form', 'class' => 'form_nueprod');
                echo form_open('nuevaproducto/insertarproducto', $atributos); ?>
                <div class="art-postcontent"><input type="button" id="idboton" value="Ocultar" />
                	<div id="iddiv">
                    <p align="left">
                    </p>
                    <p><br /></p>
                    <table width="662" border="0">
                        <tbody>
                            <?php
                            $nomprod= array(
                                'name' => 'txtnomprod',
                                'id' => 'txtnomprod',
                                'value' => set_value('txtnomprod')
                            );
                            $preprod= array(
                                'name' => 'txtpreprod',
                                'id' => 'txtpreprod',
                                'value' => set_value('txtpreprod')
                            );
                            ?>
                            <tr>
                                <th width="195" align="left" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; "></th>
                                <td width="163" style="border-width: 0px; "></td>

                                <th width="81" align="left" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; "></th>

                            </tr>
                            <tr>
                                <th align="left" valign="middle" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Nombre producto:</th>
                                <td style="border-width: 0px; "><label for="txtnuevapais"></label>
                                    <?php echo form_input($nomprod); ?></td>
                            </tr>
                            <tr>
                                <th align="left" valign="middle" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Presentacion:</th>
                                <td style="border-width: 0px; "><label for="txtnuevaindpais"></label>
                                    <?php echo form_input($preprod); ?></td>
                            </tr>
                            <tr>
                                <td style="border-width: 0px; " align="center"><?php echo form_submit('submit', 'Agregar'); ?></td>
                            </tr>
                            <tr>
                            </tr>
                        </tbody>
                        <? echo form_close(); ?>
                    </table>
                    </div>
                    <div class="table-wrapper">
        <div class="wrapper-paging">
          <ul>
            <li><a class="paging-back">&lt;</a></li>
            <li><a class="paging-this"><strong>0</strong> de <span>x</span></a></li>
            <li><a class="paging-next">&gt;</a></li>
          </ul>
        </div>
        <div class="wrapper-panel">
        <input type="hidden" id="swpag" value="nuevaproducto" >
                     <table width="662" border="0" id="tabpag">
                     	<thead>
                            <tr>
                                <td style="border-width: 0px; ">ID</td>
                                <td style="border-width: 0px; ">Nombre</td>
                                <td style="border-width: 0px; ">Presentacion</td>
                            </tr>
                         </thead>
                         <tbody>
                            <?php
                                foreach ($Listar as $Valor) {
                            ?>
                          		<tr>
                                     <td style="border-width: 0px; "> <?php echo $Valor['id'] ?> </td>
                                     <td style="border-width: 0px; "> <?php echo $Valor['nomprod'] ?> </td>
                                     <td style="border-width: 0px; "> <?php echo $Valor['preprod'] ?> </td>

                                 </tr>
                          </tbody>
                               <?php }
                            ?>
                    </table>
                   </div>
			</div>
                    
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
<div>    
</div>
</div>


