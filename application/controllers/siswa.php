

<?php

/**
 * Description of artikel
 *
 * @author white
 */
class Siswa extends CI_Controller {

    

    function __construct() {
        parent::__construct();
        $this->load->model('m_siswa', 'the_m');
        $this->load->library(array('breadcrumb', 'sesfilter'));
        $this->load->helper(array('slug', 'filter'));
    }

    function index() {
        $this->rule->type('R');
        $offset = $this->uri->segment(3, "0");
        $this->layout->set_title('Siswa Aktif');
        $this->layout->set_meta('Data Siswa Aktif');
        $this->layout->add_includes('css', 'themes/back/css/datatables/dataTables.bootstrap.css');
        $this->layout->add_includes('js', 'themes/back/js/jquery.dataTables.min.js');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Siswa');

        $data['primary_title'] = '<i class="ion-android-note"></i> Siswa Aktif';
        $data['sub_primary_title'] = 'Data Siswa Aktif';
        $data['status']="aktif";
        $data['list'] = $this->the_m->get($status="aktif")->result_array();
        $data['jml'] = $this->the_m->get($status="aktif")->num_rows();
        $data['notif'] = $this->_notification();
        $this->layout->back('siswa/index', $data);
    }

    function kelas() {
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
        $this->layout->back('siswa/kelas', $data);
    }

    function detailkelas($id) {
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
        $data['id']=$id;
        $data['ta']= $this->m_options->get_by($name="ta")->row_array();
        $ta=$data['ta']['value'];
        $params2=array($ta,$id);
        $data['kelas']= $this->the_m->getKelasBy($params2)->row_array();
        $data['walikelas']= $this->the_m->getWaliKelas($params2)->row_array();
        $data['status']="Aktif";
        $jenjang=$data['kelas']['jenjang'];
        $params=array($ta,$id);
        $data['list']=$this->the_m->getSiswaKelas($params)->result_array();
        $this->layout->back('siswa/detailkelas', $data);
    }

    function cetakkelas($id) {
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
        $data['profil']=$this->the_m->getProfil()->row_array();
        $data['id']=$id;
        $data['ta']= $this->m_options->get_by($name="ta")->row_array();
        $ta=$data['ta']['value'];
        $params2=array($ta,$id);
        $data['kelas']= $this->the_m->getKelasBy($params2)->row_array();
        $data['walikelas']= $this->the_m->getWaliKelas($params2)->row_array();
        $jenjang=$data['kelas']['jenjang'];
        $params=array($ta,$id);
        $data['list']=$this->the_m->getSiswaKelas($params)->result_array();
        $this->load->view('back/layouts/siswa/cetakkelas', $data);
    }

    function keluar() {
        $this->rule->type('R');
        $offset = $this->uri->segment(3, "0");
        $this->layout->set_title('Siswa Keluar');
        $this->layout->set_meta('Data Siswa Keluar');
        $this->layout->add_includes('css', 'themes/back/css/datatables/dataTables.bootstrap.css');
        $this->layout->add_includes('js', 'themes/back/js/jquery.dataTables.min.js');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Siswa');

        $data['primary_title'] = '<i class="ion-android-note"></i> Siswa Keluar';
        $data['sub_primary_title'] = 'Data Siswa Keluar';
        $data['status']="keluar";
        $data['list'] = $this->the_m->get($status="keluar")->result_array();
        $data['jml'] = $this->the_m->get($status="keluar")->num_rows();
        $data['notif'] = $this->_notification();
        $this->layout->back('siswa/index', $data);
    }

    function add() {
        $this->rule->type('C');
        $this->layout->set_title('Tambah Siswa');
        $this->layout->add_includes('js', 'themes/back/js/plugins/datepicker/bootstrap-datepicker.js');
        $this->layout->add_includes('js', 'themes/back/js/plugins/datepicker/locales/bootstrap-datepicker.id.js');
        $this->layout->add_includes('css', 'themes/back/css/datepicker.css');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Siswa', site_url('siswa'));
        $this->breadcrumb->add_crumb('Tambah Siswa');

        $data['list']=$this->the_m->getAgama()->result_array();
        $data['primary_title'] = 'Siswa';
        $data['sub_primary_title'] = 'Proses tambah data';
        $this->layout->back('siswa/add', $data);
    }

