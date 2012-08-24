<?php
class valoracion_model extends CI_Controller{    
    function __construct() {
        parent::__construct();
    }
    function insertarValo($Tvalo,$SValo,$NValo){
        $Tipvalor = array(
            'nombrepais' => $Tvalo,
        );
        return $this->db->insert('tbpais',$Tipvalor);
     /*   $Subvalor = array(
            'idpais' => $SValo,
        );
        $this->db->insert('tbpais',$Subvalor);
        $valor = array(
            'tabla' => $NValo
        );
        return $this->db->insert('tbpais',$valor); */
    }
    
     function eliminarValo(){
        $this->db->where("id","3");
        $this->db->delete("entradas");
    }
    
    function Actualizar(){
         $ActualizarValo = array(
         "title" => "",
         "body" => "",
         "name" => "",
         );
        $this->db->where("id","3");
        //$this->db->update("entradas",$update);
    }
   }
?>