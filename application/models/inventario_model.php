<?php
/*
 * Creado el 27/11/2011
 * Actualizado el 27/11/2011
 * Por: Jesse Javier Cogollo A.
 * nota: 
 */
class inventario_model extends CI_Controller{    
    function __cInventario_Modelonstruct() {
        parent::__construct();
    }
    
    function insertarMedi($NoMedica,$PresMedica){
        $Medic = array(
            'Nombre' => $NoMedica,
            'Presentac' => $PresMedica
        );
        return $this->db->insert('tbinventario',$Medic);
    }
    
     function eliminarMedi(){
        $this->db->where("id","3");
        $this->db->delete("entradas");
    }
    
    function ActualizarMedi(){
         $ActualizarValo = array(
         "title" => "",
         "body" => "",
         "name" => "",
         );
        $this->db->where("id","3");
       // $this->db->update("entradas",$update);
    }
   }
?>