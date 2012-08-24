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
             <script type="text/javascript">
                 $(document).ready(function(){
                    $.post('nuevafactura/nrofactura', null , function(respuesta){
                       $('#divfactura').text(respuesta);
                    });
                     $('#buscar_usuario').autocomplete({
                         source:'nuevafactura/ajax',
                         select: function(event, ui){
                             $('#cedulapersona').html(ui.item.numerdoc);
                             $('#txttelefono').val(ui.item.telefono);
                             $('#txtdireccion').val(ui.item.direccion);
                             $('#divocultoidusuario').text(ui.item.id);      
                     }
                     });
                    //   $("#divfactura").load("nuevafactura/nrofactura");
                   
                 
                 });       
              </script>
              
            <div class="art-post-inner art-article">
                <div class="art-postcontent">
                    <div>  <?php 
                    $atributos = array('id' => 'factura_form', 'class' => 'form_factura'); ?>
                </div>
                       <?php          
                        $nombre = array(
                            'name' => 'buscar_usuario',
                            'id' => 'buscar_usuario',
                            'value' => set_value('buscar_usuario')
                            );
                   /*     $conceptos = array(
                           'name' =>  'txtconcepto',
                            'id' => 'txtconcepto',
                            'value' => set_value('txtconcepto')
                        );*/
                        $direccion = array(
                           'name' =>  'txtdireccion',
                            'id' => 'txtdireccion',
                            'value' => set_value('txtdireccion')
                        );
                        $telefono = array(
                           'name' =>  'txttelefono',
                            'id' => 'txttelefono',
                            'value' => set_value('txttelefono')
                        );
                        
                    $botonaddfila = array(
                        'name' => 'addfila',
                        'id' =>'addfila',
                        'content' =>'A&ntilde;adir'
                    );
                        ?>
                    <div >
                    </div>
                    <input type="submit" id="enviarsub" name="enviarsub" value="Guardar" >
              <script type="text/javascript">

                 $("#enviarsub").click(function (){
                   var fil=document.getElementById("tab").rows.length;
                   var result = (fil - 2) * 4 ;
                  // alert(result);
                   var datos;
                   var  a=1;
                   for(var i = 0; i < result; i++){
                      datos += '&concepto'+a+'= '+ $('#concepto'+a).val() +'&';   
                      a++;
                    };
                    datos += '&numerocampos='+ result;
                    datos += '&idusuario='+ $('#divocultoidusuario').text(); 
                    datos += '&idusuarioelabora='+ $('#divocultoidelabora').text();
                   // alert(datos);
                    $.post('ajax/ajaxfactura_insert.php', datos , function(respuesta){
                       $('#mensajeinsert').html(respuesta);
                    });
              });
       
              </script>
              <div id="mensajeinsert" >
                  
              </div>
              
              <form>
                    <table width="700" border="0" id="resultadousuariofactura">
                        <tbody>
                            
                            <tr>
                                <th colspan="15" style="border-width: 0px; ">Canitas Doradas NIT 900.095.599-1</th>
                            </tr>
                            <tr>
                                <th align="left" colspan="3" style="border-width: 0px; ">Se&ntilde;or(a)</th>
                                <td width="24" style="border-width: 0px; "><?php echo form_input($nombre); ?></td>
                                <td width="60" style="border-width: 0px; ">&nbsp;</td>
                                <td width="60" style="border-width: 0px; "></td>
                                <th align="left" width="82" style="border-width: 0px; "></th>
                                <td width="69" style="border-width: 0px; "></td>
                                <td width="24" style="border-width: 0px;">Nro. Factura</td>
                                <td width="12" style="border-width: 0px; "><div id= "divfactura"></div></td>
                                <th align="left" width="72" style="border-width: 0px; "></th>
                                <td width="59" style="border-width: 0px; "><div>  </div></td>
                                <td width="59" style="border-width: 0px; "> </td> 
                            </tr>
                            <tr>
                                <th align="left" colspan="3" style="border-width: 0px; "></th>
                                <td colspan="5" style="border-width: 0px; "></td>
                                <th align="left" style="border-width: 0px; "></th>
                                <td style="border-width: 0px; "></td>
                                <td style="border-width: 0px; "><div id="divocultoidusuario" style="display:none;" ></div></td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th align="left" colspan="3" style="border-width: 0px; ">Direcci&oacuten</th>
                                <td colspan="5" style="border-width: 0px; "><?php echo form_input($direccion); ?></td>
                                <th align="left"  style="border-width: 0px; ">Tel&eacute;fono</th>
                                <td style="border-width: 0px; "><?php echo form_input($telefono); ?></td>
                                <th align="left"  style="border-width: 0px; ">C.C / NIT</th>
                                <td style="border-width: 0px; "><div id="cedulapersona"></div></td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <th align="left"  style="border-width: 0px; "></th>
                                <td style="border-width: 0px; "></td>
                            </tr>
                    </table>
                  
                  <?php  echo form_button($botonaddfila); ?>
               
                    <script type="text/javascript">
                 $("#addfila").click(function(){
                     var n = $('tr:last td', $("#tab")).length;
                     var cont=document.getElementById("tab").rows.length;
                     var result = (cont - 2) * 4;
                     var tds = '<tr>';
                     var td1 = '<tr>';
                     for(var i = 0; i < n; i++){
                         tds += '<td align="left" id="rut'+(i+result)+'" colspan="2" style="border-width: 0px; "> <input type="text"  size="20" id="concepto'+(i+1+result)+'"  name="concepto[]"/> </td>';
                        // alert(i+1+result);
                     }
                     td1 += '<td align="left" id="rut'+(result + 4)+'" colspan="2" style="border-width: 0px; "> <select name="concepto[]" id="concepto'+(result + 4)+'"> <?php foreach ($conceptos as $concep) { ?> \n\
                                                                                                                 <option value ="<?php echo $concep['id'] ?>"> <?php echo $concep['descripcion'] ?> </option> \n\
                                                                                                                 <?php } ?></select>';
                      
                                                                                                                                                                          
                     tds += '</tr> ';                                                                       
                     td1 += '</tr> ';
                     $("#tab").append(tds);
                     $("#tab1").append(td1);
                     
                     });         
              </script>
  
              <div class="tablas_linea">
                 <table id="tab1">
                            
                            <tr>
                                <th align="left" colspan="2" style="border-width: 0px; ">Descripci&oacuten</th>
                            </tr>
             
                            <tr>
                                <td align="left" colspan="2" style="border-width: 0px; "></td>
                            </tr>
                    </table>
                  </div>
              <div class="tablas_linea">
                    <table id="tab">
                            
                            <tr>
                                <th align="left" colspan="2" style="border-width: 0px; ">Cantidad</th>
                                <th align="left" colspan="2" style="border-width: 0px; ">Tipo de Pago</th>
                                <th align="left" colspan="2" style="border-width: 0px; ">Valor Unitario</th>
                            </tr>
             
                            <tr>
                                <td align="left" colspan="2" style="border-width: 0px; "></td>
                                <td align="left" colspan="2" style="border-width: 0px; "></td>
                                <td align="left" colspan="2" style="border-width: 0px; "></td>
                            </tr>
                    </table>
              </div>
              <div class="tabla_factura">
                    <table>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td colspan="3" style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td colspan="4" style="border-width: 0px; ">&nbsp;</td>
                                <td colspan="2" style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td colspan="3" style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td colspan="4" style="border-width: 0px; ">&nbsp;</td>
                                <td colspan="2" style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <th align="left" colspan="4" style="border-width: 0px; ">Elaborado por:</th>
                                <td colspan="5" style="border-width: 0px; "><?php echo $nombre.' '.$apellido ?></td>
                                <th align="left" colspan="4" style="border-width: 0px; ">Total:</th>
                                <td colspan="2" style="border-width: 0px; "><? echo form_label(''); ?></td>
                            </tr>
                            <tr>
                                <th align="left" colspan="4" style="border-width: 0px; "></th>
                                <td colspan="5" style="border-width: 0px; "><?php echo form_label(); ?></td>
                                <td style="border-width: 0px; "></td>
                                
                                <td style="border-width: 0px; "></td>
                                <td style="border-width: 0px; "><div id="divocultoidelabora" style="display:none;"><?php echo $idsesion ?></div></td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                            <tr>
                                <td width="25" style="border-width: 0px; ">&nbsp;</td>
                                <td width="25" style="border-width: 0px; ">&nbsp;</td>
                                <td width="25" style="border-width: 0px; ">&nbsp;</td>
                                <td width="25" style="border-width: 0px; ">&nbsp;</td>
                                <td width="31" style="border-width: 0px; ">&nbsp;</td>
                                <td colspan="2" style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                                <td style="border-width: 0px; ">&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>
                  </div>
              </form>
              <div id="mostrarresultado">
                  
              </div>
                  <?php echo form_close(); ?>
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
</div>

