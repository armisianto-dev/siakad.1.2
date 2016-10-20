

<?php

/**
 * Description of artikel
 *
 * @author white
 */
class BagiKelas extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_bagikelas', 'the_m');
        $this->load->library(array('breadcrumb', 'sesfilter'));
        $this->load->helper(array('slug', 'filter'));
    }

    function index() {
        $this->rule->type('R');
        $this->layout->set_title('Daftar Kelas');
        $this->layout->set_meta('Daftar Kelas');
        $this->layout->add_includes('css', 'themes/back/css/datatables/dataTables.bootstrap.css');
        $this->layout->add_includes('js', 'themes/back/js/jquery.dataTables.min.js');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Daftar Kelas');

        $data['primary_title'] = '<i class="ion-android-note"></i>Daftar Kelas';
        $data['sub_primary_title'] = 'Data Kelas';
        $data['ta']= $this->m_options->get_by($name="ta")->row_array();
        $ta=$data['ta']['value'];
        $data['list'] = $this->the_m->getKelas($ta)->result_array();
        $data['notif'] = $this->_notification();
        $this->layout->back('bagikelas/index', $data);
    }

    function add($id) {
        $this->rule->type('C');
        $this->layout->set_title('Tambah Siswa Kelas');
        $this->layout->add_includes('css', 'themes/back/css/datatables/dataTables.bootstrap.css');
        $this->layout->add_includes('js', 'themes/back/js/jquery.dataTables.min.js');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Daftar Kelas', site_url('bagikelas'));
        $this->breadcrumb->add_crumb('Tambah Siswa Kelas');

        $data['primary_title'] = 'Tambah Siswa Kelas';
        $data['sub_primary_title'] = 'Proses tambah data';
        $data['ta']= $this->m_options->get_by($name="ta")->row_array();
        $ta=$data['ta']['value'];
        $params2=array($ta,$id);
        $data['kelas']= $this->the_m->getKelasBy($params2)->row_array();
        $jenjang=$data['kelas']['jenjang'];
        $params=array($jenjang,$ta);
        $data['list']=$this->the_m->getSiswa($params)->result_array();
        $this->layout->back('bagikelas/add', $data);
    }

    function save() {
        $this->rule->type('C');
        $this->load->library('form_validation');
        $kelas=$this->input->post('idkelas');
        $ta=$this->input->post('ta');
        $data=$this->input->post('data');
        $this->session->set_flashdata('kelas',$kelas);
        $this->form_validation->set_rules('idkelas', 'ID Kelas', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
        } else {
            //proses update bobot
                for ($i=1; $i < $data; $i++) {
                    $checkbox=$this->input->post('pilih'.$i);
                    if ((int) $checkbox != 1) {
                        continue;
                    }
                    $dataInsert = array(
                    'id_kelas' => $kelas,
                    'id_thnajaran' => $ta,
                    'nis' => $this->input->post('nis'.$i)
                    );
                    $q = $this->the_m->save($dataInsert);
                    if ($q) {
                        $this->session->set_flashdata('success', 'Berhasil Menambah Siswa Kelas');
                    } else {
                        $this->session->set_flashdata('error', 'Gagal Menambah Siswa Kelas');
                    }
                }
        }
        redirect('bagikelas/detail/'.$kelas);
    }

    function detail($id) {
        $this->rule->type('R');
        $this->layout->set_title('Detail Pembagian Kelas');
        $this->layout->set_meta('');
        $this->breadcrumb->clear();

        $this->layout->add_includes('css', 'themes/back/css/datatables/dataTables.bootstrap.css');
        $this->layout->add_includes('js', 'themes/back/js/jquery.dataTables.min.js');
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Daftar Kelas', site_url('bagikelas'));
        $this->breadcrumb->add_crumb('Detail Pembagian Kelas');
        $data['primary_title'] = '<i class="ion-android-note"></i> Pembagian Kelas';
        $data['sub_primary_title'] = 'Data Detail Pembagian Kelas';
        $data['ta']= $this->m_options->get_by($name="ta")->row_array();
        $ta=$data['ta']['value'];
        $params2=array($ta,$id);
        $data['kelas']= $this->the_m->getKelasBy($params2)->row_array();
        $jenjang=$data['kelas']['jenjang'];
        $params=array($ta,$id);
        $data['list']=$this->the_m->getSiswaKelas($params)->result_array();
        $this->layout->back('bagikelas/detail', $data);
    }

    function pindah($ID) {
        $this->rule->type('U');
        $data['row'] = $this->the_m->get_by($ID)->row_array();
        $jenjang=$data['row']['jenjang'];
        $data['kelas'] = $this->the_m->getKelasBaru($jenjang)->result_array();
        $this->layout->set_title('Pindah Kelas');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Daftar Kelas', site_url('bagikelas'));
        $this->breadcrumb->add_crumb('Detail Kelas','javascript:history.go(-1)');
        $this->breadcrumb->add_crumb('Edit Kelas');

        $data['primary_title'] = 'Kelas';
        $data['sub_primary_title'] = 'Proses edit kelas';
        $this->layout->back('bagikelas/edit', $data);
    }

    function update() {
        $this->rule->type('U');
        $id = $this->input->post('id');
        $idkelas = $this->input->post('kelas');
        $this->session->set_flashdata('idkelas',$idkelas);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('id', 'ID', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
        } else {
            
            $dataUpdate=array(
                    'id_kelas'=>$this->input->post('kelas')
                );
            $q = $this->the_m->update($id, $dataUpdate);
                if ($q) {
                    $this->session->set_flashdata('success', 'Data Berhasil Dirubah');
            } else {
                    $this->session->set_flashdata('error', 'Data Gagal Dirubah');
            }
                   
        }
        redirect('bagikelas/detail/'.$idkelas);
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

