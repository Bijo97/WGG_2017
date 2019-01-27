<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class rekap_rapat_masuk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD'); 
		$this->load->model('rapat_model');
		$this->load->model('kegiatan_model');
		$this->load->model('rekap_model');
	}
	public function index($idr) {

		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('rapat_masuk');
		$crud->set_subject('Absen Rapat masuk');
		$crud->where('id_rapat',$idr);
		$crud->columns('id_panitia','nama','Divisi','jam');
		$crud->display_as('id_panitia','NRP');
		$crud->display_as('nama','Nama Panitia');
		$crud->set_relation('id_panitia','panitia','nrp');
		$crud->callback_column('nama',array($this,'_callback_nama'));
		$crud->callback_column('Divisi',array($this,'_callback_divisi'));
		$crud->order_by('id_panitia');
		$crud->unset_add();
		$crud->unset_edit();
		$crud_table = $crud->render();
		
		$url=site_url("rekap_rapat_masuk/unreg").'/'.$idr;
		$url2=site_url("rekap_rapat_masuk/notcome").'/'.$idr;
		$data['pagetitle'] = 'Rekap Absen Masuk '.$this->rapat_model->get_rapat($idr)->rapat."<a class='btn pull-right span3' href=$url>Rekap Panitia Belum Terdaftar</a><br><a class='btn pull-right span3' href=$url2>Rekap Panitia Tidak Hadir</a><br>";
		$this->load->view('crud_header',$data);
		$this->load->view('crud',$crud_table);
		$this->load->view('footer');
	}
	function _callback_nama($value,$row)
	{
		$q=$this->rekap_model->get_panitia($row->id_panitia);
		return $q->nama_panitia;
	}
	function _callback_divisi($value,$row)
	{
		$q=$this->rekap_model->get_panitia($row->id_panitia);
		$t=$this->rekap_model->get_divisi($q->id_divisi);
		return $t->nama_divisi;
	}
	function unreg($idr){
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('rapat_masuk_new');
		$crud->set_subject('Absen Rapat Masuk Panitia Belum Terdaftar');
		$crud->columns('nrp','jam');
		$crud->where('id_rapat',$idr);
		$crud->order_by('id_rm_new');
		$crud->unset_add();
		$crud_table = $crud->render();
		
		$url = site_url("rekap_rapat_masuk/index").'/'.$idr;
		$data['pagetitle'] = 'Rekap Absen Masuk Panitia Belum Terdaftar<br>'.$this->rapat_model->get_rapat($idr)->rapat."<a class='btn pull-right' href=$url>Back</a>";
		$this->load->view('crud_header',$data);
		$this->load->view('crud',$crud_table);
		$this->load->view('footer');
	}
	function notcome($idr){;
		$url = site_url("rekap_rapat_masuk/index").'/'.$idr;
		$data['pagetitle'] = 'Rekap Panitia Tidak Hadir '.$this->rapat_model->get_rapat($idr)->rapat."<a class='btn pull-right' href=$url>Back</a>";
		$data['id_rapat']=$idr;
		$this->load->view('crud_header',$data);
		$this->load->view('notcome',$data);
		$this->load->view('footer');
	}
}