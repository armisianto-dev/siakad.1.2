<?php

/**
 * Description of m_artikel
 *
 * @author white
 */
class M_raport extends CI_Model {

    function getWaliKelas($params2) {
        $sql ="
            SELECT
              id_walikelas AS ID,
              w.id_kelas AS IDKLS,
              kelas,
              w.id_thnajaran,
              thn_ajaran AS THN,
              nama,
              COUNT(bk.nis) AS JML,
              w.nip AS NIP 
            FROM wali_kelas w
            LEFT JOIN kelas k
              ON w.id_kelas=k.id_kelas
            LEFT JOIN bagi_kelas bk 
              ON k.id_kelas=bk.id_kelas
            LEFT JOIN tahun t
              ON w.id_thnajaran=t.id_thnajaran
            LEFT JOIN guru g 
              ON w.nip=g.nip
            WHERE w.nip=? && w.id_thnajaran=?
            GROUP BY(bk.id_kelas)
        ";
        $query = $this->db->query($sql, $params2);
        return $query;
    }

    function getSiswa($params) {
        $sql ="
            SELECT
              s.nis AS NIS,
              nama,
              jk,
              agama
            FROM siswa s
            LEFT JOIN bagi_kelas bk 
              ON s.nis=bk.nis
            LEFT JOIN agama a
              ON s.id_agama=a.id_agama
            WHERE bk.id_thnajaran=? && status=? && bk.id_kelas=?
            ORDER BY nama
        ";
        $query = $this->db->query($sql, $params);
        return $query;
    }

    //raport
    function getMapel($params){
      $sql="
        SELECT
         nis,
        avg(nilai) as nilai,
        count(nilai) as jml,
        sub_aspek,
        nilai.id_subaspek as sub,
        aspek,
        mapel,
        nilai.id_mengajar as idm,
        nama
        from nilai
        left join sub_aspek
        on nilai.id_subaspek=sub_aspek.id_subaspek
        left join aspek
        on sub_aspek.id_aspek=aspek.id_aspek
        left join mengajar
        on nilai.id_mengajar=mengajar.id_mengajar
        left join guru
        on mengajar.nip=guru.nip
        left join mapel
        on mengajar.id_mapel=mapel.id_mapel
        where nis=? && kelompok=? && id_thnajaran=? && semester=?
        group by nilai.id_mengajar
        order by nilai.id_mengajar
      ";
        $query = $this->db->query($sql, $params);
        return $query;
    }

    function getNP($params2){
      $sql="
        SELECT
         nis,
        avg(nilai) as nilai,
        count(nilai) as jml,
        sub_aspek,
        nilai.id_subaspek as sub,
        aspek,
        mapel
        from nilai
        left join sub_aspek
        on nilai.id_subaspek=sub_aspek.id_subaspek
        left join aspek
        on sub_aspek.id_aspek=aspek.id_aspek
        left join mengajar
        on nilai.id_mengajar=mengajar.id_mengajar
        left join mapel
        on mengajar.id_mapel=mapel.id_mapel
        where nis=? && nilai.id_subaspek IN (1,2) && nilai.id_mengajar=? && semester=?
        group by nilai.id_mengajar, nilai.id_subaspek IN (1,2)
        order by nilai.id_mengajar
      ";
        $query = $this->db->query($sql, $params2);
        return $query;
    }

    function getUts($params2){
      $sql="
        SELECT
       nis,
      nilai as nilai,
      count(nilai) as jml,
      sub_aspek,
      nilai.id_subaspek as sub,
      aspek,
      mapel
      from nilai
      left join sub_aspek
      on nilai.id_subaspek=sub_aspek.id_subaspek
      left join aspek
      on sub_aspek.id_aspek=aspek.id_aspek
      left join mengajar
      on nilai.id_mengajar=mengajar.id_mengajar
      left join mapel
      on mengajar.id_mapel=mapel.id_mapel
      where nis=? && nilai.id_subaspek IN (3) && nilai.id_mengajar=? && semester=?
      group by nilai.id_mengajar, nilai.id_subaspek IN (3)
      order by nilai.id_mengajar
      ";
        $query = $this->db->query($sql, $params2);
        return $query;
    }

