<?php
class insertar_model extends CI_Model{
    
function insertar($insgenerico,$Tabla){
        return $this->db->insert($Tabla,$insgenerico);
    }
}
