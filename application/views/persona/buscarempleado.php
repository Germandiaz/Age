<div>
    <table>
        <?php
            $atributos = array('id' => 'loguin_form', 'class' => 'form_loguin');
            echo form_open('buscarempleado/verpersona', $atributos);
            $busquedapersona = array('name' => 'textbuesquedaavanzada','id' => 'textbuesquedaavanzada','value' => set_value('textbuesquedaavanzada'));
            $buscarPersonaGrupo = array('name' => 'txtbusPersonaGrupo','id' => 'txtbusPersonaGrupo','value' => set_value('txtbusPersonaGrupo'));
            $busqucarpersona = array('name' => 'textbusquedaavanzadapersona','id' => 'textbusquedaavanzadapersona','value' => set_value('textbusquedaavanzadapersona'));
        ?>
        <tbody>
            <tr>
                <th colspan="12">Búsqueda Avanzada</th>
            </tr>    
        </tbody>  
    </table>
<div>
<div>
    <table>  
        <tr>
            <td>Buscar:</td>
            <td> <?php echo form_input($busqucarpersona);?></td>
        </tr>
    </table>
</div>
<div>
    <ul>
        <li><a>&lt;</a></li>
        <li><a><strong>0</strong> de <span>x</span></a></li>
        <li><a>&gt;</a></li>
     </ul>
</div>
<table id="tabpag">
    <thead>
        <tr>
            <!--<td>Id</td>-->
            <td>Nombre</td>
            <td>Primer Apellido</td>
            <td>Segundo Apellidos</td>
            <td>Identificación</td>
            <td>Ver y Editar</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($listpersona as $Valor) { ?>
        <tr>
            <!--<td"> <?php echo $Valor['id'] ?> </td>-->
            <td> <?php echo $Valor['pnombre'] ?> </td>
            <td> <?php echo $Valor['papellido'] ?> </td>
            <td> <?php echo $Valor['sapellido'] ?> </td>
            <td> <?php echo $Valor['numdoc'] ?> </td>
            <td> <?php echo anchor('buscarempleado/verpersona/'.$Valor['id'], 'Ver') ?> </td>
        </tr>
    </tbody>
    <?php } ?>
</table>
<script type="text/javascript">  
    $('input#textbusquedaavanzadapersona').quicksearch('table#tabpag tbody tr');
</script>
<?php echo form_close(); ?>

