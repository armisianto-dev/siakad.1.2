<?php

/**
 * Description of m_artikel
 *
 * @author white
 */
class M_guru extends CI_Model {

    function get() {
       
        $q = $this->db->query("
            SELECT
              NIP,
              nama,
              jk,
              jabatan,
              aktif
            FROM
              guru 
            ORDER BY nama
        ");
        return $q;
    }

    function save($dataInsert) {
        $query = $this->db->insert('guru', $dataInsert);
        return $query;
    }

    
    function get_by($nip) {
        $sql = "
            SELECT 
              nip,
              nama,
              jk,
              kota_lahir AS KOTA,
              tgl_lahir AS TGL,
              guru.id_agama AS id_agama,
              agama,
              alamat,
              telp,
              pend_terakhir AS PEND,
              riwayat_pend AS RIWAYAT,
              jabatan,
              aktif,
              foto
            FROM
              guru 
            JOIN agama
              ON guru.id_agama=agama.id_agama
            WHERE nip = ?
        ";
        $query = $this->db->query($sql, $nip);
        return $query;
    }

    function get_detail_by($nip) {
        $sql = "
            SELECT 
              nip,
              nama,
              jk,
              kota_lahir AS KOTA,
              tgl_lahir AS TGL,
              guru.id_agama AS id_agama,
              agama,
              alamat,
              telp,
              pend_terakhir AS PEND,
              riwayat_pend AS RIWAYAT,
              jabatan,
              aktif,
              foto
            FROM
              guru 
            JOIN agama
              ON guru.id_agama=agama.id_agama
            WHERE nip = ?
        ";
        $query = $this->db->query($sql, $nip);
        return $query;
    }

    
    function update($nip, $dataUpdate) {
        $this->db->where('nip', $nip);
        $update = $this->db->update('guru', $dataUpdate);
        return $update;
    }

    function updateUser($nip, $dataUpdate2) {
        $this->db->where('username', $nip);
        $update = $this->db->update('rc_users', $dataUpdate2);
        return $update;
    }

    
    function getAgama() {
        $q = $this->db->query("
            SELECT 
              id_agama AS ID,
              agama AS NAMA 
            FROM
              agama 
            ORDER BY id_agama ASC
        ");
        return $q;
    }
}

?>
