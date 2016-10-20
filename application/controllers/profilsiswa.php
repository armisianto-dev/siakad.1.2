

<?php

/**
 * Description of artikel
 *
 * @author white
 */
class ProfilSiswa extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_siswa', 'the_m');
        $this->load->library(array('breadcrumb', 'sesfilter'));
        $this->load->helper(array('slug', 'filter'));
    }

    function index() {
        $this->rule->type('R');
        $this->layout->set_title('Detail Siswa'); 
        $users = $this->ion_auth->user()->row();
        $nis=$users->username;
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
        $this->layout->back('profilsiswa/detail', $data);
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
        $this->layout->set_title('Raport Siswa');
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
                $data['semester']="ganjil";
            }else{
                $data['semester']="genap";
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

            $pengetahuana=((($nnpa+$nnuts+$nnuas)/$bobotPengetahuan)/25);
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

            $ketrampilana=(($nuk+$npry+$npor+$nprak+$ntls)/5)/25;
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
            $dataSikap=$this->m_raport->getSikapa($params2)->result();
            if(!empty($dataSikap)){
                $arrsikap="";
                $n=0;
                foreach ($dataSikap as $value) {
                    $nsikap=$value->nilai;
                    $arrssikap[$n]=$nsikap;
                }
                $v=array_count_values($arrssikap);
                arsort($v);
                foreach($v as $k => $v){$sikapa = $k; break;} 
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

