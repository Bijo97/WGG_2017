<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class rapat_masuk extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('rapat_masuk_model');
		$this->load->model('rapat_model');
		$this->load->model('kegiatan_model');
		$this->load->helper(array('url','form'));
		$this->load->library('template');
	}
	public function index($idr) {
		$data['pagetitle']='Absen Masuk '.$this->rapat_model->get_rapat($idr)->rapat;
		$data['id_rapat']=$idr;
		$data['tipe']='masuk';
		$this->load->view('crud_header');
		$this->template->display('hist',$data,'/absensi.php');
		$this->load->view('footer');
	}
	function action($idr,$nrp)
	{
		$data['nrp']=$nrp;
		$data['idr']=$idr;
		$data['tipe']='masuk';
		$this->template->display('absen_action',$data,'/absensi.php');
	}
	function tambah($idr,$nrp)
	{
		$data['nrp']=$nrp;
		$data['idr']=$idr;
		$data['tipe']='masuk';
		$this->template->display('absen_tambah',$data,'/absensi.php');
	}
	function nama($nrp)
	{
		$data['nrp']=$nrp;
		$data['tipe']='masuk';
		$this->template->display('absen_nama',$data,'/absensi.php');
	}
}