<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_panitia extends CI_Controller {

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
		$crud->set_table('panitia');
		$crud->set_subject('Panitia');
		$crud->columns('id_panitia','nrp','nama_panitia','id_divisi');
		$crud->order_by('id_panitia');
		$crud->set_relation('id_divisi','divisi','nama_divisi');
		$crud->required_fields('id_panitia','nama_panitia','id_divisi');
		$crud_table = $crud->render();

		$data['pagetitle'] = 'Data Panitia';

		$this->load->view('crud_header', $data);
		$this->load->view('crud', $crud_table);
		$this->load->view('footer');
	}
}