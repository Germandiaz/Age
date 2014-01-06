           <script type="text/javascript">
                 $(document).ready(function(){
                     
                     
                     /*Número factura*/
                    $.post('nuevafactura/nrofactura', null , function(respuesta){
                       $('#divfactura').text(respuesta);
                    }).error(function() { alert("Ocurrio un error al consultar el número de factura"); });
                     $('#buscar_usuario').autocomplete({
                         source:'nuevafactura/buscarpersonasajax',
                         select: function(event, ui){
                             $('#cedulapersona').html(ui.item.numerdoc);
                             $('#txttelefono').val(ui.item.telefono);
                             $('#txtdireccion').val(ui.item.direccion);
                             $('#divocultoidusuario').text(ui.item.id);   
                     }
                     });

                 });
       </script>
        <script type="text/javascript">
     
     $(document).ready(function(){
          
                $("#factura_form").validate({
                        rules:{
                            buscar_usuario: { 
                                required: true, maxlength: 50
                            }     
                        },
                        messages: {  
                            buscar_usuario: { 
                                required: "Campo obligatorio", maxlength: "Máximo se permiten 50 caracteres"
                            }                             
                        },
                        submitHandler: function(){                      
                           var fil=document.getElementById("tab").rows.length;
                           var result = (fil - 2) * 4 ;
                           var datos;
                           var  a=1;
                           for(var i = 0; i < result; i++){
                                datos += '&concepto'+a+'= '+ $('#concepto'+a).val() +'&';   
                                a++;
                            };
                            datos += '&numerocampos='+ result;
                            datos += '&idusuario='+ $('#divocultoidusuario').text(); 
                            datos += '&idusuarioelabora='+ $('#divocultoidelabora').text();

                            $.post('ajax/ajaxfactura_insert.php', datos , function(respuesta){
                                 $('#divfactura').load('nuevafactura/nrofactura');
                                 $('#mensajeinsert').html(respuesta);
                            });     
                        } 
                });
    });
  </script>
              
                    <div>  <?php 
                    $atributos = array('id' => 'factura_form', 'class' => 'form_factura');
                    echo form_open('', $atributos);
                    echo form_submit('submit', 'Guardar'); ?>
                </div>
                       <?php          
                        $nombre = array(
                            'name' => 'buscar_usuario',
                            'id' => 'buscar_usuario',
                            'value' => set_value('buscar_usuario')
                            );
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
                        'content' =>'Añadir'
                    );
                        ?>
                    <div >
                    </div>
              <div id="mensajeinsert" >
                  
              </div>
              
              
                    <table width="700" border="0" id="resultadousuariofactura">
                        <tbody>
                            
                            <tr>
                                <th colspan="15" style="border-width: 0px; ">Canitas Doradas NIT 900.095.599-1</th>
                            </tr>
                            <tr>
                                <th align="left" colspan="3" style="border-width: 0px; ">Señor(a)</th>
                                <td width="24" style="border-width: 0px; "><?php echo form_input($nombre); ?></td>
                                <td width="24" style="border-width: 0px; "></td>
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
                                <th align="left" colspan="3" style="border-width: 0px; "><label for="txtdireccion">Dirección</label></th>
                                <td colspan="5" style="border-width: 0px; "><?php echo form_input($direccion); ?></td>
                                <th align="left"  style="border-width: 0px; ">Teléfono</th>
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
                     var cont=document.getElementById("tab").rows.length;
                     var result = (cont - 2) * 4;
                     var tds = '<tr>';
                     var td1 = '<tr>';
                     tds += '<td id="factura'+(1+result)+'" colspan="2"> <input type="text" class="suma"  id="concepto'+(1+result)+'"  name="concepto[]" required /> </td>';
                     tds += '<td id="factura'+(3+result)+'" colspan="2"> <input type="text" id="concepto'+(3+result)+'"  name="concepto[]"  required /> </td>';
                     tds += '<td id="factura'+(2+result)+'" colspan="2"> <input type="text" class="suma" id="concepto'+(2+result)+'"  name="concepto[]" required /> </td>';
                     tds += '<td id="total'+(5+result)+'" colspan="2" class="totalvalores"> </td>';
                     td1 += '<td id="rut'+(result + 4)+'" colspan="2"> <select name="concepto[]" id="concepto'+(result + 4)+'"> <?php foreach ($conceptos as $concep) { ?> \n\
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
                                <th colspan="2">Descripción</th>
                            </tr>
             
                            <tr>
                                <td colspan="2"></td>
                            </tr>
                    </table>
               </div>
              <div class="tablas_linea">
                    <table id="tab">
                            
                            <tr>
                                <th colspan="2">Cantidad</th>
                                <th colspan="2">Tipo de Pago</th>
                                <th colspan="2">Valor Unitario</th>
                                <th colspan="2">Valor Total</th>
                            </tr>
             
                            <tr>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
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
                                <td colspan="5" style="border-width: 0px; "><?php echo $pnombre.' '.$apellido ?></td>
                                <th align="left" colspan="4" style="border-width: 0px; ">Total:</th>
                                <td colspan="2" style="border-width: 0px; "><div id="resultadosuma"></div></td>
                            </tr>
                            <tr>
                                <th align="left" colspan="4" style="border-width: 0px; ">CC:</th>
                                <td colspan="5" style="border-width: 0px; "><?php echo form_label(); ?><div id="un"></div></td>
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
                  <script type="text/javascript">  

                  $(".suma").live('keyup', function(e){
                          var i = 5;
                          var resultado;
                          var total;
                          var valortotal = 0;
                          var nuevovalor = $(this).val();
                          var valorid = $(this).attr("id");
                          var con= valorid.length;  
                          var  nue = valorid.substring(8, con);
                          var par_impar = parseInt(nue) % 2;
                         if(par_impar == 0 ){   
                          var  idinput = parseInt(nue) - 1;
                          valortotal = parseInt(nuevovalor) + parseInt($('#concepto'+idinput).val());
                            var idtotal = parseInt(nue) + 3;
                            $('#total'+idtotal).html(valortotal);
                         }else{
                           var  idinput = parseInt(nue) + 1;
                           valortotal = parseInt(nuevovalor) + parseInt($('#concepto'+idinput).val());
                            var idtotal = parseInt(nue) + 4;
                            $('#total'+idtotal).html(valortotal);
                         }
                         var sumavalortotal = 0;
                        $(".totalvalores").each(function () {                        
                            total = $('#total'+i).html();
                            
                            if(total != 'NaN'){
                                resultado = parseInt(total);
                              sumavalortotal = sumavalortotal + resultado;
                            }else{
                                sumavalortotal;
                              sumavalortotal = '<div class ="estilomensajeerror">Error, Uno de los valores ingresados en las columnas Cantidad o Valor Unitario no son númericos</div>';
                            }
                            i = i + 4;
                        });
                        $('#resultadosuma').html(sumavalortotal);
                   }); 
                   
                   </script>  
                  </div>
              <div id="mostrarresultado">
                  
              </div>
                  <?php echo form_close(); ?>
           

