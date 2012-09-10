<div>
  <?php $atributos = array('id' => 'nuefac_form', 'class' => 'form_nuefac');
    echo form_open('nuevafactura', $atributos);
  ?>
  <p><?php echo form_submit('submit', 'Agregar Factura'); ?></p>
  </div>
  <div>
    <input type="hidden" id="swpag" value="facturasingresado" >
    <table>
      <thead>
        <tr>
          <td>N&uacute;mero Factura</td>
          <td>Cod. persona elaboro</td>
          <td>Fecha realizaci&oacute;n</td>
          <td>Concecutivo</td>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($Listar as $Valor) { ?>
        <tr>
          <td> <?php echo $Valor['numero'] ?> </td>
          <td> <?php echo $Valor['personaelaboro'] ?> </td>
          <td> <?php echo $Valor['fechaelaboracion'] ?> </td>
          <td> <?php echo $Valor['consecutivo'] ?> </td>
        </tr>
      </tbody>
      <?php } ?>
    </table>
  </div>
</div>