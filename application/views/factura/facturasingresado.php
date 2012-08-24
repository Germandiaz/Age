
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
                <?php $atributos = array('id' => 'nuefac_form', 'class' => 'form_nuefac');
                echo form_open('nuevafactura', $atributos); ?>
                    <p align="left"><?php echo form_submit('submit', 'Agregar Factura'); ?>
                    </p>
                    <p><br /></p>
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
        <input type="hidden" id="swpag" value="facturasingresado" >
                     <table width="662" border="0" id="tabpag">
                     	<thead>
                            <tr>
                                <td style="border-width: 0px; ">N&uacutemero Factura</td>
                                <td style="border-width: 0px; ">Cod. persona elaboro</td>
                                <td style="border-width: 0px; ">Fecha realizaci&oacuten</td>
                                <td style="border-width: 0px; ">Concecutivo</td>
                            </tr>
                         </thead>
                         <tbody>
                            <?php
                                foreach ($Listar as $Valor) {
                            ?>
                          		<tr>
                                     <td style="border-width: 0px; "> <?php echo $Valor['numero'] ?> </td>
                                     <td style="border-width: 0px; "> <?php echo $Valor['personaelaboro'] ?> </td>
                                     <td style="border-width: 0px; "> <?php echo $Valor['fechaelaboracion'] ?> </td>
                                     <td style="border-width: 0px; "> <?php echo $Valor['consecutivo'] ?> </td>
                                </tr>
                          </tbody>
                               <?php }
                            ?>
                    </table>
                   </div>
			</div>
                    
                    <p><br /></p> 
                                           
                </div>
            </div>
    <div class="cleared"></div>
</div>
</div>
</div>


