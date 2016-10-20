<?php

/**
 * Description of m_artikel
 *
 * @author white
 */
class M_eskul extends CI_Model {

    function get() {
        $q = $this->db->query("
            SELECT
              id_eskul AS ID,
              eskul.nama AS eskul,
              guru.nama AS guru,
              eskul.aktif AS aktif
            FROM
              eskul
            JOIN guru
                ON eskul.nip=guru.NIP
            ORDER BY eskul.nama
        ");
        return $q;
    }

    function getGuru() {
        $q = $this->db->query("
            SELECT
              nip,
              nama
            FROM
              guru
            ORDER BY nama
        ");
        return $q;
    }

    function save($dataInsert) {
        $query = $this->db->insert('eskul', $dataInsert);
        return $query;
    }

    function cariEskul($eskul){
        $sql="
            SELECT
                nama
            FROM
                eskul
            WHERE 
                nama=?
        ";
        $query = $this->db->query($sql, $eskul);
        return $query;
    }

    function get_by($id) {
        $sql = "
            SELECT
              id_eskul AS ID,
              nama,
              nip
            FROM
              eskul 
            WHERE id_eskul = ?
        ";
        $query = $this->db->query($sql, $id);
        return $query;
    }

    function aktifNonAktif($id, $dataUpdate) {
        $this->db->where('id_eskul', $id);
        $update = $this->db->update('eskul', $dataUpdate);
        return $update;
    }


    function update($id, $dataUpdate) {
        $this->db->where('id_eskul', $id);
        $update = $this->db->update('eskul', $dataUpdate);
        return $update;
    }
}

?>
