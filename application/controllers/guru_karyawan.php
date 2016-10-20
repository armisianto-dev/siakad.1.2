

<?php

/**
 * Description of artikel
 *
 * @author white
 */
class Guru_Karyawan extends CI_Controller {

    

    function __construct() {
        parent::__construct();
        $this->load->model('m_guru', 'the_m');
        $this->load->library(array('breadcrumb', 'sesfilter'));
        $this->load->helper(array('slug', 'filter'));
    }

    function index() {
        $this->rule->type('R');
        $offset = $this->uri->segment(3, "0");
        $this->layout->set_title('Guru & Karyawan');
        $this->layout->set_meta('Data Guru & Karyawan');
        $this->layout->add_includes('css', 'themes/back/css/datatables/dataTables.bootstrap.css');
        $this->layout->add_includes('js', 'themes/back/js/jquery.dataTables.min.js');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Guru & Karyawan');

        $data['primary_title'] = '<i class="ion-android-note"></i> Guru & Karyawan';
        $data['sub_primary_title'] = 'Data Guru & Karyawan';
        $data['list'] = $this->the_m->get()->result_array();
        $data['notif'] = $this->_notification();
        $this->layout->back('guru/index', $data);
    }

    function add() {
        $this->rule->type('C');
        $this->layout->set_title('Tambah Guru & Karyawan');
        $this->layout->add_includes('js', 'themes/back/js/plugins/datepicker/bootstrap-datepicker.js');
        $this->layout->add_includes('js', 'themes/back/js/plugins/datepicker/locales/bootstrap-datepicker.id.js');
        $this->layout->add_includes('css', 'themes/back/css/datepicker.css');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Guru & Karyawan', site_url('guru_karyawan'));
        $this->breadcrumb->add_crumb('Tambah Guru & Karyawan');

        $data['list']=$this->the_m->getAgama()->result_array();
        $data['primary_title'] = 'Guru & Karyawan';
        $data['sub_primary_title'] = 'Proses tambah data';
        $this->layout->back('guru/add', $data);
    }