    function save() {
        $this->rule->type('C');
        $this->load->library('form_validation');
        $pindahan= $this->input->post('pindahan');
        $wali= $this->input->post('sttswali');
        $nis= $this->input->post('nis');
        $this->form_validation->set_rules('nis', 'NIS', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
        } else {
        //get nis dari data siswa yg sdh diinput
        $getNIS=$this->the_m->getNIS($nis)->num_rows();
        if($getNIS>1){
            $this->session->set_flashdata('error', 'Ditemukan NIS yang sama');
            redirect('siswa');
        }else{
            $jk=$this->input->post('jk');
            if ($jk=="L") {
                $noimage="no_image_male.jpg";
            }else{
                $noimage="no_image_female.jpg";
            }
            $file = $_FILES['userfile']['name'];
            if (empty($file)) {
                $insertSiswa = array(
                    'nis' => $this->input->post('nis'),
                    'nisn' => $this->input->post('nisn'),
                    'nama' => $this->input->post('nama'),
                    'jk' => $this->input->post('jk'),
                    'kota_lahir' => $this->input->post('kota'),
                    'tgl_lahir' => $this->input->post('tgl'),
                    'id_agama' => $this->input->post('agama'),
                    'alamat' => $this->input->post('alamat'),
                    'jml_saudara' => $this->input->post('jmlsdr'),
                    'anak_ke' => $this->input->post('anakke'),
                    'status_anak' => $this->input->post('sttsanak'),
                    'asal_sd' => $this->input->post('asalsd'),
                    'no_sttb' => $this->input->post('nosttb'),
                    'tahun_sttb' => $this->input->post('thnsttb'),
                    'kls_diterima' => $this->input->post('kelas'),
                    'tgl_diterima' => $this->input->post('tglditerima'),
                    'tingkat' => $this->input->post('kelas'),
                    'status' => $this->input->post('status'),
                    'pindahan' => $this->input->post('pindahan'),
                    'foto' => $noimage
                );
                $q = $this->the_m->save($insertSiswa);
                
                

                //variabel insert smp asal
                $insertSMP=array(
                    'nis' => $nis,
                    'nama_sekolah' => $this->input->post('smpasal'),
                    'alasan_pindah' => $this->input->post('ketpindah')
                );

                //variabel insert ortu
                 $insertOrtu=array(
                    'nis' => $nis,
                    'ayah' => $this->input->post('ayah'),
                    'ibu' => $this->input->post('ibu'),
                    'alamat_ayah' => $this->input->post('alamatayah'),
                    'alamat_ibu' => $this->input->post('alamatibu'),
                    'pekerjaan_ayah' => $this->input->post('kerjaayah'),
                    'pekerjaan_ibu' => $this->input->post('kerjaibu'),
                    'telp_ayah' => $this->input->post('telpayah'),
                    'telp_ibu' => $this->input->post('telpibu'),
                    'agama_ayah' => $this->input->post('agamaayah'),
                    'agama_ibu' => $this->input->post('agamaibu')
                );
                //variabel insert wali siswa
                 $insertWaliAyah=array(
                    'nis' => $nis,
                    'nama_wali' => $this->input->post('ayah'),
                    'alamat_wali' => $this->input->post('alamatayah'),
                    'pekerjaan_wali' => $this->input->post('kerjaayah'),
                    'telp_wali' => $this->input->post('telpayah'),
                    'agama_wali' => $this->input->post('agamaayah'),
                    'status_wali' => "ayah"
                );
                $insertWaliIbu=array(
                    'nis' => $nis,
                    'nama_wali' => $this->input->post('ibu'),
                    'alamat_wali' => $this->input->post('alamatibu'),
                    'pekerjaan_wali' => $this->input->post('kerjaibu'),
                    'telp_wali' => $this->input->post('telpibu'),
                    'agama_wali' => $this->input->post('agamaibu'),
                    'status_wali' => "ibu"
                );
                $insertWali=array(
                    'nis' => $nis,
                    'nama_wali' => $this->input->post('wali'),
                    'alamat_wali' => $this->input->post('alamatwali'),
                    'pekerjaan_wali' => $this->input->post('kerjawali'),
                    'telp_wali' => $this->input->post('telpwali'),
                    'agama_wali' => $this->input->post('agamawali'),
                    'status_wali' => "ol"
                );
                //insert ortu
                $q2=$this->the_m->saveOrtu($insertOrtu);
                //insert smp asal jika pindahan
                if ($pindahan=="Y") {
                    $q3=$this->the_m->saveSMP($insertSMP);
                }

                //insert data wali
                if ($wali=="ayah") {
                    $insertWaliSiswa=$insertWaliAyah;
                    $q4=$this->the_m->saveWali($insertWaliSiswa);
                } elseif ($wali=="ibu") {
                    $insertWaliSiswa=$insertWaliIbu;
                    $q4=$this->the_m->saveWali($insertWaliSiswa);
                } else {
                    $insertWaliSiswa=$insertWali;
                    $q4=$this->the_m->saveWali($insertWaliSiswa);
                }

                //pesan
                if ($q4) {
                    $this->session->set_flashdata('success', 'Data Berhasil Disimpan Tanpa Gambar');
                } else {
                    $this->session->set_flashdata('error', 'Data Gagal Disimpan');
                }
                
            } else {
                $path = dirname(BASEPATH) . DIRECTORY_SEPARATOR;
                $config['upload_path'] = $path . 'res/foto/siswa/';
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['overwrite'] = TRUE;
                $config['max_size'] = 2000;

                $this->load->library('upload', $config);
                if ($this->upload->do_upload()) {
                    $data = $this->upload->data();
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = $path . 'res/foto/siswa/' . $data["file_name"];
                    $this->load->library('image_lib', $config);

                    
                    if (!$this->image_lib->resize()) {
                        $this->session->set_flashdata('error', $this->image_lib->display_errors());
                    } else {
                        $insertSiswa = array(
                            'nis' => $this->input->post('nis'),
                            'nisn' => $this->input->post('nisn'),
                            'nama' => $this->input->post('nama'),
                            'jk' => $this->input->post('jk'),
                            'kota_lahir' => $this->input->post('kota'),
                            'tgl_lahir' => $this->input->post('tgl'),
                            'id_agama' => $this->input->post('agama'),
                            'alamat' => $this->input->post('alamat'),
                            'jml_saudara' => $this->input->post('jmlsdr'),
                            'anak_ke' => $this->input->post('anakke'),
                            'status_anak' => $this->input->post('sttsanak'),
                            'asal_sd' => $this->input->post('asalsd'),
                            'no_sttb' => $this->input->post('nosttb'),
                            'tahun_sttb' => $this->input->post('thnsttb'),
                            'kls_diterima' => $this->input->post('kelas'),
                            'tgl_diterima' => $this->input->post('tglditerima'),
                            'tingkat' => $this->input->post('kelas'),
                            'status' => $this->input->post('status'),
                            'pindahan' => $this->input->post('pindahan'),
                            'foto' => $data['file_name']
                        );
                        $q = $this->the_m->save($insertSiswa);

                        //variabel insert smp asal
                        $insertSMP=array(
                            'nis' => $nis,
                            'nama_sekolah' => $this->input->post('smpasal'),
                            'alasan_pindah' => $this->input->post('ketpindah')
                        );

                        //variabel insert ortu
                         $insertOrtu=array(
                            'nis' => $nis,
                            'ayah' => $this->input->post('ayah'),
                            'ibu' => $this->input->post('ibu'),
                            'alamat_ayah' => $this->input->post('alamatayah'),
                            'alamat_ibu' => $this->input->post('alamatibu'),
                            'pekerjaan_ayah' => $this->input->post('kerjaayah'),
                            'pekerjaan_ibu' => $this->input->post('kerjaibu'),
                            'telp_ayah' => $this->input->post('telpayah'),
                            'telp_ibu' => $this->input->post('telpibu'),
                            'agama_ayah' => $this->input->post('agamaayah'),
                            'agama_ibu' => $this->input->post('agamaibu')
                        );
                        //variabel insert wali siswa
                         $insertWaliAyah=array(
                            'nis' => $nis,
                            'nama_wali' => $this->input->post('ayah'),
                            'alamat_wali' => $this->input->post('alamatayah'),
                            'pekerjaan_wali' => $this->input->post('kerjaayah'),
                            'telp_wali' => $this->input->post('telpayah'),
                            'agama_wali' => $this->input->post('agamaayah'),
                            'status_wali' => "ayah"
                        );
                        $insertWaliIbu=array(
                            'nis' => $nis,
                            'nama_wali' => $this->input->post('ibu'),
                            'alamat_wali' => $this->input->post('alamatibu'),
                            'pekerjaan_wali' => $this->input->post('kerjaibu'),
                            'telp_wali' => $this->input->post('telpibu'),
                            'agama_wali' => $this->input->post('agamaibu'),
                            'status_wali' => "ibu"
                        );
                        $insertWali=array(
                            'nis' => $nis,
                            'nama_wali' => $this->input->post('wali'),
                            'alamat_wali' => $this->input->post('alamatwali'),
                            'pekerjaan_wali' => $this->input->post('kerjawali'),
                            'telp_wali' => $this->input->post('telpwali'),
                            'agama_wali' => $this->input->post('agamawali'),
                            'status_wali' => "ol"
                        );
                        //insert ortu
                        $q2=$this->the_m->saveOrtu($insertOrtu);
                        //insert smp asal jika pindahan
                        if ($pindahan=="Y") {
                            $q3=$this->the_m->saveSMP($insertSMP);
                        }

                        //insert data wali
                        if ($wali=="ayah") {
                            $insertWaliSiswa=$insertWaliAyah;
                            $q4=$this->the_m->saveWali($insertWaliSiswa);
                        } elseif ($wali=="ibu") {
                            $insertWaliSiswa=$insertWaliIbu;
                            $q4=$this->the_m->saveWali($insertWaliSiswa);
                        } else {
                            $insertWaliSiswa=$insertWali;
                            $q4=$this->the_m->saveWali($insertWaliSiswa);
                        }

                        //pesan
                        if ($q4) {
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
        }
        redirect('siswa');
    }

    
    function detail($nis) {
        $this->rule->type('R');
        $data['ta']= $this->m_options->get_by($name="ta")->row_array();
        $data['sem']= $this->m_options->get_by($name="semester")->row_array();
        $ta=$data['ta']['value'];
        $sem=$data['sem']['value'];
        $data['row'] = $this->the_m->get_detail_by($nis)->row_array();
        $data['ortu'] = $this->the_m->get_ortu_by($nis)->row_array();
        $data['wali'] = $this->the_m->get_wali_by($nis)->row_array();
        $data['list']=$this->the_m->getAgama()->result_array();
        $data['kelas']=$this->the_m->getRiwayatKelas($nis)->result_array();
        $data['keluar']=$this->the_m->cariKeluar($nis)->row_array();
        $data['point']=$this->the_m->getPelanggaran($nis)->row_array();
        $data['absen']=$this->the_m->getAbsen($nis)->row_array();
        $this->layout->set_title('Detail Siswa');
        $this->layout->set_meta($data['row']['nama']);
        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Siswa', 'javascript:history.go(-1)');
        $this->breadcrumb->add_crumb('Detail Siswa');
        $data['primary_title'] = '<i class="ion-android-note"></i> Siswa';
        $data['sub_primary_title'] = 'Data Detail Siswa';
        $this->layout->back('siswa/detail', $data);
    }

    

    function cetak($nis) {
        $this->rule->type('R');
        $data['row'] = $this->the_m->get_detail_by($nis)->row_array();
        $filename="Detail Siswa : ".$data['row']['nama'];
        $data['ortu'] = $this->the_m->get_ortu_by($nis)->row_array();
        $data['wali'] = $this->the_m->get_wali_by($nis)->row_array();
        $data['list']=$this->the_m->getAgama()->result_array();
        $data['keluar']=$this->the_m->cariKeluar($nis)->row_array();
        $data['kepsek']=$this->the_m->getKepsek()->row_array();
        $tanggal=getdate();
        $hari=$tanggal['mday'];
        $bulan=$tanggal['mon'];
        $tahun=$tanggal['year'];
        $data['date']=$tahun.'-'.$bulan.'-'.$hari;
        $this->layout->set_title('Detail Siswa');
        $this->layout->set_meta($data['row']['nama']);
        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Siswa', 'javascript:history.go(-1)');
        $this->breadcrumb->add_crumb('Detail Siswa');
        $data['primary_title'] = '<i class="ion-android-note"></i> Siswa';
        $data['sub_primary_title'] = 'Data Detail Siswa';
        $this->load->view('back/layouts/siswa/cetak', $data);
        
    }
    
    function edit($nis) {
        $this->rule->type('U');
        $data['row'] = $this->the_m->get_by($nis)->row_array();
        $data['ortu'] = $this->the_m->get_ortu_by($nis)->row_array();
        $data['wali'] = $this->the_m->get_wali_by($nis)->row_array();
        $data['list']=$this->the_m->getAgama()->result_array();
        $data['anak']=array('kandung','angkat','tiri');
        $data['kelas']=array('7','8','9');
        $data['status']=array('ayah','ibu','ol');
        $this->layout->set_title('Edit Siswa');
        $this->layout->add_includes('js', 'themes/back/js/plugins/datepicker/bootstrap-datepicker.js');
        $this->layout->add_includes('js', 'themes/back/js/plugins/datepicker/locales/bootstrap-datepicker.id.js');
        $this->layout->add_includes('css', 'themes/back/css/datepicker.css');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Siswa', 'javascript:history.go(-1)');
        $this->breadcrumb->add_crumb('Edit Siswa');

        $data['primary_title'] = 'Siswa';
        $data['sub_primary_title'] = 'Proses edit data';
        $this->layout->back('siswa/edit', $data);
    }

    function update() {
        $this->rule->type('U');
        $nis = $this->input->post('nis');
        $pindahan= $this->input->post('pindahan');
        $wali= $this->input->post('sttswali');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nis', 'NIS', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
        } else {
            $file = $_FILES['userfile']['name'];
            if (empty($file)) {
                $updateSiswa = array(
                    'nis' => $this->input->post('nis'),
                    'nisn' => $this->input->post('nisn'),
                    'nama' => $this->input->post('nama'),
                    'jk' => $this->input->post('jk'),
                    'kota_lahir' => $this->input->post('kota'),
                    'tgl_lahir' => $this->input->post('tgl'),
                    'id_agama' => $this->input->post('agama'),
                    'alamat' => $this->input->post('alamat'),
                    'jml_saudara' => $this->input->post('jmlsdr'),
                    'anak_ke' => $this->input->post('anakke'),
                    'status_anak' => $this->input->post('sttsanak'),
                    'asal_sd' => $this->input->post('asalsd'),
                    'no_sttb' => $this->input->post('nosttb'),
                    'tahun_sttb' => $this->input->post('thnsttb'),
                    'kls_diterima' => $this->input->post('kelas'),
                    'tgl_diterima' => $this->input->post('tglditerima'),
                    'tingkat' => $this->input->post('kelas'),
                    'pindahan' => $this->input->post('pindahan')
                );

                //variabel insert smp asal
                $updateSMP=array(
                    'nis' => $nis,
                    'nama_sekolah' => $this->input->post('smpasal'),
                    'alasan_pindah' => $this->input->post('ketpindah')
                );

                //variabel insert ortu
                 $updateOrtu=array(
                    'nis' => $nis,
                    'ayah' => $this->input->post('ayah'),
                    'ibu' => $this->input->post('ibu'),
                    'alamat_ayah' => $this->input->post('alamatayah'),
                    'alamat_ibu' => $this->input->post('alamatibu'),
                    'pekerjaan_ayah' => $this->input->post('kerjaayah'),
                    'pekerjaan_ibu' => $this->input->post('kerjaibu'),
                    'telp_ayah' => $this->input->post('telpayah'),
                    'telp_ibu' => $this->input->post('telpibu'),
                    'agama_ayah' => $this->input->post('agamaayah'),
                    'agama_ibu' => $this->input->post('agamaibu')
                );
                //variabel insert wali siswa
                 $updateWaliAyah=array(
                    'nis' => $nis,
                    'nama_wali' => $this->input->post('ayah'),
                    'alamat_wali' => $this->input->post('alamatayah'),
                    'pekerjaan_wali' => $this->input->post('kerjaayah'),
                    'telp_wali' => $this->input->post('telpayah'),
                    'agama_wali' => $this->input->post('agamaayah'),
                    'status_wali' => "ayah"
                );
                $updateWaliIbu=array(
                    'nis' => $nis,
                    'nama_wali' => $this->input->post('ibu'),
                    'alamat_wali' => $this->input->post('alamatibu'),
                    'pekerjaan_wali' => $this->input->post('kerjaibu'),
                    'telp_wali' => $this->input->post('telpibu'),
                    'agama_wali' => $this->input->post('agamaibu'),
                    'status_wali' => "ibu"
                );
                $updateWali=array(
                    'nis' => $nis,
                    'nama_wali' => $this->input->post('wali'),
                    'alamat_wali' => $this->input->post('alamatwali'),
                    'pekerjaan_wali' => $this->input->post('kerjawali'),
                    'telp_wali' => $this->input->post('telpwali'),
                    'agama_wali' => $this->input->post('agamawali'),
                    'status_wali' => "ol"
                );
               
                //proses update data
                //update data siswa
                $q = $this->the_m->updateSiswa($nis, $updateSiswa);
                //update data smp asal
                $cariKelas=$this->the_m->cariSMP($nis)->num_rows();

                if ($pindahan=="T" && $cariKelas>=1) {
                    $q2=$this->the_m->deleteSMP($nis);
                }elseif($pindahan=="Y" && $cariKelas>=1) {
                    $q2=$this->the_m->updateSMP($nis, $updateSMP);
                }elseif($pindahan=="Y" && $cariKelas==0){
                    $q2=$this->the_m->saveUpdateSMP($updateSMP);
                }else{

                }
                //update ortu
                $q3=$this->the_m->updateOrtu($nis, $updateOrtu);
                //update wali siswa
                if ($wali=="ayah") {
                    $updateWaliSiswa=$updateWaliAyah;
                    $q4=$this->the_m->updateWaliSiswa($nis, $updateWaliSiswa);
                } elseif ($wali=="ibu") {
                    $updateWaliSiswa=$updateWaliIbu;
                    $q4=$this->the_m->updateWaliSiswa($nis, $updateWaliSiswa);
                } else {
                    $updateWaliSiswa=$updateWali;
                    $q4=$this->the_m->updateWaliSiswa($nis, $updateWaliSiswa);
                }
                if ($q4) {
                    $this->session->set_flashdata('success', 'Data Berhasil Dirubah');
                } else {
                    $this->session->set_flashdata('error', 'Data Gagal Dirubah');
                }
            } else {
                $path = dirname(BASEPATH) . DIRECTORY_SEPARATOR;
                $config['upload_path'] = $path . 'res/foto/siswa/';
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['overwrite'] = TRUE;
                $config['max_size'] = 2000;

                $this->load->library('upload', $config);
                if ($this->upload->do_upload()) {
                    $data = $this->upload->data();
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = $path . 'res/foto/siswa/' . $data["file_name"];
                    $this->load->library('image_lib', $config);

                    
                    if (!$this->image_lib->resize()) {
                        $this->session->set_flashdata('error', $this->image_lib->display_errors());
                    } else {
                        $updateSiswa = array(
                            'nis' => $this->input->post('nis'),
                            'nisn' => $this->input->post('nisn'),
                            'nama' => $this->input->post('nama'),
                            'jk' => $this->input->post('jk'),
                            'kota_lahir' => $this->input->post('kota'),
                            'tgl_lahir' => $this->input->post('tgl'),
                            'id_agama' => $this->input->post('agama'),
                            'alamat' => $this->input->post('alamat'),
                            'jml_saudara' => $this->input->post('jmlsdr'),
                            'anak_ke' => $this->input->post('anakke'),
                            'status_anak' => $this->input->post('sttsanak'),
                            'asal_sd' => $this->input->post('asalsd'),
                            'no_sttb' => $this->input->post('nosttb'),
                            'tahun_sttb' => $this->input->post('thnsttb'),
                            'kls_diterima' => $this->input->post('kelas'),
                            'tgl_diterima' => $this->input->post('tglditerima'),
                            'tingkat' => $this->input->post('kelas'),
                            'pindahan' => $this->input->post('pindahan'),
                            'foto' => $data['file_name']
                        );

                        //variabel insert smp asal
                        $updateSMP=array(
                            'nis' => $nis,
                            'nama_sekolah' => $this->input->post('smpasal'),
                            'alasan_pindah' => $this->input->post('ketpindah')
                        );

                        //variabel insert ortu
                         $updateOrtu=array(
                            'nis' => $nis,
                            'ayah' => $this->input->post('ayah'),
                            'ibu' => $this->input->post('ibu'),
                            'alamat_ayah' => $this->input->post('alamatayah'),
                            'alamat_ibu' => $this->input->post('alamatibu'),
                            'pekerjaan_ayah' => $this->input->post('kerjaayah'),
                            'pekerjaan_ibu' => $this->input->post('kerjaibu'),
                            'telp_ayah' => $this->input->post('telpayah'),
                            'telp_ibu' => $this->input->post('telpibu'),
                            'agama_ayah' => $this->input->post('agamaayah'),
                            'agama_ibu' => $this->input->post('agamaibu')
                        );
                        //variabel insert wali siswa
                         $updateWaliAyah=array(
                            'nis' => $nis,
                            'nama_wali' => $this->input->post('ayah'),
                            'alamat_wali' => $this->input->post('alamatayah'),
                            'pekerjaan_wali' => $this->input->post('kerjaayah'),
                            'telp_wali' => $this->input->post('telpayah'),
                            'agama_wali' => $this->input->post('agamaayah'),
                            'status_wali' => "ayah"
                        );
                        $updateWaliIbu=array(
                            'nis' => $nis,
                            'nama_wali' => $this->input->post('ibu'),
                            'alamat_wali' => $this->input->post('alamatibu'),
                            'pekerjaan_wali' => $this->input->post('kerjaibu'),
                            'telp_wali' => $this->input->post('telpibu'),
                            'agama_wali' => $this->input->post('agamaibu'),
                            'status_wali' => "ibu"
                        );
                        $updateWali=array(
                            'nis' => $nis,
                            'nama_wali' => $this->input->post('wali'),
                            'alamat_wali' => $this->input->post('alamatwali'),
                            'pekerjaan_wali' => $this->input->post('kerjawali'),
                            'telp_wali' => $this->input->post('telpwali'),
                            'agama_wali' => $this->input->post('agamawali'),
                            'status_wali' => "ol"
                        );
                       
                        //proses update data
                        //update data siswa
                        $q = $this->the_m->updateSiswa($nis, $updateSiswa);
                        //update data smp asal
                        $cariKelas=$this->the_m->cariSMP($nis)->num_rows();

                        if ($pindahan=="T" && $cariKelas>=1) {
                            $q2=$this->the_m->deleteSMP($nis);
                        }elseif($pindahan=="Y" && $cariKelas>=1) {
                            $q2=$this->the_m->updateSMP($nis, $updateSMP);
                        }elseif($pindahan=="Y" && $cariKelas==0){
                            $q2=$this->the_m->saveUpdateSMP($nis, $updateSMP);
                        }else{

                        }
                        //update ortu
                        $q3=$this->the_m->updateOrtu($nis, $updateOrtu);
                        //update wali siswa
                        if ($wali=="ayah") {
                            $updateWaliSiswa=$updateWaliAyah;
                            $q4=$this->the_m->updateWaliSiswa($nis, $updateWaliSiswa);
                        } elseif ($wali=="ibu") {
                            $updateWaliSiswa=$updateWaliIbu;
                            $q4=$this->the_m->updateWaliSiswa($nis, $updateWaliSiswa);
                        } else {
                            $updateWaliSiswa=$updateWali;
                            $q4=$this->the_m->updateWaliSiswa($nis, $updateWaliSiswa);
                        }

                        if ($q4) {
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
        redirect('siswa');
    }

    function ketKeluar($nis){
        $this->rule->type('U');
        $this->rule->type('C');
        $data['row'] = $this->the_m->get_by($nis)->row_array();
        $cariKeluar=$this->the_m->cariKeluar($nis)->num_rows();
        $data['keluar']=$cariKeluar;
        $data['rowb']=$this->the_m->cariKeluar($nis)->row_array();
        $this->layout->set_title('Keterangan Siswa Keluar');
        $this->layout->add_includes('js', 'themes/back/js/plugins/datepicker/bootstrap-datepicker.js');
        $this->layout->add_includes('js', 'themes/back/js/plugins/datepicker/locales/bootstrap-datepicker.id.js');
        $this->layout->add_includes('css', 'themes/back/css/datepicker.css');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Siswa', 'javascript:history.go(-1)');
        $this->breadcrumb->add_crumb('Edit Siswa');

        $data['primary_title'] = 'Siswa';
        $data['sub_primary_title'] = 'Keterangan Siswa Keluar';
        $this->layout->back('siswa/keluar', $data);
    }

    function saveKeluar(){
        $this->rule->type('U');
        $this->rule->type('C');
        $nis= $this->input->post('nis');
        $cariKeluar=$this->the_m->cariKeluar($nis)->num_rows();

        $insertKeluar=array(
            'nis'=>$nis,
            'stts_keluar'=>$this->input->post('status'),
            'tgl_keluar'=>$this->input->post('tgl'),
            'alasan'=>$this->input->post('ketkeluar')
        );

        $updateSiswa=array(
            'status'=>'keluar'
        );
        $updateKeluar=array(
            'stts_keluar'=>$this->input->post('status'),
            'tgl_keluar'=>$this->input->post('tgl'),
            'alasan'=>$this->input->post('ketkeluar')
        );

        if ($cariKeluar >= 1) {
            $q=$this->the_m->updateKeluar($nis, $updateKeluar);
        }else{
            $q=$this->the_m->insertKeluar($insertKeluar);
            $q2=$this->the_m->updateSiswa($nis, $updateSiswa);
        }

        if ($q) {
            $this->session->set_flashdata('success', 'Data Berhasil Dirubah');
        } else {
            $this->session->set_flashdata('error', 'Data Gagal Dirubah');
        }
        redirect('siswa/keluar');

    }

    function aktifkan($nis){
        $this->rule->type('U');
        $this->rule->type('C');

        $updateSiswa=array(
            'status'=>'aktif'
        );
        
        $q=$this->the_m->updateSiswa($nis, $updateSiswa);
        $q2=$this->the_m->deleteKeluar($nis);

        if ($q2) {
            $this->session->set_flashdata('success', 'Data Berhasil Dirubah');
        } else {
            $this->session->set_flashdata('error', 'Data Gagal Dirubah');
        }
        redirect('siswa');

    }

    function lihat() {
        $this->rule->type('R');
        $this->layout->set_title('Raport Siswa');
        $this->layout->set_meta('');

        $nis=$this->uri->segment(3, "0");
        $sem=$this->uri->segment(4, "0");
        $ta=$this->uri->segment(5, "0");

        $this->layout->add_includes('css', 'themes/back/css/datatables/dataTables.bootstrap.css');
        $this->layout->add_includes('js', 'themes/back/js/jquery.dataTables.min.js');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Raport Siswa : Daftar siswa',site_url('raport'));
        $this->breadcrumb->add_crumb('Lihat Raport');


        $data['primary_title'] = '<i class="ion-android-note"></i> Raport Siswa';
        $data['notif']=$this->_notification();
        $params=array($nis,$sem,$ta);
        $data['sakit']=$this->m_raport->getAbsen($params2=array($nis,$sem,$ta,$stts='S'))->row_array();
        $data['ijin']=$this->m_raport->getAbsen($params2=array($nis,$sem,$ta,$stts='I'))->row_array();
        $data['alpha']=$this->m_raport->getAbsen($params2=array($nis,$sem,$ta,$stts='T'))->row_array();
        $data['eskul']=$this->m_raport->getEskul($params)->result_array();
        $data['siswa']=$this->m_raport->getSiswaNIS($nis=$nis)->row_array();
        $data['profil']=$this->m_raport->getProfil()->row_array();
        $idkls=$data['siswa']['IDKLS'];
        $params3=array($ta,$idkls);
        $data['wali']=$this->m_raport->getWali($params3)->row_array();
        $data['ta']= $this->m_options->getTA_id($id=$ta)->row_array();
        $data['sem']= $sem;
        $data['tahun']= $ta;
        if ($sem==1) {
            $data['semester']="ganjil";
        }else{
            $data['semester']="genap";
        }
        $data['raport']=$this->m_raport->cekRaport($params)->row_array();
        $data['arrA']=$this->_nilai($nis,$ta,$sem,$kel="A");
        $data['arrB']=$this->_nilai($nis,$ta,$sem,$kel="B");
        $data['catatanA']=$this->_catatan($nis,$ta,$sem,$kel="A");
        $data['catatanB']=$this->_catatan($nis,$ta,$sem,$kel="B");
        $data['notif'] = $this->_notification();
        $this->layout->back('raport/detail', $data);
    }


    function cetakraport() {
        $this->rule->type('R');
        $this->layout->set_title('Detail Siswa Ekstrakulikuler');
        $this->layout->set_meta('');

        $nis=$this->uri->segment(3, "0");
        $sem=$this->uri->segment(4, "0");
        $ta=$this->uri->segment(5, "0");

        $this->session->set_flashdata('nis',$nis);
        $this->session->set_flashdata('sem',$sem);
        $this->session->set_flashdata('ta',$ta);

        $params=array($nis,$sem,$ta);
        $data['raport']=$this->m_raport->cekRaport($params)->row_array();
        if(empty($data['raport'])){
            $this->session->set_flashdata('error', 'Belum melakukan setup raport, tidak bisa mencetak raport <a href="'.site_url('raport/add/'.$siswa['NIS'].'/'.$sem.'/'.$tahun.'').'">Klik Untuk Setup Raport</a>');
            redirect('raport/lihat/'.$nis.'/'.$sem.'/'.$ta.'');
        }else{
            $data['sakit']=$this->m_raport->getAbsen($params2=array($nis,$sem,$ta,$stts='S'))->row_array();
            $data['ijin']=$this->m_raport->getAbsen($params2=array($nis,$sem,$ta,$stts='I'))->row_array();
            $data['alpha']=$this->m_raport->getAbsen($params2=array($nis,$sem,$ta,$stts='T'))->row_array();
            $data['eskul']=$this->m_raport->getEskul($params)->result_array();
            $data['siswa']=$this->m_raport->getSiswaNIS($nis=$nis)->row_array();
            $nama=$data['siswa']['nama'];
            $data['profil']=$this->m_raport->getProfil()->row_array();
            $idkls=$data['siswa']['IDKLS'];
            $params3=array($ta,$idkls);
            $data['wali']=$this->m_raport->getWali($params3)->row_array();
            $data['ta']= $this->m_options->getTA_id($id=$ta)->row_array();
            $data['sem']= $sem;
            $data['tahun']= $ta;
            if ($sem==1) {
                $data['semester']="1(Satu)";
            }else{
                $data['semester']="2(Dua)";
            }
            $data['raport']=$this->m_raport->cekRaport($params)->row_array();
            $data['arrA']=$this->_nilai($nis,$ta,$sem,$kel="A");
            $data['arrB']=$this->_nilai($nis,$ta,$sem,$kel="B");
            $data['catatanA']=$this->_catatan($nis,$ta,$sem,$kel="A");
            $data['catatanB']=$this->_catatan($nis,$ta,$sem,$kel="B");
            $this->load->view('back/layouts/raport/cetak', $data);
        }
    }

    function _nilai($nis,$ta,$sem,$kel){
        $arrs="";
        $params=array($nis,$kel,$ta,$sem);
        
        $arrs=array();
        $mapel=$this->m_raport->getMapel($params)->result_array();
        $i=0;
        foreach ($mapel as $key => $value) {
        $mapel2=$value['mapel'];
        $guru=$value['nama'];
        $idm=$value['idm'];
        $params2=array($nis,$idm,$sem);  

            //PENGETAHUAN
            $gettotbobot=$this->m_raport->getTotBobot($id=1)->row_array();
            $bobotPengetahuan=$gettotbobot['JML'];

            $dataNPA=$this->m_raport->getNP($params2)->result_array();
            if(!empty($dataNPA)){    
                foreach ($dataNPA as $key=>$value) {
                    //BOBOT
                    $getbobot=$this->m_raport->getBobot($nama="NH")->row_array();
                    $bobot=$getbobot['bobot'];

                    $npa=$value['nilai'];
                    $nnpa=$npa*$bobot;
                }
            }else{
                $nnpa=0;
            }

            $dataUTS=$this->m_raport->getUts($params2)->result_array();
            if(!empty($dataUTS)){ 
                foreach ($dataUTS as $key=>$value) {
                    //BOBOT
                    $getbobot=$this->m_raport->getBobot($nama="UTS")->row_array();
                    $bobot=$getbobot['bobot'];

                    $nuts=$value['nilai'];
                    $nnuts=$nuts*$bobot;
                }
            }else{
                $nnuts=0;
            }

            $dataUAS=$this->m_raport->getUas($params2)->result_array();
             if(!empty($dataUAS)){ 
                foreach ($dataUAS as $key=>$value) {
                    //BOBOT
                    $getbobot=$this->m_raport->getBobot($nama="UAS")->row_array();
                    $bobot=$getbobot['bobot'];

                    $nuas=$value['nilai'];
                    $nnuas=$nuas*$bobot;
                }
            }else{
                $nnuas=0;
            }

            $pengetahuana=((($nnpa+$nnuts+$nnuas)/$bobotPengetahuan)*0.03+1);
            $pengetahuan=sprintf("%.2f",$pengetahuana);

            if ($pengetahuan>3.85) {
                $pengetahuanHuruf="A";
            }elseif ($pengetahuan<=3.85 && $pengetahuan>3.51) {
                $pengetahuanHuruf="A-";
            }elseif ($pengetahuan<=3.51 && $pengetahuan>3.18) {
                $pengetahuanHuruf="B+";
            }elseif ($pengetahuan<=3.18 && $pengetahuan>2.85) {
                $pengetahuanHuruf="B";
            }elseif ($pengetahuan<=2.85 && $pengetahuan>2.51) {
                $pengetahuanHuruf="B-";
            }elseif ($pengetahuan<=2.51 && $pengetahuan>2.18) {
                $pengetahuanHuruf="C+";
            }elseif ($pengetahuan<=2.18 && $pengetahuan>1.85) {
                $pengetahuanHuruf="C";
            }elseif ($pengetahuan<=1.85 && $pengetahuan>1.51) {
                $pengetahuanHuruf="C-";
            }elseif ($pengetahuan<=1.51 && $pengetahuan>1.18) {
                $pengetahuanHuruf="D+";
            }else{
                $pengetahuanHuruf="D";
            }

            //KETRAMPILAN

            $dataUK=$this->m_raport->getUK($params2)->result_array();
            if(!empty($dataUK)){ 
                foreach ($dataUK as $key=>$value) {
                    $nuk=$value['nilai'];
                }
            }else{
                $nuk=0;
            }

            $dataPRY=$this->m_raport->getPRY($params2)->result_array();
            if(!empty($dataPRY)){ 
                foreach ($dataPRY as $key=>$value) {
                    $npry=$value['nilai'];
                }
            }else{
                $npry=0;
            }

            $dataPOR=$this->m_raport->getPOR($params2)->result_array();
            if(!empty($dataPOR)){ 
                foreach ($dataPOR as $key=>$value) {
                    $npor=$value['nilai'];
                }
            }else{
                $npor=0;
            }

            $dataPRAK=$this->m_raport->getPRAK($params2)->result_array();
            if(!empty($dataPRAK)){ 
                foreach ($dataPRAK as $key=>$value) {
                    $nprak=$value['nilai'];
                }
            }else{
                $nprak=0;
            }

            $dataTLS=$this->m_raport->getTLS($params2)->result_array();
            if(!empty($dataTLS)){ 
                foreach ($dataTLS as $key=>$value) {
                    $ntls=$value['nilai'];
                }
            }else{
                $ntls=0;
            }

            $bagi=$this->m_raport->jmlNilaiKet($params2)->num_rows();
            if (empty($bagi)) {
                $bagi=1;
            }
            $ketrampilana=(((($nuk+$npry+$npor+$nprak+$ntls)/$bagi)*0.03)+1);
            $ketrampilan=sprintf("%.2f",$ketrampilana);

            if ($ketrampilan>3.85) {
                $ketrampilanHuruf="A";
            }elseif ($ketrampilan<=3.85 && $ketrampilan>3.51) {
                $ketrampilanHuruf="A-";
            }elseif ($ketrampilan<=3.51 && $ketrampilan>3.18) {
                $ketrampilanHuruf="B+";
            }elseif ($ketrampilan<=3.18 && $ketrampilan>2.85) {
                $ketrampilanHuruf="B";
            }elseif ($ketrampilan<=2.85 && $ketrampilan>2.51) {
                $ketrampilanHuruf="B-";
            }elseif ($ketrampilan<=2.51 && $ketrampilan>2.18) {
                $ketrampilanHuruf="C+";
            }elseif ($ketrampilan<=2.18 && $ketrampilan>1.85) {
                $ketrampilanHuruf="C";
            }elseif ($ketrampilan<=1.85 && $ketrampilan>1.51) {
                $ketrampilanHuruf="C-";
            }elseif ($ketrampilan<=1.51 && $ketrampilan>1.18) {
                $ketrampilanHuruf="D+";
            }else{
                $ketrampilanHuruf="D";
            }

            //SIKAP
            $dataSikap=$this->m_raport->getSikapa($params2)->result_array();
            if(!empty($dataSikap)){
                 $arr="";
                 $arr=array();
                 $e=0;
                 foreach ($dataSikap as $key => $value) {
                     $arr[$e]=$value['nilai'];
                     $e++;
                 }
                 $v=array_count_values($arr);
                 arsort($v,ksort($v));
                 foreach ($v as $key => $value) {
                     $sikapa=$key;break;
                 }
            }else{
                $sikapa=0;
            }


            
            $sikap=sprintf("%.2f",$sikapa);

            if ($sikap==4) {
                $sikapHuruf="SB";
            }elseif ($sikap<4 && $sikap>=3) {
                $sikapHuruf="B";
            }elseif ($sikap<3&& $sikap>=2) {
                $sikapHuruf="C";
            }else{
                $sikapHuruf="K";
            }


            
                    $arrs[$i]['mapel']=$mapel2;
                    $arrs[$i]['guru']=$guru;
                    $arrs[$i]['pengetahuana']=$pengetahuan;
                    $arrs[$i]['pengetahuan']=$pengetahuanHuruf;
                    $arrs[$i]['ketrampilana']=$ketrampilan;
                    $arrs[$i]['ketrampilan']=$ketrampilanHuruf;
                    $arrs[$i]['sikap']=$sikapHuruf;
                    $i++;
                    
        }

        
        return $arrs;
    }

    function _catatan($nis,$ta,$sem,$kel){
        $arrs="";
        $params=array($nis,$kel,$ta,$sem);
        
        $arrs=array();
        $mapel=$this->m_raport->getMapelAspek($params)->result_array();
        $i=0;
        foreach ($mapel as $key => $value) {
        $mapel2=$value['mapel'];
        $idm=$value['idm'];
        $params2=array($nis,$idm,$sem);  

            //PENGETAHUAN
            $dataPeng=$this->m_raport->getPeng($params2)->result_array();
            if(!empty($dataPeng)){
                foreach ($dataPeng as $key=>$value) {
                   $PengetahuanA=$value['catatan'];
                }
                $Pengetahuan=$PengetahuanA;
            }else{
                $Pengetahuan="-";
            }
            //KETRAMPILAN
            $dataKet=$this->m_raport->getKet($params2)->result_array();
            if(!empty($dataKet)){
                foreach ($dataKet as $key=>$value) {
                   $KetrampilanA=$value['catatan'];
                }
                $Ketrampilan=$KetrampilanA;
            }else{
                $Ketrampilan="-";
            }
            //SIKAP
            $dataSikap=$this->m_raport->getSikap($params2)->result_array();
            if(!empty($dataSikap)){
                foreach ($dataSikap as $key=>$value) {
                   $SikapA=$value['catatan'];
                }
                $Sikap=$SikapA;
            }else{
                $Sikap="-";
            }

            
                    $arrs[$i]['mapel']=$mapel2;
                    $arrs[$i]['pengetahuan']=$Pengetahuan;
                    $arrs[$i]['ketrampilan']=$Ketrampilan;
                    $arrs[$i]['sikap']=$Sikap;
                    $i++;
                    
        }

        
        return $arrs;
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

