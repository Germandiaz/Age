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
                <?php $atributos = array('id' => 'nueasis_form', 'class' => 'form_nueasis');
                echo form_open('asistentes/insertarasistente', $atributos); ?>
                <div class="art-postcontent"><input type="button" id="idboton" value="Agregar asistente" />
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
                           	$var = $Valor['EVENTO'];	
                            }	
                            $perid = array('value' => $var);
                            $perageid = array('name' => 'hdperid','id' => 'hdperid','value' => $var);
                            ?>
                            <tr>
                                <th align="left" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; "></th>
                                <td style="border-width: 0px; "></td>
                                <th align="left" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; "></th>

                            </tr>
                            <tr>
                                <th align="left" valign="middle" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Personas:</th>
                                <td style="border-width: 0px; "><label for="txtnuevaeps"></label>
                                <select name="selectper" id="selectper">
                                    <?php foreach ($Listarper as $per) { ?> 
                                                <option value=<?php echo $per['id'] ?>> <?php echo $per['Nombre']; ?></option> 
                                            <?php } ?>
                               </select>
                                    </td>
                                    <td style="Display:none;"><?php echo form_input($perageid); ?></td>
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
                     <table width="662" border="0" id="tabpag">
                     	<thead>
                            <tr>
                                <td style="border-width: 0px; ">Id</td>
                                <td style="border-width: 0px; ">Cedula</td>
                                <td style="border-width: 0px; ">Nombre</td>
                                <td style="border-width: 0px; ">Apellido</td>
                            </tr>
                         </thead>
                         <tbody>
                            <?php
                                foreach ($Listar as $Valor) {
                                $rutaeli= "asistentes/actualizarevento/".$Valor['EVENTO']."/".$Valor['IDPER'];	
                            ?>
                          		<tr>
                                     <td style="border-width: 0px; "> <?php echo $Valor['EVENTO'] ?> </td>
                                     <td style="border-width: 0px; "> <?php echo $Valor['CEDULA'] ?> </td>
                                     <td style="border-width: 0px; "> <?php echo $Valor['NOMBRE'] ?> </td>
                                     <td style="border-width: 0px; "> <?php echo $Valor['APELLIDO'] ?> </td>
                                     <td><?php echo anchor($rutaeli,'Quitar asistente','')?></td>
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


