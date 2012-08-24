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
                <?php $atributos = array('id' => 'nueinc_form', 'class' => 'form_nueinc');
                echo form_open('incidenciaingresado/insertarincidencia', $atributos); ?>
                <div class="art-postcontent"><input type="button" id="idboton" value="Agregar incidencia" />
                	<div id="iddiv" style="display:none;">
                    <p align="left"><?php echo form_submit('submit', 'Agregar'); ?>
                    </p>
                    <p><br /></p>
                    <table width="662" border="0">
                        <tbody>
                            <?php
                            $perid = array('name' => 'txtperid','id' => 'txtperid','value' => set_value('txtperid'));
                            $fecinc = array('name' => 'txtfecinc','id' => 'txtfecinc','value' => set_value('txtfecinc'));
                            $medinc = array('name' => 'txtmed','id' => 'txtmed','value' => set_value('txtmed'));
                            $diainc = array('name' => 'txtdiainc','id' => 'txtdiainc','value' => set_value('txtdiainc'));
                            $resinc = array('name' => 'txtresid','id' => 'txtresid','value' => set_value('txtresid'));
                            ?>
                            <tr>
                                <th width="195" align="left" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; "></th>
                                <td width="163" style="border-width: 0px; "></td>
                                <th width="81" align="left" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; "></th>
                            </tr>
                            <tr>
                                <th align="left" valign="middle" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Ingresar cedula persona:</th>
                                <td style="border-width: 0px; "><label for="txtnuevaeps"></label>
                                    <?php echo form_input($perid); ?></td>
                            </tr>
                            <tr>
                                <th align="left" valign="middle" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Fecha incidencia:</th>
                                <td style="border-width: 0px; "><label for="txtnuevaeps"></label>
                                    <?php echo form_input($fecinc); ?></td>
                            </tr>
                            <tr>
                                <th align="left" valign="middle" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Medicina (SI/NO):</th>
                                <td style="border-width: 0px; "><label for="txtnuevaeps"></label>
                                    <?php echo form_input($medinc); ?></td>
                            </tr>
                            <tr>
                                <th align="left" valign="middle" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Observacion:</th>
                                <td style="border-width: 0px; "><label for="txtnuevaeps"></label>
                                    <?php echo form_input($diainc); ?></td>
                            </tr>
                            <tr>
                                <th align="left" valign="middle" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Responsable:</th>
                                <td style="border-width: 0px; "><label for="txtnuevaeps"></label>
                                    <?php echo form_input($resinc); ?></td>
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
                                <td style="border-width: 0px; ">Fecha realizacion</td>
                                <td style="border-width: 0px; ">Medicamentos</td>
                                <td style="border-width: 0px; ">Observacion</td>
                                <td style="border-width: 0px; ">Responsable</td>
                            </tr>
                         </thead>
                         <tbody>
                            <?php
                                foreach ($Listar as $Valor) {
                                	$rutaincmed= "nuevaincidenciamed/index/".$Valor['id']."/".$Valor['medicamento'];
                            ?>
                          		<tr>
                                     <td style="border-width: 0px; "> <?php echo $Valor['id'] ?> </td>
                                     <td style="border-width: 0px; "> <?php echo $Valor['documento'] ?> </td>
                                     <td style="border-width: 0px; "> <?php echo $Valor['pnombre'] ?> </td>
                                     <td style="border-width: 0px; "> <?php echo $Valor['papellido'] ?> </td>
                                     <td style="border-width: 0px; "> <?php echo $Valor['fecharea'] ?> </td>
                                     <td style="border-width: 0px; "> <?php echo $Valor['medicamento'] ?> </td>
                                     <td style="border-width: 0px; "> <?php echo $Valor['observacion'] ?> </td>
                                     <td style="border-width: 0px; "> <?php echo $Valor['responsable'] ?> </td>
                                     <td><?php echo anchor_popup($rutaincmed,'A&ntilde;adir Medicamentos','')?></td>
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


