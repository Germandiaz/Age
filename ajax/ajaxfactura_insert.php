<?php 
//include_once 'factura_model.php';
require_once ("../application/models/factura_model.php");
if (isset ($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'){

    $factura = new factura_model;    
    $factura->insertarfactura($_POST);
  //   if(isset ($dat)){      
  //  echo $_POST['idusuario'];
 //   echo $_POST['numerocampos'];
 //   echo $_POST['idusuarioelabora'];
  //  echo $_POST['concepto1'];
    ?>
<div>
    <p><h2>Formulario enviado correctamente</h2></p>
</div>
<?php 
}else{
    ?>
    <p><h2>Se requiere activar Javascript</h2></p> 
<?php }
 ?>

