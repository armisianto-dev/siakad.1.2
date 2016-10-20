<?php

/**
 * Description of m_artikel
 *
 * @author white
 */
class M_mapel extends CI_Model {

    function get() {
        $q = $this->db->query("
            SELECT
              id_mapel AS ID,
              mapel,
              kelompok,
              aktif
            FROM
              mapel
            ORDER BY mapel 
        ");
        return $q;
    }

    function save($dataInsert) {
        $query = $this->db->insert('mapel', $dataInsert);
        return $query;
    }

    function cariMapel($mapel){
        $sql="
            SELECT
                mapel
            FROM
                mapel
            WHERE 
                mapel=?
        ";
        $query = $this->db->query($sql, $mapel);
        return $query;
    }

    function get_by($id) {
        $sql = "
            SELECT
              id_mapel AS ID,
              mapel,
              kelompok
            FROM
              mapel 
            WHERE id_mapel = ?
        ";
        $query = $this->db->query($sql, $id);
        return $query;
    }

    
    function update($id, $dataUpdate) {
        $this->db->where('id_mapel', $id);
        $update = $this->db->update('mapel', $dataUpdate);
        return $update;
    }

    function delete($id) {
        $this->db->where('id_agama', $id);
        $delete = $this->db->delete('agama');
        return $delete;
    }

   
}

?>
