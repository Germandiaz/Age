<?php
class factura_model{
    function insertarfactura($datos) {
     $cnx = mysql_connect('mysql.nixiweb.com','u546409693_age','Age2011');
     if (!$cnx)
        // echo "Error conectando a la base de datos.";
         exit;
    mysql_selectdb('u546409693_age',$cnx);  
     //Insertar tabla tbfactura
     $sqlconsul = ("SELECT MAX(NUMERO) as ultimafac FROM TBFACTURAS");
      $resultado = mysql_query($sqlconsul, $cnx);
      $fila = mysql_fetch_array($resultado);
      $resulnumerofact = $fila['ultimafac'] + 1;
      $fecha_actual = Date("Y-m-d h:i:s"); 
      $pesonaelabora = $datos['idusuarioelabora']; 
      $pesonarecibe =  $datos['idusuario'];
      $sqlfactura = ("INSERT INTO TBFACTURAS (NUMERO,TBPERSONARECIBE_ID,TBPERSONAELABORA_ID,FECHAELABORACION,CONSECUTIVOTOTFAC) VALUES(".$resulnumerofact.",".$pesonarecibe.",".$pesonaelabora.",'".$fecha_actual."',".$resulnumerofact.");");
      $resultadofactura = mysql_query($sqlfactura, $cnx); 
      if($datos['numerocampos'] != 4){
        $filas = $datos['numerocampos'];
        $a=1; $i =1; $j=2; $k=3; $p=4;
        while($a <= $filas){
       $pconcepto = $datos['concepto'.$i];
       $sconcepto = $datos['concepto'.$j];
       $tconcepto = $datos['concepto'.$k];
       $cconcepto = $datos['concepto'.$p];
        $sqlfactconcep = ("INSERT INTO TBFACTURASXTBCONCEPTOFACTURAS (TBCONCEPTOFACTURA_ID, TBFACTURA_NUMERO, CANTIDAD ,VALOR , CONCEPTO) VALUES(".$cconcepto.",".$resulnumerofact.",".$pconcepto.",".$tconcepto.",'".$sconcepto."');");
        $resultadoconcepto = mysql_query($sqlfactconcep, $cnx);
        $i = $i + 4;
        $j = $j + 4;
        $k = $k + 4;
        $p = $p + 4;
        $a = $a + 4;
        }
     }else{
        /* $pconcepto = $datos['concepto1'];
         $sconcepto = $datos['concepto2'];
         $tconcepto = $datos['concepto3'];
         $cconcepto = $datos['concepto4']; */
        $sqlfactconcep = ("INSERT INTO TBFACTURASXTBCONCEPTOFACTURAS (TBCONCEPTOFACTURA_ID,TBFACTURA_NUMERO,CANTIDAD,VALOR,CONCEPTO) VALUES(".$cconcepto.",".$resulnumerofact.",".$pconcepto.",".$tconcepto.",'".$sconcepto."');");
        $resultadoconcepto = mysql_query($sqlfactconcep, $cnx);
     }   
      }
}
?>
