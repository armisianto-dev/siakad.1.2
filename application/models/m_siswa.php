<?php

/**
 * Description of m_artikel
 *
 * @author white
 */
class M_siswa extends CI_Model {

    function get($status) {
       
        $sql ="
            SELECT
              nis,
              nisn,
              nama,
              jk,
              tingkat
            FROM
              siswa
            WHERE
              status = ? 
            ORDER BY nis
        ";
        $query = $this->db->query($sql, $status);
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
              (SELECT bagi_kelas.id_kelas, COUNT(*) AS CNT FROM bagi_kelas LEFT JOIN siswa ON bagi_kelas.nis=siswa.nis WHERE id_thnajaran=? AND status='aktif' GROUP BY bagi_kelas.id_kelas) b ON k.id_kelas=b.id_kelas 
            WHERE aktif='Y'
            ORDER BY jenjang,kelas 
        ";
        $query = $this->db->query($sql, $ta);
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

    function getProfil(){
      $sql ="
            SELECT
              *
            FROM
              profil
        ";
        $query = $this->db->query($sql);
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

    function getKelasBy($params2) {
        $sql = "
            SELECT
              k.id_kelas AS ID,
              kelas,
              jenjang,
              COALESCE( b.CNT, 0 ) AS JML,
              nama,
              k.aktif
            FROM
              kelas k
            LEFT JOIN 
              (SELECT bagi_kelas.id_kelas, COUNT(*) AS CNT FROM bagi_kelas WHERE id_thnajaran= ? GROUP BY bagi_kelas.id_kelas) b ON k.id_kelas=b.id_kelas
            LEFT JOIN wali_kelas
              ON wali_kelas.id_kelas=k.id_kelas
            LEFT JOIN guru
              ON wali_kelas.nip=guru.nip 
            WHERE k.id_kelas = ?
        ";
        $query = $this->db->query($sql, $params2);
        return $query;
    }

    function getWaliKelas($params2) {
        $sql = "
            SELECT
              nama
            FROM
              wali_kelas
            LEFT JOIN guru
              ON wali_kelas.nip=guru.nip 
            WHERE id_thnajaran=? && id_kelas = ?  
        ";
        $query = $this->db->query($sql, $params2);
        return $query;
    }

    function getSiswaKelas($params) {
        $sql ="
            SELECT
              id_bagikelas AS ID,
              siswa.nis AS nis,
              nama,
              agama,
              status,
              jk
            FROM
              bagi_kelas
            LEFT JOIN siswa 
                ON bagi_kelas.nis=siswa.nis
            LEFT JOIN agama 
                ON siswa.id_agama=agama.id_agama
            WHERE
              id_thnajaran = ? AND id_kelas=? AND status='aktif'
            ORDER BY nama
        ";
        $query = $this->db->query($sql, $params);
        return $query;
    }

    function getNIS($nis) {
        $sql = "
            SELECT 
              nis
            FROM
              siswa
            WHERE nis = ?
        ";
        $query = $this->db->query($sql, $nisn);
        return $query;
    }

    function save($insertSiswa) {
        $query = $this->db->insert('siswa', $insertSiswa);
        return $query;
    }

    function saveOrtu($insertOrtu) {
        $query = $this->db->insert('ortu', $insertOrtu);
        return $query;
    }
    function saveSMP($insertSMP) {
        $query = $this->db->insert('sekolah_asal', $insertSMP);
        return $query;
    }
    function saveWali($insertWaliSiswa) {
        $query = $this->db->insert('wali_siswa', $insertWaliSiswa);
        return $query;
    }


    function get_by($nis) {
        $sql = "
            SELECT 
              siswa.nis AS NIS, 
              nisn, 
              nama, 
              jk, 
              kota_lahir AS KOTA, 
              tgl_lahir AS TGL, 
              agama,
              siswa.id_agama AS id_agama, 
              alamat, 
              jml_saudara AS JML, 
              anak_ke AS KE, 
              status_anak AS ANAK, 
              asal_sd AS SD, 
              no_sttb, 
              tahun_sttb, 
              kls_diterima, 
              tgl_diterima, 
              tingkat, 
              status, 
              foto, 
              pindahan, 
              thn_lulus,
              nama_sekolah AS SMP,
              alasan_pindah AS ALASAN
            FROM
              siswa 
            JOIN agama
              ON siswa.id_agama=agama.id_agama
            LEFT JOIN sekolah_asal
              ON siswa.nis=sekolah_asal.nis
            WHERE siswa.nis = ?
        ";
        $query = $this->db->query($sql, $nis);
        return $query;
    }
   

    function get_detail_by($nis) {
        $sql = "
            SELECT 
              siswa.nis AS NIS, 
              nisn, 
              nama, 
              jk, 
              kota_lahir AS KOTA, 
              tgl_lahir AS TGL, 
              agama, 
              alamat, 
              jml_saudara AS JML, 
              anak_ke AS KE, 
              status_anak AS ANAK, 
              asal_sd AS SD, 
              no_sttb, 
              tahun_sttb, 
              kls_diterima, 
              tgl_diterima, 
              tingkat, 
              status, 
              foto, 
              pindahan, 
              thn_lulus,
              nama_sekolah AS SMP,
              alasan_pindah AS ALASAN
            FROM
              siswa 
            JOIN agama
              ON siswa.id_agama=agama.id_agama
            LEFT JOIN sekolah_asal
              ON siswa.nis=sekolah_asal.nis
            WHERE siswa.nis = ?
        ";
        $query = $this->db->query($sql, $nis);
        return $query;
    }

    function get_ortu_by($nis) {
        $sql = "
            SELECT 
              ayah,
              ibu,
              alamat_ayah,
              alamat_ibu,
              pekerjaan_ayah,
              pekerjaan_ibu,
              telp_ayah,
              telp_ibu,
              agama_ayah,
              agama_ibu
            FROM
              ortu 
            WHERE nis = ?
        ";
        $query = $this->db->query($sql, $nis);
        return $query;
    }
    function get_wali_by($nis) {
        $sql = "
            SELECT 
              nama_wali AS wali,
              alamat_wali,
              pekerjaan_wali,
              telp_wali,
              status_wali,
              agama_wali,
              agama
            FROM
              wali_siswa
            JOIN agama 
              ON wali_siswa.agama_wali=agama.id_agama
            WHERE nis = ?
        ";
        $query = $this->db->query($sql, $nis);
        return $query;
    }
    function getKepsek() {
        $sql ="
            SELECT
              nip,
              nama
            FROM guru 
            WHERE aktif='Y' && jabatan='Kepsek'
        ";
        $query = $this->db->query($sql);
        return $query;
    }
    function cariSMP($nis){
        $sql="
            SELECT
                nis
            FROM
                sekolah_asal
            WHERE 
                nis=?
        ";
        $query = $this->db->query($sql, $nis);
        return $query;
    }
    function updateSiswa($nis, $updateSiswa) {
        $this->db->where('nis', $nis);
        $update = $this->db->update('siswa', $updateSiswa);
        return $update;
    }
    function updateSMP($nis, $updateSMP) {
        $this->db->where('nis', $nis);
        $update = $this->db->update('sekolah_asal', $updateSMP);
        return $update;
    }
    function deleteSMP($nis){
        $this->db->where('nis', $nis);
        $delete = $this->db->delete('sekolah_asal');
        return $delete;
    }
    function saveUpdateSMP($updateSMP) {
        $query = $this->db->insert('sekolah_asal', $updateSMP);
        return $query;
    }
    function updateOrtu($nis, $updateOrtu) {
        $this->db->where('nis', $nis);
        $update = $this->db->update('ortu', $updateOrtu);
        return $update;
    }
    function updateWaliSiswa($nis, $updateWaliSiswa) {
        $this->db->where('nis', $nis);
        $update = $this->db->update('wali_siswa', $updateWaliSiswa);
        return $update;
    }

    function cariKeluar($nis){
        $sql="
              SELECT
                  nis,
                  stts_keluar,
                  tgl_keluar,
                  alasan
              FROM
                  ket_keluar
              WHERE 
                  nis=?
          ";
          $query = $this->db->query($sql, $nis);
          return $query;
    }

    function insertKeluar($insertKeluar) {
        $query = $this->db->insert('ket_keluar', $insertKeluar);
        return $query;
    }
    function updateKeluar($nis, $updateKeluar) {
        $this->db->where('nis', $nis);
        $update = $this->db->update('ket_keluar', $updateKeluar);
        return $update;
    }
    function deleteKeluar($nis){
        $this->db->where('nis', $nis);
        $delete = $this->db->delete('ket_keluar');
        return $delete;
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
