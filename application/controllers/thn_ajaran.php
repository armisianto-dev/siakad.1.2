

<?php

/**
 * Description of artikel
 *
 * @author white
 */
class Thn_Ajaran extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_tahun', 'the_m');
        $this->load->library(array('breadcrumb', 'sesfilter'));
        $this->load->helper(array('slug', 'filter'));
    }

    function index() {
        $this->rule->type('R');
        $this->layout->set_title('Tahun Ajaran');
        $this->layout->set_meta('Data Tahun Ajaran');
        $this->layout->add_includes('css', 'themes/back/css/datatables/dataTables.bootstrap.css');
        $this->layout->add_includes('js', 'themes/back/js/jquery.dataTables.min.js');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Tahun Ajaran');

        $data['primary_title'] = '<i class="ion-android-note"></i> Tahun Ajaran';
        $data['sub_primary_title'] = 'Data Tahun Ajaran';
        $data['list'] = $this->the_m->get()->result_array();
        $data['notif'] = $this->_notification();
        $this->layout->back('tahun/index', $data);
    }

    function add() {
        $this->rule->type('C');
        $this->layout->set_title('Tambah Tahun Ajaran');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Tahun Ajaran', site_url('thn_ajaran'));
        $this->breadcrumb->add_crumb('Tambah Tahun Ajaran');

        $data['primary_title'] = 'Tahun Ajaran';
        $data['sub_primary_title'] = 'Proses tambah data';
        $this->layout->back('tahun/add', $data);
    }

    function save() {
        $this->rule->type('C');
        $this->load->library('form_validation');
        $tahuna=$this->input->post('tahuna');
        $tahunb=$this->input->post('tahunb');
        $tahun=$tahuna.'/'.$tahunb;
        $this->form_validation->set_rules('tahuna', 'Tahun Pertama', 'required');
        $this->form_validation->set_rules('tahunb', 'Tahun Kedua', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
        } else {
            $cariTahun=$this->the_m->cariTahun($tahun)->num_rows();
            if ($cariTahun >= 1) {
                $this->session->set_flashdata('error', 'Tahun Ajaran yang anda input sudah ada');
            }else{
                $dataInsert=array(
                        'thn_ajaran'=>$tahun
                    );
                $q = $this->the_m->save($dataInsert);
                if ($q) {
                    $this->session->set_flashdata('success', 'Data Berhasil Disimpan');
                } else {
                    $this->session->set_flashdata('error', 'Data Gagal Disimpan');
                }
            }
        }
        redirect('thn_ajaran');
    }

    

    function edit($id) {
        $this->rule->type('U');
        $data['row'] = $this->the_m->get_by($id)->row_array();
        //explode tahun
        $str=$data['row']['thn_ajaran'];
        $pecah=explode("/",  $str);
        $data['thn_a']=$pecah[0];
        $data['thn_b']=$pecah[1];

        $this->layout->set_title('Edit Tahun Ajaran');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Tahun Ajaran', site_url('thn_ajaran'));
        $this->breadcrumb->add_crumb('Edit Tahun Ajaran');

        $data['primary_title'] = 'Tahun Ajaran';
        $data['sub_primary_title'] = 'Proses edit';
        $this->layout->back('tahun/edit', $data);
    }

    function update() {
        $this->rule->type('U');
        $id = $this->input->post('id');
        $tahuna=$this->input->post('tahuna');
        $tahunb=$this->input->post('tahunb');
        $tahun=$tahuna.'/'.$tahunb;
        $this->load->library('form_validation');
        $this->form_validation->set_rules('tahuna', 'Tahun Pertama', 'required');
        $this->form_validation->set_rules('tahunb', 'Tahun Kedua', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
        } else {
            
            $dataUpdate=array(
                    'thn_ajaran'=>$tahun
                );
            $q = $this->the_m->update($id, $dataUpdate);
                if ($q) {
                    $this->session->set_flashdata('success', 'Data Berhasil Dirubah');
            } else {
                    $this->session->set_flashdata('error', 'Data Gagal Dirubah');
            }
                   
        }
        redirect('thn_ajaran');
    }

    function _notification() {
        $notifForm = "";
        if ($this->session->flashdata('error') != "") {
            $notifForm .= '<div style="witdh:100%; display:block; margin-bottom:7px;" class="alert alert-info alert-dismissable col-centered col-xs-12">';
            $notifForm .= '<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>';
            $notifForm .= $this->session->flashdata('error');
            $notifForm .= '</div>';
        } else if ($this->session->flashdata('success') != "") {
            $notifForm .= '<div style="witdh:100%; display:block; margin-bottom:7px;" class="alert alert-success alert-dismissable col-centered col-xs-12">';
            $notifForm .= '<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>';
            $notifForm .= $this->session->flashdata('success');
            $notifForm .= '</div>';
        }
        return $notifForm;
    }

   
}

