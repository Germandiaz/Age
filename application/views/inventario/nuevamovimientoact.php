<script>
function cerrar(){
window.close();
}
</script>
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
                <?php $atributos = array('id' => 'nuemov_form', 'class' => 'form_nuemov');
                echo form_open('nuevamovimiento/insertarprod', $atributos); ?>
                <div class="art-postcontent"><input type="button" id="idboton" value="Realizar Movimiento" />
                <input type="button" value="Finalizar" onclick="cerrar()">
                <br><br>
                	<div id="iddiv" style="display:none;">
                    <p align="left"><?php echo form_submit('submit', 'Confirmar'); ?>
                    </p>
                    <p><br /></p>
                    <table width="400" border="0">
                        <tbody>
                            <?php
                            foreach ($Listar as $Valor) {
                           	$var = $Valor['inv'];	
                            }	
                            $perid = array('value' => $var);
                            $hdper = array('name' => 'hdperid','id' => 'hdperid','value' => $var);
                            $prodid = array('name' => 'txtprodid','id' => 'txtprodid','value' => set_value('txtprodid'));
                            $fecmov = array('name' => 'txtfecmov','id' => 'txtfecmov','value' => set_value('txtfecmov'));
                            $cant = array('name' => 'txtcant','id' => 'txtcant','value' => set_value('txtcant'));
                            $medida = array('name' => 'txtmedida','id' => 'txtmedida','value' => set_value('txtmedida'));
                            ?>
                            <tr>
                                <th align="left" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; "></th>
                                <td style="border-width: 0px; "></td>
                                <th align="left" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; "></th>

                            </tr>
                            <tr>
                                <th align="left" valign="middle" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">persona:</th>
                                <td style="border-width: 0px; "><label for="txtnuevaeps"></label>
                                    <?php echo form_label($var,'Lblpersona',$perid); ?></td>
                                    <td style="visibility:hidden"><?php echo form_input($hdper);?></td>
                            </tr>
                            <tr>
                                <th align="left" valign="middle" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Producto:</th>
                                <td style="border-width: 0px; "><label for="txtnuevaeps"></label>
                                    <?php echo form_input($prodid); ?></td>
                            </tr>
                            <tr>
                                <th align="left" valign="middle" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Movimiento:</th>
                                <td style="border-width: 0px; "><label for="txtnuevaeps"></label>
                                <select name="selecttmov" id="selecttmov">
                                            <?php foreach ($Listartmov as $tmov) { ?> 
                                                <option value=<?php echo $tmov['id'] ?>> <?php echo $tmov['Nombre']; ?></option> 
                                            <?php } ?>
                                    </select>
                                    </td>
                                    
                            </tr>
                            <tr>
                                <th align="left" valign="middle" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Fecha movimiento:</th>
                                <td style="border-width: 0px; "><label for="txtnuevaeps"></label>
                                    <?php echo form_input($fecmov); ?></td>
                            </tr>
                            <tr>
                                <th align="left" valign="middle" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Cantidad:</th>
                                <td style="border-width: 0px; "><label for="txtnuevaeps"></label>
                                    <?php echo form_input($cant); ?></td>
                            </tr>
                            <tr>
                                <th align="left" valign="middle" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Medida:</th>
                                <td style="border-width: 0px; "><label for="txtnuevaeps"></label>
                                    <?php echo form_input($medida); ?></td>
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
        <input type="hidden" id="swpag" value="nuevaeps" >
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