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
                <?php $atributos = array('id' => 'nueeve_form', 'class' => 'form_nueeve');
                echo form_open('agendaingresado/insertarevento', $atributos); ?>
                <div class="art-postcontent"><input type="button" id="idboton" value="Agregar Evento" />
                	<div id="iddiv" style="display:none">
                    <p align="left"><?php echo form_submit('submit', 'Agregar'); ?>
                    </p>
                    <p><br /></p>
                    <table width="662" border="0">
                        <tbody>
                            <?php
                            $idevento = array('name' => 'txtidevento','id' => 'txtidevento','value' => set_value('txtidevento'));
                            $tactevento = array('name' => 'txttactevento','id' => 'txttactevento','value' => set_value('txttactevento'));
                            $idperreaevento = array('name' => 'txtidperreaevento','id' => 'txtidperreaevento','value' => set_value('txtidperreaevento'));
                            $fecini = array('name' => 'txtfecini','id' => 'txtfecini','value' => set_value('txtfecini'));
                            $fecfin = array('name' => 'txtfecfin','id' => 'txtfecfin','value' => set_value('txtfecfin'));
                            $actdes = array('name' => 'txtactdes','id' => 'txtactdes','value' => set_value('txtactdes'));
                            $estact = array('name' => 'txtestact','id' => 'txtestact','value' => set_value('txtestact'));
                            $nomact = array('name' => 'txtnomact','id' => 'txtnomact','value' => set_value('txtnomact'));
                            ?>
                            <tr>
                                <th width="195" align="left" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; "></th>
                                <td width="163" style="border-width: 0px; "></td>
                                <th width="81" align="left" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; "></th>
                            </tr>
                            <tr>
                                <th align="left" valign="middle" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Id Evento:</th>
                                <td style="border-width: 0px; "><label for="txtnuevaeps"></label>
                                    <?php echo form_input($idevento); ?></td>
                            </tr>
                            <tr>
                                <th align="left" valign="middle" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Tipo de evento:</th>
                                <td style="border-width: 0px; "><label for="txtnuevaeps"></label>
                                    <?php echo form_input($tactevento); ?></td>
                            </tr>
                            <tr>
                                <th align="left" valign="middle" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Nombre actividad:</th>
                                <td style="border-width: 0px; "><label for="txtnuevaeps"></label>
                                    <?php echo form_input($nomact); ?></td>
                            </tr>
                            <tr>
                                <th align="left" valign="middle" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Descripción:</th>
                                <td style="border-width: 0px; "><label for="txtnuevaeps"></label>
                                    <?php echo form_input($actdes); ?></td>
                            </tr>
                            <tr>
                                <th align="left" valign="middle" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Encargado del evento:</th>
                                <td style="border-width: 0px; "><label for="txtnuevaeps"></label>
                                    <?php echo form_input($idperreaevento); ?></td>
                            </tr>
                            <tr>
                                <th align="left" valign="middle" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Fecha Inicial:</th>
                                <td style="border-width: 0px; "><label for="txtnuevaeps"></label>
                                    <?php echo form_input($fecini); ?></td>
                            </tr>
                            <tr>
                                <th align="left" valign="middle" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Fecha Final:</th>
                                <td style="border-width: 0px; "><label for="txtnuevaeps"></label>
                                    <?php echo form_input($fecfin); ?></td>
                            </tr>
                            <tr>
                                <th align="left" valign="middle" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Estado:</th>
                                <td style="border-width: 0px; "><label for="txtnuevaeps"></label>
                                    <?php echo form_input($estact); ?></td>
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
        <input type="hidden" id="swpag" value="agendaingresado" >
                     <table width="662" border="0" id="tabpag">
                     	<thead>
                            <tr>
                                <td style="border-width: 0px; ">ID</td>
                                <td style="border-width: 0px; ">Actividad</td>
                                <td style="border-width: 0px; ">Tipo de actividad</td>
                                <td style="border-width: 0px; ">Responsable</td>
                                <td style="border-width: 0px; ">Fecha incio</td>
                                <td style="border-width: 0px; ">Fecha final</td>
                                <td style="border-width: 0px; ">Descripcion</td>
                                <td style="border-width: 0px; ">Estado</td>
                            </tr>
                         </thead>
                         <tbody>
                            <?php
                                foreach ($Listar as $Valor) {
                                	$rutains= "asistentes/index/".$Valor['id'];
                            ?>
                          		<tr>
                                    <td style="border-width: 0px; "> <?php echo $Valor['id'] ?> </td>
                                    <td style="border-width: 0px; "> <?php echo $Valor['actividad'] ?> </td>
                                    <td style="border-width: 0px; "> <?php echo $Valor['tactividad'] ?> </td>
                                    <td style="border-width: 0px; "> <?php echo $Valor['responsable'] ?> </td>
									<td style="border-width: 0px; "> <?php echo $Valor['finicio'] ?> </td>
									<td style="border-width: 0px; "> <?php echo $Valor['ffinal'] ?> </td>
									<td style="border-width: 0px; "> <?php echo $Valor['descripcion'] ?> </td>
									<td style="border-width: 0px; "> <?php echo $Valor['estado'] ?> </td>
									<td><?php echo anchor_popup($rutains,'Agregar asistentes','')?></td>
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


