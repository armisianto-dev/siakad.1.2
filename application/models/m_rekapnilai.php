<?php

/**
 * Description of m_artikel
 *
 * @author white
 */
class m_rekapnilai extends CI_Model {

    function get($params) {
        $q ="
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
            WHERE mengajar.id_thnajaran=? AND mengajar.nip=?
            ORDER BY id_mengajar
        ";
        $sql=$this->db->query($q, $params);
        return $sql;
    }

    function getMengajarBy($id) {
        $q ="
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
            WHERE mengajar.id_mengajar=?
            ORDER BY id_mengajar
        ";
        $sql=$this->db->query($q, $id);
        return $sql;
    }

    function getAspek(){
        $q = "
            SELECT
              id_aspek AS ID,
              aspek
            FROM
              aspek
            ORDER BY id_aspek
        ";
        $sql=$this->db->query($q);
        return $sql;
    }

    function getAspekBy($id_aspek){
        $q = "
            SELECT
              id_aspek AS ID,
              aspek
            FROM
              aspek
            WHERE id_aspek=?
        ";
        $sql=$this->db->query($q,$id_aspek);
        return $sql;
    }

    function getSiswaPeng($params1) {
        $sql ="
            SELECT
              nilai.nis AS NIS,
              nama,
              id_mengajar,
              semester,
              jk
            FROM
              nilai
            LEFT JOIN siswa 
                ON nilai.nis=siswa.nis
            WHERE
              id_mengajar = ? AND id_subaspek IN(1,2,3,4) AND semester=?
            GROUP BY nilai.nis
            ORDER BY nama
        ";
        $query = $this->db->query($sql, $params1);
        return $query;
    }

    function getSiswaKet($params1) {
        $sql ="
            SELECT
              nilai.nis AS NIS,
              nama,
              id_mengajar,
              semester,
              jk
            FROM
              nilai
            LEFT JOIN siswa 
                ON nilai.nis=siswa.nis
            WHERE
              id_mengajar = ? AND id_subaspek IN(5,6,7,12,13) AND semester=?
            GROUP BY nilai.nis
            ORDER BY nama
        ";
        $query = $this->db->query($sql, $params1);
        return $query;
    }

    function getSiswaSikap($params1) {
        $sql ="
            SELECT
              nilai.nis AS NIS,
              nama,
              id_mengajar,
              semester,
              jk
            FROM
              nilai
            LEFT JOIN siswa 
                ON nilai.nis=siswa.nis
            WHERE
              id_mengajar = ? AND id_subaspek IN(8,9,10,11) AND semester=?
            GROUP BY nilai.nis
            ORDER BY nama
        ";
        $query = $this->db->query($sql, $params1);
        return $query;
    }

    function getUlanganAvg($params){
      $sql ="
            SELECT
              nilai.nis AS NIS,
              avg(nilai) as avg
            FROM
              nilai
            LEFT JOIN siswa 
                ON nilai.nis=siswa.nis
            WHERE
              id_mengajar = ? AND nilai.nis=? AND nilai.id_subaspek IN (1) AND semester=?
            GROUP BY nilai.id_mengajar, nilai.id_subaspek IN (1)
            ORDER BY nama
        ";
        $query = $this->db->query($sql, $params);
        return $query;
    }

    function getUlangan($params){
      $sql ="
            SELECT
              nilai.nis AS NIS,
              nilai
            FROM
              nilai
            LEFT JOIN siswa 
                ON nilai.nis=siswa.nis
            WHERE
              id_mengajar = ? AND nilai.nis=? AND nilai.id_subaspek IN (1) AND semester=?
        ";
        $query = $this->db->query($sql, $params);
        return $query;
    }

    function getTugas($params){
      $sql ="
            SELECT
              nilai.nis AS NIS,
              nilai
            FROM
              nilai
            LEFT JOIN siswa 
                ON nilai.nis=siswa.nis
            WHERE
              id_mengajar = ? AND nilai.nis=? AND nilai.id_subaspek IN (2) AND semester=?
        ";
        $query = $this->db->query($sql, $params);
        return $query;
    }

