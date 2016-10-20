

<?php

/**
 * Description of artikel
 *
 * @author white
 */
class SiswaEskul extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_siswaeskul', 'the_m');
        $this->load->library(array('breadcrumb', 'sesfilter'));
        $this->load->helper(array('slug', 'filter'));
    }

    function index() {
        $this->rule->type('R');
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
        $params=array($ta,$aktif="Y");
        $data['list'] = $this->the_m->getEskul($params)->result_array();
        $data['notif'] = $this->_notification();
        $this->layout->back('siswaeskul/index', $data);
    }

    function add($id) {
        $this->rule->type('C');
        $this->layout->set_title('Tambah Siswa Ekstrakulikuler');
        $this->layout->add_includes('css', 'themes/back/css/datatables/dataTables.bootstrap.css');
        $this->layout->add_includes('js', 'themes/back/js/jquery.dataTables.min.js');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Daftar Ekstrakulikuler', site_url('siswaeskul'));
        $this->breadcrumb->add_crumb('Tambah Siswa Ekstrakulikuler');

        $data['primary_title'] = 'Tambah Siswa Ekstrakulikuler';
        $data['sub_primary_title'] = 'Proses tambah data';
        $data['ta']= $this->m_options->get_by($name="ta")->row_array();
        $ta=$data['ta']['value'];
        $params=array($id,$ta);
        $params2=array($ta,$id);
        $data['list']=$this->the_m->getSiswa($params)->result_array();
        $data['eskul']=$this->the_m->getEskulBy($params2)->row_array();
        $this->layout->back('siswaeskul/add', $data);
    }

    function save() {
        $this->rule->type('C');
        $this->load->library('form_validation');
        $eskul=$this->input->post('ideskul');
        $ta=$this->input->post('ta');
        $data=$this->input->post('data');
        $this->session->set_flashdata('eskul',$eskul);
        $this->form_validation->set_rules('ideskul', 'ID Eskul', 'required');

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
                    'id_eskul' => $eskul,
                    'id_thnajaran' => $ta,
                    'nis' => $this->input->post('nis'.$i)
                    );
                    $q = $this->the_m->save($dataInsert);
                    if ($q) {
                        $this->session->set_flashdata('success', 'Berhasil Menambah Siswa Ekstrakulikuler');
                    } else {
                        $this->session->set_flashdata('error', 'Gagal Menambah Siswa Ekstrakulikuler');
                    }
                }
        }
        redirect('siswaeskul/detail/'.$eskul);
    }

    function detail($id) {
        $this->rule->type('R');
        $this->layout->set_title('Detail Siswa Ekstrakulikuler');
        $this->layout->set_meta('');
        $this->breadcrumb->clear();

        $this->layout->add_includes('css', 'themes/back/css/datatables/dataTables.bootstrap.css');
        $this->layout->add_includes('js', 'themes/back/js/jquery.dataTables.min.js');
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Daftar Ekstrakulikuler', site_url('siswaeskul'));
        $this->breadcrumb->add_crumb('Detail Siswa Ekstrakulikuler');
        $data['primary_title'] = '<i class="ion-android-note"></i> Siswa Ekstrakulikuler';
        $data['sub_primary_title'] = 'Data Detail Siswa Ekstrakulikuler';
        $data['ta']= $this->m_options->get_by($name="ta")->row_array();
        $ta=$data['ta']['value'];
        $params2=array($ta,$id);
        $data['eskul']=$this->the_m->getEskulBy($params2)->row_array();
        $params=array($ta,$id);
        $data['list']=$this->the_m->getSiswaEskul($params)->result_array();
        $this->layout->back('siswaeskul/detail', $data);
    }

     function delete($ID) {
        $this->rule->type('D');
        $data['row']= $this->the_m->getSiswaEskulBy($ID)->row_array();
        $eskulb=$data['row']['id_eskul'];
        $this->session->set_flashdata('eskulb',$eskulb);
        $q = $this->the_m->delete($ID);
        if ($q) {
            $this->session->set_flashdata('success', 'Data Berhasil Dihapus');
        } else {
            $this->session->set_flashdata('error', 'Data Gagal Dihapus');
        }
        redirect('siswaeskul/detail/'.$eskulb);
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

