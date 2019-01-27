<?php
class rapat_Model  extends CI_Model  {
	function __construct()
    {
        parent::__construct();
    }
	function get_all_rapat()
	{
		return $this->db->get('rapat');
	}
	function get_rapat($id)
	{
		return $this->db->get_where('rapat', array('id_rapat' => $id))->row();
	}
}