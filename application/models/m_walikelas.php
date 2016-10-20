<?php

/**
 * Description of m_artikel
 *
 * @author white
 */
class M_walikelas extends CI_Model {

    function get($ta) {
        $q ="
            SELECT
              id_walikelas AS ID,
              wali_kelas.nip AS NIP,
              nama,
              wali_kelas.id_kelas AS KELAS,
              kelas,
              wali_kelas.id_thnajaran AS THN,
              thn_ajaran
            FROM
              wali_kelas
            LEFT JOIN guru 
                ON wali_kelas.nip=guru.nip
            LEFT JOIN kelas 
                ON wali_kelas.id_kelas=kelas.id_kelas
            LEFT JOIN tahun
                ON wali_kelas.id_thnajaran=tahun.id_thnajaran
            WHERE wali_kelas.id_thnajaran=?
            ORDER BY id_walikelas
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

    function cariWaliKelas($params){
        $sql="
            SELECT *
            FROM wali_kelas
            WHERE (nip=? OR id_kelas=?) && id_thnajaran=?
        ";
        $query = $this->db->query($sql, $params);
        return $query;
    }
    function save($dataInsert) {
        $query = $this->db->insert('wali_kelas', $dataInsert);
        return $query;
    }

    function get_by($id) {
        $sql = "
            SELECT
              id_walikelas AS ID,
              nip AS NIP,
              id_kelas AS KELAS,
              id_thnajaran AS THN
            FROM
              wali_kelas
            WHERE id_walikelas = ?
        ";
        $query = $this->db->query($sql, $id);
        return $query;
    }

    function cariWaliKelasUpdate($params){
        $sql="
            SELECT *
            FROM wali_kelas
            WHERE (nip=? OR id_kelas=?) && id_walikelas<>?
        ";
        $query = $this->db->query($sql, $params);
        return $query;
    }
    function update($id, $dataUpdate) {
        $this->db->where('id_walikelas', $id);
        $update = $this->db->update('wali_kelas', $dataUpdate);
        return $update;
    }
   
}

?>
