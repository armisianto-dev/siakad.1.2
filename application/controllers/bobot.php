

<?php

/**
 * Description of artikel
 *
 * @author white
 */
class Bobot extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_bobot', 'the_m');
        $this->load->library(array('breadcrumb', 'sesfilter'));
        $this->load->helper(array('slug', 'filter'));
    }

    function index() {
        $this->rule->type('R');
        $this->layout->set_title('Bobot');
        $this->layout->set_meta('Data Bobot');
        $this->layout->add_includes('css', 'themes/back/css/datatables/dataTables.bootstrap.css');
        $this->layout->add_includes('js', 'themes/back/js/jquery.dataTables.min.js');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Bobot');

        $data['primary_title'] = '<i class="ion-android-note"></i> Bobot';
        $data['sub_primary_title'] = 'Data Bobot';
        $data['list'] = $this->the_m->get()->result_array();
        $data['notif'] = $this->_notification();
        $this->layout->back('bobot/index', $data);
    }

    function lihat($id) {
        $this->rule->type('R');
        $this->layout->set_title('Detail Bobot');
        $this->layout->set_meta('Data Detail Bobot');
        $this->layout->add_includes('css', 'themes/back/css/datatables/dataTables.bootstrap.css');
        $this->layout->add_includes('js', 'themes/back/js/jquery.dataTables.min.js');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Bobot', site_url('bobot'));
        $this->breadcrumb->add_crumb('Detail Bobot');

        $data['primary_title'] = '<i class="ion-android-note"></i> Detail Bobot';
        $data['sub_primary_title'] = 'Data Detail Bobot';
        $data['list'] = $this->the_m->get_bobot($id)->result_array();
        $data['aspek'] = $this->the_m->get_aspek($id)->row_array();
        $data['notif'] = $this->_notification();
        $this->layout->back('bobot/detail', $data);
    }
    function edit($id) {
        $this->rule->type('U');
        $data['list'] = $this->the_m->get_bobot($id)->result_array();
        $data['aspek'] = $this->the_m->get_aspek($id)->row_array();
        $this->layout->set_title('Edit Bobot');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Bobot', site_url('bobot'));
        $this->breadcrumb->add_crumb('Edit Bobot');

        $data['primary_title'] = 'Bobot';
        $data['sub_primary_title'] = 'Proses edit data';
        $this->layout->back('bobot/edit', $data);
    }

    function update() {
        $this->rule->type('U');
        $data = $this->input->post('data');
        $aspek = $this->input->post('aspek');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('aspek', 'ID ASPEK', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
        } else {
                //proses update bobot
                for ($i=1; $i <= $data; $i++) {
                    $id= $this->input->post('id'.$i); 
                    $dataUpdate = array(
                    'id_aspek' => $this->input->post('aspek'),
                    'bobot' => $this->input->post('bobot'.$i),
                    'nama_bobot' => $this->input->post('nama'.$i)
                    );
                    $q = $this->the_m->update($id,$dataUpdate);
                    if ($q) {
                        $this->session->set_flashdata('success', 'Data Berhasil Dirubah');
                    } else {
                        $this->session->set_flashdata('error', 'Data Gagal Dirubah');
                    }
                }
                
        }
        redirect('bobot');
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

