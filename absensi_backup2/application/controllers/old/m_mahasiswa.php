<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_mahasiswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
		$this->load->model('rapat_model');
		$this->load->model('kegiatan_model');
	}

	public function index() {

		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('mahasiswa');
		$crud->set_subject('Mahasiswa');
		$crud->columns('id','nrp','nama','jurusan');
		$crud->order_by('nrp');
		$crud->required_fields('nrp','nama','jurusan');
		$crud_table = $crud->render();

		$data['pagetitle'] = 'Data Mahasiswa';

		$this->load->view('crud_header', $data);
		$this->load->view('crud', $crud_table);
		$this->load->view('footer');
	}
}