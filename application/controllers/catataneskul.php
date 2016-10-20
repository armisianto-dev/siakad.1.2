

<?php

/**
 * Description of artikel
 *
 * @author white
 */
class CatatanEskul extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_catataneskul', 'the_m');
        $this->load->library(array('breadcrumb', 'sesfilter'));
        $this->load->helper(array('slug', 'filter'));
    }

    function index() {
        $this->rule->type('R');
        $users = $this->ion_auth->user()->row();
        $id=$users->username;
        $this->layout->set_title('Daftar Ekstrakulikuler');
        $this->layout->set_meta('Daftar Ekstrakulikuler');
        $this->layout->add_includes('css', 'themes/back/css/datatables/dataTables.bootstrap.css');
        $this->layout->add_includes('js', 'themes/back/js/jquery.dataTables.min.js');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Daftar Ekstrakulikuler');

        $data['primary_title'] = '<i class="ion-android-note"></i>Daftar Ekstrakulikuler';
        $data['sub_primary_title'] = 'Data Ekstrakulikuler';
        $data['ta']= $this->m_options->get_by($name="ta")->row_array();
        $ta=$data['ta']['value'];
        $params=array($ta,$aktif="Y",$id);
        $data['list'] = $this->the_m->getEskul($params)->result_array();
        $data['notif'] = $this->_notification();
        $this->layout->back('catataneskul/index', $data);
    }

    function add($id) {
        $this->rule->type('C');
        $this->layout->set_title('Tambah Catatan/Nilai Ekstrakulikuler');
        $this->session->set_flashdata('id',$id);

        $this->layout->add_includes('css', 'themes/back/css/datatables/dataTables.bootstrap.css');
        $this->layout->add_includes('js', 'themes/back/js/jquery.dataTables.min.js');
        $data['sem']= $this->m_options->get_by($name="semester")->row_array();
        $sem=$data['sem']['value'];
        $params3=array($id,$sem);
        $cek=$this->the_m->cekCatatan($params3)->num_rows();

        if ($cek>0) {
             $this->session->set_flashdata('error', 'Catatan/Nilai sudah dibuat');
             redirect('catataneskul/detail/'.$id);
        }else{
            $this->breadcrumb->clear();
            $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
            $this->breadcrumb->add_crumb('Daftar Ekstrakulikuler', site_url('catataneskul'));
            $this->breadcrumb->add_crumb('Tambah Catatan/Nilai Ekstrakulikuler');

            $data['primary_title'] = 'Tambah Catatan/Nilai Ekstrakulikuler';
            $data['sub_primary_title'] = 'Proses tambah data';
            $data['ta']= $this->m_options->get_by($name="ta")->row_array();
            $ta=$data['ta']['value'];
            $data['sem']= $this->m_options->get_by($name="semester")->row_array();
            $params=array($ta,$id);
            $params2=array($ta,$id);
            $data['list']=$this->the_m->getSiswaEskul($params)->result_array();
            $data['eskul']=$this->the_m->getEskulBy($params2)->row_array();
            $this->layout->back('catataneskul/catatan', $data);
        }
    }

    function save() {
        $this->rule->type('C');
        $this->load->library('form_validation');
        $eskul=$this->input->post('eskul');
        $sem=$this->input->post('sem');
        $data=$this->input->post('data');
        $this->session->set_flashdata('eskul',$eskul);
        $this->form_validation->set_rules('data', 'Data', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
        } else {
            //proses update bobot
                for ($i=1; $i < $data; $i++) {
                    $dataInsert = array(
                    'semester' => $sem,
                    'nilai' => $this->input->post('nilai'.$i),
                    'id_siswaeskul' => $this->input->post('id'.$i)
                    );
                    $q = $this->the_m->save($dataInsert);
                    if ($q) {
                        $this->session->set_flashdata('success', 'Berhasil Menambah Catatan/Nilai Ekstrakulikuler');
                    } else {
                        $this->session->set_flashdata('error', 'Gagal Menambah Catatan/Nilai Ekstrakulikuler');
                    }
                }
        }
        redirect('catataneskul/detail/'.$eskul);
    }

    function detail($id) {
        $this->rule->type('R');
        $this->layout->set_title('Detail Catatan/Nilai Ekstrakulikuler');
        $this->layout->set_meta('');
        $this->breadcrumb->clear();

        $this->layout->add_includes('css', 'themes/back/css/datatables/dataTables.bootstrap.css');
        $this->layout->add_includes('js', 'themes/back/js/jquery.dataTables.min.js');
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Daftar Ekstrakulikuler', site_url('catataneskul'));
        $this->breadcrumb->add_crumb('Detail Siswa Ekstrakulikuler');
        $data['primary_title'] = '<i class="ion-android-note"></i> Siswa Ekstrakulikuler';
        $data['sub_primary_title'] = 'Data Detail Catatan/Nilai Ekstrakulikuler';
        $data['ta']= $this->m_options->get_by($name="ta")->row_array();
        $ta=$data['ta']['value'];
        $data['sem']= $this->m_options->get_by($name="semester")->row_array();
        $sem=$data['sem']['value'];
        $params2=array($ta,$id);
        $data['eskul']=$this->the_m->getEskulBy($params2)->row_array();
        $params=array($ta,$id,$sem);
        $data['list']=$this->the_m->getSiswaCatatan($params)->result_array();
        $data['notif']=$this->_notification();
        $this->layout->back('catataneskul/detail', $data);
    }

    function edit($ID) {
        $this->rule->type('U');
        $data['row'] = $this->the_m->getCatatanBy($ID)->row_array();
        $this->layout->set_title('Edit Catatan/Nilai Eskul');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Daftar Ekstrakulikuler', site_url('catataneskul'));
        $this->breadcrumb->add_crumb('Detail Catatan/Nilai','javascript:history.go(-1)');
        $this->breadcrumb->add_crumb('Edit Catatan/Nilai Ekstrakulikuler');

        $data['primary_title'] = 'Edit Catatan/Nilai Ekstrakulikuler';
        $data['sub_primary_title'] = 'Proses edit';
        $data['nilai']=array('A'=>'A','B'=>'B','C'=>'C');
        $this->layout->back('catataneskul/edit', $data);
    }

    function update() {
        $this->rule->type('U');
        $id = $this->input->post('id');
        $ideskul = $this->input->post('ideskul');
        $this->session->set_flashdata('ideskul',$ideskul);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('id', 'ID', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
        } else {
            
            $dataUpdate=array(
                    'nilai'=>$this->input->post('nilai')
                );
            $q = $this->the_m->update($id, $dataUpdate);
                if ($q) {
                    $this->session->set_flashdata('success', 'Data Berhasil Dirubah');
            } else {
                    $this->session->set_flashdata('error', 'Data Gagal Dirubah');
            }
                   
        }
        redirect('catataneskul/detail/'.$ideskul);
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

