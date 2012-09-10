<div>
  <div>
    <?php
      $atributos = array('id' => 'factura_form', 'class' => 'form_factura');
    ?>
  </div>
  <?php
    $nombre = array('name' => 'buscar_usuario','id' => 'buscar_usuario','value' => set_value('buscar_usuario'));
    /* $conceptos = array('name' =>  'txtconcepto','id' => 'txtconcepto','value' => set_value('txtconcepto'));*/
    $direccion = array('name' =>  'txtdireccion','id' => 'txtdireccion','value' => set_value('txtdireccion'));
    $telefono = array('name' =>  'txttelefono','id' => 'txttelefono','value' => set_value('txttelefono'));
    $botonaddfila = array('name' => 'addfila','id' =>'addfila','content' =>'A&ntilde;adir');
  ?>
  <input type="submit" id="enviarsub" name="enviarsub" value="Guardar" >
  <form>
    <table id="resultadousuariofactura">
      <tbody>
        <tr>
          <th colspan="15">Canitas Doradas NIT 900.095.599-1</th>
        </tr>
        <tr>
          <th>Se&ntilde;or(a)</th>
          <td><?php echo form_input($nombre); ?></td>
          <td>&nbsp;</td>
          <td></td>
          <th></th>
          <td></td>
          <td>Nro. Factura</td>
          <td><div id= "divfactura"></div></td>
          <th></th>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th colspan="3">Direcci&oacute;n</th>
          <td colspan="5"><?php echo form_input($direccion); ?></td>
          <th>Tel&eacute;fono</th>
          <td><?php echo form_input($telefono); ?></td>
          <th>C.C / NIT</th>
          <td><div id="cedulapersona"></div></td>
          <td>&nbsp;</td>
          <th></th>
          <td></td>
        </tr>
      </table>
      <?php  echo form_button($botonaddfila); ?>
      <div>
        <table id="tab1">
          <tr>
            <th colspan="2">Descripci&oacute;n</th>
          </tr>
          <tr>
            <td colspan="2"></td>
          </tr>
        </table>
      </div>
      <div>
        <table id="tab">
          <tr>
            <th colspan="2">Cantidad</th>
            <th colspan="2">Tipo de Pago</th>
            <th colspan="2">Valor Unitario</th>
          </tr>
        </table>
      </div>
      <div>
        <table>
          <tr>
            <th colspan="4">Elaborado por:</th>
            <td colspan="5"><?php echo $nombre.' '.$apellido ?></td>
            <th colspan="4">Total:</th>
            <td colspan="2"><? echo form_label(''); ?></td>
          </tr>
          <tr>
            <th colspan="4"></th>
            <td colspan="5"><?php echo form_label(); ?></td>
            <td></td>
            <td></td>
            <td><div id="divocultoidelabora"><?php echo $idsesion ?></div></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </tbody>
      </table>
    </div>
  </form>
  <?php echo form_close(); ?>
</div>