    function getUas($params2){
      $sql="
        SELECT
       nis,
      nilai as nilai,
      count(nilai) as jml,
      sub_aspek,
      nilai.id_subaspek as sub,
      aspek,
      mapel
      from nilai
      left join sub_aspek
      on nilai.id_subaspek=sub_aspek.id_subaspek
      left join aspek
      on sub_aspek.id_aspek=aspek.id_aspek
      left join mengajar
      on nilai.id_mengajar=mengajar.id_mengajar
      left join mapel
      on mengajar.id_mapel=mapel.id_mapel
      where nis=? && nilai.id_subaspek IN (4) && nilai.id_mengajar=? && semester=?
      group by nilai.id_mengajar, nilai.id_subaspek IN (4)
      order by nilai.id_mengajar
      ";
        $query = $this->db->query($sql, $params2);
        return $query;
    }

    function getUK($params2){
      $sql="
        SELECT
       nis,
      max(nilai) as nilai,
      count(nilai) as jml,
      sub_aspek,
      nilai.id_subaspek as sub,
      aspek,
      mapel
      from nilai
      left join sub_aspek
      on nilai.id_subaspek=sub_aspek.id_subaspek
      left join aspek
      on sub_aspek.id_aspek=aspek.id_aspek
      left join mengajar
      on nilai.id_mengajar=mengajar.id_mengajar
      left join mapel
      on mengajar.id_mapel=mapel.id_mapel
      where nis=? && nilai.id_subaspek IN (5) && nilai.id_mengajar=? && semester=?
      group by nilai.id_mengajar, nilai.id_subaspek IN (5)
      order by nilai.id_mengajar
      ";
        $query = $this->db->query($sql, $params2);
        return $query;
    }

    function getPRY($params2){
      $sql="
        SELECT
       nis,
      max(nilai) as nilai,
      count(nilai) as jml,
      sub_aspek,
      nilai.id_subaspek as sub,
      aspek,
      mapel
      from nilai
      left join sub_aspek
      on nilai.id_subaspek=sub_aspek.id_subaspek
      left join aspek
      on sub_aspek.id_aspek=aspek.id_aspek
      left join mengajar
      on nilai.id_mengajar=mengajar.id_mengajar
      left join mapel
      on mengajar.id_mapel=mapel.id_mapel
      where nis=? && nilai.id_subaspek IN (6) && nilai.id_mengajar=? && semester=?
      group by nilai.id_mengajar, nilai.id_subaspek IN (6)
      order by nilai.id_mengajar
      ";
        $query = $this->db->query($sql, $params2);
        return $query;
    }

    function getPOR($params2){
      $sql="
        SELECT
       nis,
      max(nilai) as nilai,
      count(nilai) as jml,
      sub_aspek,
      nilai.id_subaspek as sub,
      aspek,
      mapel
      from nilai
      left join sub_aspek
      on nilai.id_subaspek=sub_aspek.id_subaspek
      left join aspek
      on sub_aspek.id_aspek=aspek.id_aspek
      left join mengajar
      on nilai.id_mengajar=mengajar.id_mengajar
      left join mapel
      on mengajar.id_mapel=mapel.id_mapel
      where nis=? && nilai.id_subaspek IN (7) && nilai.id_mengajar=? && semester=?
      group by nilai.id_mengajar, nilai.id_subaspek IN (7)
      order by nilai.id_mengajar
      ";
        $query = $this->db->query($sql, $params2);
        return $query;
    }

