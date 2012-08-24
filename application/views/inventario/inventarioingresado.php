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
                <?php $atributos = array('id' => 'nueinv_form', 'class' => 'form_nueinv');
                echo form_open('inventario', $atributos); ?>
                <div class="art-postcontent"><input type="button" id="idboton" value="Ocultar" />
                	<div id="iddiv">
                    <p align="left">
                    </p>
                    <p><br /></p>
                        <? echo form_close(); ?>                    
                    <div class="table-wrapper">
        <div class="wrapper-paging">
          <ul>
            <li><a class="paging-back">&lt;</a></li>
            <li><a class="paging-this"><strong>0</strong> de <span>x</span></a></li>
            <li><a class="paging-next">&gt;</a></li>
          </ul>
        </div>
        <div class="wrapper-panel">
        <input type="hidden" id="swpag" value="inventario" >
                     <table width="662" border="0" id="tabpag">
                     	<thead>
                            <tr>
                                <td style="border-width: 0px; ">Codigo inventario</td>
                                <td style="border-width: 0px; ">Cedula propietario</td>
                                <td style="border-width: 0px; ">primer nombre</td>
                                <td style="border-width: 0px; ">segundo nombre</td>
                                <td style="border-width: 0px; ">primer apellido</td>
                                <td style="border-width: 0px; ">segundo apellido</td>
                                <td style="border-width: 0px; ">cantidad productos</td>
                            </tr>
                         </thead>
                         <tbody>
                            <?php
                           	$cont=0;
                                foreach ($Listar as $Valor) {
                                	$invsel = array('name' => 'btninvsel','id' => 'btninvsel','value' => $Valor['id']);
                                	$accionbtn = 'onClick=""';
                                	$rutains= "nuevamovimiento/index/".$Valor['id'];
                            ?>
                          		<tr>
                                    <td id="ind<?php echo $cont;?>" style="border-width: 0px; "> <?php echo $Valor['id'] ?> </td>
                                    <td style="border-width: 0px; "> <?php echo $Valor['documento'] ?> </td>
                                    <td style="border-width: 0px; "> <?php echo $Valor['pnombre'] ?> </td>
									<td style="border-width: 0px; "> <?php echo $Valor['snombre'] ?> </td>
									<td style="border-width: 0px; "> <?php echo $Valor['papellido'] ?> </td>
									<td style="border-width: 0px; "> <?php echo $Valor['sapellido'] ?> </td>
									<td style="border-width: 0px; "> <?php echo $Valor['cantidad'] ?> </td>
									<td><?php echo anchor_popup($rutains,'A&ntilde;adir Productos','')?></td>
                                 </tr>
                          </tbody>
                               <?php $cont = $cont+1; }
                            ?>
                            
                    </table>
                   </div>
			</div>
                    
                    <p><br /></p> </div>
                                           
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


