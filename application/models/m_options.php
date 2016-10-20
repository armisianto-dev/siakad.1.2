<?php

/**
 * Description of m_artikel
 *
 * @author white
 */
class M_options extends CI_Model {

    
    function getTA() {
        $sql =$this->db->query("
            SELECT
                id_thnajaran AS ID,
                thn_ajaran AS THN 
            FROM
                tahun
            ORDER BY id_thnajaran DESC
        ");
        return $sql;
    }

    function get_by($name) {
        $sql = "
            SELECT
              id AS ID,
              name, 
              value
            FROM
              rc_options 
            WHERE name = ?
        ";
        $query = $this->db->query($sql, $name);
        return $query;
    }
    function getTA_id($id) {
        $sql = "
            SELECT
              thn_ajaran
            FROM
              tahun 
            WHERE id_thnajaran = ?
        ";
        $query = $this->db->query($sql, $id);
        return $query;
    }

    
    function update($id, $dataUpdate) {
        $this->db->where('id', $id);
        $update = $this->db->update('rc_options', $dataUpdate);
        return $update;
    }

   
}

?>