    function getPRAK($params2){
      $sql="
        SELECT
       nis,
      max(nilai) as nilai,
      count(nilai) as jml,
      sub_aspek,
      nilai.id_subaspek as sub,
      aspek,
      mapel
      from nilai
      left join sub_aspek
      on nilai.id_subaspek=sub_aspek.id_subaspek
      left join aspek
      on sub_aspek.id_aspek=aspek.id_aspek
      left join mengajar
      on nilai.id_mengajar=mengajar.id_mengajar
      left join mapel
      on mengajar.id_mapel=mapel.id_mapel
      where nis=? && nilai.id_subaspek IN (12) && nilai.id_mengajar=? && semester=?
      group by nilai.id_mengajar, nilai.id_subaspek IN (12)
      order by nilai.id_mengajar
      ";
        $query = $this->db->query($sql, $params2);
        return $query;
    }

    function getTLS($params2){
      $sql="
        SELECT
       nis,
      max(nilai) as nilai,
      count(nilai) as jml,
      sub_aspek,
      nilai.id_subaspek as sub,
      aspek,
      mapel
      from nilai
      left join sub_aspek
      on nilai.id_subaspek=sub_aspek.id_subaspek
      left join aspek
      on sub_aspek.id_aspek=aspek.id_aspek
      left join mengajar
      on nilai.id_mengajar=mengajar.id_mengajar
      left join mapel
      on mengajar.id_mapel=mapel.id_mapel
      where nis=? && nilai.id_subaspek IN (13) && nilai.id_mengajar=? && semester=?
      group by nilai.id_mengajar, nilai.id_subaspek IN (13)
      order by nilai.id_mengajar
      ";
        $query = $this->db->query($sql, $params2);
        return $query;
    }

    function jmlNilaiKet($params2){
      $sql="
        SELECT
        nilai
        from nilai
        where nilai.nis=? && nilai.id_subaspek IN (5,6,7,12,13) && nilai.id_mengajar=? && semester=?
        group by id_subaspek
      ";
        $query = $this->db->query($sql, $params2);
        return $query;
    }

    //sikap

    function getSikapa($params2){
      $sql="
        SELECT
      nilai
      from nilai
      where nilai.nis=? && nilai.id_subaspek IN (8,9,10,11) && nilai.id_mengajar=? && semester=?
      ";
        $query = $this->db->query($sql, $params2);
        return $query;
    }

