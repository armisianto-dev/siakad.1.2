

<?php

/**
 * Description of artikel
 *
 * @author white
 */
class PelanggaranSiswa extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_pelanggaransiswa', 'the_m');
        $this->load->library(array('breadcrumb', 'sesfilter'));
        $this->load->helper(array('slug', 'filter'));
    }

    function index() {
        $this->rule->type('R');
        $users = $this->ion_auth->user()->row();
        $user_groups = $this->ion_auth->get_users_groups($users->id)->result();
        foreach ($user_groups as $value) {
            if($value->name=="Siswa"){
                redirect('pelanggaransiswa/detail/'.$users->username);
            }
        }
        $this->layout->set_title('Pelanggaran Siswa');
        $this->layout->set_meta('Pelanggaran Siswa');
        $this->layout->add_includes('css', 'themes/back/css/datatables/dataTables.bootstrap.css');
        $this->layout->add_includes('js', 'themes/back/js/jquery.dataTables.min.js');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Pelanggaran Siswa');

        $data['primary_title'] = '<i class="ion-android-note"></i>Pelanggaran Siswa';
        $data['sub_primary_title'] = 'Pelanggaran Siswa';
        $data['list'] = $this->the_m->getSiswaAktif()->result_array();
        $data['notif'] = $this->_notification();
        $this->layout->back('pelanggaransiswa/index', $data);
    }

    function add($NIS) {
        $this->rule->type('C');
        $this->layout->set_title('Tambah Pelanggaran Siswa');
        $this->layout->add_includes('js', 'themes/back/js/plugins/datepicker/bootstrap-datepicker.js');
        $this->layout->add_includes('js', 'themes/back/js/plugins/datepicker/locales/bootstrap-datepicker.id.js');
        $this->layout->add_includes('css', 'themes/back/css/datepicker.css');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Pelanggaran Siswa', site_url('pelanggaransiswa'));
        $this->breadcrumb->add_crumb('Tambah Pelanggaran Siswa');

        $data['primary_title'] = 'Tambah Pelanggaran Siswa';
        $data['sub_primary_title'] = 'Proses tambah data';
        $data['siswa']=$this->the_m->getSiswa($NIS)->row_array();
        $data['list']=$this->the_m->getPelanggaran()->result_array();
        $this->layout->back('pelanggaransiswa/add', $data);
    }

    function save() {
        $this->rule->type('C');
        $this->load->library('form_validation');
        $nis=$this->input->post('nis');
        $this->session->set_flashdata('nis',$nis);
        $this->form_validation->set_rules('nis', 'NIS', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
        } else {
           
                    $dataInsert = array(
                    'nis' => $this->input->post('nis'),
                    'id_pelanggaran' => $this->input->post('pelanggaran'),
                    'tgl_point' => $this->input->post('tgl'),
                    'ket' => $this->input->post('ket')
                    );
                    $q = $this->the_m->save($dataInsert);
                    if ($q) {
                        $this->session->set_flashdata('success', 'Berhasil Menambah Pelanggaran Siswa');
                    } else {
                        $this->session->set_flashdata('error', 'Gagal Menambah Pelanggaran Siswa');
                    }
        }
        redirect('pelanggaransiswa/detail/'.$nis);
    }

    function detail($NIS) {
        $this->rule->type('R');
        $this->layout->set_title('Detail Pelanggaran Siswa');
        $this->layout->set_meta('');
        $this->breadcrumb->clear();

        $this->layout->add_includes('css', 'themes/back/css/datatables/dataTables.bootstrap.css');
        $this->layout->add_includes('js', 'themes/back/js/jquery.dataTables.min.js');
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Pelanggaran Siswa', site_url('pelanggaransiswa'));
        $this->breadcrumb->add_crumb('Detail Pelanggaran Siswa');
        $data['primary_title'] = '<i class="ion-android-note"></i> Pelanggaran Siswa';
        $data['sub_primary_title'] = 'Data Detail Pelanggaran Siswa';
        $data['siswa']= $this->the_m->get_by($NIS)->row_array();
        $data['list']=$this->the_m->getPelanggaranSiswa($NIS)->result_array();
        $this->layout->back('pelanggaransiswa/detail', $data);
    }

    function edit($ID) {
        $this->rule->type('U');
        $this->layout->set_title('Edit Pelanggaran Siswa');
        $this->layout->add_includes('js', 'themes/back/js/plugins/datepicker/bootstrap-datepicker.js');
        $this->layout->add_includes('js', 'themes/back/js/plugins/datepicker/locales/bootstrap-datepicker.id.js');
        $this->layout->add_includes('css', 'themes/back/css/datepicker.css');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Pelanggaran Siswa', site_url('pelanggaransiswa'));
        $this->breadcrumb->add_crumb('Detail Pelanggaran Siswa','javascript:history.go(-1)');
        $this->breadcrumb->add_crumb('Edit Pelanggaran Siswa');

        $data['primary_title'] = 'Pelanggaran Siswa';
        $data['sub_primary_title'] = 'Proses edit';
        $data['list']=$this->the_m->getPelanggaran()->result_array();
        $data['row']= $this->the_m->getPelanggaranBy($ID)->row_array();
        $this->layout->back('pelanggaransiswa/edit', $data);
    }

    function update() {
        $this->rule->type('U');
        $id = $this->input->post('id');
        $nisb = $this->input->post('nis');
        $this->session->set_flashdata('nisb',$nisb);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('id', 'ID', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
        } else {
            
            $dataUpdate=array(
                    'nis' => $this->input->post('nis'),
                    'id_pelanggaran' => $this->input->post('pelanggaran'),
                    'tgl_point' => $this->input->post('tgl'),
                    'ket' => $this->input->post('ket')
                );
            $q = $this->the_m->update($id, $dataUpdate);
                if ($q) {
                    $this->session->set_flashdata('success', 'Data Berhasil Dirubah');
            } else {
                    $this->session->set_flashdata('error', 'Data Gagal Dirubah');
            }
                   
        }
        redirect('pelanggaransiswa/detail/'.$nisb);
    }

    function delete($ID) {
        $this->rule->type('D');
        $data['row']= $this->the_m->getPelanggaranBy($ID)->row_array();
        $nisc=$data['row']['NIS'];
        $this->session->set_flashdata('nisc',$nisc);
        $q = $this->the_m->delete($ID);
        if ($q) {
            $this->session->set_flashdata('success', 'Data Berhasil Dihapus');
        } else {
            $this->session->set_flashdata('error', 'Data Gagal Dihapus');
        }
        redirect('pelanggaransiswa/detail/'.$nisc);
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

