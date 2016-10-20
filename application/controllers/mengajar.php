

<?php

/**
 * Description of artikel
 *
 * @author white
 */
class Mengajar extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_mengajar', 'the_m');
        $this->load->library(array('breadcrumb', 'sesfilter'));
        $this->load->helper(array('slug', 'filter'));
    }

    function index() {
        $this->rule->type('R');
        $this->layout->set_title('Mengajar');
        $this->layout->set_meta('Data Mengajar');
        $this->layout->add_includes('css', 'themes/back/css/datatables/dataTables.bootstrap.css');
        $this->layout->add_includes('js', 'themes/back/js/jquery.dataTables.min.js');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Mengajar');

        $data['primary_title'] = '<i class="ion-android-note"></i> Mengajar';
        $data['sub_primary_title'] = 'Data Mengajar';
        $data['ta']= $this->m_options->get_by($name="ta")->row_array();
        $ta=$data['ta']['value'];
        $data['list'] = $this->the_m->get($ta)->result_array();
        $data['notif'] = $this->_notification();
        $this->layout->back('mengajar/index', $data);
    }

    function add() {
        $this->rule->type('C');
        $this->layout->set_title('Tambah Mengajar');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Mengajar', site_url('mengajar'));
        $this->breadcrumb->add_crumb('Tambah Mengajar');

        $data['primary_title'] = 'Mengajar';
        $data['sub_primary_title'] = 'Proses tambah data';
        $data['guru']=$this->the_m->getGuru()->result_array();
        $data['mapel']=$this->the_m->getMapel()->result_array();
        $data['kelas']=$this->the_m->getKelas()->result_array();
        $data['ta']= $this->m_options->get_by($name="ta")->row_array();
        $this->layout->back('mengajar/add', $data);
    }

    function save() {
        $this->rule->type('C');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('guru', 'NIP', 'required');
        $nip=$this->input->post('guru');
        $mapel=$this->input->post('mapel');
        $kelas=$this->input->post('kelas');
        $ta=$this->input->post('ta');
        $params=array($nip,$mapel,$kelas,$ta);

        $cariMengajar=$this->the_m->cariMengajar($params)->num_rows();

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
        } else {
            if ($cariMengajar>=1) {
                $this->session->set_flashdata('error', 'Data Mengajar Yang Anda Masukkan Sudah Ada');
            }else{
                $dataInsert=array(
                        'NIP'=>$this->input->post('guru'),
                        'id_kelas'=>$this->input->post('kelas'),
                        'id_mapel'=>$this->input->post('mapel'),
                        'id_thnajaran'=>$this->input->post('ta'),
                        'jml_jam'=>$this->input->post('jml'),
                    );
                $q = $this->the_m->save($dataInsert);
                if ($q) {
                    $this->session->set_flashdata('success', 'Data Berhasil Disimpan');
                } else {
                    $this->session->set_flashdata('error', 'Data Gagal Disimpan');
                }
            }
        }
        redirect('mengajar');
    }

    

    function edit($id) {
        $this->rule->type('U');
        $data['row'] = $this->the_m->get_by($id)->row_array();
        $this->layout->set_title('Edit Mengajar');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Mengajar', site_url('mengajar'));
        $this->breadcrumb->add_crumb('Edit Mengajar');

        $data['primary_title'] = 'Mengajar';
        $data['sub_primary_title'] = 'Proses edit data';
        $data['guru']=$this->the_m->getGuru()->result_array();
        $data['mapel']=$this->the_m->getMapel()->result_array();
        $data['kelas']=$this->the_m->getKelas()->result_array();
        $data['ta']= $this->m_options->get_by($name="ta")->row_array();
        $this->layout->back('mengajar/edit', $data);
    }

    function update() {
        $this->rule->type('U');
        $id = $this->input->post('id');
        $nip=$this->input->post('guru');
        $mapel=$this->input->post('mapel');
        $kelas=$this->input->post('kelas');
        $params=array($nip,$mapel,$kelas,$id);

        $cariMengajar=$this->the_m->cariMengajarUpdate($params)->num_rows();
        $this->load->library('form_validation');
        $this->form_validation->set_rules('id', 'ID Mengajar', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
        } else {
            if ($cariMengajar>=1) {
                 $this->session->set_flashdata('error', 'Data Mengajar Yang Anda Masukkan Sudah Ada');
            }else{

                $dataUpdate=array(
                    'nip'=>$this->input->post('guru'),
                    'id_mapel'=>$this->input->post('mapel'),
                    'id_kelas'=>$this->input->post('kelas'),
                    'jml_jam'=>$this->input->post('jml')
                    );
                $q = $this->the_m->update($id, $dataUpdate);
                if ($q) {
                        $this->session->set_flashdata('success', 'Data Berhasil Dirubah');
                } else {
                        $this->session->set_flashdata('error', 'Data Gagal Dirubah');
                }
            }
                   
        }
        redirect('mengajar');
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

