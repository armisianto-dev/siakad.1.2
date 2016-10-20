<?php

/**
 * Description of m_artikel
 *
 * @author white
 */
class M_agama extends CI_Model {

    function get() {
        $q = $this->db->query("
            SELECT
              id_agama AS ID,
              agama
            FROM
              agama 
        ");
        return $q;
    }

    function save($dataInsert) {
        $query = $this->db->insert('agama', $dataInsert);
        return $query;
    }

    function get_by($id) {
        $sql = "
            SELECT 
              id_agama AS ID,
              agama
            FROM
              agama 
            WHERE id_agama = ?
        ";
        $query = $this->db->query($sql, $id);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
        } else {
            $result = array();
        }
        return $result;
    }

    
    function update($id, $dataUpdate) {
        $this->db->where('id_agama', $id);
        $update = $this->db->update('agama', $dataUpdate);
        return $update;
    }

    function delete($id) {
        $this->db->where('id_agama', $id);
        $delete = $this->db->delete('agama');
        return $delete;
    }

   
}

?>
