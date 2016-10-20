

<?php

/**
 * Description of artikel
 *
 * @author white
 */
class Mapel extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_mapel', 'the_m');
        $this->load->library(array('breadcrumb', 'sesfilter'));
        $this->load->helper(array('slug', 'filter'));
    }

    function index() {
        $this->rule->type('R');
        $this->layout->set_title('Mata Pelajaran');
        $this->layout->set_meta('Data Mata Pelajaran');
        $this->layout->add_includes('css', 'themes/back/css/datatables/dataTables.bootstrap.css');
        $this->layout->add_includes('js', 'themes/back/js/jquery.dataTables.min.js');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Mata Pelajaran');

        $data['primary_title'] = '<i class="ion-android-note"></i> Mata Pelajaran';
        $data['sub_primary_title'] = 'Data Mata Pelajaran';
        $data['list'] = $this->the_m->get()->result_array();
        $data['notif'] = $this->_notification();
        $this->layout->back('mapel/index', $data);
    }

    function add() {
        $this->rule->type('C');
        $this->layout->set_title('Tambah Mata Pelajaran');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Mata Pelajaran', site_url('mapel'));
        $this->breadcrumb->add_crumb('Tambah Mata Pelajaran');

        $data['primary_title'] = 'Mata Pelajaran';
        $data['sub_primary_title'] = 'Proses tambah data';
        $this->layout->back('mapel/add', $data);
    }

    function save() {
        $this->rule->type('C');
        $this->load->library('form_validation');
        $mapel=$this->input->post('mapel');
        $this->form_validation->set_rules('mapel', 'Nama Mapel', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
        } else {
            $cariMapel=$this->the_m->cariMapel($mapel)->num_rows();
            if ($cariMapel >= 1) {
                $this->session->set_flashdata('error', 'Mata Pelajaran yang anda input sudah ada');
            }else{
                $dataInsert=array(
                        'mapel'=>$this->input->post('mapel'),
                        'kelompok'=>$this->input->post('kel'),
                        'aktif'=>$this->input->post('aktif')
                    );
                $q = $this->the_m->save($dataInsert);
                if ($q) {
                    $this->session->set_flashdata('success', 'Data Berhasil Disimpan');
                } else {
                    $this->session->set_flashdata('error', 'Data Gagal Disimpan');
                }
            }
        }
        redirect('mapel');
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
        redirect('mapel'); 
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
        redirect('mapel'); 
    }

    function edit($id) {
        $this->rule->type('U');
        $data['row'] = $this->the_m->get_by($id)->row_array();
        $this->layout->set_title('Edit Mata Pelajaran');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Mata Pelajaran', site_url('mapel'));
        $this->breadcrumb->add_crumb('Edit Mata Pelajaran');

        $data['primary_title'] = 'Mata Pelajaran';
        $data['sub_primary_title'] = 'Proses edit kelas';
        $this->layout->back('mapel/edit', $data);
    }

    function update() {
        $this->rule->type('U');
        $id = $this->input->post('id');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('mapel', 'Mapel', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
        } else {
            
            $dataUpdate=array(
                    'mapel'=>$this->input->post('mapel'),
                    'kelompok'=>$this->input->post('kel')
                );
            $q = $this->the_m->update($id, $dataUpdate);
                if ($q) {
                    $this->session->set_flashdata('success', 'Data Berhasil Dirubah');
            } else {
                    $this->session->set_flashdata('error', 'Data Gagal Dirubah');
            }
                   
        }
        redirect('mapel');
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

