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
                <?php $atributos = array('id' => 'nueconpfact_form', 'class' => 'form_nueconpfact');
                echo form_open('nuevaconpfactura/insertarconpfact', $atributos); ?>
                <div class="art-postcontent"><input type="button" id="idboton" value="Ocultar" />
                	<div id="iddiv">
                    <p align="left">
                    </p>
                    <p><br /></p>
                    <table width="450" border="0">
                        <tbody>
                            <?php $descconpfact = array('name' => 'txtdescconpfact','id' => 'txtdescconpfact','value' => set_value('txtdescconpfact'));?>
                            <tr>
                                <th align="left" valign="middle" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; text-align: left; ">Nuevo concepto facturas:</th>
                                <td style="border-width: 0px; "><label for="txtnuevaindpais"></label><?php echo form_input($descconpfact); ?></td>
                                <td style="border-width: 0px; "><?php echo form_submit('submit', 'Agregar'); ?></td>
                            </tr>
                        </tbody>
                        <? echo form_close(); ?>
                    </table>
                    
                    <div class="table-wrapper">
        <div class="wrapper-paging">
          <ul>
            <li><a class="paging-back">&lt;</a></li>
            <li><a class="paging-this"><strong>0</strong> de <span>x</span></a></li>
            <li><a class="paging-next">&gt;</a></li>
          </ul>
        </div>
        <div class="wrapper-panel">
        <input type="hidden" id="swpag" value="nuevaconpfactura" >
                     <table width="662" border="0" id="tabpag">
                     	<thead>
                            <tr>
                                <!--<td style="border-width: 0px; ">Id</td>-->
                                <td style="border-width: 0px; ">ID</td>
                                <td style="border-width: 0px; ">Indicativo</td>
                            </tr>
                         </thead>
                         <tbody>
                            <?php
                                foreach ($Listar as $Valor) {
                            ?>
                          		<tr>
                                     <td style="border-width: 0px; "> <?php echo $Valor['id'] ?> </td>
                                     <td style="border-width: 0px; "> <?php echo $Valor['conpfact'] ?> </td>

                                 </tr>
                          </tbody>
                               <?php }
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

