

<?php

/**
 * Description of artikel
 *
 * @author white
 */
class Nilai extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_nilai', 'the_m');
        $this->load->library(array('breadcrumb', 'sesfilter'));
        $this->load->helper(array('slug', 'filter'));
    }

    function index() {
        $this->rule->type('R');
        $this->layout->set_title('Nilai');
        $this->layout->set_meta('Nilai'); 
        $users = $this->ion_auth->user()->row();
        $id=$users->username;
        $this->layout->add_includes('css', 'themes/back/css/datatables/dataTables.bootstrap.css');
        $this->layout->add_includes('js', 'themes/back/js/jquery.dataTables.min.js');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Nilai');

        $data['primary_title'] = '<i class="ion-android-note"></i> Input Nilai';
        $data['sub_primary_title'] = 'Data Mengajar';
        $data['ta']= $this->m_options->get_by($name="ta")->row_array();
        $ta=$data['ta']['value'];
        $params=array($ta,$id);
        $data['list'] = $this->the_m->get($params)->result_array();
        $data['notif'] = $this->_notification();
        $this->layout->back('nilai/index', $data);
    }

    function add($id) {
        $this->rule->type('C');
        $this->layout->set_title('Tambah Nilai');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Nilai', site_url('nilai'));
        $this->breadcrumb->add_crumb('Tambah Nilai');

        $data['primary_title'] = 'Nilai';
        $data['sub_primary_title'] = 'Proses tambah nilai';
        $data['sub']= $this->the_m->getSubAspek()->result_array();
        $data['mengajar']= $this->the_m->getMengajarBy($id)->row_array();
        $data['sem']= $this->m_options->get_by($name="semester")->row_array();
        $sem=$data['sem']['value'];
        $this->layout->back('nilai/add', $data);
    }

    function create() {
        $this->rule->type('C');
        $this->layout->set_title('Input Nilai');
        $id=$this->input->post('id');

        $aspek=$this->input->post('aspek');
        $this->layout->add_includes('css', 'themes/back/css/datatables/dataTables.bootstrap.css');
        $this->layout->add_includes('js', 'themes/back/js/jquery.dataTables.min.js');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Nilai', site_url('nilai'));
        $this->breadcrumb->add_crumb('Tambah Nilai','javascript:history.go(-1)');
        $this->breadcrumb->add_crumb('Input Nilai');

        $data['primary_title'] = 'Nilai';
        $data['sub_primary_title'] = 'Proses input nilai';
        $data['mengajar']= $this->the_m->getMengajarBy($id)->row_array();
        $kelas=$data['mengajar']['KELAS'];
        $data['ta']= $this->m_options->get_by($name="ta")->row_array();
        $data['sem']= $this->m_options->get_by($name="semester")->row_array();
        $ta=$data['ta']['value'];
        $sem=$data['sem']['value'];
        $params=array($id,$sem,$aspek);
        $data['akhir']=$this->the_m->cariNilai($params)->num_rows();
        $data['aspek']=$this->the_m->getSubAspekBy($aspek)->row_array();
        $data['max']=$data['aspek']['MAX'];
        $params=array($ta,$kelas);
        $data['list']=$this->the_m->getSiswaKelas($params)->result_array();
        $this->layout->back('nilai/create', $data);
    }

    function save() {
        $this->rule->type('C');
        $this->load->library('form_validation');
        $data=$this->input->post('data');
        $aspek=$this->input->post('aspek');
        $mengajar=$this->input->post('mengajar');
        $ke=$this->input->post('ke');
        $sem=$this->input->post('sem');
        $this->session->set_flashdata('mengajar',$mengajar);
        $this->form_validation->set_rules('data', 'Data', 'required');
       
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
        } else {
                for ($i=1; $i < $data; $i++) {
                    $dataInsert = array(
                    'nis' => $this->input->post('nis'.$i),    
                    'id_mengajar' => $mengajar,
                    'id_subaspek' => $aspek,
                    'semester' => $sem,
                    'ke' => $ke,
                    'nilai' => $this->input->post('nilai'.$i)
                    );
                    $q = $this->the_m->save($dataInsert);
                    if ($q) {
                        $this->session->set_flashdata('success', 'Berhasil Menambah Nilai Siswa');
                    } else {
                        $this->session->set_flashdata('error', 'Gagal Menambah Nilai Siswa');
                    }
                }
        }
        redirect('nilai/detail/'.$mengajar);
    }

    
    function detail($id) {
        $this->rule->type('R');
        $this->layout->set_title('Detail Nilai');
        $this->layout->set_meta('');
        $this->breadcrumb->clear();

        $this->layout->add_includes('css', 'themes/back/css/datatables/dataTables.bootstrap.css');
        $this->layout->add_includes('js', 'themes/back/js/jquery.dataTables.min.js');
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Nilai', site_url('nilai'));
        $this->breadcrumb->add_crumb('Detail Nilai');

        $data['primary_title'] = '<i class="ion-android-note"></i> Detail Nilai';
        $data['sub_primary_title'] = 'Data Detail Nilai'; 
        $data['sem']= $this->m_options->get_by($name="semester")->row_array();
        $sem=$data['sem']['value'];
        $params=array($id,$sem);
        $data['mengajar']= $this->the_m->getMengajarBy($id)->row_array();
        $data['list']=$this->the_m->getNilai($params)->result_array();
        $data['notif'] = $this->_notification();
        $this->layout->back('nilai/detail', $data);
    }

    function edit() {
        $this->rule->type('U');
        $this->layout->set_title('Edit Nilai');
        $id_subaspek=$this->uri->segment(3, "0");
        $id_mengajar=$this->uri->segment(4, "0");
        $ke=$this->uri->segment(5, "0");

        $this->layout->add_includes('css', 'themes/back/css/datatables/dataTables.bootstrap.css');
        $this->layout->add_includes('js', 'themes/back/js/jquery.dataTables.min.js');
        
        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Nilai', site_url('nilai'));
        $this->breadcrumb->add_crumb('Detail Nilai','javascript:history.go(-1)');
        $this->breadcrumb->add_crumb('Edit Nilai');

        $data['primary_title'] = 'Nilai';
        $data['sub_primary_title'] = 'Proses edit nilai';

        $data['mengajar']= $this->the_m->getMengajarBy($id=$id_mengajar)->row_array();
        $data['aspek']=$this->the_m->getSubAspekBy($aspek=$id_subaspek)->row_array();
        $data['sem']= $this->m_options->get_by($name="semester")->row_array();
        $sem=$data['sem']['value'];
        $params=array($id_mengajar,$sem,$id);
        $params2=array($id_subaspek,$id_mengajar,$ke);
        $data['ke']=$ke;
        $data['max']=$data['aspek']['MAX'];
        $data['list']=$this->the_m->getDetailNilai($params2)->result_array();
        $this->layout->back('nilai/edit', $data);
    }

    function update() {
        $this->rule->type('U');
        $data = $this->input->post('data');
        $mengajar2=$this->input->post('mengajar');
        $this->session->set_flashdata('mengajar2',$mengajar2);

        $this->load->library('form_validation');
        $this->form_validation->set_rules('data', 'Data', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
        } else {
            for ($i=1; $i < $data; $i++) {
                    $id= $this->input->post('id'.$i); 
                    $dataUpdate = array(
                    'nilai' => $this->input->post('nilai'.$i)
                    );
                    $q = $this->the_m->update($id,$dataUpdate);
                    if ($q) {
                        $this->session->set_flashdata('success', 'Data Berhasil Dirubah');
                    } else {
                        $this->session->set_flashdata('error', 'Data Gagal Dirubah');
                    }
                }
                   
        }
        redirect('nilai/detail/'.$mengajar2);
    }

    

    function delete() {
        $this->rule->type('D');
        $id_subaspek=$this->uri->segment(3, "0");
        $id_mengajar=$this->uri->segment(4, "0");
        $ke=$this->uri->segment(5, "0");

        $mengajar3=$id_mengajar;
        $this->session->set_flashdata('mengajar3',$mengajar3);
            $dataDelete = array(
                    'id_subaspek' => $id_subaspek,
                    'id_mengajar' => $id_mengajar,
                    'ke' => $ke
                    );
        $q = $this->the_m->delete($dataDelete);
        if ($q) {
            $this->session->set_flashdata('success', 'Data Berhasil Dihapus');
        } else {
            $this->session->set_flashdata('error', 'Data Gagal Dihapus');
        }
        redirect('nilai/detail/'.$mengajar3);
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