    function save() {
        $this->rule->type('C');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nip', 'NIP', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
        } else {
            $jk=$this->input->post('jk');
            if ($jk=="L") {
                $noimage="no_image_male.jpg";
            }else{
                $noimage="no_image_female.jpg";
            }
            $file = $_FILES['userfile']['name'];
            if (empty($file)) {
                $dataInsert = array(
                    'nip' => $this->input->post('nip'),
                    'nama' => $this->input->post('nama'),
                    'jk' => $this->input->post('jk'),
                    'kota_lahir' => $this->input->post('kota'),
                    'tgl_lahir' => $this->input->post('tgl'),
                    'id_agama' => $this->input->post('agama'),
                    'alamat' => $this->input->post('alamat'),
                    'telp' => $this->input->post('telp'),
                    'pend_terakhir' => $this->input->post('pend'),
                    'riwayat_pend' => $this->input->post('riwayat'),
                    'jabatan' => $this->input->post('jabatan'),
                    'aktif' => $this->input->post('aktif'),
                    'foto' => $noimage
                );
                $q = $this->the_m->save($dataInsert);
                if ($q) {
                    $this->session->set_flashdata('success', 'Data Berhasil Disimpan Tanpa Gambar');
                } else {
                    $this->session->set_flashdata('error', 'Data Gagal Disimpan');
                }
            } else {
                $path = dirname(BASEPATH) . DIRECTORY_SEPARATOR;
                $config['upload_path'] = $path . 'res/foto/guru/';
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['overwrite'] = TRUE;
                $config['max_size'] = 2000;

                $this->load->library('upload', $config);
                if ($this->upload->do_upload()) {
                    $data = $this->upload->data();
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = $path . 'res/foto/guru/' . $data["file_name"];
                    $this->load->library('image_lib', $config);

                    
                    if (!$this->image_lib->resize()) {
                        $this->session->set_flashdata('error', $this->image_lib->display_errors());
                    } else {
                        $dataInsert = array(
                            'nip' => $this->input->post('nip'),
                            'nama' => $this->input->post('nama'),
                            'jk' => $this->input->post('jk'),
                            'kota_lahir' => $this->input->post('kota'),
                            'tgl_lahir' => $this->input->post('tgl'),
                            'id_agama' => $this->input->post('agama'),
                            'alamat' => $this->input->post('alamat'),
                            'telp' => $this->input->post('telp'),
                            'pend_terakhir' => $this->input->post('pend'),
                            'riwayat_pend' => $this->input->post('riwayat'),
                            'jabatan' => $this->input->post('jabatan'),
                            'aktif' => $this->input->post('aktif'),
                            'foto' => $data['file_name']
                        );
                        $q = $this->the_m->save($dataInsert);
                        if ($q) {
                            $this->session->set_flashdata('success', 'Data Berhasil Disimpan Dengan Gambar');
                        } else {
                            $this->session->set_flashdata('error', 'Data Gagal Disimpan');
                        }
                    }
                } else {
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                }
            }
        }
        redirect('guru_karyawan');
    }

    function deactivated($nip){
        $this->rule->type('U');
            $dataUpdate=array(
                'aktif'=>'T'
                );
            $q = $this->the_m->update($nip, $dataUpdate);
                if ($q) {
                    $this->session->set_flashdata('success', 'Data Berhasil Dirubah');
            } else {
                    $this->session->set_flashdata('error', 'Data Gagal Dirubah');
            }
        redirect('guru_karyawan'); 
    }

    function activated($nip){
        $this->rule->type('U');
            $dataUpdate=array(
                'aktif'=>'Y'
                );
            $q = $this->the_m->update($nip, $dataUpdate);
                if ($q) {
                    $this->session->set_flashdata('success', 'Data Berhasil Dirubah');
            } else {
                    $this->session->set_flashdata('error', 'Data Gagal Dirubah');
            }
        redirect('guru_karyawan'); 
    }

    function detail($nip) {
        $this->rule->type('R');
        $data['row'] = $this->the_m->get_detail_by($nip)->row_array();
        $this->layout->set_title('Detail Guru/Karyawan');
        $this->layout->set_meta($data['row']['nama']);
        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Data Guru/Karyawan', site_url('guru_karyawan'));
        $this->breadcrumb->add_crumb('Detail Guru/Karyawan');
        $data['primary_title'] = '<i class="ion-android-note"></i> Guru/Karyawan';
        $data['sub_primary_title'] = 'Data Detail Guru/Karyawan';
        $this->layout->back('guru/detail', $data);
    }

    function edit($nip) {
        $this->rule->type('U');
        $data['row'] = $this->the_m->get_by($nip)->row_array();
        $data['list']=$this->the_m->getAgama()->result_array();
        $data['pend']=array('SD','SMP','SMA','SMK','D3','S1','S2','S3');
        $data['jabatan']=array('Guru','Kepsek','TU');
        $this->layout->set_title('Edit Guru/Karyawan');
        $this->layout->add_includes('js', 'themes/back/js/plugins/datepicker/bootstrap-datepicker.js');
        $this->layout->add_includes('js', 'themes/back/js/plugins/datepicker/locales/bootstrap-datepicker.id.js');
        $this->layout->add_includes('css', 'themes/back/css/datepicker.css');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Guru/Karyawan', site_url('guru_karyawan'));
        $this->breadcrumb->add_crumb('Edit Guru/Karyawan');

        $data['primary_title'] = 'Guru/Karyawan';
        $data['sub_primary_title'] = 'Proses edit data';
        $this->layout->back('guru/edit', $data);
    }

    function update() {
        $this->rule->type('U');
        $nip = $this->input->post('nip_a');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nip', 'NIP', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
        } else {
            $file = $_FILES['userfile']['name'];
            if (empty($file)) {
                $dataUpdate = array(
                    'nip' => $this->input->post('nip'),
                    'nama' => $this->input->post('nama'),
                    'jk' => $this->input->post('jk'),
                    'kota_lahir' => $this->input->post('kota'),
                    'tgl_lahir' => $this->input->post('tgl'),
                    'id_agama' => $this->input->post('agama'),
                    'alamat' => $this->input->post('alamat'),
                    'telp' => $this->input->post('telp'),
                    'pend_terakhir' => $this->input->post('pend'),
                    'riwayat_pend' => $this->input->post('riwayat'),
                    'jabatan' => $this->input->post('jabatan'),
                    'aktif' => $this->input->post('aktif')
                );
                $dataUpdate2 = array(
                    'username' => $this->input->post('nip')
                );
                $q = $this->the_m->update($nip, $dataUpdate);
                $q2 = $this->the_m->updateUser($nip, $dataUpdate2);
                if ($q) {
                    $this->session->set_flashdata('success', 'Data Berhasil Dirubah');
                } else {
                    $this->session->set_flashdata('error', 'Data Gagal Dirubah');
                }
            } else {
                $path = dirname(BASEPATH) . DIRECTORY_SEPARATOR;
                $config['upload_path'] = $path . 'res/foto/guru/';
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['overwrite'] = TRUE;
                $config['max_size'] = 2000;

                $this->load->library('upload', $config);
                if ($this->upload->do_upload()) {
                    $data = $this->upload->data();
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = $path . 'res/foto/guru/' . $data["file_name"];
                    $this->load->library('image_lib', $config);

                    
                    if (!$this->image_lib->resize()) {
                        $this->session->set_flashdata('error', $this->image_lib->display_errors());
                    } else {
                        $dataUpdate = array(
                            'nip' => $this->input->post('nip'),
                            'nama' => $this->input->post('nama'),
                            'jk' => $this->input->post('jk'),
                            'kota_lahir' => $this->input->post('kota'),
                            'tgl_lahir' => $this->input->post('tgl'),
                            'id_agama' => $this->input->post('agama'),
                            'alamat' => $this->input->post('alamat'),
                            'telp' => $this->input->post('telp'),
                            'pend_terakhir' => $this->input->post('pend'),
                            'riwayat_pend' => $this->input->post('riwayat'),
                            'jabatan' => $this->input->post('jabatan'),
                            'aktif' => $this->input->post('aktif'),
                            'foto' => $data['file_name']
                        );
                        $dataUpdate2 = array(
                            'username' => $this->input->post('nip')
                        );
                        $q = $this->the_m->update($nip, $dataUpdate);
                        $q2 = $this->the_m->updateUser($nip, $dataUpdate2);
                        if ($q) {
                            $this->session->set_flashdata('success', 'Data Berhasil Dirubah');
                        } else {
                            $this->session->set_flashdata('error', 'Data Gagal Dirubah');
                        }
                    }
                } else {
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                }
            }
        }
        redirect('guru_karyawan');
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

