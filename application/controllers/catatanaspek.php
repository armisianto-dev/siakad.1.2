

<?php

/**
 * Description of artikel
 *
 * @author white
 */
class CatatanAspek extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_catatanaspek', 'the_m');
        $this->load->library(array('breadcrumb', 'sesfilter'));
        $this->load->helper(array('slug', 'filter'));
    }

    function index() {
        $this->rule->type('R');
        $this->layout->set_title('Catatan Aspek');
        $this->layout->set_meta('Catatan Aspek'); 
        $users = $this->ion_auth->user()->row();
        $id=$users->username;
        $this->layout->add_includes('css', 'themes/back/css/datatables/dataTables.bootstrap.css');
        $this->layout->add_includes('js', 'themes/back/js/jquery.dataTables.min.js');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Catatan Aspek');

        $data['primary_title'] = '<i class="ion-android-note"></i> Input Catatan Aspek';
        $data['sub_primary_title'] = 'Data Mengajar';
        $data['ta']= $this->m_options->get_by($name="ta")->row_array();
        $ta=$data['ta']['value'];
        $params=array($ta,$id);
        $data['list'] = $this->the_m->get($params)->result_array();
        $data['aspek'] = $this->the_m->getAspek()->result_array();
        $data['notif'] = $this->_notification();
        $this->layout->back('catatanaspek/index', $data);
    }

    function add() {
        $this->rule->type('C');
        $this->layout->set_title('Catatan Aspek');

        $id=$this->uri->segment(3, "0");
        $id_aspek=$this->uri->segment(4, "0");
        $this->session->set_flashdata('id',$id);
        $this->session->set_flashdata('id_aspek',$id_aspek);

        $data['sem']= $this->m_options->get_by($name="semester")->row_array();
        $sem=$data['sem']['value'];
        $params2=array($id,$id_aspek,$sem);
        $cek=$this->the_m->cekCatatan($params2)->num_rows();

        $this->layout->add_includes('css', 'themes/back/css/datatables/dataTables.bootstrap.css');
        $this->layout->add_includes('js', 'themes/back/js/jquery.dataTables.min.js');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Catatan Aspek', site_url('catatanaspek'));
        $this->breadcrumb->add_crumb('Input Catatan Aspek');

        if ($cek>=1) {
            $this->session->set_flashdata('error', 'Catatan aspek sudah dibuat');
            redirect('catatanaspek/detail/'.$id.'/'.$id_aspek);
            
        }else{
            $data['primary_title'] = 'Catatan Aspek';
            $data['sub_primary_title'] = 'Proses input catatan aspek';
            $data['mengajar']= $this->the_m->getMengajarBy($id)->row_array();
            $id_kelas=$data['mengajar']['KELAS'];
            $data['aspek']= $this->the_m->getAspekBy($id_aspek)->row_array();
            $data['sem']= $this->m_options->get_by($name="semester")->row_array();
            $data['ta']= $this->m_options->get_by($name="ta")->row_array();
            $sem=$data['sem']['value'];
            $ta=$data['ta']['value'];
            $data['notif'] = $this->_notification();
            if($id_aspek==1){
                $id=$this->uri->segment(3, "0");
                $data['nilai']=$this->_pengetahuan($id,$sem);
                $this->layout->back('catatanaspek/pengetahuan', $data);    
            }elseif($id_aspek==2){
                $id=$this->uri->segment(3, "0");
                $data['nilai']=$this->_ketrampilan($id,$sem);
                $this->layout->back('catatanaspek/ketrampilan', $data);
            }elseif($id_aspek==3){
                $id=$this->uri->segment(3, "0");
                $data['nilai']=$this->_sikap($id,$sem);
                $this->layout->back('catatanaspek/sikap', $data);
            }
        }
        
    }

    function _pengetahuan($id,$sem){
        $arrs="";
        $arrs=array();
        $params1=array($id,$sem);
        $siswa=$this->m_rekapnilai->getSiswaPeng($params1)->result_array();
        $i=0;
        foreach ($siswa as $key => $value) {
           $siswa=$value['nama'];
           $nis=$value['NIS'];
           $jk=$value['jk'];
           $mengajar=$value['id_mengajar'];
           $semester=$value['semester'];
           $params=array($mengajar,$nis,$semester);

           $arrsb="";
           $arrsb=array();
           $a=0;
           $Ulangan=$this->m_rekapnilai->getUlangan($params)->result_array();
           foreach ($Ulangan as $key => $value) {
               $nilaiUlangan=$value['nilai'];

               $arrsb[$a]['nilaiulangan']=$nilaiUlangan;
               $a++;
           }

           $avgUlangan=$this->m_rekapnilai->getUlanganAvg($params)->row_array();
           if (empty($avgUlangan['avg'])) {
               $ulanganAVG=0;
           }else{
               $ulanganAVG=$avgUlangan['avg'];
           }

           $arrsc="";
           $arrsc=array();
           $b=0;
           $Tugas=$this->m_rekapnilai->getTugas($params)->result_array();
           foreach ($Tugas as $key => $value) {
               $nilaiTugas=$value['nilai'];

               $arrsc[$b]['nilaitugas']=$nilaiTugas;
               $b++;
           }

           $avgTugas=$this->m_rekapnilai->getTugasAvg($params)->row_array();
           if (empty($avgTugas['avg'])){
               $tugasAVG=0;
           }else{
               $tugasAVG=$avgTugas['avg'];
           }

           
           $NHA=($ulanganAVG+$tugasAVG)/2;
           $UTS=$this->m_rekapnilai->getUTS($params)->row_array();
           if (empty($UTS['nilai'])) {
               $UTSA=0;
           }else{
               $UTSA=$UTS['nilai'];
           }

           $UAS=$this->m_rekapnilai->getUAS($params)->row_array();
           if (empty($UAS['nilai'])) {
               $UASA=0;
           }else{
               $UASA=$UAS['nilai'];
           }

           $gettotbobot=$this->m_rekapnilai->getTotBobot($id=1)->row_array();
           $bobotPengetahuan=$gettotbobot['JML'];
           $bobotNH=$this->m_rekapnilai->getBobot($nama="NH")->row_array();
           $nnh=$NHA*$bobotNH['bobot']; 
           $bobotUTS=$this->m_rekapnilai->getBobot($nama="UTS")->row_array();
           $nnuts=$UTSA*$bobotUTS['bobot']; 
           $bobotUAS=$this->m_rekapnilai->getBobot($nama="UAS")->row_array();
           $nnuas=$UASA*$bobotUAS['bobot']; 

           $na=(($nnh+$nnuts+$nnuas)/$bobotPengetahuan);
           $pengetahuana=((($nnh+$nnuts+$nnuas)/$bobotPengetahuan)/25);
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

           $arrs[$i]['nis']=$nis;
           $arrs[$i]['nama']=$siswa;
           $arrs[$i]['jk']=$jk;
           $arrs[$i]['ulangan']=$arrsb;
           $arrs[$i]['tugas']=$arrsc;
           $arrs[$i]['avgUlangan']=sprintf("%.2f",$ulanganAVG);
           $arrs[$i]['avgTugas']=sprintf("%.2f",$tugasAVG);
           $arrs[$i]['NH']=sprintf("%.2f",$NHA);
           $arrs[$i]['UTS']=sprintf("%.2f",$UTSA);
           $arrs[$i]['UAS']=sprintf("%.2f",$UASA);
           $arrs[$i]['NA']=sprintf("%.2f",$na);
           $arrs[$i]['angka']=sprintf("%.2f",$pengetahuan);
           $arrs[$i]['huruf']=$pengetahuanHuruf;
           $i++;
        }

        return $arrs;

    }

    function _ketrampilan($id,$sem){
        $arrs="";
        $arrs=array();
        $params1=array($id,$sem);
        $siswa=$this->m_rekapnilai->getSiswaKet($params1)->result_array();
        $i=0;
        foreach ($siswa as $key => $value) {
           $siswa=$value['nama'];
           $nis=$value['NIS'];
           $jk=$value['jk'];
           $mengajar=$value['id_mengajar'];
           $semester=$value['semester'];
           $params=array($nis,$mengajar,$semester);

           $arrsb="";
           $arrsb=array();
           $a=0;
           $Praktik=$this->m_rekapnilai->getPraktik($params)->result_array();
           foreach ($Praktik as $key => $value) {
               $nilaiPraktik=$value['nilai'];

               $arrsb[$a]['nilaipraktik']=$nilaiPraktik;
               $a++;
           }

           $arrsc="";
           $arrsc=array();
           $b=0;
           $UK=$this->m_rekapnilai->getUK($params)->result_array();
           foreach ($UK as $key => $value) {
               $nilaiUK=$value['nilai'];

               $arrsc[$b]['nilaiuk']=$nilaiUK;
               $b++;
           }

           $arrsd="";
           $arrsd=array();
           $c=0;
           $Portofolio=$this->m_rekapnilai->getPOR($params)->result_array();
           foreach ($Portofolio as $key => $value) {
               $nilaiPOR=$value['nilai'];

               $arrsd[$c]['nilaipor']=$nilaiPOR;
               $c++;
           }

           $arrse="";
           $arrse=array();
           $d=0;
           $Proyek=$this->m_rekapnilai->getPRY($params)->result_array();
           foreach ($Proyek as $key => $value) {
               $nilaiPRY=$value['nilai'];

               $arrse[$d]['nilaipry']=$nilaiPRY;
               $d++;
           }

           $arrsf="";
           $arrsf=array();
           $e=0;
           $Tulis=$this->m_rekapnilai->getTLS($params)->result_array();
           foreach ($Tulis as $key => $value) {
               $nilaiTLS=$value['nilai'];

               $arrsf[$e]['nilaitls']=$nilaiTLS;
               $e++;
           }

           //cari optimum
           $dataUK=$this->m_raport->getUK($params)->result_array();
            if(!empty($dataUK)){ 
                foreach ($dataUK as $key=>$value) {
                    $nuk=$value['nilai'];
                    $bagi1=1;
                }
            }else{
                $nuk=0;
                $bagi1=0;
            }

            $dataPRY=$this->m_raport->getPRY($params)->result_array();
            if(!empty($dataPRY)){ 
                foreach ($dataPRY as $key=>$value) {
                    $npry=$value['nilai'];
                    $bagi2=1;
                }
            }else{
                $npry=0;
                $bagi2=0;
            }

            $dataPOR=$this->m_raport->getPOR($params)->result_array();
            if(!empty($dataPOR)){ 
                foreach ($dataPOR as $key=>$value) {
                    $npor=$value['nilai'];
                    $bagi3=1;
                }
            }else{
                $npor=0;
                $bagi3=0;
            }

            $dataPRAK=$this->m_raport->getPRAK($params)->result_array();
            if(!empty($dataPRAK)){ 
                foreach ($dataPRAK as $key=>$value) {
                    $nprak=$value['nilai'];
                    $bagi4=1;
                }
            }else{
                $nprak=0;
                $bagi4=0;
            }

            $dataTLS=$this->m_raport->getTLS($params)->result_array();
            if(!empty($dataTLS)){ 
                foreach ($dataTLS as $key=>$value) {
                    $ntls=$value['nilai'];
                    $bagi5=1;
                }
            }else{
                $ntls=0;
                $bagi5=0;
            }

            $bagi=$this->m_raport->jmlNilaiKet($params)->num_rows();
            if (empty($bagi)) {
                $bagi=1;
            }
            $rataMax=(($nuk+$npry+$npor+$nprak+$ntls)/$bagi);
            $ketrampilana=(($nuk+$npry+$npor+$nprak+$ntls)/$bagi)/25;
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
           

           $arrs[$i]['nis']=$nis;
           $arrs[$i]['nama']=$siswa;
           $arrs[$i]['jk']=$jk;
           $arrs[$i]['maxuk']=$nuk;
           $arrs[$i]['maxprak']=$nprak;
           $arrs[$i]['maxpor']=$npor;
           $arrs[$i]['maxpry']=$npry;
           $arrs[$i]['maxtls']=$ntls;
           $arrs[$i]['avg']=sprintf("%.2f",$rataMax);
           $arrs[$i]['angka']=$ketrampilan;
           $arrs[$i]['huruf']=$ketrampilanHuruf;
           $arrs[$i]['praktik']=$arrsb;
           $arrs[$i]['uk']=$arrsc;
           $arrs[$i]['portofolio']=$arrsd;
           $arrs[$i]['proyek']=$arrse;
           $arrs[$i]['tulis']=$arrsf;
           $i++;
        }

        return $arrs;

    }
    function _sikap($id,$sem){
        $arrs="";
        $arrs=array();
        $params1=array($id,$sem);
        $siswa=$this->m_rekapnilai->getSiswaSikap($params1)->result_array();
        $i=0;
        foreach ($siswa as $key => $value) {
           $siswa=$value['nama'];
           $nis=$value['NIS'];
           $jk=$value['jk'];
           $mengajar=$value['id_mengajar'];
           $semester=$value['semester'];
           $params=array($nis,$mengajar,$semester);

           $arrsb="";
           $arrsb=array();
           $a=0;
           $Observasi=$this->m_rekapnilai->getOBS($params)->result_array();
           foreach ($Observasi as $key => $value) {
               $nilaiObservasi=$value['nilai'];

               $arrsb[$a]['nilaiobservasi']=$nilaiObservasi;
               $a++;
           }

           $arrsc="";
           $arrsc=array();
           $b=0;
           $Diri=$this->m_rekapnilai->getDiri($params)->result_array();
           foreach ($Diri as $key => $value) {
               $nilaiDiri=$value['nilai'];

               $arrsc[$b]['nilaidiri']=$nilaiDiri;
               $b++;
           }

           $arrsd="";
           $arrsd=array();
           $c=0;
           $Teman=$this->m_rekapnilai->getTeman($params)->result_array();
           foreach ($Teman as $key => $value) {
               $nilaiTeman=$value['nilai'];

               $arrsd[$c]['nilaiteman']=$nilaiTeman;
               $c++;
           }

           $arrse="";
           $arrse=array();
           $d=0;
           $Jurnal=$this->m_rekapnilai->getJurnal($params)->result_array();
           foreach ($Jurnal as $key => $value) {
               $nilaiJurnal=$value['nilai'];

               $arrse[$d]['nilaijurnal']=$nilaiJurnal;
               $d++;
           }

           //cari modus
           $dataSikap=$this->m_raport->getSikapb($params)->result_array();
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

           $arrs[$i]['nis']=$nis;
           $arrs[$i]['nama']=$siswa;
           $arrs[$i]['jk']=$jk;
           $arrs[$i]['observasi']=$arrsb;
           $arrs[$i]['diri']=$arrsc;
           $arrs[$i]['teman']=$arrsd;
           $arrs[$i]['jurnal']=$arrse;
           $arrs[$i]['modus']=$sikap;
           $arrs[$i]['huruf']=$sikapHuruf;
           $i++;
       }
       return $arrs;
   }

    
    function save() {
        $this->rule->type('C');
        $this->load->library('form_validation');
        $data=$this->input->post('data');
        $aspek=$this->input->post('aspek');
        $mengajar=$this->input->post('mengajar');
        $sem=$this->input->post('sem');
        $this->session->set_flashdata('mengajar',$mengajar);
        $this->session->set_flashdata('aspek',$aspek);
        $this->form_validation->set_rules('data', 'Data', 'required');
       
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
        } else {
                for ($i=1; $i < $data; $i++) {
                    $dataInsert = array(
                    'nis' => $this->input->post('nis'.$i),    
                    'id_mengajar' => $mengajar,
                    'id_aspek' => $aspek,
                    'semester' => $sem,
                    'catatan' => $this->input->post('catatan'.$i)
                    );
                    $q = $this->the_m->save($dataInsert);
                    if ($q) {
                        $this->session->set_flashdata('success', 'Berhasil Menambah Catatan Aspek');
                    } else {
                        $this->session->set_flashdata('error', 'Gagal Menambah Catatan Aspek');
                    }
                }
        }
        redirect('catatanaspek/detail/'.$mengajar.'/'.$aspek);
    }

    
    function detail() {
        $this->rule->type('R');
        $this->layout->set_title('Detail Nilai');

        $id=$this->uri->segment(3, "0");
        $id_aspek=$this->uri->segment(4, "0");

        $this->layout->add_includes('css', 'themes/back/css/datatables/dataTables.bootstrap.css');
        $this->layout->add_includes('js', 'themes/back/js/jquery.dataTables.min.js');
        
        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Catatan Aspek', site_url('catatanaspek'));
        $this->breadcrumb->add_crumb('Detail Catatan Aspek');

        $data['primary_title'] = '<i class="ion-android-note"></i> Detail Catatan Aspek';
        $data['sub_primary_title'] = 'Data Detail Catatan Aspek';
        $data['mengajar']= $this->the_m->getMengajarBy($id)->row_array();
        $id_kelas=$data['mengajar']['KELAS']; 
        $data['sem']= $this->m_options->get_by($name="semester")->row_array();
        $data['ta']= $this->m_options->get_by($name="ta")->row_array();
        $sem=$data['sem']['value'];
        $ta=$data['ta']['value'];
        $params=array($id,$id_aspek,$sem);
        $data['list'] = $this->the_m->getCatatan($params)->result_array();
        $data['aspek']= $this->the_m->getAspekBy($id_aspek)->row_array();
        $data['notif'] = $this->_notification();
        $this->layout->back('catatanaspek/detail', $data);
    }

    function edit($id) {
        $this->rule->type('U');
        $this->layout->set_title('Edit Catatan Aspek');

        $this->breadcrumb->clear();
        $this->breadcrumb->add_crumb('Beranda', site_url('admin'));
        $this->breadcrumb->add_crumb('Catatan Aspek', site_url('catatanaspek'));
        $this->breadcrumb->add_crumb('Edit Catatan Aspek');

        $data['primary_title'] = 'Catatan Aspek';
        $data['sub_primary_title'] = 'Proses edit catatan aspek';

        
        $data['row']=$this->the_m->getCatatanBy($id)->row_array();
        $this->layout->back('catatanaspek/edit', $data);
    }

    function update() {
        $this->rule->type('U');
        $id=$this->input->post('id');
        $aspek2=$this->input->post('aspek');
        $mengajar2=$this->input->post('mengajar');
        $this->session->set_flashdata('mengajar2',$mengajar2);
        $this->session->set_flashdata('aspek2',$aspek2);

        $this->load->library('form_validation');
        $this->form_validation->set_rules('id', 'ID', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
        } else {
             $dataUpdate = array(
                'catatan' => $this->input->post('catatan')
             );
            $q = $this->the_m->update($id,$dataUpdate);
            if ($q) {
                $this->session->set_flashdata('success', 'Data Berhasil Dirubah');
            } else {
                $this->session->set_flashdata('error', 'Data Gagal Dirubah');
            }
        }
        redirect('catatanaspek/detail/'.$mengajar2.'/'.$aspek2);
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

