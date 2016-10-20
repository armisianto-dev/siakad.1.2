<?php

/**
 * Description of m_artikel
 *
 * @author white
 */
class M_pelanggaran extends CI_Model {

    function get() {
        $q = $this->db->query("
            SELECT
              id_pelanggaran AS ID,
              nama_pelanggaran AS NAMA,
              point,
              aktif
            FROM
              pelanggaran
            ORDER BY nama_pelanggaran 
        ");
        return $q;
    }

    function save($dataInsert) {
        $query = $this->db->insert('pelanggaran', $dataInsert);
        return $query;
    }

    function get_by($id) {
        $sql = "
            SELECT
              id_pelanggaran AS ID,
              nama_pelanggaran AS NAMA,
              point,
              aktif
            FROM
              pelanggaran
            WHERE id_pelanggaran = ?
        ";
        $query = $this->db->query($sql, $id);
        return $query;
    }
    
    function update($id, $dataUpdate) {
        $this->db->where('id_pelanggaran', $id);
        $update = $this->db->update('pelanggaran', $dataUpdate);
        return $update;
    }

    function delete($id) {
        $this->db->where('id_agama', $id);
        $delete = $this->db->delete('agama');
        return $delete;
    }

   
}

?>
