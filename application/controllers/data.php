

<?php

/**
 * Description of artikel
 *
 * @author white
 */
class Data extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library(array('breadcrumb', 'sesfilter','form_validation'));
        $this->load->helper(array('slug', 'filter'));
    }
    function backup() {
        $this->rule->type('U');
        $this->load->dbutil();
         $prefs = array(
             //'tables'      => array('mahasiswa', 'matakuliah'),  
             'ignore'      => array(),          
             'format'      => 'txt',            
             'filename'    => 'backupsiakad.sql',    
             'add_drop'    => TRUE,              
             'add_insert'  => TRUE,              
             'newline'     => "\n"              
         );
         // Backup your entire database and assign it to a variable
         $backup =& $this->dbutil->backup($prefs);
     
         // Load the file helper and write the file to your server
         $this->load->helper('file');
         $tanggal=date('d-m-Y');
         $file_name = 'backup_siakad_'.$tanggal.'.sql';
         write_file('/'.$file_name, $backup);
     
         // Load the download helper and send the file to your desktop
         $this->load->helper('download');
         force_download($file_name, $backup);
    }

    function restore() {
        $this->form_validation->set_rules('userfile', 'Userfile', 'required');
        if ($this->form_validation->run() == true) {
            $file = $_FILES['userfile']['name'];
            $path = dirname(BASEPATH) . DIRECTORY_SEPARATOR;
            $config['upload_path'] = $path . 'restore';
            $config['allowed_types'] = '*';
            $config['overwrite'] = TRUE;
            $config['max_size'] = 2000;

            $this->load->library('upload', $config);
            if ($this->upload->do_upload()) {
                //$isi_file=file_get_contents('./restore/'.$file);
                $isi_file=file_get_contents(base_url('restore/'.$file.''));
                $string_query=rtrim($isi_file,'\n;');
                $array_query=explode(';', $string_query);
                foreach ($array_query as $query) {
                    $this->db->query($query);
                }
                
            }else{
                $this->session->set_flashdata('error', $this->upload->display_errors());
            }
            
        }else{
            $data['notif']=$this->_notification();
            $this->layout->back('data/restore', $data);
        }
        
    }

    function restore_proses(){
        $file = $_FILES['userfile']['name'];
        if (!empty($file)) {
            $path = dirname(BASEPATH) . DIRECTORY_SEPARATOR;
            $config['upload_path'] = $path . 'restore';
            $config['allowed_types'] = '*';
            $config['overwrite'] = TRUE;
            $config['max_size'] = 2000;

            $this->load->library('upload', $config);
            if ($this->upload->do_upload()) {
                //$isi_file=file_get_contents('./restore/'.$file);
                $isi_file=file_get_contents(base_url('restore/'.$file.''));
                $string_query=rtrim($isi_file,'\n;');
                $array_query=explode(';', $string_query);
                foreach ($array_query as $query) {
                    $this->db->query($query);
                }
                
            }else{
                $this->session->set_flashdata('error', $this->upload->display_errors());
            }

        redirect('data/restore');
            
        }
    }

    function _notification() {
        $notifForm = "";
        if ($this->session->flashdata('error') != "") {
            $notifForm .= '<div style="display:block; margin-bottom:7px;" class="alert alert-info alert-dismissable col-centered col-xs-12">';
            $notifForm .= '<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>';
            $notifForm .= $this->session->flashdata('error');
            $notifForm .= '</div>';
        } else if ($this->session->flashdata('success') != "") {
            $notifForm .= '<div style="display:block; margin-bottom:7px;" class="alert alert-success alert-dismissable col-centered col-xs-12">';
            $notifForm .= '<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>';
            $notifForm .= $this->session->flashdata('success');
            $notifForm .= '</div>';
        }
        return $notifForm;
    }


   
}

