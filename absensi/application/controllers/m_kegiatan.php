<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_kegiatan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->dbforge();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
		$this->load->model('rapat_model');
		$this->load->model('kegiatan_model');
	}
	public function index(){

		$crud = new grocery_CRUD();

		$crud->set_theme('datatables');
		$crud->set_table('kegiatan');
		$crud->set_subject('Kegiatan Mahasiswa');
		$crud->order_by('id');
		$crud->required_fields('id','nama','tanggal');
		$crud->set_rules('tanggal','tanggal','date');
		
		$crud_table = $crud->render();
		$data['pagetitle'] = 'Data Kegiatan Mahasiswa';

		$this->load->view('crud_header',$data);
		$this->load->view('crud',$crud_table);
		$this->load->view('footer');
	}
}