<?php
class kegiatan_Model  extends CI_Model  {
	function __construct()
    {
        parent::__construct();
    }
	function get_all_kegiatan()
	{
		return $this->db->get('kegiatan');
	}
	function get_kegiatan($id)
	{
		return $this->db->get_where('kegiatan', array('id' => $id))->row();
	}
}