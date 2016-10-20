<?php

/**
 * Description of m_artikel
 *
 * @author white
 */
class M_mengajar extends CI_Model {

    function get($ta) {
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
            WHERE mengajar.id_thnajaran=?
            ORDER BY kelas.jenjang,kelas.kelas,mapel.mapel
        ";
        $sql=$this->db->query($q, $ta);
        return $sql;
    }

    function getGuru($aktif="Y"){
        $q = "
            SELECT
              NIP,
              nama,
              aktif
            FROM
              guru
            WHERE aktif=? AND jabatan<>'TU' 
            ORDER BY nama
        ";
        $sql=$this->db->query($q, $aktif);
        return $sql;
    }

    function getMapel($aktif="Y"){
        $q = "
            SELECT
              id_mapel AS ID,
              mapel
            FROM
              mapel
            WHERE aktif=? 
            ORDER BY mapel
        ";
        $sql=$this->db->query($q, $aktif);
        return $sql;
    }

    function getKelas($aktif="Y"){
        $q = "
            SELECT
              id_kelas AS ID,
              kelas
            FROM
              kelas
            WHERE aktif=? 
            ORDER BY kelas
        ";
        $sql=$this->db->query($q, $aktif);
        return $sql;
    }

    function cariMengajar($params){
        $sql="
            SELECT *
            FROM mengajar
            WHERE (nip=? OR id_mapel=?) && id_kelas=? && id_thnajaran=?
        ";
        $query = $this->db->query($sql, $params);
        return $query;
    }
    function save($dataInsert) {
        $query = $this->db->insert('mengajar', $dataInsert);
        return $query;
    }

    function get_by($id) {
        $sql = "
            SELECT
              id_mengajar AS ID,
              nip AS NIP,
              id_kelas AS KELAS,
              id_mapel AS MAPEL,
              id_thnajaran AS THN,
              jml_jam AS JML
            FROM
              mengajar
            WHERE id_mengajar = ?
        ";
        $query = $this->db->query($sql, $id);
        return $query;
    }

    function cariMengajarUpdate($params){
        $sql="
            SELECT *
            FROM mengajar
            WHERE (nip=? OR id_mapel=?) && id_kelas=? && id_mengajar<>?
        ";
        $query = $this->db->query($sql, $params);
        return $query;
    }
    function update($id, $dataUpdate) {
        $this->db->where('id_mengajar', $id);
        $update = $this->db->update('mengajar', $dataUpdate);
        return $update;
    }
   
}

?>
