<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mhs_absensi extends CI_Controller {
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
		$data['pagetitle']='Absensi '.$this->kegiatan_model->get_kegiatan($id)->nama;
		$data['id']=$id;
		$this->load->view('crud_header');
		$this->template->display('hist',$data,'/mhs_absensi.php');
		$this->load->view('footer');
	}
	function action($id,$nrp)
	{
		$data['nrp']=$nrp;
		$data['id']=$id;
		$data['sekret']=$_SESSION['nrp'];
		$data['hadir']=1;
		$this->template->display('mhs_action',$data,'/mhs_absensi.php');
	}
	function tambah($id,$nrp)
	{
		$data['nrp']=$nrp;
		$data['id']=$id;
		$data['sekret']=$_SESSION['nrp'];
		$data['hadir']=1;
		$this->template->display('mhs_tambah',$data,'/mhs_absensi.php');
	}
	function nama($nrp)
	{
		$data['nrp']=$nrp;
		$this->template->display('mhs_nama',$data,'/mhs_absensi.php');
	}
}