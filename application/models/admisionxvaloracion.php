 <?php
 /* creado: German Díaz
 * fecha creado: 20- Nov-2011
 * ultima Actualiza: 02-Enero-2012
*/
class admisionxvaloracion extends CI_Model{
  
    function consultaridpersona($condicion){
       $consulta = $this->db->query('select ID from TBPERSONAS where NUMERODOC ='.' '.$condicion);
       if($consulta->num_rows()>0){
            foreach ($consulta->result() as $fila){
                     $listar['0']['id']= $fila->ID;
            }
        }
       return true;
    }
    
    function insertaradmisionxvaloracion($obje,$idadmision){
       // return $this->db->insert_batch('tbadmisionesxtbvaloraciones', $obje);
       // $this->db->insert_batch('tbadmisionesxtbvaloraciones', $obje);
      //   $this->db->insert_rows('tbadmisionesxtbvaloraciones', array('TBADMISION_ID', 'TBVALORACION_ID','OBSERVACION'),$obje); 
     //   $TBADMISION_ID='TBADMISION_ID';
      /*  $TBVALORACION_ID='TBADMISION_ID';
          foreach($obje as $seleccion) {
          $this->db->insert($TBADMISION_ID.", ".$TBVALORACION_ID,array($idadmision,$seleccion));
          }*/
        /*$active_record = TRUE; 
         
         $stmt =  $db->stmt_init(); 
            $stmt->prepare("INSERT INTO tbadmisionesxtbvaloraciones (TBADMISION_ID, TBVALORACION_ID, OBSERVACION) VALUES(?, ?, ?)"); 
            foreach($obje as $row) 
            { 
                $stmt->bind_param('idsb', $row['TBADMISION_ID'], $row['TBVALORACION_ID'], $row['OBSERVACION']); 
                $stmt->execute(); 
            } 
            $stmt->close(); */
         foreach($obje as $values) 
            { 
             if($values['TBVALORACION_ID'] == "0"){
             }else{
              $this->db->insert('TBADMISIONESXTBVALORACIONES', $values);
             }
            }
    }

}
?>
