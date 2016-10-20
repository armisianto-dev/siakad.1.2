<?php

/**
 * Description of m_artikel
 *
 * @author white
 */
class M_settings extends CI_Model {

   

    function get_detail_by($tag) {
        $sql = "
            SELECT 
              id AS ID,
              tag AS TAG,
              value AS VAL
            FROM
              setting 
            WHERE tag = ?
        ";
        $result = $this->db->query($sql, $tag);
        return $result;
    }

    function update($tag, $dataUpdate) {
        $this->db->where('tag', $tag);
        $update = $this->db->update('setting', $dataUpdate);
        return $update;
    }

    function save($dataInsert) {
        $query = $this->db->insert('kontak', $dataInsert);
        return $query;
    }


}

?>
