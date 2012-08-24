<div class="cleared"></div>
</div>
<div class="art-layout-cell art-content">
    <div class="art-post">
        <div class="art-post-body">
            <div class="art-post-inner art-article">
                <div class="art-postcontent">
                         <?php
                        $atributos = array('id' => 'loguin_form', 'class' => 'form_loguin');
                        echo form_open('buscarpersona/verpersona', $atributos);
                        $busquedapersona = array('name' => 'textbuesquedaavanzada', 'id' => 'textbuesquedaavanzada',
                            'value' => set_value('textbuesquedaavanzada')
                        );
                        $buscarPersonaGrupo = array('name' => 'txtbusPersonaGrupo','id' => 'txtbusPersonaGrupo',
                            'value' => set_value('txtbusPersonaGrupo')
                        );
                        $busqucarpersona = array('name' => 'textbusquedaavanzadapersona','id' => 'textbusquedaavanzadapersona',
                            'value' => set_value('textbusquedaavanzadapersona')
                        );
                        ?>
                    <div>
                      <table width="662" border="1">  
                          <tr>
                          <td style="border-width: 0px; ">Buscar:</td>
                          <td style="border-width: 0px; "> <?php echo form_input($busqucarpersona); ?></td>
                          </tr>
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
                     <table width="662" border="0" id="tabpag">
                     	<thead>
                            <tr>
                                <!--<td style="border-width: 0px; ">Id</td>-->
                                <td style="border-width: 0px; ">Nombre</td>
                                <td style="border-width: 0px; ">Primer Apellido</td>
                                <td style="border-width: 0px; ">Segundo Apellidos</td>
                                <td style="border-width: 0px; ">Identificación</td>
                                <td style="border-width: 0px; ">Ver & Editar</td>
                            </tr>
                         </thead>
                         <tbody>
                            <?php
                                foreach ($listpersona as $Valor) {
                            ?>
                             <tr>
                                     <!--<td style="border-width: 0px; "> <?php echo $Valor['id'] ?> </td>-->
                                     <td style="border-width: 0px; "> <?php echo $Valor['pnombre'] ?> </td>
                                     <td style="border-width: 0px; "> <?php echo $Valor['papellido'] ?> </td>
                                     <td style="border-width: 0px; "> <?php echo $Valor['sapellido'] ?> </td>
                                     <td style="border-width: 0px; "> <?php echo $Valor['numdoc'] ?> </td>
                                     <td style="border-width: 0px; "><?php echo anchor('buscarpersona/verpersona/'.$Valor['id'], 'Ver') ?> </td>
                                 </tr>
                          
                               <?php }
                            ?>
                        </tbody>
                    </table>
                <script type="text/javascript">  
                    $('input#textbusquedaavanzadapersona').quicksearch('table#tabpag tbody tr');
                </script>
                 </div>  
                        <?php echo form_close(); ?>
                </div>
                <div class="cleared"></div>
            </div>
            <div class="cleared"></div>
        </div>
    </div>
    <div class="cleared"></div>
</div>
</div>
</div>
