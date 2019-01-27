<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mhs_rekap extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD'); 
		$this->load->model('rapat_model');
		$this->load->model('kegiatan_model');
		$this->load->model('mhs_rekap_model');
	}
	public function index($id) {
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('mhs_absen');
		$crud->set_subject('Rekap Absensi Mahasiswa');
		$crud->where('id_keg',$id);
		$crud->columns('nrp','nama','jurusan','nrp_sekret','tanggal');
		$crud->display_as('nama','Nama Mahasiswa');
		$crud->order_by('nrp');
		
		$crud->callback_column('nama',array($this,'_callback_nama'));
		$crud->callback_column('jurusan',array($this,'_callback_jurusan'));
		$crud->unset_add();
		$crud->unset_edit();
		$crud_table = $crud->render();
		
		$url=site_url("mhs_rekap/unreg").'/'.$id;
		$url2=site_url("mhs_rekap/notcome").'/'.$id;
		$data['pagetitle'] = 'Rekap Absensi '.$this->kegiatan_model->get_kegiatan($id)->nama."<a class='btn pull-right span4' href=$url>Rekap Mahasiswa Belum Terdaftar</a><br><a class='btn pull-right span4' href=$url2>Rekap Mahasiswa Tidak Hadir</a><br>";
		$this->load->view('crud_header',$data);
		$this->load->view('crud',$crud_table);
		$this->load->view('footer');
	}
	function _callback_nama($value,$row)
	{
		$q=$this->mhs_rekap_model->get_mhs($row->nrp);
		return $q->nama;
	}
	function _callback_jurusan($value,$row)
	{
		$q=$this->mhs_rekap_model->get_mhs($row->nrp);
		return $q->jurusan;
	}
	function unreg($id){
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('mhs_new');
		$crud->set_subject('Absen Mahasiswa Belum Terdaftar');
		$crud->columns('nrp','tanggal');
		$crud->where('id_keg',$id);
		$crud->order_by('id');
		$crud->unset_add();
		$crud->unset_edit();
		$crud_table = $crud->render();
		
		$url = site_url("mhs_rekap/index").'/'.$id;
		$data['pagetitle'] = 'Rekap Absen Mahasiswa Belum Terdaftar<br>'.$this->kegiatan_model->get_kegiatan($id)->nama."<a class='btn pull-right' href=$url>Back</a>";
		$this->load->view('crud_header',$data);
		$this->load->view('crud',$crud_table);
		$this->load->view('footer');
	}
	function notcome($id){;
		$url = site_url("mhs_rekap/index").'/'.$id;
		$data['pagetitle'] = 'Rekap Mahasiswa Tidak Hadir '.$this->kegiatan_model->get_kegiatan($id)->nama."<a class='btn pull-right' href=$url>Back</a>";
		$data['id']=$id;
		$this->load->view('crud_header',$data);
		$this->load->view('mhs_notcome',$data);
		$this->load->view('footer');
	}
}