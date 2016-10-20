<?php

/**
 * Description of m_artikel
 *
 * @author white
 */
class M_catataneskul extends CI_Model {

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
            WHERE e.aktif=? AND e.nip=?
            ORDER BY ESKUL 
        ";
        $query = $this->db->query($sql, $params);
        return $query;
    }

    function getSiswaEskul($params) {
        $sql ="
            SELECT
              siswa_eskul.id_siswaeskul AS ID,
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

    function cekCatatan($params){
       $sql ="
            SELECT 
              id_catatan
            FROM catatan_eskul
            LEFT JOIN siswa_eskul 
              ON catatan_eskul.id_siswaeskul = siswa_eskul.id_siswaeskul
            LEFT JOIN eskul 
              ON siswa_eskul.id_eskul = eskul.id_eskul
            WHERE eskul.id_eskul =? AND semester=?
        ";
        $query = $this->db->query($sql, $params);
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

    

    function getSiswaCatatan($params) {
        $sql ="
            SELECT
              id_catatan AS ID,
              siswa.nis AS NIS,
              nama,
              agama,
              nilai,
              jk
            FROM
              siswa_eskul
            LEFT JOIN siswa 
                ON siswa_eskul.nis=siswa.nis
            LEFT JOIN catatan_eskul
                ON siswa_eskul.id_siswaeskul=catatan_eskul.id_siswaeskul
            LEFT JOIN agama 
                ON siswa.id_agama=agama.id_agama
            WHERE
              id_thnajaran = ? AND id_eskul=? AND semester=?
            ORDER BY nama
        ";
        $query = $this->db->query($sql, $params);
        return $query;
    }

    function getCatatanBy($id) {
        $sql ="
            SELECT
              id_catatan AS ID,
              siswa.nis AS NIS,
              eskul.nama AS ESKUL,
              siswa.nama AS NAMA,
              eskul.id_eskul AS IDESKUL,
              agama,
              nilai,
              jk
            FROM
              siswa_eskul
            LEFT JOIN siswa 
                ON siswa_eskul.nis=siswa.nis
            LEFT JOIN catatan_eskul
                ON siswa_eskul.id_siswaeskul=catatan_eskul.id_siswaeskul
            LEFT JOIN eskul
                ON siswa_eskul.id_eskul=eskul.id_eskul
            LEFT JOIN agama 
                ON siswa.id_agama=agama.id_agama
            WHERE
              id_catatan = ?
            ORDER BY siswa.nama
        ";
        $query = $this->db->query($sql, $id);
        return $query;
    }

    function save($dataInsert) {
        $query = $this->db->insert('catatan_eskul', $dataInsert);
        return $query;
    }

    function update($id,$dataUpdate) {
        $this->db->where('id_catatan', $id);
        $update = $this->db->update('catatan_eskul',$dataUpdate);
        return $update;
    }
   
}

?>
