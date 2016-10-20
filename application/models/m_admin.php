<?php

/**
 * Description of m_artikel
 *
 * @author white
 */
class M_admin extends CI_Model {

    
    

    function getSiswa() {
        $sql = "
            SELECT 
             *
            FROM
              siswa 
            WHERE status='aktif'
        ";
        $query = $this->db->query($sql);
        return $query;
    }

    function getSiswaGender($jk) {
        $sql = "
            SELECT 
             *
            FROM
              siswa 
            WHERE status='aktif' && jk=?
        ";
        $query = $this->db->query($sql,$jk);
        return $query;
    }

    function getUsers() {
        $sql = "
            SELECT 
                *
            FROM
              rc_users
            WHERE active=1
        ";
        $query = $this->db->query($sql);
        return $query;
    }

    function getUsersTbl($tbl) {
        $sql = "
            SELECT 
                *
            FROM
              rc_users
            WHERE tbl_asal=? && active=1
        ";
        $query = $this->db->query($sql,$tbl);
        return $query;
    }

    function getGuru() {
        $sql = "
            SELECT 
                *
            FROM
              guru
            WHERE aktif='Y'
        ";
        $query = $this->db->query($sql);
        return $query;
    }

    function getGuruJml($jab) {
        $sql = "
            SELECT 
                *
            FROM
              guru
            WHERE jabatan!=? && aktif='Y'
        ";
        $query = $this->db->query($sql,$jab);
        return $query;
    }

    function getTUJml($jab) {
        $sql = "
            SELECT 
                *
            FROM
              guru
            WHERE jabatan=? && aktif='Y'
        ";
        $query = $this->db->query($sql,$jab);
        return $query;
    }

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

    function getTA($ta) {
        $sql ="
            SELECT
              thn_ajaran AS THN
            FROM tahun
            WHERE id_thnajaran=?
        ";
        $query = $this->db->query($sql, $ta);
        return $query;
    }

    function getJmlMengajar($params) {
        $sql ="
            SELECT
              *
            FROM mengajar
            WHERE nip=? && id_thnajaran=?
        ";
        $query = $this->db->query($sql, $params);
        return $query;
    }

    function getMengajar($params) {
        $sql ="
            SELECT
              id_mengajar AS ID,
              mengajar.nip AS NIP,
              nama,
              mengajar.id_kelas AS KELAS,
              kelas,
              mengajar.id_mapel AS MAPEL,
              mapel,
              mengajar.id_thnajaran AS THN,
              thn_ajaran,
              jml_jam AS JML
            FROM
              mengajar
            LEFT JOIN guru 
                ON mengajar.nip=guru.nip
            LEFT JOIN kelas 
                ON mengajar.id_kelas=kelas.id_kelas
            LEFT JOIN mapel 
                ON mengajar.id_mapel=mapel.id_mapel
            LEFT JOIN tahun
                ON mengajar.id_thnajaran=tahun.id_thnajaran
            WHERE mengajar.nip=? AND mengajar.id_thnajaran=?
            ORDER BY id_mengajar
        ";
        $query = $this->db->query($sql, $params);
        return $query;
    }

    function getEskul($id) {
        $sql ="
            SELECT
              e.id_eskul AS ID,
              e.nama AS ESKUL
            FROM
              eskul e
            WHERE e.aktif='Y' AND e.nip=?
            ORDER BY ESKUL 
        ";
        $query = $this->db->query($sql, $id);
        return $query;
    }

    function getWaliKelas($params) {
        $sql ="
            SELECT
                wali_kelas.id_kelas as KELAS,
                kelas
            FROM
              wali_kelas
            LEFT JOIN kelas
                ON wali_kelas.id_kelas=kelas.id_kelas
            WHERE nip=? && id_thnajaran=?
        ";
        $query = $this->db->query($sql, $params);
        return $query;
    }
    
    function getPelanggaran($nis) {
        $sql ="
            SELECT
              COALESCE( p.CNT, 0 ) AS JML,
              SUM(point) AS POINT
            FROM
              siswa s
            LEFT JOIN 
              (SELECT pelanggaran_siswa.nis, COUNT(*) AS CNT FROM pelanggaran_siswa GROUP BY pelanggaran_siswa.nis) p ON s.nis=p.nis 
            LEFT JOIN pelanggaran_siswa
              ON s.nis=pelanggaran_siswa.nis
            LEFT JOIN pelanggaran
              ON pelanggaran_siswa.id_pelanggaran=pelanggaran.id_pelanggaran
            WHERE s.nis=?
            GROUP BY s.nis
        ";
        $query = $this->db->query($sql,$nis);
        return $query;
    }

    function getAbsen($nis) {
        $sql ="
            SELECT
              count(*) AS JML
            FROM
              presensi
            WHERE nis=?
        ";
        $query = $this->db->query($sql,$nis);
        return $query;
    }

    function getSiswaEskul($nis) {
        $sql ="
            SELECT
              nama,
              thn_ajaran as THN
            FROM
              siswa_eskul
            LEFT JOIN eskul
                ON siswa_eskul.id_eskul=eskul.id_eskul
            LEFT JOIN tahun
                ON siswa_eskul.id_thnajaran=tahun.id_thnajaran
            WHERE nis=?
            ORDER BY siswa_eskul.id_thnajaran
        ";
        $query = $this->db->query($sql,$nis);
        return $query;
    }

    function getRiwayatKelas($nis) {
        $sql ="
            SELECT
              s.nis as NIS,
              bk.id_kelas as kls,
              kelas,
              bk.id_thnajaran as thn,
              thn_ajaran as tahun
            FROM
              bagi_kelas bk
            LEFT JOIN siswa s
              ON bk.nis=s.nis
            LEFT JOIN kelas
              ON bk.id_kelas=kelas.id_kelas
            LEFT JOIN tahun
              ON bk.id_thnajaran=tahun.id_thnajaran
            WHERE s.nis=?
            ORDER BY bk.id_thnajaran 
        ";
        $query = $this->db->query($sql, $nis);
        return $query;
    }

    function getPelanggaranSiswa() {
        $sql ="
            SELECT
              s.nis AS NIS,
              nama,
              jk,
              COALESCE( p.CNT, 0 ) AS JML,
              SUM(point) AS POINT
            FROM
              siswa s
            LEFT JOIN 
              (SELECT pelanggaran_siswa.nis, COUNT(*) AS CNT FROM pelanggaran_siswa GROUP BY pelanggaran_siswa.nis) p ON s.nis=p.nis 
            LEFT JOIN pelanggaran_siswa
              ON s.nis=pelanggaran_siswa.nis
            LEFT JOIN pelanggaran
              ON pelanggaran_siswa.id_pelanggaran=pelanggaran.id_pelanggaran
            WHERE status='aktif'
            GROUP BY s.nis
            ORDER BY POINT DESC
            LIMIT 5
        ";
        $query = $this->db->query($sql);
        return $query;
    }


   
   
}

?>
