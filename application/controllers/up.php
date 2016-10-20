<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Up extends CI_Controller {

	function __construct() {
        parent::__construct();
	}
	
	function index(){		
		$this->layout->add_includes('js', 'themes/back/bundle/cropit/jquery.cropit.min.js','header');
		//breadcrumb
		$this->load->library('breadcrumb');
		$this->breadcrumb->clear();
		$this->breadcrumb->add_crumb('Beranda', site_url());
		$this->breadcrumb->add_crumb('Upload');
		//judul besar
		$data['primary_title'] 		= '<i class="ion-android-note"></i> Upload';
		$data['sub_primary_title']	= 'Coba upload aja';
		//menggunakan layout back/backend templating
		$this->layout->back('up', $data);
	}
}