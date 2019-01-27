<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mhs_absensi_upacara extends CI_Controller {
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
	public function index($id) {
		if($id==-1)
			$data['pagetitle']='Absensi Latihan Upacara 26 Juli 2013';
		else if($id==-2)
			$data['pagetitle']='Absensi Latihan Upacara 27 Juli 2013';
		else if($id==-3)
			$data['pagetitle']='Absensi Upacara 17 Agustus 2013';
		else if($id==-4)
			$data['pagetitle']='Absensi Upacara 28 Oktober 2013';
		$data['id']=$id;
		$this->load->view('crud_header');
		$this->template->display('hist',$data,'/mhs_absensi_upacara.php');
		$this->load->view('footer');
	}
	function action($id,$nrp)
	{
		$data['nrp']=$nrp;
		$data['id']=$id;
		$this->template->display('mhs_action_upacara',$data,'/mhs_absensi.php');
	}
	function tambah($id,$nrp)
	{
		$data['nrp']=$nrp;
		$data['id']=$id;
		$this->template->display('mhs_tambah',$data,'/mhs_absensi.php');
	}
	function nama($nrp)
	{
		$data['nrp']=$nrp;
		$this->template->display('mhs_nama',$data,'/mhs_absensi.php');
	}
}