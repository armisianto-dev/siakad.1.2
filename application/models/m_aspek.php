<?php

/**
 * Description of m_artikel
 *
 * @author white
 */
class M_aspek extends CI_Model {

    function get() {
       
        $q = $this->db->query("
            SELECT
              id_aspek AS ID,
              aspek,
              kkm
            FROM
              aspek
            ORDER BY id_aspek
           
        ");
        return $q;
    }

   function get_sub($id) {
        $sql = "
            SELECT 
              id_subaspek AS ID,
              aspek,
              sub_aspek,
              max_nilai AS MAX
            FROM
              sub_aspek
            JOIN aspek 
              ON aspek.id_aspek=sub_aspek.id_aspek 
            WHERE aspek.id_aspek = ?
        ";
        $result = $this->db->query($sql, $id);
        return $result;
    }

    function get_by($id) {
        $sql = "
            SELECT 
              id_aspek AS ID,
              aspek,
              kkm
            FROM
              aspek 
            WHERE id_aspek = ?
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
        $this->db->where('id_aspek', $id);
        $update = $this->db->update('aspek', $dataUpdate);
        return $update;
    }
}

?>
