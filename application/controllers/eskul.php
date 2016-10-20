

<?php

/**
 * Description of artikel
 *
 * @author white
 */
class eskul extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_eskul', 'the_m');
        $this->load->library(array('breadcrumb', 'sesfilter'));
        $this->load->helper(array('slug', 'filter'));
    }

    function index() {
        $this->rule->type('R');
        $this->layout->set_title('Ekstrakulikuler');
        $this->layout->set_meta('Data Ekstrakulikuler');
        $this->layout->add_includes('css', 'themes/back/css/datatables/dataTables.bootstrap.css');
        $this->layout->add_includes('js', 'themes/back/js/jquery.dataTables.min.js');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Ekstrakulikuler');

        $data['primary_title'] = '<i class="ion-android-note"></i> Ekstrakulikuler';
        $data['sub_primary_title'] = 'Data Ekstrakulikuler';
        $data['list'] = $this->the_m->get()->result_array();
        $data['notif'] = $this->_notification();
        $this->layout->back('eskul/index', $data);
    }

    function add() {
        $this->rule->type('C');
        $this->layout->set_title('Tambah Ekstrakulikuler');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Ekstrakulikuler', site_url('mapel'));
        $this->breadcrumb->add_crumb('Tambah Ekstrakulikuler');

        $data['primary_title'] = 'Ekstrakulikuler';
        $data['sub_primary_title'] = 'Ekstrakulikuler';
        $data['list']=$this->the_m->getGuru()->result_array();
        $this->layout->back('eskul/add', $data);
    }

    function save() {
        $this->rule->type('C');
        $this->load->library('form_validation');
        $eskul=$this->input->post('eskul');
        $this->form_validation->set_rules('eskul', 'Nama Ekstrakulikuler', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
        } else {
            $cariEskul=$this->the_m->cariEskul($eskul)->num_rows();
            if ($cariEskul >= 1) {
                $this->session->set_flashdata('error', 'Mata Pelajaran yang anda input sudah ada');
            }else{
                $dataInsert=array(
                        'nama'=>$this->input->post('eskul'),
                        'nip'=>$this->input->post('guru'),
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
        redirect('eskul');
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
        redirect('eskul'); 
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
        redirect('eskul'); 
    }

    function edit($id) {
        $this->rule->type('U');
        $this->layout->set_title('Edit Ekstrakulikuler');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Ekstrakulikuler', site_url('eskul'));
        $this->breadcrumb->add_crumb('Edit Ekstrakulikuler');

        $data['primary_title'] = 'Ekstrakulikuler';
        $data['sub_primary_title'] = 'Proses edit ekstrakulikuler';
        $data['list']=$this->the_m->getGuru()->result_array();
        $data['row'] = $this->the_m->get_by($id)->row_array();
        $this->layout->back('eskul/edit', $data);
    }

    function update() {
        $this->rule->type('U');
        $id = $this->input->post('id');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('eskul', 'Ekstrakulikuler', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
        } else {
            
            $dataUpdate=array(
                    'nama'=>$this->input->post('eskul'),
                    'nip'=>$this->input->post('guru')
                );
            $q = $this->the_m->update($id, $dataUpdate);
                if ($q) {
                    $this->session->set_flashdata('success', 'Data Berhasil Dirubah');
            } else {
                    $this->session->set_flashdata('error', 'Data Gagal Dirubah');
            }
                   
        }
        redirect('eskul');
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