    function getTugasAvg($params){
      $sql ="
            SELECT
              nilai.nis AS NIS,
              avg(nilai) as avg
            FROM
              nilai
            LEFT JOIN siswa 
                ON nilai.nis=siswa.nis
            WHERE
              id_mengajar = ? AND nilai.nis=? AND nilai.id_subaspek IN (2) AND semester=?
            GROUP BY nilai.id_mengajar, nilai.id_subaspek IN (2)
            ORDER BY nama
        ";
        $query = $this->db->query($sql, $params);
        return $query;
    }

    function getNH($params){
      $sql ="
            SELECT
              nilai.nis AS NIS,
              avg(nilai) as avg
            FROM
              nilai
            LEFT JOIN siswa 
                ON nilai.nis=siswa.nis
            WHERE
              id_mengajar = ? AND nilai.nis=? AND nilai.id_subaspek IN (1,2) AND semester=?
            GROUP BY nilai.id_mengajar, nilai.id_subaspek IN (1,2)
            ORDER BY nama
        ";
        $query = $this->db->query($sql, $params);
        return $query;
    }

    function getUTS($params){
      $sql ="
            SELECT
              nilai.nis AS NIS,
              nilai
            FROM
              nilai
            LEFT JOIN siswa 
                ON nilai.nis=siswa.nis
            WHERE
              id_mengajar = ? AND nilai.nis=? AND nilai.id_subaspek IN (3) AND semester=?
            GROUP BY nilai.id_mengajar, nilai.id_subaspek IN (3)
            ORDER BY nama
        ";
        $query = $this->db->query($sql, $params);
        return $query;
    }

    function getUAS($params){
      $sql ="
            SELECT
              nilai.nis AS NIS,
              nilai
            FROM
              nilai
            LEFT JOIN siswa 
                ON nilai.nis=siswa.nis
            WHERE
              id_mengajar = ? AND nilai.nis=? AND nilai.id_subaspek IN (4) AND semester=?
            GROUP BY nilai.id_mengajar, nilai.id_subaspek IN (4)
            ORDER BY nama
        ";
        $query = $this->db->query($sql, $params);
        return $query;
    }

    function getPraktik($params){
      $sql ="
            SELECT
              nilai.nis AS NIS,
              nilai
            FROM
              nilai
            LEFT JOIN siswa 
                ON nilai.nis=siswa.nis
            WHERE
              nilai.nis = ? AND id_mengajar=? AND nilai.id_subaspek IN (12) AND semester=?
        ";
        $query = $this->db->query($sql, $params);
        return $query;
    }

    function getUK($params){
      $sql ="
            SELECT
              nilai.nis AS NIS,
              nilai
            FROM
              nilai
            LEFT JOIN siswa 
                ON nilai.nis=siswa.nis
            WHERE
              nilai.nis = ? AND id_mengajar=? AND nilai.id_subaspek IN (5) AND semester=?
        ";
        $query = $this->db->query($sql, $params);
        return $query;
    }

    function getPOR($params){
      $sql ="
            SELECT
              nilai.nis AS NIS,
              nilai
            FROM
              nilai
            LEFT JOIN siswa 
                ON nilai.nis=siswa.nis
            WHERE
              nilai.nis = ? AND id_mengajar=? AND nilai.id_subaspek IN (7) AND semester=?
        ";
        $query = $this->db->query($sql, $params);
        return $query;
    }

    function getPRY($params){
      $sql ="
            SELECT
              nilai.nis AS NIS,
              nilai
            FROM
              nilai
            LEFT JOIN siswa 
                ON nilai.nis=siswa.nis
            WHERE
              nilai.nis = ? AND id_mengajar=? AND nilai.id_subaspek IN (6) AND semester=?
        ";
        $query = $this->db->query($sql, $params);
        return $query;
    }

    

    function getTLS($params){
      $sql ="
            SELECT
              nilai.nis AS NIS,
              nilai
            FROM
              nilai
            LEFT JOIN siswa 
                ON nilai.nis=siswa.nis
            WHERE
              nilai.nis = ? AND id_mengajar=? AND nilai.id_subaspek IN (13) AND semester=?
        ";
        $query = $this->db->query($sql, $params);
        return $query;
    }
    //sikap
    function getOBS($params){
      $sql ="
            SELECT
              nilai.nis AS NIS,
              nilai
            FROM
              nilai
            LEFT JOIN siswa 
                ON nilai.nis=siswa.nis
            WHERE
              nilai.nis = ? AND id_mengajar=? AND nilai.id_subaspek IN (8) AND semester=?
        ";
        $query = $this->db->query($sql, $params);
        return $query;
    }

