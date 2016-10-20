<?php

/**
 * Description of m_artikel
 *
 * @author white
 */
class M_bobot extends CI_Model {

    function get() {
       
        $q = $this->db->query("
            SELECT
              aspek.id_aspek AS ID,
              aspek,
              COALESCE( bobot.CNT, 0 ) AS JML
            FROM
              aspek
            LEFT JOIN  
              (SELECT bobot.id_aspek, COUNT(*) AS CNT FROM bobot GROUP BY bobot.id_aspek) bobot ON aspek.id_aspek=bobot.id_aspek 
            ORDER BY aspek.id_aspek
            Limit 1
           
        ");
        return $q;
    }

   function get_bobot($id) {
        $sql = "
            SELECT 
              id_bobot AS ID,
              nama_bobot AS NAMA,
              bobot
            FROM
              bobot
            WHERE bobot.id_aspek = ?
        ";
        $result = $this->db->query($sql, $id);
        return $result;
    }

    function get_aspek($id) {
        $sql = "
            SELECT 
              bobot.id_aspek AS ID,
              aspek,
              SUM(bobot) AS JML
            FROM
              bobot
            JOIN aspek
              ON bobot.id_aspek=aspek.id_aspek
            WHERE bobot.id_aspek = ?
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
        $this->db->where('id_bobot', $id);
        $update = $this->db->update('bobot', $dataUpdate);
        return $update;
    }

    function updateInsert($dataInsert) {
        $query = $this->db->insert('bobot', $dataInsert);
        return $query;
    }
}

?>
