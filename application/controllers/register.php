

<?php

/**
 * Description of artikel
 *
 * @author white
 */
class Register extends CI_Controller {

    

    function __construct() {
        parent::__construct();
        $this->load->model('m_register', 'the_m');
        $this->load->helper(array('slug', 'filter'));
    }

    function index() {
        $data['primary_title'] = 'Registrasi User';
        $cap = $this->buat_captcha();
        $data['cap_img'] = $cap['image'];
        $this->session->set_userdata('chaptcha', $cap['word']);
        $data['notif'] = $this->_notification();
        $this->load->view('back/layouts/auth/register', $data);
    }

    function create() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('kode_captcha', 'Kode Captcha', 'required|callback_cek_captcha');
        $username=$this->input->post('nipnis');
        $user=$this->input->post('posisi');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            //$this->session->set_flashdata('error', 'NIS/NIP sudah terdaftar');
            redirect('register');
        }else{
            $this->session->unset_userdata('chaptcha');
            if ($user=='guru') {
                $cariUser=$this->the_m->cariGuru($username)->num_rows();
                $cariUsers=$this->the_m->cariUsers($username)->num_rows();
                $tbl='guru';
            }else{
                $cariUser=$this->the_m->cariSiswa($username)->num_rows();
                $cariUsers=$this->the_m->cariUsers($username)->num_rows();
                $tbl='siswa';
            }

            if ($cariUser>=1 && $cariUsers==0) {
                $data['primary_title'] = 'Registrasi User';
                $data['username']=$username;
                $data['tbl']=$tbl;
                $this->load->view('back/layouts/auth/create', $data);
            }else if ($cariUsers>=1) {
                $this->session->set_flashdata('error', 'NIS/NIP sudah terdaftar');
                redirect('register');
            }else{
                $this->session->set_flashdata('error', 'NIS/NIP tidak ditemukan');
                redirect('register');
            }
        }
        
    }

    function save() {
        $this->load->library('form_validation');
        //$this->form_validation->set_rules('kode_captcha', 'Kode Captcha', 'required|callback_cek_captcha');
        $username = $this->input->post('id');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $additional_data = array(
                'tbl_asal' => $this->input->post('tbl'),
            );
        $this->form_validation->set_rules('id', 'ID', 'required');
        $this->form_validation->set_rules('tbl', 'Tabel', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
        } else {
            if($this->ion_auth->register($username, $password, $email, $additional_data)){
                $this->session->set_flashdata('message', 'User sudah dibuat, konfirmasi ke Admin untuk mengaktifkan');
                redirect("login", 'refresh');
            }else{
                $this->session->set_flashdata('error', 'gagal menambah user');
                redirect('register');
            }
        }
    }

    public function buat_captcha()
    {
    $vals = array(
        'img_path' => './captcha/',
        'img_url' => base_url().'captcha/',
        'font_path' => './font/junction-bold.ttf',
        'img_width' => '170',
        'img_height' => '40',
        'expiration' => 180
    );
        $cap = create_captcha($vals);
        return $cap;
    }

    public function cek_captcha()
    {
        if($this->input->post('kode_captcha') == $this->session->userdata('chaptcha')){
        return TRUE;
        } else {
        $this->form_validation->set_message('cek_captcha', '%s yang anda input salah!');
        return FALSE;
        }
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

