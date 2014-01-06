<?php 

// require_once ("../application/models/factura_model.php"); // include para el Host
// modificación de ruta include para que no sea absoluta
include_once '..\application\models\factura_model.php';
if (isset ($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'){

  //   if(isset ($dat)){  
    //echo $_POST['concepto4'];   
  //   echo $_POST['concepto3'];  
  //   echo $_POST['concepto2'];  
   //  echo $_POST['concepto1'];  
  //  echo $_POST['idusuario'];
  //  echo $_POST['numerocampos'];

    foreach ($_POST as $key => $value)
    {
      if (empty($value)){
           
         $estadoregistro = "<div class='mensajeerror'><span>Error</span>, debe ingresar datos en los conceptos de la factura</div>";
         break;              
      }else{
          $factura = new factura_model;  
          $estadoregistro = $factura->insertarfactura($_POST);
          $estadoregistro = "<div class='mensajeexito'>Factura registrada correctamente</div>";
          break; 
      }
    }
    
    ?>
        <div>
   
                <p><h2><?php echo $estadoregistro?></h2></p>
    
        </div>
<?php 
}else{
    ?>
<div>
    <p><h2>Se requiere activar Javascript</h2></p> 
</div>
<?php }
 ?>

