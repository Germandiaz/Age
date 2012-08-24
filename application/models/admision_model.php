 <?php
 /* creado: German Díaz
 * fecha creado: 17- Dic-2011
 * ultima Actualiza 05-Ene-2012:
*/
class admision_model extends CI_Model{
  
    function ingresaradmision($observacion){
         $this->db->insert('TBADMISIONES',$observacion);
    }
    
    function consultaridadmisionjoin($idadmision,$observaciones){
        $consulta = $this->db->query('select ID from TBADMISIONES where TBPERSONA_ID ='.$idadmision);
        
        foreach ($consulta->result() as $fila){
                     $lis['0']['id']=$fila->ID;
            }
       echo $idadmisi = $lis['0']['id'];
        
       $this->db->where('ID', $idadmisi);
       $this->db->update('TBADMISIONES', $observaciones); 
    }

    function consultaridadmision($idpersona){
         $consulta = $this->db->query('select ID from TBADMISIONES where TBPERSONA_ID ='.' '.$idpersona);
        
       if($consulta->num_rows()>0){
            foreach ($consulta->result() as $fila){
                     $listar['0']['id']=$fila->ID;
            }
        }
        $idadmision = $listar['0']['id'];
        return $idadmision;
    }
    
}
?>