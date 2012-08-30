<div>
    <?php
        $atributos = array('id' => 'loguin_form', 'class' => 'form_loguin');
        echo form_open('buscarpersona/verpersona', $atributos);
        $busquedapersona = array('name' => 'textbuesquedaavanzada', 'id' => 'textbuesquedaavanzada','value' => set_value('textbuesquedaavanzada'));
        $buscarPersonaGrupo = array('name' => 'txtbusPersonaGrupo','id' => 'txtbusPersonaGrupo','value' => set_value('txtbusPersonaGrupo'));
        $busqucarpersona = array('name' => 'textbusquedaavanzadapersona','id' => 'textbusquedaavanzadapersona','value' => set_value('textbusquedaavanzadapersona'));
    ?>
    <div>
        <table>  
            <tr>
                <td>Buscar:</td>
                <td> <?php echo form_input($busqucarpersona); ?></td>
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
                <!--<td style="border-width: 0px; ">Id</td>-->
                <td style="border-width: 0px; ">Nombre</td>
                <td style="border-width: 0px; ">Primer Apellido</td>
                <td style="border-width: 0px; ">Segundo Apellidos</td>
                <td style="border-width: 0px; ">Identificación</td>
                <td style="border-width: 0px; ">Ver y Editar</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listpersona as $Valor) { ?>
            <tr>
                <!--<td> <?php echo $Valor['id'] ?> </td>-->
                <td> <?php echo $Valor['pnombre'] ?> </td>
                <td> <?php echo $Valor['papellido'] ?> </td>
                <td> <?php echo $Valor['sapellido'] ?> </td>
                <td> <?php echo $Valor['numdoc'] ?> </td>
                <td> <?php echo anchor('buscarpersona/verpersona/'.$Valor['id'], 'Ver') ?> </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <script type="text/javascript">  
        $('input#textbusquedaavanzadapersona').quicksearch('table#tabpag tbody tr');
    </script>
</div>  
<?php echo form_close(); ?>