    function getDiri($params){
      $sql ="
            SELECT
              nilai.nis AS NIS,
              nilai
            FROM
              nilai
            LEFT JOIN siswa 
                ON nilai.nis=siswa.nis
            WHERE
              nilai.nis = ? AND id_mengajar=? AND nilai.id_subaspek IN (9) AND semester=?
        ";
        $query = $this->db->query($sql, $params);
        return $query;
    }

    function getTeman($params){
      $sql ="
            SELECT
              nilai.nis AS NIS,
              nilai
            FROM
              nilai
            LEFT JOIN siswa 
                ON nilai.nis=siswa.nis
            WHERE
              nilai.nis = ? AND id_mengajar=? AND nilai.id_subaspek IN (10) AND semester=?
        ";
        $query = $this->db->query($sql, $params);
        return $query;
    }

    function getJurnal($params){
      $sql ="
            SELECT
              nilai.nis AS NIS,
              nilai
            FROM
              nilai
            LEFT JOIN siswa 
                ON nilai.nis=siswa.nis
            WHERE
              nilai.nis = ? AND id_mengajar=? AND nilai.id_subaspek IN (11) AND semester=?
        ";
        $query = $this->db->query($sql, $params);
        return $query;
    }

    function getBobot($nama){
       $sql ="
            SELECT 
              bobot
            FROM bobot
            WHERE nama_bobot=?
        ";
        $query = $this->db->query($sql, $nama);
        return $query;
    }

    function getTotBobot($id){
       $sql ="
            SELECT 
              SUM(bobot) AS JML
            FROM bobot
            WHERE id_aspek=?
            GROUP BY id_aspek
        ";
        $query = $this->db->query($sql, $id);
        return $query;
    }

    function cekCatatan($params2){
       $sql ="
            SELECT 
              id_catatanaspek
            FROM catatan_aspek c
            WHERE c.id_mengajar =? AND id_aspek=? AND semester=?
        ";
        $query = $this->db->query($sql, $params2);
        return $query;
    }

    
    function getCatatan($params) {
        $sql ="
            SELECT
              id_catatanaspek AS ID,
              nama,
              siswa.nis AS NIS,
              jk,
              catatan
            FROM
              catatan_aspek
            LEFT JOIN siswa
              ON catatan_aspek.nis=siswa.nis
            WHERE
              id_mengajar=? AND id_aspek=?
            ORDER BY nama 
        ";
        $query = $this->db->query($sql, $params);
        return $query;
    }

    function save($dataInsert) {
        $query = $this->db->insert('catatan_aspek', $dataInsert);
        return $query;
    }

    function getCatatanBy($id){
        $sql ="
            SELECT
              id_catatanaspek AS ID,
              catatan_aspek.id_mengajar AS MENGAJAR,
              catatan_aspek.id_aspek AS ASPEK,
              siswa.nama AS SISWA,
              guru.nama AS GURU,
              aspek,
              semester,
              kelas,
              thn_ajaran AS THN,
              siswa.nis AS NIS,
              mapel,
              catatan
            FROM
              catatan_aspek
            LEFT JOIN siswa
              ON catatan_aspek.nis=siswa.nis
            LEFT JOIN mengajar
              ON catatan_aspek.id_mengajar=mengajar.id_mengajar
            LEFT JOIN guru
              ON mengajar.nip=guru.nip
            LEFT JOIN mapel
              ON mengajar.id_mapel=mapel.id_mapel
            LEFT JOIN kelas
              ON mengajar.id_kelas=kelas.id_kelas
            LEFT JOIN aspek
              ON catatan_aspek.id_aspek=aspek.id_aspek
            LEFT JOIN tahun
              ON mengajar.id_thnajaran=tahun.id_thnajaran
            WHERE
              id_catatanaspek=?
        ";
        $query = $this->db->query($sql, $id);
        return $query;
    }
   
    function update($id, $dataUpdate) {
        $this->db->where('id_catatanaspek', $id);
        $update = $this->db->update('catatan_aspek', $dataUpdate);
        return $update;
    }

}

?>