    function getSikapb($params){
      $sql="
        SELECT
      nilai
      from nilai
      where nilai.nis=? && nilai.id_subaspek IN (8,9,10,11) && nilai.id_mengajar=? && semester=?
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

    function getSiswaNIS($nis) {
        $sql ="
            SELECT
              id_bagikelas AS ID,
              siswa.nis AS NIS,
              nama,
              bagi_kelas.id_kelas AS IDKLS,
              kelas,
              tingkat,
              status,
              nisn
            FROM
              bagi_kelas
            LEFT JOIN siswa 
                ON bagi_kelas.nis=siswa.nis
            LEFT JOIN kelas
                ON bagi_kelas.id_kelas=kelas.id_kelas
            WHERE
              siswa.nis=?
        ";
        $query = $this->db->query($sql, $nis);
        return $query;
    }

    function getEskul($params) {
        $sql ="
            SELECT
              nama,
              nilai
            FROM
              siswa_eskul
            LEFT JOIN eskul
              ON siswa_eskul.id_eskul=eskul.id_eskul
            LEFT JOIN catatan_eskul 
                ON siswa_eskul.id_siswaeskul=catatan_eskul.id_siswaeskul
            WHERE
              nis=? && semester=? && id_thnajaran=?
        ";
        $query = $this->db->query($sql, $params);
        return $query;
    }

    function getAbsen($params2) {
        $sql ="
            SELECT
              if(count(status) IS NULL, 0, count(status)) as jml
            FROM
              presensi
            WHERE
              nis=? && semester=? && id_thnajaran=? && status=?
        ";
        $query = $this->db->query($sql, $params2);
        return $query;
    }

    function getWali($params3){
      $sql ="
            SELECT
              nama,
              wali_kelas.nip as nip
            FROM wali_kelas
            LEFT JOIN guru
              ON wali_kelas.nip=guru.nip
            WHERE
              id_thnajaran=? && id_kelas=?
        ";
        $query = $this->db->query($sql, $params3);
        return $query;
    }

    function getMapelAspek($params){
      $sql="
        SELECT
         nis,
         catatan_aspek.id_mengajar as idm,
        mapel
        from catatan_aspek
        left join aspek
        on catatan_aspek.id_aspek=aspek.id_aspek
        left join mengajar
        on catatan_aspek.id_mengajar=mengajar.id_mengajar
        left join mapel
        on mengajar.id_mapel=mapel.id_mapel
        where nis=? && kelompok=? && id_thnajaran=? && semester=?
        group by catatan_aspek.id_mengajar
        order by catatan_aspek.id_mengajar
      ";
        $query = $this->db->query($sql, $params);
        return $query;
    }

    function getPeng($params2){
      $sql="
        SELECT
       nis,
       catatan
      from catatan_aspek
      left join mengajar
      on catatan_aspek.id_mengajar=mengajar.id_mengajar
      left join mapel
      on mengajar.id_mapel=mapel.id_mapel
      where nis=? && catatan_aspek.id_aspek=1 && catatan_aspek.id_mengajar=? && semester=?
      group by catatan_aspek.id_mengajar, catatan_aspek.id_aspek=1
      order by catatan_aspek.id_mengajar
      ";
        $query = $this->db->query($sql, $params2);
        return $query;
    }

    function getKet($params2){
      $sql="
        SELECT
       nis,
       catatan
      from catatan_aspek
      left join aspek
      on catatan_aspek.id_aspek=aspek.id_aspek
      left join mengajar
      on catatan_aspek.id_mengajar=mengajar.id_mengajar
      left join mapel
      on mengajar.id_mapel=mapel.id_mapel
      where nis=? && catatan_aspek.id_aspek=2 && catatan_aspek.id_mengajar=? && semester=?
      group by catatan_aspek.id_mengajar, catatan_aspek.id_aspek=2
      order by catatan_aspek.id_mengajar
      ";
        $query = $this->db->query($sql, $params2);
        return $query;
    }

    function getSikap($params2){
      $sql="
        SELECT
       nis,
       catatan
      from catatan_aspek
      left join aspek
      on catatan_aspek.id_aspek=aspek.id_aspek
      left join mengajar
      on catatan_aspek.id_mengajar=mengajar.id_mengajar
      left join mapel
      on mengajar.id_mapel=mapel.id_mapel
      where nis=? && catatan_aspek.id_aspek=3 && catatan_aspek.id_mengajar=? && semester=?
      group by catatan_aspek.id_mengajar, catatan_aspek.id_aspek=3
      order by catatan_aspek.id_mengajar
      ";
        $query = $this->db->query($sql, $params2);
        return $query;
    }

    function cekRaport($params){
      $sql="
        SELECT
          nis,
          catatan,
          keputusan,
          guru.nama AS kepsek,
          raport.nip as nip,
          tgl_raport as tgl
        FROM raport
        LEFT JOIN guru
          ON raport.nip=guru.nip
        WHERE raport.nis=? && semester=? && id_thnajaran=?
      ";
        $query = $this->db->query($sql, $params);
        return $query;
    }

    
    function getRaport($params) {
        $sql ="
            SELECT
              id_raport as id,
              nis,
              catatan,
              keputusan
            FROM raport 
            WHERE nis=? && id_thnajaran=? && semester=?
        ";
        $query = $this->db->query($sql, $params);
        return $query;
    }

    function getDataSiswa($nis) {
        $sql ="
            SELECT
              nis,
              nama,
              jk,
              tingkat
            FROM siswa 
            WHERE nis=?
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

    
   
    function save($dataInsert) {
        $query = $this->db->insert('raport', $dataInsert);
        return $query;
    }

    function update($id,$dataUpdate) {
        $this->db->where('id_raport', $nis);
        $update = $this->db->update('raport',$dataUpdate);
        return $update;
    }

    function updateSiswa($nis,$dataUpdate) {
        $this->db->where('nis', $nis);
        $update = $this->db->update('siswa',$dataUpdate);
        return $update;
    }
   
}

?>
