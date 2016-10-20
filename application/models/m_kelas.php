<?php

/**
 * Description of m_artikel
 *
 * @author white
 */
class M_kelas extends CI_Model {

    function get() {
        $q = $this->db->query("
            SELECT
              id_kelas AS ID,
              kelas,
              jenjang,
              aktif
            FROM
              kelas
            ORDER BY jenjang,kelas 
        ");
        return $q;
    }

    function save($dataInsert) {
        $query = $this->db->insert('kelas', $dataInsert);
        return $query;
    }

    function cariKelas($kelas){
        $sql="
            SELECT
                kelas
            FROM
                kelas
            WHERE 
                kelas=?
        ";
        $query = $this->db->query($sql, $kelas);
        return $query;
    }

    function get_by($id) {
        $sql = "
            SELECT
              id_kelas AS ID,
              kelas,
              jenjang,
              aktif
            FROM
              kelas 
            WHERE id_kelas = ?
        ";
        $query = $this->db->query($sql, $id);
        return $query;
    }

    function update($id, $dataUpdate) {
        $this->db->where('id_kelas', $id);
        $update = $this->db->update('kelas', $dataUpdate);
        return $update;
    }

    function delete($id) {
        $this->db->where('id_agama', $id);
        $delete = $this->db->delete('agama');
        return $delete;
    }

   
}

?>
