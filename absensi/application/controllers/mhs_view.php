<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mhs_view extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('mhs_absensi_model');
		$this->load->model('rapat_model');
		$this->load->model('kegiatan_model');
		$this->load->helper(array('url','form'));
		$this->load->library('template');
	}
	public function index() {
		$data['pagetitle']='Search Data Mahasiswa';
		$this->load->view('crud_header');
		$this->template->display('hist',$data,'/mhs_view.php');
		$this->load->view('footer');
	}
	function data($nrp)
	{
		$data['nrp']=$nrp;
		$this->template->display('mhs_data',$data,'/mhs_view.php');
	}
}