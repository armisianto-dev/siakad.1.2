

<?php

/**
 * Description of artikel
 *
 * @author white
 */
class Presensi extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_presensi', 'the_m');
        $this->load->library(array('breadcrumb', 'sesfilter'));
        $this->load->helper(array('slug', 'filter'));
    }

    function index() {
        $this->rule->type('R');
        $this->layout->set_title('Presensi Siswa : Daftar Kelas');
        $this->layout->set_meta('Presensi Siswa : Daftar Kelas');
        $this->layout->add_includes('css', 'themes/back/css/datatables/dataTables.bootstrap.css');
        $this->layout->add_includes('js', 'themes/back/js/jquery.dataTables.min.js');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Presensi Siswa : Daftar Kelas');

        $data['primary_title'] = '<i class="ion-android-note"></i>Presensi Siswa';
        $data['sub_primary_title'] = 'Daftar Kelas';
        $data['ta']= $this->m_options->get_by($name="ta")->row_array();
        $ta=$data['ta']['value'];
        $data['list'] = $this->the_m->getKelas($ta)->result_array();
        $data['notif'] = $this->_notification();
        $this->layout->back('presensi/index', $data);
    }

    function arsip() {
        $this->rule->type('R');
        $users = $this->ion_auth->user()->row();
        $user_groups = $this->ion_auth->get_users_groups($users->id)->result();
        foreach ($user_groups as $value) {
            if($value->name=="Siswa"){
                redirect('presensi/detail/'.$users->username);
            }
        }
        $this->layout->set_title('Presensi Siswa : Arsip Presensi');
        $this->layout->set_meta('Presensi Siswa : Arsip Presensi');
        $this->layout->add_includes('css', 'themes/back/css/datatables/dataTables.bootstrap.css');
        $this->layout->add_includes('js', 'themes/back/js/jquery.dataTables.min.js');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Presensi Siswa : Arsip Presensi');

        $data['primary_title'] = '<i class="ion-android-note"></i>Presensi Siswa';
        $data['sub_primary_title'] = 'Arsip Presensi';
        $data['ta']= $this->m_options->get_by($name="ta")->row_array();
        $data['sem']= $this->m_options->get_by($name="semester")->row_array();
        $ta=$data['ta']['value'];
        $sem=$data['sem']['value'];
        $params=array($ta,$sem);
        $data['list'] = $this->the_m->getPresensi($params)->result_array();
        $data['notif'] = $this->_notification();
        $this->layout->back('presensi/arsip', $data);
    }

    
    function create($id) {
        $this->rule->type('C');
        $this->layout->set_title('Input Presensi Siswa');
        $this->layout->set_meta('');
        $this->breadcrumb->clear();

        $this->layout->add_includes('js', 'themes/back/js/plugins/datepicker/bootstrap-datepicker.js');
        $this->layout->add_includes('js', 'themes/back/js/plugins/datepicker/locales/bootstrap-datepicker.id.js');
        $this->layout->add_includes('css', 'themes/back/css/datepicker.css');

        $this->layout->add_includes('css', 'themes/back/css/datatables/dataTables.bootstrap.css');
        $this->layout->add_includes('js', 'themes/back/js/jquery.dataTables.min.js');
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Daftar Kelas', site_url('presensi'));
        $this->breadcrumb->add_crumb('Input Presensi Siswa');
        $data['primary_title'] = '<i class="ion-android-note"></i> Input Presensi';
        $data['sub_primary_title'] = 'Detail siswa kelas';
        $data['ta']= $this->m_options->get_by($name="ta")->row_array();
        $data['sem']= $this->m_options->get_by($name="semester")->row_array();
        $ta=$data['ta']['value'];
        $params2=array($ta,$id);
        $data['kelas']= $this->the_m->getKelasBy($params2)->row_array();
        $jenjang=$data['kelas']['jenjang'];
        $params=array($ta,$id);
        $data['list']=$this->the_m->getSiswaKelas($params)->result_array();
        $data['tgl']=date('Y-m-d');
        $this->layout->back('presensi/create', $data);
    }

    function insert() {
        $this->rule->type('C');
        $this->load->library('form_validation');
        $tgl=$this->input->post('tgl');
        $data=$this->input->post('data');
        $ta=$this->input->post('ta');
        $sem=$this->input->post('sem');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('data', 'DATA', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
        } else {
            //proses update bobot
                for ($i=1; $i < $data; $i++) {
                    $radio=$this->input->post('status'.$i);
                    if ($radio == "H") {
                        continue;
                    }
                    $dataInsert = array(
                    'nis' => $this->input->post('nis'.$i),    
                    'id_thnajaran' => $ta,
                    'semester' => $sem,
                    'tgl_presensi' => $tgl,
                    'status' => $this->input->post('status'.$i),
                    'ket' => $this->input->post('ket'.$i)
                    );
                    $q = $this->the_m->insert($dataInsert);
                    if ($q) {
                        $this->session->set_flashdata('success', 'Berhasil Menambah Presensi Siswa');
                    } else {
                        $this->session->set_flashdata('error', 'Gagal Menambah Presensi Siswa');
                    }
                }
        }
        redirect('presensi');
    }

    function detail($NIS) {
        $this->rule->type('R');
        $this->layout->set_title('Presensi Siswa : Arsip Presensi');
        $this->layout->set_meta('Presensi Siswa : Arsip Presensi');
        $this->layout->add_includes('css', 'themes/back/css/datatables/dataTables.bootstrap.css');
        $this->layout->add_includes('js', 'themes/back/js/jquery.dataTables.min.js');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Presensi Siswa : Arsip Presensi',site_url('presensi/arsip'));
        $this->breadcrumb->add_crumb('Detail Presensi');

        $data['primary_title'] = '<i class="ion-android-note"></i>Presensi Siswa';
        $data['sub_primary_title'] = 'Detail Presensi';
        $data['ta']= $this->m_options->get_by($name="ta")->row_array();
        $data['sem']= $this->m_options->get_by($name="semester")->row_array();
        $ta=$data['ta']['value'];
        $sem=$data['sem']['value'];
        $params=array($ta,$sem,$NIS);
        $data['list'] = $this->the_m->getPresensiNIS($params)->result_array();
        $data['notif'] = $this->_notification();
        $this->layout->back('presensi/detail', $data);
    }

    function edit($ID) {
        $this->rule->type('U');
        $data['row'] = $this->the_m->get_by($ID)->row_array();
        $data['status']=array("I"=>"Ijin","S"=>"Sakit","T"=>"Tanpa Keterangan");
        $this->layout->set_title('Edit Presensi');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Arsip Presensi', site_url('presensi/arsip'));
        $this->breadcrumb->add_crumb('Detail Presensi', 'javascript:history.go(-1)');
        $this->breadcrumb->add_crumb('Edit Presensi');

        $data['primary_title'] = 'Edit Presensi';
        $data['sub_primary_title'] = 'Proses edit presensi';
        $this->layout->back('presensi/edit', $data);
    }

    function update() {
        $this->rule->type('U');
        $id = $this->input->post('id');
        $nis = $this->input->post('nis');
        $this->session->set_flashdata('nis', $nis);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('id', 'ID', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
        } else {
            
            $dataUpdate=array(
                    'status'=>$this->input->post('status'),
                    'ket'=>$this->input->post('ket')
                );
            $q = $this->the_m->update($id, $dataUpdate);
                if ($q) {
                    $this->session->set_flashdata('success', 'Data Berhasil Dirubah');
            } else {
                    $this->session->set_flashdata('error', 'Data Gagal Dirubah');
            }
                   
        }
        redirect('presensi/detail/'.$nis);
    }

    function delete($ID) {
        $this->rule->type('D');
        $data['row'] = $this->the_m->get_by($ID)->row_array();
        $nis2=$data['row']['NIS'];
        $this->session->set_flashdata('nis2', $nis2);
        $q = $this->the_m->delete($ID);
        if ($q) {
            $this->session->set_flashdata('success', 'Data Berhasil Dihapus');
        } else {
            $this->session->set_flashdata('error', 'Data Gagal Dihapus');
        }
        redirect('presensi/detail/'.$nis2);
    }

    function _notification() {
        $notifForm = "";
        if ($this->session->flashdata('error') != "") {
            $notifForm .= '<div style="display:block; margin-bottom:7px;" class="alert alert-info alert-dismissable col-centered col-xs-6">';
            $notifForm .= '<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>';
            $notifForm .= $this->session->flashdata('error');
            $notifForm .= '</div>';
        } else if ($this->session->flashdata('success') != "") {
            $notifForm .= '<div style="display:block; margin-bottom:7px;" class="alert alert-success alert-dismissable col-centered col-xs-6">';
            $notifForm .= '<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>';
            $notifForm .= $this->session->flashdata('success');
            $notifForm .= '</div>';
        }
        return $notifForm;
    }

   
}

