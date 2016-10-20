<?php

/**
 * Description of m_artikel
 *
 * @author white
 */
class M_register extends CI_Model {

    

    function cariGuru($username) {
        $sql = "
            SELECT 
             nip
            FROM
              guru 
            WHERE nip = ?
        ";
        $query = $this->db->query($sql,$username);
        return $query;
    }

    function cariUsers($username) {
        $sql = "
            SELECT 
             username
            FROM
              rc_users 
            WHERE username = ?
        ";
        $query = $this->db->query($sql,$username);
        return $query;
    }

    function cariSiswa($username) {
        $sql = "
            SELECT 
             nis
            FROM
              siswa 
            WHERE nis = ?
        ";
        $query = $this->db->query($sql,$username);
        return $query;
    }

    
}

?>
