<?php
class actualizar_model extends CI_Model{
    
function actualizarusu($actgenerico,$condicion){
		$this->db->where('id',$condicion);
        return $this->db->update('tbpersonas',$actgenerico);
        //$consulta = $this->db->get('tbpersonas');
    }
    
function actualizareps($actgenerico,$condicion){
		$this->db->where('id',$condicion);
        return $this->db->update('tbeps',$actgenerico);
        //$consulta = $this->db->get('tbpersonas');
    }
    
function eliminarasis($tabla,$age,$idper){
			$consulta = $this->db->query('delete from '.$tabla.' where TBAGENDA_ID = "'.$age.'" and TBPERSONA_ID = "'.$idper.'" ');
    }
}
