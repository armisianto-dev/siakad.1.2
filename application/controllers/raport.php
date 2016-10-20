

<?php

/**
 * Description of artikel
 *
 * @author white
 */
class Raport extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_raport', 'the_m');
        $this->load->library(array('breadcrumb', 'sesfilter'));
        $this->load->helper(array('slug', 'filter'));
    }

    function index() {
        $this->rule->type('R');
        $users = $this->ion_auth->user()->row();
        $id=$users->username;
        $this->layout->set_title('Raport Siswa');
        $this->layout->set_meta('Raport Siswa');
        $this->layout->add_includes('css', 'themes/back/css/datatables/dataTables.bootstrap.css');
        $this->layout->add_includes('js', 'themes/back/js/jquery.dataTables.min.js');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Raport Siswa : Daftar siswa');

        $data['primary_title'] = '<i class="ion-android-note"></i>Raport Siswa';
        $data['sub_primary_title'] = 'Daftar siswa';
        $data['sem']= $this->m_options->get_by($name="semester")->row_array();
        $data['ta']= $this->m_options->get_by($name="ta")->row_array();
        $ta=$data['ta']['value'];
        $params2=array($id,$ta);
        $data['wali']= $this->the_m->getWaliKelas($params2)->row_array();
        if(!empty($data['wali'])){
            $id_kelas=$data['wali']['IDKLS'];
        }else{
            $id_kelas="";
        }
        $params=array($ta,$status="aktif",$id_kelas);
        $data['list'] = $this->the_m->getSiswa($params)->result_array();
        $data['notif'] = $this->_notification();
        $this->layout->back('raport/index', $data);
    }

    function add() {
        $this->rule->type('C');
        $this->layout->set_title('Setting Raport Siswa');
        $this->layout->add_includes('js', 'themes/back/js/plugins/datepicker/bootstrap-datepicker.js');
        $this->layout->add_includes('js', 'themes/back/js/plugins/datepicker/locales/bootstrap-datepicker.id.js');
        $this->layout->add_includes('css', 'themes/back/css/datepicker.css');

        $nis=$this->uri->segment(3, "0");
        $sem=$this->uri->segment(4, "0");
        $ta=$this->uri->segment(5, "0");

        $this->session->set_flashdata('nis',$nis);
        $this->session->set_flashdata('sem',$sem);
        $this->session->set_flashdata('ta',$ta);

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Raport Siswa : Daftar siswa',site_url('raport'));
        $this->breadcrumb->add_crumb('Setting Raport Siswa');

        $params=array($nis,$sem,$ta);
        $data['raport']=$this->the_m->cekRaport($params)->row_array();
        if(!empty($data['raport'])){
            $this->session->set_flashdata('error', 'Sudah melakukan setup raport');
            redirect('raport/lihat/'.$nis.'/'.$sem.'/'.$ta.'');
        }else{
            $data['primary_title'] = 'Raport Siswa';
            $data['sub_primary_title'] = 'Setting Raport Siswa';
            $data['kepsek']=$this->the_m->getKepsek()->row_array();
            $data['siswa']=$this->the_m->getDataSiswa($nis)->row_array();
            $data['sem']=$sem;
            $data['ta']=$ta;
            $this->layout->back('raport/add', $data);
        }
    }

    function save() {
        $this->rule->type('C');
        $this->load->library('form_validation');
        $nis=$this->input->post('nis');
        $ta=$this->input->post('ta');
        $sem=$this->input->post('sem');
        $tingkat=$this->input->post('tingkat');
        $naik=$tingkat+1;
        $kepsek=$this->input->post('kepsek');
        $keputusan=$this->input->post('keputusan');
        $this->session->set_flashdata('nis',$nis);
        $this->session->set_flashdata('sem',$sem);
        $this->session->set_flashdata('ta',$ta);
        $this->form_validation->set_rules('nis', 'NIS', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
        } else {
            
                $dataInsert = array(
                    'nis' => $nis,
                    'id_thnajaran' => $ta,
                    'semester' => $sem,
                    'nip' => $kepsek,
                    'tgl_raport' => $this->input->post('tgl'),
                    'keputusan' => $this->input->post('keputusan'),
                    'catatan' => $this->input->post('catatan')
                );

                
                $q = $this->the_m->save($dataInsert);
                $updateTinggal=array(
                    'tingkat' => $tingkat
                   );
                $updateTingkat=array(
                    'tingkat' => $naik
                   );
                $dataStatus=array(
                    'status' => 'alumni'
                   );
                if($keputusan=="naik"){
                    $dataUpdate=$updateTingkat;
                    $q2 = $this->the_m->updateSiswa($nis,$dataUpdate);
                }elseif($keputusan=="lulus"){
                    $dataUpdate=$dataStatus;
                    $q2 = $this->the_m->updateSiswa($nis,$dataUpdate);
                }else{
                    $dataUpdate=$updateTinggal;
                    $q2 = $this->the_m->updateSiswa($nis,$dataUpdate);
                }
                if ($q && $q2) {
                    $this->session->set_flashdata('success', 'Berhasil Menyimpan Setup raport');
                } else {
                    $this->session->set_flashdata('error', 'Gagal Menyimpan Setup raport');
                }
        }
        redirect('raport/lihat/'.$nis.'/'.$sem.'/'.$ta.'');
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
        $data['sakit']=$this->the_m->getAbsen($params2=array($nis,$sem,$ta,$stts='S'))->row_array();
        $data['ijin']=$this->the_m->getAbsen($params2=array($nis,$sem,$ta,$stts='I'))->row_array();
        $data['alpha']=$this->the_m->getAbsen($params2=array($nis,$sem,$ta,$stts='T'))->row_array();
        $data['eskul']=$this->the_m->getEskul($params)->result_array();
        $data['siswa']=$this->the_m->getSiswaNIS($nis=$nis)->row_array();
        $data['profil']=$this->the_m->getProfil()->row_array();
        $idkls=$data['siswa']['IDKLS'];
        $params3=array($ta,$idkls);
        $data['wali']=$this->the_m->getWali($params3)->row_array();
        $data['ta']= $this->m_options->getTA_id($id=$ta)->row_array();
        $data['sem']= $sem;
        $data['tahun']= $ta;
        if ($sem==1) {
            $data['semester']="ganjil";
        }else{
            $data['semester']="genap";
        }
        $data['raport']=$this->the_m->cekRaport($params)->row_array();
        $data['arrA']=$this->_nilai($nis,$ta,$sem,$kel="A");
        $data['arrB']=$this->_nilai($nis,$ta,$sem,$kel="B");
        $data['catatanA']=$this->_catatan($nis,$ta,$sem,$kel="A");
        $data['catatanB']=$this->_catatan($nis,$ta,$sem,$kel="B");
        $data['notif'] = $this->_notification();
        $this->layout->back('raport/detail', $data);
    }


    function cetak() {
        $this->rule->type('R');
        $this->layout->set_title('Raport Siswa');
        $this->layout->set_meta('');

        $nis=$this->uri->segment(3, "0");
        $sem=$this->uri->segment(4, "0");
        $ta=$this->uri->segment(5, "0");

        $this->session->set_flashdata('nis',$nis);
        $this->session->set_flashdata('sem',$sem);
        $this->session->set_flashdata('ta',$ta);

        $params=array($nis,$sem,$ta);
        $data['raport']=$this->the_m->cekRaport($params)->row_array();
        if(empty($data['raport'])){
            $this->session->set_flashdata('error', 'Belum melakukan setup raport, tidak bisa mencetak raport <a href="'.site_url('raport/add/'.$nis.'/'.$sem.'/'.$ta.'').'">Klik Untuk Setup Raport</a>');
            redirect('raport/lihat/'.$nis.'/'.$sem.'/'.$ta.'');
        }else{
            $data['sakit']=$this->the_m->getAbsen($params2=array($nis,$sem,$ta,$stts='S'))->row_array();
            $data['ijin']=$this->the_m->getAbsen($params2=array($nis,$sem,$ta,$stts='I'))->row_array();
            $data['alpha']=$this->the_m->getAbsen($params2=array($nis,$sem,$ta,$stts='T'))->row_array();
            $data['eskul']=$this->the_m->getEskul($params)->result_array();
            $data['siswa']=$this->the_m->getSiswaNIS($nis=$nis)->row_array();
            $nama=$data['siswa']['nama'];
            $data['profil']=$this->the_m->getProfil()->row_array();
            $idkls=$data['siswa']['IDKLS'];
            $params3=array($ta,$idkls);
            $data['wali']=$this->the_m->getWali($params3)->row_array();
            $data['ta']= $this->m_options->getTA_id($id=$ta)->row_array();
            $data['sem']= $sem;
            $data['tahun']= $ta;
            if ($sem==1) {
                $data['semester']="1(Satu)";
            }else{
                $data['semester']="2(Dua)";
            }
            $data['raport']=$this->the_m->cekRaport($params)->row_array();
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
        $mapel=$this->the_m->getMapel($params)->result_array();
        $i=0;
        foreach ($mapel as $key => $value) {
        $mapel2=$value['mapel'];
        $guru=$value['nama'];
        $idm=$value['idm'];
        $params2=array($nis,$idm,$sem);  

            //PENGETAHUAN
            $gettotbobot=$this->the_m->getTotBobot($id=1)->row_array();
            $bobotPengetahuan=$gettotbobot['JML'];

            $dataNPA=$this->the_m->getNP($params2)->result_array();
            if(!empty($dataNPA)){    
                foreach ($dataNPA as $key=>$value) {
                    //BOBOT
                    $getbobot=$this->the_m->getBobot($nama="NH")->row_array();
                    $bobot=$getbobot['bobot'];

                    $npa=$value['nilai'];
                    $nnpa=$npa*$bobot;
                }
            }else{
                $nnpa=0;
            }

            $dataUTS=$this->the_m->getUts($params2)->result_array();
            if(!empty($dataUTS)){ 
                foreach ($dataUTS as $key=>$value) {
                    //BOBOT
                    $getbobot=$this->the_m->getBobot($nama="UTS")->row_array();
                    $bobot=$getbobot['bobot'];

                    $nuts=$value['nilai'];
                    $nnuts=$nuts*$bobot;
                }
            }else{
                $nnuts=0;
            }

            $dataUAS=$this->the_m->getUas($params2)->result_array();
             if(!empty($dataUAS)){ 
                foreach ($dataUAS as $key=>$value) {
                    //BOBOT
                    $getbobot=$this->the_m->getBobot($nama="UAS")->row_array();
                    $bobot=$getbobot['bobot'];

                    $nuas=$value['nilai'];
                    $nnuas=$nuas*$bobot;
                }
            }else{
                $nnuas=0;
            }

            $pengetahuana=(((($nnpa+$nnuts+$nnuas)/$bobotPengetahuan)*0.03)+1);
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

            $dataUK=$this->the_m->getUK($params2)->result_array();
            if(!empty($dataUK)){ 
                foreach ($dataUK as $key=>$value) {
                    $nuk=$value['nilai'];
                    $bagi1=1;
                }
            }else{
                $nuk=0;
                $bagi1=0;
            }

            $dataPRY=$this->the_m->getPRY($params2)->result_array();
            if(!empty($dataPRY)){ 
                foreach ($dataPRY as $key=>$value) {
                    $npry=$value['nilai'];
                    $bagi2=1;
                }
            }else{
                $npry=0;
                $bagi2=0;
            }

            $dataPOR=$this->the_m->getPOR($params2)->result_array();
            if(!empty($dataPOR)){ 
                foreach ($dataPOR as $key=>$value) {
                    $npor=$value['nilai'];
                    $bagi3=1;
                }
            }else{
                $npor=0;
                $bagi3=0;
            }

            $dataPRAK=$this->the_m->getPRAK($params2)->result_array();
            if(!empty($dataPRAK)){ 
                foreach ($dataPRAK as $key=>$value) {
                    $nprak=$value['nilai'];
                    $bagi4=1;
                }
            }else{
                $nprak=0;
                $bagi4=0;
            }

            $dataTLS=$this->the_m->getTLS($params2)->result_array();
            if(!empty($dataTLS)){ 
                foreach ($dataTLS as $key=>$value) {
                    $ntls=$value['nilai'];
                    $bagi5=1;
                }
            }else{
                $ntls=0;
                $bagi5=0;
            }

            $bagi=$this->the_m->jmlNilaiKet($params2)->num_rows();
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
            $dataSikap=$this->the_m->getSikapa($params2)->result_array();
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
        $mapel=$this->the_m->getMapelAspek($params)->result_array();
        $i=0;
        foreach ($mapel as $key => $value) {
        $mapel2=$value['mapel'];
        $idm=$value['idm'];
        $params2=array($nis,$idm,$sem);  

            //PENGETAHUAN
            $dataPeng=$this->the_m->getPeng($params2)->result_array();
            if(!empty($dataPeng)){
                foreach ($dataPeng as $key=>$value) {
                   $PengetahuanA=$value['catatan'];
                }
                $Pengetahuan=$PengetahuanA;
            }else{
                $Pengetahuan="-";
            }
            //KETRAMPILAN
            $dataKet=$this->the_m->getKet($params2)->result_array();
            if(!empty($dataKet)){
                foreach ($dataKet as $key=>$value) {
                   $KetrampilanA=$value['catatan'];
                }
                $Ketrampilan=$KetrampilanA;
            }else{
                $Ketrampilan="-";
            }
            //SIKAP
            $dataSikap=$this->the_m->getSikap($params2)->result_array();
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

