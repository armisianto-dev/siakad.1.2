<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_admin','the_m');  
        $this->load->library('breadcrumb');
    }

    function index(){
        if (!$this->ion_auth->logged_in())
        {
            redirect('login', 'refresh');
        }else{
            $this->layout->set_title('Dashboard');
            
            $this->breadcrumb->clear();
            $this->breadcrumb->add_crumb('Dashboard');
            
            $data['primary_title']      = "<i class='ion-ios7-home'></i> Dashboard";
            $data['sub_primary_title']  = "Main page";
            $users = $this->ion_auth->user()->row();
            $id=$users->username;
            $data['ta']= $this->m_options->get_by($name="ta")->row_array();
            $ta=$data['ta']['value'];
            $data['sem']= $this->m_options->get_by($name="semester")->row_array();
            $data['semester']=$data['sem']['value'];
            $data['tahun']=$this->the_m->getTA($ta)->row_array();
            $tgl = getdate();
            $data['tanggal']= $tgl['year'].'/'.$tgl['mon'].'/'.$tgl['mday'];
            $data['siswa']= $this->the_m->getSiswa()->num_rows();       
            $data['cowok']= $this->the_m->getSiswaGender($jk='L')->num_rows();
            $data['cowokp']=($data['cowok']/$data['siswa'])*100;       
            $data['cewek']= $this->the_m->getSiswaGender($jk='P')->num_rows(); 
            $data['cewekp']=($data['cewek']/$data['siswa'])*100;      
            $data['pengguna']= $this->the_m->getUsers()->num_rows();          
            $data['penggunag']= $this->the_m->getUsersTbl($tbl='guru')->num_rows();
            $data['penggunagp']=($data['penggunag']/$data['pengguna'])*100;                
            $data['penggunas']= $this->the_m->getUsersTbl($tbl='siswa')->num_rows();
            $data['penggunasp']=($data['penggunas']/$data['pengguna'])*100;     
            $data['gurukaryawan']= $this->the_m->getGuru()->num_rows();                  
            $data['guru']= $this->the_m->getGuruJml($jab='tu')->num_rows();
            $data['gurup']=($data['guru']/$data['gurukaryawan'])*100;                       
            $data['karyawan']= $this->the_m->getTUJml($jab='tu')->num_rows();
            $data['karyawanp']=($data['karyawan']/$data['gurukaryawan'])*100;                       
            $data['kelas']= $this->the_m->getKelas($ta)->result_array();

            $params=array($id,$ta);
            $data['jml_mengajar']=$this->the_m->getJmlMengajar($params)->num_rows();
            $data['mengajar']=$this->the_m->getMengajar($params)->result_array();
            $data['jml_mengajare']=$this->the_m->getEskul($id)->num_rows();
            $data['mengajare']=$this->the_m->getEskul($id)->result_array();
            $data['walikelas']=$this->the_m->getWaliKelas($params)->row_array();
            $data['points']=$this->the_m->getPelanggaranSiswa()->result_array();

            $nis=$id;
            $data['point']=$this->the_m->getPelanggaran($nis)->row_array();
            $data['absen']=$this->the_m->getAbsen($nis)->row_array();
            $data['eskul']=$this->the_m->getSiswaEskul($nis)->result_array();
            $data['riwayatkelas']=$this->the_m->getRiwayatKelas($nis)->result_array();

            $this->layout->back('admin/index', $data);
        }
    }

}