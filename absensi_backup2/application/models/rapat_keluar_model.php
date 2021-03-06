<?php
class rapat_keluar_Model  extends CI_Model  {
	function __construct()
    {
        parent::__construct();
    }
	function count_panitia($nrp)
	{
		$query=$this->db->query("select count(*) as a from panitia where nrp={$nrp}");
		return $query->row();
	}
	function count_masuk($nrp,$idr)
	{
		$q=$this->db->get_where('panitia',array('nrp'=>$nrp))->row();
		$query=$this->db->query("select count(*) as a from rapat_keluar where id_panitia={$q->id_panitia} and id_rapat={$idr}");
		return $query->row();
	}
	function get_panitia($nrp)
	{
		return $q=$this->db->get_where('panitia',array('nrp'=>$nrp))->row();
	}
	function get_divisi($id)
	{
		return $q=$this->db->get_where('divisi',array('id_divisi'=>$id))->row();
	}
	function insert($nrp,$idr){
		$q=$this->db->get_where('panitia',array('nrp'=>$nrp))->row();
		$data = array(
		   'id_panitia'=>$q->id_panitia,
		   'id_rapat'=>$idr
		);
		return $this->db->insert('rapat_keluar',$data);
	}
	function insert_new($nrp,$idr){
		$data = array(
		   'nrp'=>$nrp,
		   'id_rapat'=>$idr
		);
		return $this->db->insert('rapat_keluar_new',$data);
	}
}