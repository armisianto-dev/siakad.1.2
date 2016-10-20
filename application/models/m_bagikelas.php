<?php

/**
 * Description of m_artikel
 *
 * @author white
 */
class M_bagikelas extends CI_Model {

    function getKelas($ta) {
        $sql ="
            SELECT
              k.id_kelas AS ID,
              kelas,
              jenjang,
              COALESCE( b.CNT, 0 ) AS JML,
              aktif
            FROM
              kelas k
            LEFT JOIN 
              (SELECT bagi_kelas.id_kelas, COUNT(*) AS CNT FROM bagi_kelas WHERE id_thnajaran=? GROUP BY bagi_kelas.id_kelas) b ON k.id_kelas=b.id_kelas 
            WHERE aktif='Y'
            ORDER BY jenjang,kelas 
        ";
        $query = $this->db->query($sql, $ta);
        return $query;
    }

    function save($dataInsert) {
        $query = $this->db->insert('bagi_kelas', $dataInsert);
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

    function get_by($ID) {
        $sql = "
            SELECT
              id_bagikelas AS ID,
              bagi_kelas.id_kelas AS IDKLS,
              kelas,
              bagi_kelas.nis AS NIS,
              nama,
              jenjang
            FROM
              bagi_kelas
            JOIN kelas
              ON bagi_kelas.id_kelas=kelas.id_kelas
            JOIN siswa
              ON bagi_kelas.nis=siswa.nis 
            WHERE bagi_kelas.id_bagikelas = ?
        ";
        $query = $this->db->query($sql, $ID);
        return $query;
    }

    function getKelasBy($params2) {
        $sql = "
            SELECT
              k.id_kelas AS ID,
              kelas,
              jenjang,
              COALESCE( b.CNT, 0 ) AS JML,
              aktif
            FROM
              kelas k
            LEFT JOIN 
              (SELECT bagi_kelas.id_kelas, COUNT(*) AS CNT FROM bagi_kelas WHERE id_thnajaran= ? GROUP BY bagi_kelas.id_kelas) b ON k.id_kelas=b.id_kelas 
            WHERE k.id_kelas = ?
        ";
        $query = $this->db->query($sql, $params2);
        return $query;
    }

    function getKelasBaru($jenjang) {
        $sql = "
            SELECT
             id_kelas AS ID,
             kelas
            FROM
              kelas
            WHERE jenjang = ?
        ";
        $query = $this->db->query($sql, $jenjang);
        return $query;
    }

    function getSiswa($params) {
        $sql ="
            SELECT
              nis,
              nisn,
              nama,
              jk,
              agama,
              tingkat
            FROM
              siswa
            JOIN agama 
                ON siswa.id_agama=agama.id_agama
            WHERE
              status='aktif' AND tingkat = ? AND siswa.nis NOT IN(SELECT nis from bagi_kelas where id_thnajaran = ?) 
            ORDER BY nis
        ";
        $query = $this->db->query($sql, $params);
        return $query;
    }

    function getSiswaKelas($params) {
        $sql ="
            SELECT
              id_bagikelas AS ID,
              siswa.nis AS NIS,
              nama,
              agama,
              jk
            FROM
              bagi_kelas
            LEFT JOIN siswa 
                ON bagi_kelas.nis=siswa.nis
            LEFT JOIN agama 
                ON siswa.id_agama=agama.id_agama
            WHERE
              id_thnajaran = ? AND id_kelas=?
            ORDER BY nama
        ";
        $query = $this->db->query($sql, $params);
        return $query;
    }
    function update($id, $dataUpdate) {
        $this->db->where('id_bagikelas', $id);
        $update = $this->db->update('bagi_kelas', $dataUpdate);
        return $update;
    }

   
}

?>
