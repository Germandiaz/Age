<div>
    <?php $atributos = array('id' => 'nueinv_form', 'class' => 'form_nueinv');
        echo form_open('inventario', $atributos);
    ?>
    <input type="button" id="idboton" value="Ocultar" />
    <div id="iddiv">
        <? echo form_close(); ?>
        <ul>
            <li><a class="paging-back">&lt;</a></li>
            <li><a class="paging-this"><strong>0</strong> de <span>x</span></a></li>
            <li><a class="paging-next">&gt;</a></li>
        </ul>
        <input type="hidden" id="swpag" value="inventario" >
        <table width="662" border="0" id="tabpag">
            <thead>
                <tr>
                    <td>Codigo inventario</td>
                    <td>Cedula propietario</td>
                    <td>primer nombre</td>
                    <td>segundo nombre</td>
                    <td>primer apellido</td>
                    <td>segundo apellido</td>
                    <td>cantidad productos</td>
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
                    <td id="ind<?php echo $cont;?>"> <?php echo $Valor['id'] ?> </td>
                    <td> <?php echo $Valor['documento'] ?> </td>
                    <td> <?php echo $Valor['pnombre'] ?> </td>
					<td> <?php echo $Valor['snombre'] ?> </td>
					<td> <?php echo $Valor['papellido'] ?> </td>
					<td> <?php echo $Valor['sapellido'] ?> </td>
					<td> <?php echo $Valor['cantidad'] ?> </td>
					<td><?php echo anchor_popup($rutains,'A&ntilde;adir Productos','')?></td>
                </tr>
            </tbody>
            <?php $cont = $cont+1; }?>
        </table>
    </div>
</div>