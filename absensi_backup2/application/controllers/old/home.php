<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->model('rapat_model');
		$this->load->model('kegiatan_model');
	}

	public function index() {
		$this->load->view('crud_header');
		$this->load->view('footer');
	}

	public function logout() {
		session_destroy();
		redirect("/home", "refresh");
	}
}