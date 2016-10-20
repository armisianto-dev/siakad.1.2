<?php

/**
 * Description of m_artikel
 *
 * @author white
 */
class M_tahun extends CI_Model {

    function get() {
        $q = $this->db->query("
            SELECT
              id_thnajaran AS ID,
              thn_ajaran
            FROM
              tahun
            ORDER BY thn_ajaran DESC
        ");
        return $q;
    }

    function save($dataInsert) {
        $query = $this->db->insert('tahun', $dataInsert);
        return $query;
    }

    function cariTahun($tahun){
        $sql="
            SELECT
                thn_ajaran
            FROM
                tahun
            WHERE 
                thn_ajaran=?
        ";
        $query = $this->db->query($sql, $tahun);
        return $query;
    }

    function get_by($id) {
        $sql = "
            SELECT
              id_thnajaran AS ID,
              thn_ajaran
            FROM
              tahun 
            WHERE id_thnajaran = ?
        ";
        $query = $this->db->query($sql, $id);
        return $query;
    }

   
    function update($id, $dataUpdate) {
        $this->db->where('id_thnajaran', $id);
        $update = $this->db->update('tahun', $dataUpdate);
        return $update;
    }

   
}

?>
