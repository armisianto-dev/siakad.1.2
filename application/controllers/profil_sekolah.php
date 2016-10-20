

<?php

/**
 * Description of artikel
 *
 * @author white
 */
class Profil_sekolah extends CI_Controller {

   

    function __construct() {
        parent::__construct();
        $this->load->model('m_profil', 'the_m');
        $this->load->library(array('breadcrumb', 'sesfilter'));
        $this->load->helper(array('slug', 'filter'));
    }

    function index() {
        $this->rule->type('R');
        $offset = $this->uri->segment(3, "0");
        $this->layout->set_title('Profil Sekolah');
        $this->layout->set_meta('Profil Sekolah');
        $this->layout->add_includes('css', 'themes/back/css/datatables/dataTables.bootstrap.css');
        $this->layout->add_includes('js', 'themes/back/js/jquery.dataTables.min.js');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Profil Sekolah');

        $data['primary_title'] = '<i class="ion-android-note"></i> Profil Sekolah';
        $data['sub_primary_title'] = 'Pengaturan Profil Sekolah';
        $data['list'] = $this->the_m->get_top($top=1);
        $data['notif'] = $this->_notification();
        $this->layout->back('profil/profil', $data);
    }

    
    function update() {
        $this->rule->type('U');
        $id = $this->input->post('id');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama', 'Nama Sekolah', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
        } else {
            
            $dataUpdate=array(
                'nama'=>$this->input->post('nama'),
                'npsn'=>$this->input->post('npsn'),
                'alamat'=>$this->input->post('alamat'),
                'kode_pos'=>$this->input->post('pos'),
                'kelurahan'=>$this->input->post('kel'),
                'kecamatan'=>$this->input->post('kec'),
                'kabupaten'=>$this->input->post('kab'),
                'provinsi'=>$this->input->post('prov'),
                'status'=>$this->input->post('status'),
                'waktu_kbm'=>$this->input->post('kbm'),
                'telp'=>$this->input->post('telp'),
                'email'=>$this->input->post('email'),
                'website'=>$this->input->post('web'),
                );
            $q = $this->the_m->update($id, $dataUpdate);
                if ($q) {
                    $this->session->set_flashdata('success', 'Data Berhasil Dirubah');
            } else {
                    $this->session->set_flashdata('error', 'Data Gagal Dirubah');
            }
                   
        }
        redirect('profil_sekolah');
    }

    

    
    function _notification() {
        $notifForm = "";
        if ($this->session->flashdata('error') != "") {
            $notifForm .= '<div style="display:block; margin-bottom:7px;" class="alert alert-info alert-dismissable col-centered col-xs-5">';
            $notifForm .= '<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>';
            $notifForm .= $this->session->flashdata('error');
            $notifForm .= '</div>';
        } else if ($this->session->flashdata('success') != "") {
            $notifForm .= '<div style="display:block; margin-bottom:7px;" class="alert alert-success alert-dismissable col-centered col-xs-5">';
            $notifForm .= '<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>';
            $notifForm .= $this->session->flashdata('success');
            $notifForm .= '</div>';
        }
        return $notifForm;
    }

    

}

