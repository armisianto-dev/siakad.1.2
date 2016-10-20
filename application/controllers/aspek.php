

<?php

/**
 * Description of artikel
 *
 * @author white
 */
class Aspek extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_aspek', 'the_m');
        $this->load->library(array('breadcrumb', 'sesfilter'));
        $this->load->helper(array('slug', 'filter'));
    }

    function index() {
        $this->rule->type('R');
        $this->layout->set_title('Aspek');
        $this->layout->set_meta('Data Aspek');
        $this->layout->add_includes('css', 'themes/back/css/datatables/dataTables.bootstrap.css');
        $this->layout->add_includes('js', 'themes/back/js/jquery.dataTables.min.js');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Aspek');

        $data['primary_title'] = '<i class="ion-android-note"></i> Aspek';
        $data['sub_primary_title'] = 'Data Aspek';
        $data['list'] = $this->the_m->get()->result_array();
        $data['notif'] = $this->_notification();
        $this->layout->back('aspek/index', $data);
    }

    function sub($id) {
        $this->rule->type('R');
        $this->layout->set_title('Sub-Aspek');
        $this->layout->set_meta('Data Sub-Aspek');
        $this->layout->add_includes('css', 'themes/back/css/datatables/dataTables.bootstrap.css');
        $this->layout->add_includes('js', 'themes/back/js/jquery.dataTables.min.js');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Aspek', site_url('aspek'));
        $this->breadcrumb->add_crumb('Sub-Aspek');

        $data['primary_title'] = '<i class="ion-android-note"></i> Sub-Aspek';
        $data['sub_primary_title'] = 'Data Sub-Aspek';
        $data['list'] = $this->the_m->get_sub($id)->result_array();
        $data['notif'] = $this->_notification();
        $this->layout->back('aspek/subaspek', $data);
    }
    function edit($id) {
        $this->rule->type('U');
        $data['list'] = $this->the_m->get_by($id);
        $this->layout->set_title('Edit Aspek');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Aspek', site_url('aspek'));
        $this->breadcrumb->add_crumb('Edit Aspek');

        $data['primary_title'] = 'Aspek';
        $data['sub_primary_title'] = 'Proses edit data';
        $this->layout->back('aspek/edit', $data);
    }

    function update() {
        $this->rule->type('U');
        $id = $this->input->post('id');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('kkm', 'KKM', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
        } else {
            
                $dataUpdate = array(
                    'kkm' => $this->input->post('kkm')
                    
                );
                $q = $this->the_m->update($id, $dataUpdate);
                if ($q) {
                    $this->session->set_flashdata('success', 'Data Berhasil Dirubah');
                } else {
                    $this->session->set_flashdata('error', 'Data Gagal Dirubah');
                }
        }
        redirect('aspek');
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

