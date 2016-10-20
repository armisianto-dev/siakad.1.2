<?php

/**
 * Description of m_artikel
 *
 * @author white
 */
class M_pelanggaransiswa extends CI_Model {

    function getSiswaAktif() {
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
        ";
        $query = $this->db->query($sql);
        return $query;
    }

    function getSiswa($NIS) {
        $sql ="
            SELECT
              nis,
              nama
            FROM
              siswa
            WHERE
              nis = ?
        ";
        $query = $this->db->query($sql, $NIS);
        return $query;
    }

    function getPelanggaran(){
      $sql ="
            SELECT
              id_pelanggaran AS ID,
              nama_pelanggaran AS NAMA,
              point
            FROM
              pelanggaran
            WHERE
              aktif = 'Y'
            ORDER by NAMA
        ";
        $query = $this->db->query($sql);
        return $query;
    }

    function save($dataInsert) {
        $query = $this->db->insert('pelanggaran_siswa', $dataInsert);
        return $query;
    }
    function get_by($NIS) {
        $sql = "
            SELECT
              s.nis AS NIS,
              nama,
              jk,
              SUM(point) AS POINT
            FROM
              siswa s
            LEFT JOIN pelanggaran_siswa
              ON s.nis=pelanggaran_siswa.nis
            LEFT JOIN pelanggaran
              ON pelanggaran_siswa.id_pelanggaran=pelanggaran.id_pelanggaran
            WHERE s.nis=?
            GROUP BY s.nis
            ORDER BY s.nis
        ";
        $query = $this->db->query($sql, $NIS);
        return $query;
    }

    function getPelanggaranBy($ID){
        $sql = "
            SELECT
              id_pointsiswa AS ID,
              p.nis AS NIS,
              nama,
              id_pelanggaran AS PLGRN,
              tgl_point AS TGL,
              ket
            FROM
              pelanggaran_siswa p
            LEFT JOIN siswa s
              ON p.nis=s.nis
            WHERE id_pointsiswa=?
        ";
        $query = $this->db->query($sql, $ID);
        return $query;
    }

    function getPelanggaranSiswa($NIS) {
        $sql = "
            SELECT
              s.nis AS NIS,
              nama_pelanggaran AS NAMA,
              point,
              tgl_point AS TGL,
              ket,
              id_pointsiswa AS ID
            FROM
              pelanggaran_siswa 
            LEFT JOIN siswa s
              ON s.nis=pelanggaran_siswa.nis
            LEFT JOIN pelanggaran
              ON pelanggaran_siswa.id_pelanggaran=pelanggaran.id_pelanggaran
            WHERE s.nis=?
            ORDER BY TGL
        ";
        $query = $this->db->query($sql, $NIS);
        return $query;
    }
    function delete($ID) {
        $this->db->where('id_pointsiswa', $ID);
        $delete = $this->db->delete('pelanggaran_siswa');
        return $delete;
    }
    function update($id, $dataUpdate) {
        $this->db->where('id_pointsiswa', $id);
        $update = $this->db->update('pelanggaran_siswa', $dataUpdate);
        return $update;
    }

   
}

?>
