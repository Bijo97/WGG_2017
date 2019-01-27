<?php
class mhs_absensi_Model  extends CI_Model  {
	function __construct()
    {
        parent::__construct();
    }
	function count_mhs($nrp)
	{
		$query=$this->db->query("select count(*) as a from mahasiswa where nrp like '".$nrp."'");
		return $query->row();
	}
	function count_masuk($nrp,$id)
	{
		$query=$this->db->query("select count(*) as a from mhs_absen where nrp like '".$nrp."' and id_keg={$id}");
		return $query->row();
	}
	function get_mhs($nrp)
	{
		return $this->db->get_where('mahasiswa',array('nrp'=>$nrp))->row();
	}
	function insert($nrp,$id){
		$data = array(
		   'nrp'=>$nrp,
		   'id_keg'=>$id
		);
		return $this->db->insert('mhs_absen',$data);
	}
	function update($nrp,$id){
		$data=array('absen'.$id=>1);
		$this->db->where('nrp',$nrp);
		return $this->db->update('mahasiswa',$data);
	}
	function insert_new($nrp){
		$data = array(
		   'nrp'=>$nrp
		);
		return $this->db->insert('mhs_new',$data);
	}
	function upd_26($nrp){
		$data=array('juli_26'=>1);
		$this->db->where('nrp',$nrp);
		return $this->db->update('mahasiswa',$data);
	}
	function upd_27($nrp){
		$data=array('juli_27'=>1);
		$this->db->where('nrp',$nrp);
		return $this->db->update('mahasiswa',$data);
	}
	function upd_17($nrp){
		$data=array('agustus_17'=>1);
		$this->db->where('nrp',$nrp);
		return $this->db->update('mahasiswa',$data);
	}
	function upd_28($nrp){
		$data=array('oktober_28'=>1);
		$this->db->where('nrp',$nrp);
		return $this->db->update('mahasiswa',$data);
	}
}