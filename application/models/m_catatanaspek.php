<?php

/**
 * Description of m_artikel
 *
 * @author white
 */
class m_catatanaspek extends CI_Model {

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
              id_mengajar=? AND id_aspek=? AND semester=?
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
