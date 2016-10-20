

<?php

/**
 * Description of artikel
 *
 * @author white
 */
class Options extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_options', 'the_m');
        $this->load->library(array('breadcrumb', 'sesfilter'));
        $this->load->helper(array('slug', 'filter'));
    }


    
    function ta() {
        $this->rule->type('U');
        $name = $this->uri->segment(2, "0");
        $data['row'] = $this->the_m->get_by($name)->row_array();
        $data['list'] = $this->the_m->getTA()->result_array();
        $this->layout->set_title('Setting Tahun Ajaran');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Setting Tahun Ajaran');

        $data['primary_title'] = 'Setting Tahun Ajaran';
        $data['sub_primary_title'] = 'Proses setting data';
        $data['notif'] = $this->_notification();
        $this->layout->back('options/ta', $data);
    }

    function semester() {
        $this->rule->type('U');
        $name = $this->uri->segment(2, "0");
        $data['row'] = $this->the_m->get_by($name)->row_array();
        $this->layout->set_title('Setting Semester');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Setting Semester');

        $data['primary_title'] = 'Setting Semester';
        $data['sub_primary_title'] = 'Proses setting data';
        $data['notif'] = $this->_notification();
        $this->layout->back('options/semester', $data);
    }

    function update() {
        $this->rule->type('U');
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('id', 'ID', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
        } else {
            
            $dataUpdate=array(
                'value'=>$this->input->post('value')
                );
            $q = $this->the_m->update($id, $dataUpdate);
                if ($q) {
                    $this->session->set_flashdata('success', 'Data Berhasil Dirubah');
            } else {
                    $this->session->set_flashdata('error', 'Data Gagal Dirubah');
            }
                   
        }
        redirect('options/'.$name);
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

