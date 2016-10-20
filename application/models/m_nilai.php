<?php

/**
 * Description of m_artikel
 *
 * @author white
 */
class M_nilai extends CI_Model {

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

    function getSubAspek(){
        $q = "
            SELECT
              id_subaspek AS ID,
              aspek,
              sub_aspek AS NAMA
            FROM
              sub_aspek
            LEFT JOIN aspek
              ON sub_aspek.id_aspek=aspek.id_aspek
            ORDER BY aspek, NAMA
        ";
        $sql=$this->db->query($q);
        return $sql;
    }

    function getSubAspekBy($aspek){
        $q = "
            SELECT
              id_subaspek AS ID,
              aspek,
              sub_aspek AS NAMA,
              max_nilai AS MAX
            FROM
              sub_aspek
            LEFT JOIN aspek
              ON sub_aspek.id_aspek=aspek.id_aspek
            WHERE id_subaspek=?
        ";
        $sql=$this->db->query($q,$aspek);
        return $sql;
    }


    function cariNilai($params){
        $sql="
            SELECT
              id_nilai
            FROM nilai
            WHERE id_mengajar=? && semester=? && id_subaspek=?
            GROUP BY id_subaspek,ke
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

    function getNilai($params) {
        $sql ="
            SELECT
              id_nilai,
              id_mengajar,
              sub_aspek,
              nilai.id_subaspek AS ID,
              aspek,
              ke
            FROM
              nilai
            LEFT JOIN sub_aspek
                ON nilai.id_subaspek=sub_aspek.id_subaspek
            LEFT JOIN aspek 
                ON aspek.id_aspek=sub_aspek.id_aspek
            WHERE
              id_mengajar = ? AND semester=?
            GROUP BY id_mengajar,nilai.id_subaspek,ke
            ORDER BY nilai.id_subaspek,ke
        ";
        $query = $this->db->query($sql, $params);
        return $query;
    }

    function getDetailNilai($params2) {
        $sql ="
            SELECT
              id_nilai AS ID,
              nilai.nis AS NIS,
              nama,
              jk,
              nilai
            FROM
              nilai
            LEFT JOIN siswa
              ON nilai.nis=siswa.nis
            WHERE
              id_subaspek=? AND id_mengajar=? AND ke=?
            ORDER BY nama 
        ";
        $query = $this->db->query($sql, $params2);
        return $query;
    }

    function save($dataInsert) {
        $query = $this->db->insert('nilai', $dataInsert);
        return $query;
    }

   
    function update($id, $dataUpdate) {
        $this->db->where('id_nilai', $id);
        $update = $this->db->update('nilai', $dataUpdate);
        return $update;
    }

    function delete($dataDelete) {
        $delete = $this->db->delete('nilai',$dataDelete);
        return $delete;
    }
   
}

?>
