<?php

/**
 * Description of m_artikel
 *
 * @author white
 */
class M_profil extends CI_Model {


    function get_top($top) {
        $sql = "
            SELECT
              id_profil AS ID,
              nama,
              npsn,
              alamat,
              kode_pos AS POS,
              kelurahan AS KEL,
              kecamatan AS KEC,
              kabupaten AS KAB,
              provinsi AS PROV,
              status,
              waktu_kbm AS KBM,
              telp,
              email,
              website
            FROM
              profil 
            LIMIT ?
            
        ";
        $query = $this->db->query($sql, $top);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
        } else {
            $result = array();
        }
        return $result;
    }

    
    function update($id, $dataUpdate) {
        $this->db->where('id_profil', $id);
        $update = $this->db->update('profil', $dataUpdate);
        return $update;
    }

   
}

?>
