

<?php

/**
 * Description of artikel
 *
 * @author white
 */
class Pelanggaran extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_pelanggaran', 'the_m');
        $this->load->library(array('breadcrumb', 'sesfilter'));
        $this->load->helper(array('slug', 'filter'));
    }

    function index() {
        $this->rule->type('R');
        $this->layout->set_title('Pelanggaran');
        $this->layout->set_meta('Data Pelanggaran');
        $this->layout->add_includes('css', 'themes/back/css/datatables/dataTables.bootstrap.css');
        $this->layout->add_includes('js', 'themes/back/js/jquery.dataTables.min.js');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Pelanggaran');

        $data['primary_title'] = '<i class="ion-android-note"></i> Pelanggaran';
        $data['sub_primary_title'] = 'Data Pelanggaran';
        $data['list'] = $this->the_m->get()->result_array();
        $data['notif'] = $this->_notification();
        $this->layout->back('pelanggaran/index', $data);
    }

    function add() {
        $this->rule->type('C');
        $this->layout->set_title('Tambah Pelanggaran');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Pelanggaran', site_url('pelanggaran'));
        $this->breadcrumb->add_crumb('Tambah Pelanggaran');

        $data['primary_title'] = 'Pelanggaran';
        $data['sub_primary_title'] = 'Proses tambah data';
        $this->layout->back('pelanggaran/add', $data);
    }

    function save() {
        $this->rule->type('C');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama', 'Nama Pelanggaran', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
        } else {
                $dataInsert=array(
                        'nama_pelanggaran'=>$this->input->post('nama'),
                        'point'=>$this->input->post('point'),
                        'aktif'=>$this->input->post('aktif')
                    );
                $q = $this->the_m->save($dataInsert);
                if ($q) {
                    $this->session->set_flashdata('success', 'Data Berhasil Disimpan');
                } else {
                    $this->session->set_flashdata('error', 'Data Gagal Disimpan');
                }
        }
        redirect('pelanggaran');
    }

    function deactivated($id){
        $this->rule->type('U');
            $dataUpdate=array(
                'aktif'=>'T'
                );
            $q = $this->the_m->update($id, $dataUpdate);
                if ($q) {
                    $this->session->set_flashdata('success', 'Data Berhasil Dirubah');
            } else {
                    $this->session->set_flashdata('error', 'Data Gagal Dirubah');
            }
        redirect('pelanggaran'); 
    }

    function activated($id){
        $this->rule->type('U');
            $dataUpdate=array(
                'aktif'=>'Y'
                );
            $q = $this->the_m->update($id, $dataUpdate);
                if ($q) {
                    $this->session->set_flashdata('success', 'Data Berhasil Dirubah');
            } else {
                    $this->session->set_flashdata('error', 'Data Gagal Dirubah');
            }
        redirect('pelanggaran'); 
    }

    function edit($id) {
        $this->rule->type('U');
        $data['row'] = $this->the_m->get_by($id)->row_array();
        $this->layout->set_title('Edit Pelanggaran');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Pelanggaran', site_url('pelanggaran'));
        $this->breadcrumb->add_crumb('Edit Pelanggaran');

        $data['primary_title'] = 'Pelanggaran';
        $data['sub_primary_title'] = 'Proses edit data';
        $this->layout->back('pelanggaran/edit', $data);
    }

    function update() {
        $this->rule->type('U');
        $id = $this->input->post('id');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
        } else {
            
            $dataUpdate=array(
                    'nama_pelanggaran'=>$this->input->post('nama'),
                    'point'=>$this->input->post('point')
                );
            $q = $this->the_m->update($id, $dataUpdate);
                if ($q) {
                    $this->session->set_flashdata('success', 'Data Berhasil Dirubah');
            } else {
                    $this->session->set_flashdata('error', 'Data Gagal Dirubah');
            }
                   
        }
        redirect('pelanggaran');
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

