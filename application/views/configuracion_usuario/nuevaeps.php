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
                <?php $atributos = array('id' => 'nueEps_form', 'class' => 'form_nueEps');
                echo form_open('nuevaeps/insertareps', $atributos); ?>
                <div class="art-postcontent"><input type="button" id="idboton" value="Ocultar" />
                	<div id="iddiv">
                    <p align="left"><?php echo form_submit('submit', 'Agregar'); ?>
                    </p>
                    <p><br /></p>
                    <table width="662" border="0">
                        <tbody>
                            <?php
                            $nomEps = array(
                                'name' => 'txtnombreEps',
                                'id' => 'txtnombreEps',
                                'value' => set_value('txtnombreEps')
                            );
                            $TelefonoEsp = array(
                                'name' => 'txttelefonoEps',
                                'id' => 'txttelefonoEps',
                                'value' => set_value('txttelefonoEps')
                            );
                            $DireccionEps = array(
                                'name' => 'txtdireccionEps',
                                'id' => 'txtdireccionEps',
                                'value' => set_value('txtdireccionEps')
                            );
                            $Tiposegu = array(
                                'name' => 'txttiposeguridadEps',
                                'id' => 'txttiposeguridadEps',
                                'value' => set_value('txttiposeguridadEps')
                            );
                            ?>
                            <tr>
                                <th width="195" align="left" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; "></th>
                                <td width="163" style="border-width: 0px; "></td>
                                <th width="81" align="left" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; "></th>

                            </tr>
                            <tr>
                                <th align="left" valign="middle" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Ingresar EPS:</th>
                                <td style="border-width: 0px; "><label for="txtnuevaeps"></label>
                                    <?php echo form_input($nomEps); ?></td>
								<td><?php echo form_error('txtnombreEps'); ?></td>

                            </tr>
                            <tr>
                                <th align="left" valign="middle" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Telefono:</th>
                                <td style="border-width: 0px; "><label for="txtnuevaeps"></label>
                                    <?php echo form_input($TelefonoEsp); ?></td>
								<td><?php echo form_error('txttelefonoEps'); ?></td>

                            </tr>
                            <tr>
                                <th align="left" valign="middle" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Direcci&#243;n:</th>
                                <td style="border-width: 0px; "><label for="txtnuevaeps"></label>
                                    <?php echo form_input($DireccionEps);?></td>
                                <td style="border-width: 0px; ">  <?php echo form_error('txtdireccionEps'); ?></td>


                            </tr>
                            <tr>
                                <th align="left" valign="middle" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Tipo Seguridad:</th>
                                <td style="border-width: 0px; "><label for="txtnuevaeps"></label>
                                    <?php echo form_input($Tiposegu); ?></td>
								<td><?php echo form_error('txttiposeguridadEps'); ?></td>

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
                                <td style="border-width: 0px; ">Nombre</td>
                                <td style="border-width: 0px; ">Telefono</td>
                                <td style="border-width: 0px; ">Direcci&#243;n</td>
                                <td style="border-width: 0px; ">Tipo Seguridad</td>
                            </tr>
                         </thead>
                         <tbody>
                            <?php
                                foreach ($Listar as $Valor) {
                            ?>
                          		<tr>
                                     <td id="0" style="border-width: 0px; "> <?php echo $Valor['id'] ?> </td>
                                     <td id="1" style="border-width: 0px; "> <?php echo $Valor['Nombre'] ?> </td>
                                     <td id="2" style="border-width: 0px; "> <?php echo $Valor['Telefono'] ?> </td>
                                     <td id="3" style="border-width: 0px; "> <?php echo $Valor['Direccion'] ?> </td>
                                     <td id="4" style="border-width: 0px; "> <?php echo $Valor['TipoSeguridad'] ?> </td>
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


