<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Radio_checks extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->library('breadcrumb');
	}

	function index()
	{	
		//rule type pada function ini: Read
		$this->rule->type('R');
		//Layout
		//title
		$this->layout->set_title('Form Radio dan Checkbox');
		//meta description jika perlu
		$this->layout->set_meta('Made with love by Raksa Abadi Informatika');
		//breadcrumb/untuk navigasi
		$this->breadcrumb->clear();
		$this->breadcrumb->add_crumb('Beranda', site_url());
		$this->breadcrumb->add_crumb('Designs', site_url('designs'));
		$this->breadcrumb->add_crumb('Radio dan Checkboxes');
		//judul kategori
		$data['primary_title'] 		= '<i class="fa fa-edit"></i> Designs';
		$data['sub_primary_title']	= 'Variety of radio checkbox design';
		//menggunakan layout back/backend templating
		$this->layout->back('designs/radio_checks', $data);
	}
}