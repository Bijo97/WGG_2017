<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mhs_rekap_upacara extends CI_Controller {

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
	public function index(){
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('mahasiswa');
		$crud->set_subject('Rekap Absensi Mahasiswa - Upacara');
		$crud->columns('nrp','nama','jurusan','juli_26','juli_27','agustus_17','oktober_28');
		$crud->display_as('juli_26','Lat Upacara 26 Juli');
		$crud->display_as('juli_27','Lat Upacara 27 Juli');
		$crud->display_as('agustus_17','Upacara 17 Agustus');
		$crud->display_as('oktober_28','Upacara 28 Oktober');
		$crud->order_by('nrp');
		
		$crud->callback_column('juli_26',array($this,'_callback_juli_26'));
		$crud->callback_column('juli_27',array($this,'_callback_juli_27'));
		$crud->callback_column('agustus_17',array($this,'_callback_agustus_17'));
		$crud->callback_column('oktober_28',array($this,'_callback_oktober_28'));
		//$crud->callback_column('keterangan',array($this,'_callback_keterangan'));
		$crud->unset_add();
		$crud->unset_edit();
		$crud_table = $crud->render();

		$data['pagetitle'] = 'Rekap Absensi Mahasiswa - Upacara';
		$this->load->view('crud_header',$data);
		$this->load->view('crud',$crud_table);
		$this->load->view('footer');
	}
	function _callback_juli_26($value,$row)
	{
		if($row->juli_26==0)
			return "TIDAK HADIR";
		else
			return "HADIR";
	}
	function _callback_juli_27($value,$row)
	{
		if($row->juli_27==0)
			return "TIDAK HADIR";
		else
			return "HADIR";
	}
	function _callback_agustus_17($value,$row)
	{
		if($row->agustus_17==0)
			return "TIDAK HADIR";
		else
			return "HADIR";
	}
	function _callback_oktober_28($value,$row)
	{
		if($row->oktober_28==0)
			return "TIDAK HADIR";
		else
			return "HADIR";
	}
	function _callback_keterangan($value,$row)
	{
		if($row->juli_26==1 && $row->juli_27==1 && $row->agustus_17==1)
			return "LULUS";
		else
			return "TIDAK LULUS";
	}
}