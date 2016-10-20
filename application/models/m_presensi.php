<?php

/**
 * Description of m_artikel
 *
 * @author white
 */
class M_presensi extends CI_Model {

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

    function getPresensi($params) {
        $sql ="
            SELECT
              count(*) AS JML,
              nama,
              siswa.nis AS NIS
            FROM
              presensi
            LEFT JOIN siswa
              ON presensi.nis=siswa.nis
            WHERE siswa.status='aktif' AND id_thnajaran=? AND semester=?
            GROUP BY siswa.nis
            ORDER BY JML DESC
        ";
        $query = $this->db->query($sql,$params);
        return $query;
    }

    function getPresensiNIS($params) {
        $sql ="
            SELECT
              id_presensi AS ID,
              tgl_presensi AS TGL,
              presensi.status AS status,
              ket,
              nama,
              siswa.nis AS NIS
            FROM
              presensi
            LEFT JOIN siswa
              ON presensi.nis=siswa.nis
            WHERE id_thnajaran = ? && semester=? && siswa.nis=?
            ORDER BY tgl_presensi DESC
        ";
        $query = $this->db->query($sql, $params);
        return $query;
    }

    
   
    function get_by($ID) {
        $sql = "
            SELECT
              id_presensi AS ID,
              tgl_presensi AS TGL,
              presensi.status AS status,
              ket,
              nama,
              siswa.nis AS NIS
            FROM
              presensi
            LEFT JOIN siswa
              ON presensi.nis=siswa.nis
            WHERE id_presensi = ?
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

    function insert($dataInsert) {
        $query = $this->db->insert('presensi', $dataInsert);
        return $query;
    }

    function update($id, $dataUpdate) {
        $this->db->where('id_presensi', $id);
        $update = $this->db->update('presensi', $dataUpdate);
        return $update;
    }
    function delete($ID) {
        $this->db->where('id_presensi', $ID);
        $delete = $this->db->delete('presensi');
        return $delete;
    }

   
}

?>
