<?php

/**
 * Description of m_artikel
 *
 * @author white
 */
class M_siswaeskul extends CI_Model {

    function getEskul($params) {
        $sql ="
            SELECT
              e.id_eskul AS ID,
              e.nama AS ESKUL,
              g.nama AS NAMA,
              COALESCE( se.CNT, 0 ) AS JML
            FROM
              eskul e
            LEFT JOIN 
              (SELECT siswa_eskul.id_eskul, COUNT(*) AS CNT FROM siswa_eskul WHERE id_thnajaran=? GROUP BY siswa_eskul.id_eskul) se ON e.id_eskul=se.id_eskul
            LEFT JOIN guru g
              ON e.nip=g.nip
            WHERE e.aktif=?
            ORDER BY ESKUL 
        ";
        $query = $this->db->query($sql, $params);
        return $query;
    }

    function save($dataInsert) {
        $query = $this->db->insert('siswa_eskul', $dataInsert);
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

    function getEskulBy($params2) {
        $sql = "
            SELECT
              e.id_eskul AS ID,
              e.nama AS ESKUL,
              g.nama AS NAMA,
              COALESCE( se.CNT, 0 ) AS JML
            FROM
              eskul e
            LEFT JOIN 
              (SELECT siswa_eskul.id_eskul, COUNT(*) AS CNT FROM siswa_eskul WHERE id_thnajaran=? GROUP BY siswa_eskul.id_eskul) se ON e.id_eskul=se.id_eskul
            LEFT JOIN guru g
              ON e.nip=g.nip
            WHERE e.id_eskul = ?
        ";
        $query = $this->db->query($sql, $params2);
        return $query;
    }

    function getSiswaEskulBy($ID) {
        $sql = "
            SELECT
              id_eskul
            FROM
              siswa_eskul
            WHERE id_siswaeskul = ?
        ";
        $query = $this->db->query($sql, $ID);
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
              status='aktif' AND siswa.nis NOT IN(SELECT nis from siswa_eskul where id_eskul = ? AND id_thnajaran = ?) 
            ORDER BY tingkat, nama
        ";
        $query = $this->db->query($sql, $params);
        return $query;
    }

    function getSiswaEskul($params) {
        $sql ="
            SELECT
              id_siswaeskul AS ID,
              siswa.nis AS NIS,
              nama,
              agama,
              jk
            FROM
              siswa_eskul
            LEFT JOIN siswa 
                ON siswa_eskul.nis=siswa.nis
            LEFT JOIN agama 
                ON siswa.id_agama=agama.id_agama
            WHERE
              id_thnajaran = ? AND id_eskul=?
            ORDER BY nama
        ";
        $query = $this->db->query($sql, $params);
        return $query;
    }
    
    function delete($ID) {
        $this->db->where('id_siswaeskul', $ID);
        $delete = $this->db->delete('siswa_eskul');
        return $delete;
    }
   
}

?>
